<?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"sms");   
	$query = "INSERT INTO `students` (`roll_no`, `name`, `email`, `password`, `father_name`, `mobile`, `class`) 
    VALUES ('$_POST[roll_no]', '$_POST[name]', '$_POST[email]', '$_POST[password]',
     '$_POST[father_name]', '$_POST[mobile]','$_POST[class]')";
    $query_run = mysqli_query($connection,$query);  
?>
<script type="text/javascript">
alert("Details update successfully");
window.location.href="admin_dashboard.php";
</script>