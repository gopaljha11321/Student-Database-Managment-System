<!DOCTYPE HTML>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="sms.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
        <center><br>
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Managment System</h3><br>
            <form action="" method="post">
                <input id="in" type="Submit" name="admin_login" value="Admin Login">
                <input type="Submit" id="in" name="student_login" value="Student Login">
            </form>
            <?php
            if(isset($_POST['admin_login']))
            {
                header("Location: admin_login.php");
            }
            if(isset($_POST['student_login']))
            {
                header("Location: student_login.php");
            }
            ?>
        </center>
        <div class="footer"><div class="font">GOPAL JHA ~ gopaljha11321@gmail.com ~ 8745977703</div></div>
      
        </div>
    </body>
</html>
