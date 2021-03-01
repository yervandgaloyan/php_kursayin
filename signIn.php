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
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email" oninput="validateEmail(this);" value="<?=$_GET['email']?>">
      <input type="text" id="password" class="fadeIn third key" name="password" placeholder="Password" >
      <input type="submit" class="fadeIn fourth" value="Log In" />
      <?php
        if(isset($_GET['error'])){
          echo "<p class='text-danger'>".$_GET['error']."</p>";
        }
      ?>
      
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="forgotPassword.php">Forgot Password?</a>
    </div>
    <div id="formFooter">
      <a class="underlineHover" href="signUp.php">Sign Up?</a>
    </div>
  </div>
</div>


<script src="js/validation.js"></script>

<?php require_once("footer.php");?>