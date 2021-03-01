<?php
    class inLearn {
        private $db;

        function __construct() {
            $this->$db = new mysqli("sql101.epizy.com", "epiz_28025992", "z7ewKHtzAEUaF", "epiz_28025992_inlearn");
        }

        function isConnectedToDB(){
            if ($this->$db->connect_errno) {
                return "Не удалось подключиться к MySQL: (" . $this->$db->connect_errno . ") " . $this->$db->connect_error;
            }
            return 1;
        }

        function issetUser($email){
            $user = $this->$db->query("SELECT * FROM `users` WHERE `email` = '".$email."'");
            if ($user->num_rows)
                return $user->fetch_assoc();
            return 0;
        }

        function signIn($email, $password){
            $user = $this->issetUser($email);
            if (!$user) {
                header("Location: ../signIn.php?error=Wrong%20email&email=$email");
                die();
            }
            if ($user['password'] == md5($password)){
                setcookie("user_id", $user['id'], null,  "/");
                setcookie("name", $user['name'], null,  "/");
                setcookie("email", $user['email'], null, "/");
                header("Location: ../");
                die();
            }else{
                header("Location: ../signIn.php?error=Wrong%20password&email=$email");
                die();
            }
        }

        function isSignIn(){
            if(isset($_COOKIE['user_id']) && isset($_COOKIE['name']) && isset($_COOKIE['email']))
                return 1;
            return 0;
        }

        function signUp($name, $email, $password){
            $this->$db->query("INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')");
            $this->$db->query("INSERT INTO `progress` (`user_id`, `progress`) VALUES (Null, '1');");
            return 1;
        }

        function signOut(){
            setcookie("user_id", "", 1, "/");
            setcookie("name", "", 1, "/");
            setcookie("email", "", 1, "/");
            return 1;
        }

        function forgotPassword($email){
            return 1;
        }
        
        function getProgress($user_id){    
            $progress = $this->$db->query("SELECT * FROM `progress` WHERE `user_id` = $user_id");
            if ($progress->num_rows)
                return $progress->fetch_assoc()['progress'];
            return 0;
            
        }
        function __destruct() {
            $this->$db->close();
        }
    }
    
    //$main = new inLearn;
    //$main->isSignIn();
    //$main->signOut();
    //echo $main->isConnectedToDB();
    //print_r($main->issetUser('yervandgaloyan26@gmail.com'));
    //$main->signIn("yervandgaloyan26@gmail.coma", "AAaa123456789))");
?>