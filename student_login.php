<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="sms.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<center><br><br>
		<h3>Student Login Page</h3><br>
		<form action="" method="post">
			Email: &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input type="text" id="log" name="email" required><br><br>
			Password: &nbsp; &nbsp;<input type="password" id="log" name="password" required><br><br>
			<br>&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<input  class="submit" type="submit" name="submit">
		</form><br>
		<?php
		session_start();
		$email1="";
		$name1="";
		$roll_no="";
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from students where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run)){
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							header("Location: student_dashboard.php");
							$_SESSION['email1'] =$row['email'];
							$_SESSION['name1'] =$row['name'];
							$_SESSION['roll_no'] =$row['roll_no'];
                            echo "Login Succesfull";
						}
						else{
							echo "Wrong Password";
						}
					}
					else{
						echo "Wrong email ID";
					}
				}
			}	
		?>
	</center>
		</div>
</body>
</html>