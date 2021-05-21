<?php
$Name=$_POST['name'];
$Email=$_POST['email'];
$Company=$_POST['company'];
$Budget=$_POST['budget'];
$Person=$_POST['person'];
$Details=$_POST['details'];
$Catagories=$_POST['categories-choice'];



if(!empty($Name)||!empty($Email)||!empty($Comapany)||!empty($Budget)||!empty($Person)||!empty($Catagories)){
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="funding";

  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')');
  }
else{
      $INSERT="INSERT Into contact (Emri,Email,Company,Buxheti,Details,Person,Kategorit) 
      values('$Name','$Email','$Company','$Budget','$Details','$Person','$Catagories')";
      if(mysqli_query($conn,$INSERT)){
       echo "New record inserted! ";
       echo "<br>";
      }
      else{
        echo"Error: ".mysqli_error($conn);
      }
      mysqli_close($conn);

}}

?>