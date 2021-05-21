<!DOCTYPE html>
<html>
<head>
<style>
body{
	background: url(imagesfunding/gri.jpg);
  background-blend-mode: screen;
  background-repeat: no-repeat;
  background-size: 100%;
	}
#form{
	position:relative;
  width:430px;
  height:630px;
  padding: 10px;
}
div{
  position:absolute;
  left:35%;
  top:15%;
  border:5px solid black;
	width:480px;
	height:500px;
}
label{
	font-size:20px;
	font-weight:600;
}
p{
	position:absolute;
	top:510px;
	left:600px;
	font-weight:600;
	color:green;
	font-size:20px;
}
input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
	font-size:17px;
}
[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

#btn{
  background-color: #F79B44;
  color: white;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-bottom:10px;
  opacity: 0.8;
  font-size: 20px;
  position: absolute;
	top:440px;
	height:40px;
}
#btn:hover {
  opacity: 1;
}

</style>
</head>
<body>
<?php
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="employee";
$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
if (!$conn) {
 die('Could not connect: ' . mysqli_error($con));
}

$id = intval($_GET['Id']);
$selectQuery = "SELECT * FROM employees WHERE Id = ".$id;
$selectResult = mysqli_query($conn, $selectQuery);
if(!$selectResult){
	die("Nuk mund te merren te dhenat nga tabela");
}
if(mysqli_num_rows($selectResult) > 0){
	while($row = mysqli_fetch_assoc($selectResult)){
		echo "<div>
		<form method='post' id='form'>
		<label>Emri</label>
		<br><input type='text' name='emri' value='".$row['Emri']."'/>
		<br/>
		<label>Mbiemri</label>
		<br><input type='text' name='mbiemri' value='".$row['Mbiemri']."'/>
		<br/>
		<label>Email</label>
		<br><input type='text' name='email' value='".$row['Email']."'/>
		<label>Posti</label>
		<br><input type='text' name='posti' value='".$row['Post']."'/>
		<br/>
		<br><input type='submit' name='edit' id='btn' value='Edito'>	
		</form>
		</div>
		";
		
	}
}

if(isset($_POST['edit'])){
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$email = $_POST['email'];
	$post=$_POST['posti'];
	
	$updateQuery = "UPDATE employee SET Emri='$emri', Mbiemri='$mbiemri', Email='$email',Post='$post'
					WHERE Id = $id";
	$updateResult = mysqli_query($conn, $updateQuery);
	if(!$updateQuery){
		die("<span style='position:absolute;top:480px;left:600px;font-weight:600;color:green;
		font-size:20px;'>Can't update your data!</span>");
	}
	else{
		echo "<p >Your data has been updated successfully</p>";
	}

	mysqli_close($conn);
	
	
	
}
?>
</body>
</html>