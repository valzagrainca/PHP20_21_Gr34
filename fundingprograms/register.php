<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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
           
      <div class="formA">
      
      <form class="signup-form" action="signup.inc.php" method="POST">
        <input class="user-datas" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" >
        <input class="user-datas" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email Address">
        <input class="user-datas" type="password" name="password" value="<?php echo $_POST['$password']; ?>" placeholder="Password">
        <input class="user-datas" type="password" name="cpassword" value="<?php echo $_POST['$cpassword']; ?>" placeholder="Confirm Password">
        <!-- <input class="btn" type="submit" name="submit" value="SIGN UP" onclick="return signup_validation()"> -->
        <input class="btn" type="submit" name="submit" value="SIGN UP">
        <div class="sign-up">
          <p>Already Registered? <a href="login.php">Sign In</a></p>
          <br><br>
        </div>
      </form>

      <?php
        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      
        if(strpos($fullURL, "signup=empty") == true) {
            echo "<p>You did not fill in all fields!</p>";
            exit();
        }
        elseif(strpos($fullURL, "signup=char") == true) {
          echo "<p>You used invalid characters!</p>";
          exit();
        } 
        elseif(strpos($fullURL, "signup=email") == true) {
          echo "<p>You used an invalid email!</p>";
          exit();
        }
        elseif(strpos($fullURL, "signup=success") == true) {
          echo "<p>You have been signed up!</p>";
        }
      
      ?>

  
    </script>
    <script>
    var data = new Date();
    document.getElementById("datee").innerHTML = data;
    </script>
    <script src="../js/draganddrop.js"></script>
  </body>
</html>