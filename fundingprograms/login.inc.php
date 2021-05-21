<?php
include 'dbh.inc.php';
if(isset($_POST["login"])){

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pass=md5($pwd);
    include 'functions.inc.php';

    $userqry="SELECT * from users where usersEmail='$username' and
     usersPwd='$pwd' ";
    $userres=mysqli_query($conn,$userqry);
    $userrow=mysqli_num_rows($userres);
    if($userrow>0){
        //session
        $userdata=mysqli_fetch_assoc($userres);
        // $db_pass = $userdata['pwd'];
        $_SESSION['user_id']=$userdata['usersId'];
        // $pass_decode = password_verify($pwd,$db_pass);
    

    if(!empty($_POST['remember_checkbox'])){
    $remember_checkbox=$_POST['remember_checkbox'];
    setcookie('emailcookie',$username,time()+3600*24*7);
    setcookie('passwordcookie',$pwd,time()+3600*24*7);
    setcookie('userlogin',$remember_checkbox,time()+3600*24*7);}
    else{
        setcookie('emailcookie',$username,30);
        setcookie('passwordcookie',$pwd,30);
    }
        // if($pass_decode){
        //     if(isset($_POST['remember_checkbox'])){
        //         setcookie('emailcookie',$username,time()+86400);
        //         setcookie('passwordcookie',$pwd,time()+86400);
        //         header("Location: login.php");

        //     } else {
        //         header("Location: login.php");
        //     

    }else{
        echo "Invalid login!";
    }

    

    if(emptyInputLogin($username,$pwd)!==false){
        header("Location: login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);


} else {
    header("Location: login.php");
    exit();
}