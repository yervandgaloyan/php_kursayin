<?php
    require_once('main.php');

    $main = new inLearn;

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        $main->signUp($_POST['name'], $_POST['email'], md5($_POST['password']));
        $main->signIn($_POST['email'], $_POST['password']);
    }
    header("Location: ../");
    die();

?>