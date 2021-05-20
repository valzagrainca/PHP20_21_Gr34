<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
      <form class="login-form" action="login.inc.php" method="POST">
        
        <input class="user-datas" type="text" name="email" value="<?php echo $email; ?>" placeholder="Email" required autofocus>
        <input class="user-datas" type="password" name="password" value="<?php echo $_POST['$password']; ?>" placeholder="Password" required>
        <div class="log-in1">
          <label class="remember-me"><input type="checkbox" name="">Remember me</label>
          <a href="#">Forgot your password?</a>
        </div>
        <input class="btn" type="submit" name="login" value="LOGIN" onclick="return validation()">
        <div class="sign-up">
          <p>Not Registered? <a href="register.php">Create an Account</a></p>
        </div>
      </form>
      
    </div>

    <script>
    var data = new Date();
    document.getElementById("datee").innerHTML = data;
    </script>
    <script src="../js/draganddrop.js"></script>
  </body>
</html>