<?php
include 'config.php';
session_start();


error_reporting(0); //mos me dal shkronjat pa kuptim
if(!isset($_SESSION['username'])){
  header("Location: welcome.php");
}

if(isset($_POST['submit'])){
  $username1=$_POST['username1'];
  $email1=$_POST['email1'];
  $password1=md5($_POST['password1']);
  $password2=md5($_POST['password2']);

  if($password1 == $password2){
    $sql= "SELECT * FROM users WHERE email='$email1' ";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows > 0){
      echo"<script>alert('Email Already Exists!')</script>";
    }else{
      $sql="INSERT INTO users (username, email, password)
      VALUES ('$username1', '$email1', '$password1')";
      $result=mysqli_query($conn,$sql);
      if($result){
      echo"<script>alert('User Registration Completed Succesfully.')</script>";
      $username1="";
      $email1="";
      $_POST['password1']="";
      $_POST['password2']="";

      } else {
        echo"<script>alert('Something went wrong!')</script>";
      } 
    }
    
  } else {
    echo"<script>alert('Password Not Mached.')</script>";
  }
    }

  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql1="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result1=mysqli_query($conn,$sql);
    if($result1->num_rows>0) {
      $row=mysqli_fetch_assoc($result1);
      $_SESSION['username'] = $row['username'];
      header("Location: welcome.php");
    } else {
      echo"<script>alert('Email or Password Incorrect.')</script>";
    }
  }
  
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Join Us</title>
    <link rel="shortcut icon" type="image/png" href="imagesfunding/3d.png">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src="login_validation.js"></script>
    <script src="signup_validation.js"></script>
  </head>
  <body>
      <div class="gray-div">
        <p id="datee" style="font-size:10px; margin-top:610px; text-shadow: 1px 0.1px 2px black;"></p>
        <div class="p1">JOIN</div>
        <div class="p2">US</div>
        <div class="empty1">
        </div>
        <div class="empty">
          <div class="fill" draggable="true"> </div> <!-- draggable is a html5 property-->
        </div>
        <div class="empty">
        </div>
        <div class="empty">
        </div>
      </div>
           
    <div class="form">
      <form class="login-form" action="" method="POST">
        
        <input class="user-datas" id="email" type="text" name="email" value="<?php echo $email; ?>" placeholder="Email" required autofocus>
        <input class="user-datas" id="password" type="password" name="password" value="<?php echo $_POST['$password']; ?>" placeholder="Password" required>
        <div class="log-in1">
          <label class="remember-me"><input type="checkbox" name="">Remember me</label>
          <a href="#">Forgot your password?</a>
        </div>
        <input class="btn" type="submit" name="login" value="LOGIN" onclick="return validation()">
        <div class="sign-up">
          <p>Not Registered? <a href="#">Create an Account</a></p>
        </div>
      </form>
      
      <form class="signup-form" action="" method="POST">
        <input class="user-datas" id="username1" type="text" name="username1" value="<?php echo $username1; ?>" placeholder="Username"  required>
        <input class="user-datas" id="email1" type="email" name="email1" value="<?php echo $email1; ?>" placeholder="Email Address" required autocomplete="on">
        <input class="user-datas" id="password1" type="password" name="password1" value="<?php echo $_POST['$password1']; ?>" placeholder="Password" required>
        <input class="user-datas" id="password1" type="password" name="password2" value="<?php echo $_POST['$password2']; ?>" placeholder="Confirm Password" required>
        <input class="btn" type="submit" name="submit" value="SIGN UP" onclick="return signup_validation()">
        <div class="sign-up">
          <p>Already Registered? <a href="#">Sign In</a></p>
        </div>
      </form>
    </div>

    <script type="text/javascript">
    $('.sign-up a').click(function(){
      $('form').animate({
        height: "toggle", opacity:"toggle",
      }, "slow");
    });
    </script>
    <script>
    var data = new Date();
    document.getElementById("datee").innerHTML = data;
    </script>
    <script src="../js/draganddrop.js"></script>
  </body>
</html>