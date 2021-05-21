<!DOCTYPE html>
<html>
<head>
<style>
  #this{
    margin-left:-420px;
    width:1200px;
    border:5px solid black;
    font-weight:600;
    font-size:15px;
  }
  th{
    border:5px solid black;
    background:rgba(5, 5, 5, 0.733)
  }
  #bo{
    border:5px solid black;
    background:#F79B44;
    color:black;
  }
  #gjat{
    width:400px;
    border:5px solid black;
  }
  #gjat1{
    width:400px;
    border:5px solid black;
    background:#F79B44;
    color:black;
    
  }
</style>
</head>
<body>
<?php
 $q = intval($_GET['q']);

 $host="localhost";
 $dbUsername="root";
 $dbPassword="";
 $dbname="employees";
$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
if (!$conn) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM employee WHERE Id = '".$q."'";
$result = mysqli_query($conn,$sql);
if( !$result ){
	die("Can't load datas" . mysqli_error($conn));
}

if(mysqli_num_rows($result) > 0){
	echo "<table id='this' border='1px'>";
	echo "<tr>
			<th>ID</th>
			<th>Emri</th>
			<th>Mbiemri</th>
			<th id='gjat'>Email</th>
			<th>Post</th>
      <th>Update</th>
		</tr>";
		
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>
				<td id='bo'>".$row['Id']."</td>
				<td id='bo'>".$row['Emri']."</td>
				<td id='bo'>".$row['Mbiemri']."</td>
				<td id='gjat1'>".$row['Email']."</td>
				<td id='bo'>".$row['Post']."</td>
        <td id='bo'><a style='text-decoration:none;color:black;' href='update.php?Id=".$row['Id']."'>Edito</a></td>
			</tr>";
	}
	echo "</table>";
}
else{
	echo "Table has no racords";
}
 


 mysqli_close($conn);

?>
</body>
</html>