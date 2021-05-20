<?php 
// error handling
if(isset($_POST['submit'])){

    include_once 'config.php';
    $username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

    if(empty($username) || empty($email) || empty($password) || empty($cpassword) ) {
        header("Location: register.php?signup=empty");
        exit();
    } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: register.php?signup=invalidemail");
            exit();
        }
        else {
            if(!preg_match('/^[a-zA-Z]*$/',$username)) {
                header("Location: register.php?signup=char");
                exit();
            }
            // else {
            //     header("Location: register.php?signup=success");
            // }
        }
    }

} else {
    header("Location: register.php?signup=error");
}



?>