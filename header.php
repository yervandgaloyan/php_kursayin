<!DOCTYPE html>
<html lang="en">
<head>
    <title>InLearn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php 
    require_once("actions/main.php"); 
    $main = new inLearn;
    if($main->isSignIn()){
        $main->progress = $main->getProgress($_COOKIE['user_id']);
    }else
        $main->progress = 0;
    
?> 