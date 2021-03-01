<?php
    require_once('main.php');

    $main = new inLearn;

    if(isset($_POST['email']) && isset($_POST['password'])){
        $main->signIn($_POST['email'], $_POST['password']);
    }
    header("Location: ../");
    die();
?>