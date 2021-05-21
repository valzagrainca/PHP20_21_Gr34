<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    $result="";
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function invalidUid($username){
    $result="";
    $regex="/^(?=.*[a-zA-Z])(?=.*\d).+$/";
    if(preg_match($regex, $username)===0){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function invalidPwd($pwd){
    $result="";
    if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{1,}+$/", $pwd)){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result="";
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

// function invalidEmail($email){
//     $result="";
//     $pattern="[@.]";
//     $components=preg_split($pattern,$email);
//     $counter=count($components);
//     if($counter!=3){
//         $result=true;
//     }
//     else {
//         $result=false;
//     }
//     return $result;
// }

function pswMatch($pwd,$pwdRepeat){
    $result="";
    if($pwd !== $pwdRepeat){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}



function uidExists($conn,$username,$email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?; ";
    $stmt = mysqli_stmt_init($conn); //initialise new prepared statement
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: signup.php?error=stmtfailed");
        exit();
    }
    // ss->string string, cfare parametra kena
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    //fetching the data as associative arrays
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users(usersName, usersEmail, usersUid, usersPwd) VALUES(?, ?, ?, ?); ";
    $stmt = mysqli_stmt_init($conn); //initialise new prepared statement
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd= password_hash($pwd, PASSWORD_DEFAULT);

    // ss->string string, cfare parametra kena
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: signup.php?error=none");
    exit();
}

function emptyInputLogin($username,$pwd) {
    $result="";
    if(empty($username) || empty($pwd)){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn,$username,$username);

    if($uidExists === false) {
        header("Location: login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd,$pwdHashed); //if they match returns true
    if($checkPwd === false){
        header("Location: login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        //create session variables
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
		$_SESSION["username"]=$uidExists["usersName"];
        header("Location: homepage.php");
        exit();
    }

}

