<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin
        </title>
        <link rel="stylesheet" href="sms.css">
       
        <?php
        session_start();
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"sms");
        ?>
    </head>
    <body>
        <div class="container">
        <div id="header">
            <center>Training Program</center> </div>
             <div class=user><?php  echo $_SESSION['name'];?> <a href="logout.php"> &nbsp; &nbsp; &nbsp;Logout</a></div>    
        <span id="top_span"><marquee>Note:- This portal is open til 10 September... plz edit your information if wrong</marquee></span>
        <div class="subcon">
        <div id="left_side">
            <form action="" method="post" >
                <table height="580px" width="100%">
                    <tr>
                        <td>
                            <input type="submit" name="search_student" value="Search Student" class="submit">
                        </td>
                    </tr>
                        <tr>
                        <td>
                            <input type="submit" name="edit_student" value="Edit Student"  class="submit"></td>
                           
                            </tr>
                    </tr>
                            <td>
                                <input type="submit" name="add_new_student" value="Add New Student"  class="submit"></td>
                               
                                </tr>
                                <tr>
                                <td>
                                    <input type="submit" name="delete_student" value="Delete Student"  class="submit">
                                    </td>
                                </tr>
                    </tr>
                </table>
            </form>
        </div>
            <div id="right_side">
                <div class="data">
                <?php
                if(isset($_POST['search_student']))
                {
                    ?>
                    <center>
                        <form action="" method="post">
                            Enter Roll No:
                            <input type="text" name="roll_no" id="log">
                            <br><br>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="sbr" value="search" class="submit">
                      </form>
                        </center
                        <?php  
                }
                        if(isset($_POST['sbr'])){
			            	$query = "select * from students where roll_no = '$_POST[roll_no]'";
			            	$query_run = mysqli_query($connection,$query);
			            	while($row = mysqli_fetch_assoc($query_run)){
                          ?>
                          <table height="650px">
                    <tr>
                        <td><b>Roll no:</b></td>
                        <td>
                            <input type="text"  id="log" value="<?php echo $row['roll_no'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Name:</b></td>
                        <td>
                            <input type="text"  id="log" name="name" value="<?php echo $row['name'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td>
                            <input type="text"  id="log" name="email" value="<?php echo $row['email'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Father Name:</b></td>
                        <td>
                            <input type="text"  id="log" name="father_name" value="<?php echo $row['father_name'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td>
                            <input type="text"  id="log" name="password" value="<?php echo $row['password'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Contact No:</b></td>
                        <td>
                            <input type="text"  id="log" name="mobile" value="<?php echo $row['mobile'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Class:</b></td>
                        <td>
                            <input type="text"  id="log" name="class" value="<?php echo $row['class'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 1:</b></td>
                        <td>
                            <input type="text"  id="log" name="class" value="<?php echo $row['test1'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 2:</b></td>
                        <td>
                            <input type="text"  id="log" name="class" value="<?php echo $row['test2'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 3:</b></td>
                        <td>
                            <input type="text"  id="log" name="class" value="<?php echo $row['test3'];?>"disabled>
                        </td>
                    </tr>
                          </table>
                
                           <?php
                    }
                  }
            
            ?>
            <?php
                if(isset($_POST['edit_student']))
                {
                    ?>
                    <center>
                        <form action="" method="post">
                            Enter Roll No:
                            <input type="text" name="roll_no" id="log">
                            <br><br>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="sbe" value="search" class="submit">
                      </form>
                        </center
                        <?php  
                }
                        if(isset($_POST['sbe'])){
			            	$query = "select * from students where roll_no = '$_POST[roll_no]'";
			            	$query_run = mysqli_query($connection,$query);
			            	while($row = mysqli_fetch_assoc($query_run)){
                          ?>
                          <form action="admin_edit_student.php" method="post">
                          <table height="650px">
                    <tr>
                        <td><b>Roll no:</b></td>
                        <td>
                            <input type="text" name="roll_no"  id="log"  value="<?php echo $row['roll_no'];?>" >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Name:</b></td>
                        <td>
                            <input type="text" name="name"  id="log" value="<?php echo $row['name'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td>
                            <input type="text" name="email"  id="log" value="<?php echo $row['email'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Father Name:</b></td>
                        <td>
                            <input type="text" name="father_name"  id="log" value="<?php echo $row['father_name'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td>
                            <input type="text" name="password"  id="log" value="<?php echo $row['password'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Contact No:</b></td>
                        <td>
                            <input type="text" name="mobile"  id="log" value="<?php echo $row['mobile'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Class:</b></td>
                        <td>
                            <input type="text" name="class"  id="log" value="<?php echo $row['class'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 1:</b></td>
                        <td>
                            <input type="text"  id="log" name="test1" value="<?php echo $row['test1'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 2:</b></td>
                        <td>
                            <input type="text"  id="log" name="test2" value="<?php echo $row['test2'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 3:</b></td>
                        <td>
                            <input type="text"  id="log" name="test3" value="<?php echo $row['test3'];?>">
                        </td>
                    </tr>
                    <tr align="center">
                        <td> 
                        <td><button name="edit" type="submit" class="submit" >Update</button></td>
                            </tr>
                          </table>
                          <form>
                           <?php
                    }
                  }
            ?>
             <?php
                if(isset($_POST['add_new_student']))
                {
                          ?>
                          <form action="add_new_student.php" method="post">
                          <table height="650px">
                    <tr>
                        <td><b>Roll no:</b></td>
                        <td>
                            <input type="text" name="roll_no"  id="log" >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Name:</b></td>
                        <td>
                            <input type="text" name="name" id="log" >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td>
                            <input type="text" name="email" id="log">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Class:</b></td>
                        <td>
                            <input type="text" name="class" id="log">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 1 :</b></td>
                        <td>
                            <input type="text" name="test1" id="log">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 2:</b></td>
                        <td>
                            <input type="text" name="test2" id="log">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 3 :</b></td>
                        <td>
                            <input type="text" name="test3" id="log">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Father Name:</b></td>
                        <td>
                            <input type="text" name="father_name" id="log" >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td>
                            <input type="text" name="password" id="log">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Contact No:</b></td>
                        <td>
                            <input type="text" name="mobile" id="log" >
                        </td>
                    </tr>
                    <tr align="center">
                        <td> 
                        <td><button name="edit" type="submit" class="submit">Add</button></td>
                            </tr>
                          </table>
                          <form>
                           <?php
                    }
                    if(isset($_POST['delete_student']))
                    {
                        ?>
                        <center>
                            <form action="delete_student.php" method="post">
                                Enter Roll No:
                                <input type="text" name="roll_no" id="log">
                                <br><br>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="delete_student" value="Delete Student" class="submit">
                          </form>
                            </center
                            <?php  
                    }
            ?>
        </div>
                </div>
            </div>
            </div>

    </body>
    </html>
