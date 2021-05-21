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
  $dbname="fundingp";

  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')');
  }
  else{
    $SELECT="SELECT Email From investment Where Email= ? Limit 1";
    $INSERT="INSERT Into investment (Emri,Mbiemri,Email,Phone,Goal) values(?,?,?,?,?)";
    $firstdayofmonth=date('Y-01-d');
    $yesterday=date("Y-m-d", strtotime('-1 day'));
    $today=date('Y-m-d');
    $date = date("Y-m-d", strtotime('-1 month'));
    $DELETE="DELETE From investment Where register_date BETWEEN '". $date ."' AND '". $yesterday ."'";
    $result = mysqli_query($conn,"SELECT register_date From investment Where register_date BETWEEN '". $date ."' AND '". $yesterday ."'");
    $random_name="";
    $query_random="SELECT Id,Emri,Mbiemri,Email From investment ORDER BY RAND() LIMIT 1";
    $radomres=mysqli_query($conn,$query_random);
    if($firstdayofmonth===$today){
      if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($radomres)){
        $random_name=$row["Emri"];
        $id=$row["Id"];
        $email=$row["Email"];
        $mbiemri=$row["Mbiemri"];
      }
      echo "The winner is ".$random_name." ".$mbiemri.". ( Id: ".$id." , Email: ".$email." , Month: "
      .date("F Y",strtotime('-1 month'))." )";
      echo "<br>";
      if(mysqli_query($conn,$DELETE)){
        echo "The records from last month are removed because the winner has been selected. ";
        echo "<br>";}
      }
      else{
        echo "No records from last month\n";
        echo "<br>";
      }}
    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$Email);//s for string
    $stmt->execute();
    $stmt->bind_result($Email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;//numron ne sa rreshta ndodhet email
    
    if($rnum==0){
      $stmt->close();

      $stmt=$conn->prepare($INSERT);
      $stmt->bind_param("sssss",$Name,$Surname,$Email,$Number,$Goal);
      $stmt->execute();
      echo "New record inserted! ";
      echo "<br>";
    }else{
      echo "Someone already is registerd with the same email ";
      echo "<br>";
    }
    

    $stmt->close();
    $conn->close();
  
  }
}
else{
  echo"Name,Surname,Email,Number fields are requaired!";
}
?>