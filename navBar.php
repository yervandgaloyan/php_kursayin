<?php require_once("header.php");?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo.png" alt="InLearn" width="40px">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">InLearn <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0 " >
        <ul class="navbar-nav">
          <?php
            if($main->isSignIn()){
              echo '
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome, '.$_COOKIE['name'].'!
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="progress.php">Learning Progress</a>
              <a class="dropdown-item" href="signOut.php">Log Out</a>
              </div>
              </li>';
            }else{
              echo '<a class="nav-link active" href="signIn.php">Sign In!</a>';
            }

          ?>

        </ul>
    
    </form>
  </div>
</nav>