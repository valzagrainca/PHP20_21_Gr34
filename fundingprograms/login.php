<?php 
include_once 'header.php';

?> 


    <div class="form">
      <form class="login-form" action="login.inc.php" method="POST">
        
        <input class="user-datas" type="text" name="uid" placeholder="Username/Email" value="<?php if(isset($_COOKIE
                ['emailcookie'])){echo $_COOKIE['emailcookie'];} ?>">
        <input class="user-datas" type="password" name="pwd" placeholder="Password" value="<?php if(isset($_COOKIE
                ['passwordcookie'])){echo $_COOKIE['passwordcookie'];} ?>">
        <div class="log-in1">
          <label class="remember-me"><input type="checkbox" name="remember_checkbox" value="<?php if(isset($_COOKIE
                ['userlogin'])){echo "checked";} ?>" >Remember me</label>
          <a href="#">Forgot your password?</a>
        </div>
        <!-- <input class="btn" type="submit" name="login" value="LOGIN" onclick="return validation()"> -->
        <input class="btn" type="submit" name="login" value="LOGIN">
        <div class="sign-up">
          <p>Not Registered? <a href="signup.php">Create an Account</a></p>
        </div>
      </form>
      <?php
      if(isset($_GET["error"])){
        if($_GET['error'] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
        }
        else if($_GET['error'] == "wronglogin") {
          echo "<p>Incorrect login informations!</p>";
        }
      }
      ?>
    </div>

<?php
include_once 'footer.php';
?>