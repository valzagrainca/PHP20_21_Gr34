<?php
  include_once 'header.php';
?>           

      <div class="formA">
      <form class="signup-form" action="signup.inc.php" method="POST">
        <input class="user-datas" type="text" name="name" placeholder="Full Name" >
        <input class="user-datas" type="email" name="email"  placeholder="Email">
        <input class="user-datas" type="text" name="uid"  placeholder="Username">
        <input class="user-datas" type="password" name="pwd" placeholder="Password">
        <input class="user-datas" type="password" name="pwdrepeat"  placeholder="Confirm Password">
        <!-- <input class="btn" type="submit" name="submit" value="SIGN UP" onclick="return signup_validation()"> -->
        <input class="btn" type="submit" name="submit" value="SIGN UP">
        <div class="sign-up">
          <p>Already Registered? <a href="login.php">Sign In</a></p>
          <br>
        </div>
      </form>
      <?php
      if(isset($_GET["error"])){
        if($_GET['error'] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
        }
        else if($_GET['error'] == "invaliduid") {
          echo "<p>Choose a proper username!</p>";
        }
        else if($_GET['error'] == "invalidpwd") {
          echo "<p>Pwd should contain lower, upper cases, numbers and min 8 char!</p>";
        }
        else if($_GET['error'] == "invalidemail") {
          echo "<p>Choose a proper email!</p>";
        }
        else if($_GET['error'] == "passwordsdontmatch") {
          echo "<p>Passwords don't match!</p>";
        }
        else if($_GET['error'] == "stmtfailed") {
          echo "<p>Something went wrong! Try again!</p>";
        }
        else if($_GET['error'] == "usernametaken") {
          echo "<p>Username already taken!</p>";
        }
        else if($_GET['error'] == "none") {
          echo "<p>You have signed up!</p>";
        }
      }
      ?>
      </div>
      </div>


      

<?php
include_once 'footer.php';
?>