<?php 
// error handling

if(isset($_POST['submit'])){ //if this is set inside the code continue doing whatever u r doing

    // $name = mysqli_real_escape_string($conn,$_POST['name']);
	// $email = mysqli_real_escape_string($conn,$_POST['email']);
    // $username = mysqli_real_escape_string($conn,$_POST['uid']);
    // $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	// $pwdRepeat = mysqli_real_escape_string($conn,$_POST['pwdrepeat']);

    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['uid'];
    $pwd=$_POST['pwd'];
    $pwdRepeat=$_POST['pwdrepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat)!==false){
        header("Location: signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username)!==false){
        header("Location: signup.php?error=invaliduid");
        exit();
    }
    if(invalidPwd($pwd)!==false){
        header("Location: signup.php?error=invalidpwd");
        exit();
    }
    if(invalidEmail($email)!==false){
        header("Location: signup.php?error=invalidemail");
        exit();
    }
    if(pswMatch($pwd,$pwdRepeat)!==false){
        header("Location: signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn,$username,$email)!==false){
        header("Location: signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

} else {
    header("Location: signup.php");
    //header is a function that can send the user back to a particular place
    exit();
}
