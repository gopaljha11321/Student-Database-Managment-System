<?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"sms");   
	$query = "update students set name='$_POST[name]',father_name='$_POST[father_name]',
    email='$_POST[email]',password='$_POST[password]',mobile='$_POST[mobile]',class='$_POST[class]' where roll_no='$_POST[roll_no]'";
    $query_run = mysqli_query($connection,$query);
    
    ?>

<script type="text/javascript">
alert("Details update successfully");
window.location.href="student_dashboard.php";
</script>