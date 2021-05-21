<?php
session_start();
?>



<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="index.css" >
<!------ Include the above in your HEAD tag ---------->

<!--

-->

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<div class="profile-userpic">



				<form method="POST" enctype="multipart/form-data">
				<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
				<input type="file" name="uploadedfile" id="profileImage" class="form-control">
				<div class="profile-userbuttons">
					<input type="submit" name="submit" class="btn btn-success btn-sm" value="Add picture">
				</form>

				<?php
				if(isset($_POST['submit'])) {

					$target_path="images/";
					$target_path=$target_path.basename($_FILES['uploadedfile']['name']);
					if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
						
						$conn=new mysqli("localhost","root","","phpproject");
						$sql="Insert into upload_image('path') VALUES('$target_path')";
						if($conn->query($sql)==TRUE){
							echo"<br><br>";
						} else {
							echo "Error:".$sql.$conn->error;
						}

						$sql1="select path from upload_image order by id desc limit 1";
						$result=$conn->query($sql1);
						if($result->num_rows>0){
							while($row=$result->fetch_assoc()){
								$path=$row['path'];
								echo "<img src='$path' class='img-responsive'";
							}

						}
						$conn->close();
					}
				}
				
				
				
				
				
				
				?>



				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
					<?php
					if(isset($_SESSION["useruid"])) {
                        echo $_SESSION["username"];
                    }
                    else {
                        echo 'Username';
                    }
					?>	
					</div>
				</div>
				
				</div>
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="homepage.php">
							<i class="glyphicon glyphicon-home"></i>
							Homepage </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
</div>

<br>
<br>
