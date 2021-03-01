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
    <form action="actions/signIn.php" method="POST">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email" oninput="validateEmail(this);">
      <input type="submit" class="fadeIn fourth" value="Send recover message" />
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="signIn.php">Sign In?</a>
    </div>
    <div id="formFooter">
      <a class="underlineHover" href="signUp.php">Sign Up?</a>
    </div>
  </div>
</div>

<?php require_once("footer.php");?>