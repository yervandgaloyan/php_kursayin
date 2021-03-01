<?php
    require_once('main.php');

    $main = new inLearn;

    if($main->isSignIn()){
        $main->signOut();
        header("Location: ../");    
        die();

    }
    header("Location: ../");
    die();
?>