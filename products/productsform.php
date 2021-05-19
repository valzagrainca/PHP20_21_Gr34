<?php
$Name=$_POST['name'];
$Surname=$_POST['surname'];
$Email=$_POST['email'];
$Address=$_POST['address'];
$Postal=$_POST['pcode'];
$City=$_POST['city'];
$Country=$_POST['mySelect'];
$Number=$_POST['phone'];
if(!empty($Name)||!empty($Surname)||!empty($Email)||!empty($Address)||!empty($Number)||!empty($Postal)){
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="Products";

  try{
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
   
      $INSERT="INSERT Into dbproduct (Emri,Mbiemri,Email,Adresa,Numri,PostalCode,City,Country) 
      values('$Name','$Surname','$Email','$Address','$Number','$Postal','$City','$Country')";
      if(mysqli_query($conn,$INSERT)){
       echo "New record inserted! ";
       echo "<br>";
      }
      else{
        echo"Error: ".mysqli_error($conn);
      }
      mysqli_close($conn);
    
    
  }
  catch(mysqli_sql_exception $ex){
    throw new Exception("Can not connect to the dataase! \n ".$ex);
  }}
  else{
    echo"Name,Surname,Email,Number fields are requaired!";
  }
?>
