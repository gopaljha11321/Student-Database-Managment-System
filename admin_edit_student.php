<?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"sms");   
	$query = "update students set name='$_POST[name]',father_name='$_POST[father_name]',
    email='$_POST[email]',password='$_POST[password]',mobile='$_POST[mobile]',class='$_POST[class]',test1='$_POST[test1]',test2='$_POST[test2]' ,test3='$_POST[test3]' where roll_no='$_POST[roll_no]'";
    $query_run = mysqli_query($connection,$query);
    
?>

<script type="text/javascript">
alert("Details update successfully");
window.location.href="admin_dashboard.php";
</script>