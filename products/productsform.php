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

  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  }
  else{
    $INSERT="INSERT Into dbproduct (Emri,Mbiemri,Adresa,Numri,PostalCode,City,Country) values(?,?,?,?,?,?,?)";
      $stmt=$conn->prepare($INSERT);
      $stmt->bind_param("sssssiss",$Name,$Surname,$Email,$Address,$Number,$Postal,$City,$Country);
      $stmt->execute();
      echo "New record inserted! ";
    $stmt->close();
    $conn->close();
  
  }
}
else{
  echo"Name,Surname,Address,Number,PosralCode fields are requaired!";
}
?>
