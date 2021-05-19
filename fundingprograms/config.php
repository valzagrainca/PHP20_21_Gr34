<?php

$server="localhost";
$username="root";
$password="";
$database="join_us";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    echo "<script>alert('Connection Failed.')</script>";
}



?>