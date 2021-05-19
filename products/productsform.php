<?php
$Name=$_POST['name'];
$Surname=$_POST['surname'];
$Address=$_POST['address'];
$Postal=$_POST['pcode'];
$City=$_POST['selectCity'];
$Number=$_POST['phone'];
if(!empty($Name)||!empty($Surname)||!empty($Address)||!empty($Number)||!empty($Postal)||!empty($City)){
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="Products";

  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  }
  else{
    $SELECT="SELECT Email From dbproduct Where Email= ? Limit 1";
    $INSERT="INSERT Into dbproduct (Emri,Mbiemri,Adresa,Numri,PostalCode,Shteti) values(?,?,?,?,?,?)";
    //insert the values if the email hasn't been used before
    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$Email);//s for string
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;//numron ne sa rreshta ndodhet email
    
    if($rnum==0){
      $stmt->close();

      $stmt=$conn->prepare($INSERT);
      $stmt->bind_param("ssssss",$Name,$Surname,$Address,$Number,$Postal,$City);
      $stmt->execute();
      echo "New record inserted! ";
    }else{
      echo "Someone already register with the same email ";
    }
    $stmt->close();
    $conn->close();
  
  }
}
else{
  echo"Name,Surname,Address,Number,PosralCode fields are requaired!";
}
?>