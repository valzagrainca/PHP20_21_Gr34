<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject";

try{
    $conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);
} catch (Exception $e) {
    die("Connection Failed: " .$e);
}

// $conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

// if(!$conn) {
//     die("Connection Failed: " .mysqli_connect_error());
// }