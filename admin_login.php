<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="sms.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<center><br><br>
		<h3>Admin Login Page</h3><br>
		<form action="" method="post">
			Email: &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input type="text" id="log" name="email" required placeholder="Email"><br><br>
			Password: &nbsp; &nbsp;<input type="password" id="log"  name="password" required placeholder="Password"><br><br>
			<br>&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<input type="submit" name="submit" class="submit">
		</form><br>
		<?php
		session_start();
		$email="";
		$name="";
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","sms","jhaji9871436400");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run)){
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							header("Location: admin_dashboard.php");
							$_SESSION['email'] =$row['email'];
							$_SESSION['name'] =$row['name'];

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
	<div class="footer">GOPAL JHA ~ gopaljha11321@gmail.com ~ 8745977703</div>   
    </div>
	</div>
	
</body>
</html>
