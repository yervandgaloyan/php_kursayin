<?php require_once("header.php");?>
<link rel="stylesheet" href="css/sign.css">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
        <a href="index.php">
            <img src="img/logo.png" id="icon" alt="User Icon" />
        </a>
    </div>

    <!-- Login Form -->
    <form action="actions/signUp.php" method="POST">
        <input type="text" id="name" class="fadeIn second" name="name" placeholder="Your Name">
        <input type="text" id="email" class="fadeIn third" name="email" placeholder="Email" oninput="validateEmail(this);">
        <input type="text" id="password" class="fadeIn third key" name="password" placeholder="Password" oninput="validatePassword(this);">
        <input type="submit" class="fadeIn fourth" value="Log In" />
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="forgotPassword.php">Forgot Password?</a>
    </div>
    <div id="formFooter">
      <a class="underlineHover" href="signIn.php">Sign In?</a>
    </div>
  </div>
</div>


<script src="js/validation.js"></script>
<?php require_once("footer.php");?>