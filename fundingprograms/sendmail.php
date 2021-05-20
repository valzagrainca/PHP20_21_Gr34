<?php

$to_email =$_POST['email'];
$body = $_POST['subject'];
$headers = "From: valzagrainca1@gmail.com";
$subject="Test Email";

if(mail($to_email, $subject, $body, $headers)){
	echo "Email eshte derguar me sukses";
}
else{
	echo "Dergimi i emailit ka deshtuar";
}

?>