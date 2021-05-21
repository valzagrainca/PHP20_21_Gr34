<?php
$email[]="Valëza";
$email[]="Valton";
$email[]="Rina";
$email[]="Riga";
$email[]="Andi";
$email[]="Mirjeta";
$email[]="Bleona";
$email[]="Tahir";
$email[]="Doni";
$email[]="Elona";
$email[]="Edona";
$email[]="Fiona";
$email[]="Genti";
$email[]="Hysen";
$email[]="Lirika";
$email[]="Lorik";
$email[]="Vesa";
$email[]="Lina";
$email[]="Puhiza";
$email[]="Bora";
$email[]="Loris";
$email[]="Besim";
$email[]="Agon";
rsort($email);
//echo $email[0];
//get query string
$q=$_REQUEST['q'];
$suggestion="";

//get suggestions

if($q!==""){
  $q=strtolower($q);//make sure it is lowercase
  $len=strlen($q);
  foreach($email as $mail){
    //finds the first occurrence of $q in mail
    if(stristr($q,substr($mail,0,$len))){
      if($suggestion===""){
        $suggestion=$mail;
      }else{
        $suggestion .=",$mail";
      }
    }

  }
}
echo $suggestion==="" ?"No Suggestion":$suggestion;

?>