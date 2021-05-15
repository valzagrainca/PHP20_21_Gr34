<?php
$Name=$_POST['name'];
$Surname=$_POST['surname'];
$Email=$_POST['email'];
$Number=$_POST['phone'];
$Goal=$_POST['subject'];
if(!empty($Name)||!empty($Surname)||!empty($Email)||!empty($Number)||!empty($Goal)){
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="funding";

  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  }
  else{
    $SELECT="SELECT Email From grants Where Email= ? Limit 1";
    $INSERT="INSERT Into grants (Emri,Mbiemri,Email,Numri,Goal) values(?,?,?,?,?)";
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
      $stmt->bind_param("sssss",$Name,$Surname,$Email,$Number,$Goal);
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
  echo"Name,Surname,Email,Number fields are requaired!";
}
?>