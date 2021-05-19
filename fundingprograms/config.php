<?php

$server="192.168.0.108";
$username="root";
$pass="";
$database="join_us";

$conn=mysqli_connect($server,$username,$pass,$database);

if(!$conn){
    die("<script>alert('Connection Failed.')</script>");
}



?>