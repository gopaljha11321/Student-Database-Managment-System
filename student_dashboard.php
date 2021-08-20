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
             <div class=user><?php  echo $_SESSION['name1'];?> 
             <a href="logout.php"> &nbsp; &nbsp; &nbsp;Logout</a></div>
            
        <span id="top_span"><marquee>Note:- This portal is open til 10 September... plz edit your information if wrong</marquee></span>
        <div class="subcon">
        <div id="left_side">
            <form action="" method="post" >
                <table height="480px"  width="100%">
                    <tr>
                        <td>
                            <input class="submit" type="submit" name="show_detail" value="Show Detail">
                        </td>
                    </tr>
                        <tr>
                        <td>
                            <input class="submit" type="submit" name="edit_detail" value="Edit Detail"></td>
                           
                            </tr>
                    </tr>
                            <td>
                                <input class="submit" type="submit" name="result" value="Result"></td>
                               
                                </tr>
                </table>
            </form>
        </div>
        <div id="right_side">
        <div class="data">
                <?php
                    $roll_no1=$_SESSION['roll_no'];
                if(isset($_POST['show_detail']))
                {
                    $query = "select * from students where roll_no =  '$roll_no1'";
			            	$query_run = mysqli_query($connection,$query);
			            	while($row = mysqli_fetch_assoc($query_run)){
                          ?>
                          <table height="400px">
                    <tr>
                        <td><b>Roll no:</b></td>
                        <td>
                            <input type="text" id="log" value="<?php echo $row['roll_no'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Name:</b></td>
                        <td>
                            <input type="text" name="name" id="log" value="<?php echo $row['name'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td>
                            <input type="text" name="email" id="log" value="<?php echo $row['email'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Father Name:</b></td>
                        <td>
                            <input type="text" name="father_name" id="log" value="<?php echo $row['father_name'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td>
                            <input type="text" name="password" id="log" value="<?php echo $row['password'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Contact No:</b></td>
                        <td>
                            <input type="text" name="mobile" id="log" value="<?php echo $row['mobile'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Class:</b></td>
                        <td>
                            <input type="text" name="class" id="log" value="<?php echo $row['class'];?>"disabled>
                        </td>
                    </tr>
                          </table>
                
                           <?php
                }
            }
                    ?>
                    <?php
                if(isset($_POST['edit_detail']))
                {
                   
			            	$query = "select * from students where roll_no = '$roll_no1'";
			            	$query_run = mysqli_query($connection,$query);
			            	while($row = mysqli_fetch_assoc($query_run)){
                          ?>
                          <form action="edit_detail.php" method="post">
                          <table height="450px">
                    <tr>
                        <td><b>Roll no:</b></td>
                        <td>
                            <input id="log" type="text" name="roll_no"  value="<?php echo $row['roll_no'];?>" >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Name:</b></td>
                        <td>
                            <input id="log" type="text" name="name" value="<?php echo $row['name'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td>
                            <input type="text"  id="log" name="email" value="<?php echo $row['email'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Father Name:</b></td>
                        <td>
                            <input type="text" name="father_name" id="log" value="<?php echo $row['father_name'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td>
                            <input type="text" id="log" name="password" value="<?php echo $row['password'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Contact No:</b></td>
                        <td>
                            <input type="text" name="mobile" id="log" value="<?php echo $row['mobile'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Class:</b></td>
                        <td>
                            <input type="text" id="log" value="<?php echo $row['class'];?>">
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
                  if(isset($_POST['result']))
                  {
                    $query = "select * from students where roll_no = '$roll_no1'";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                  ?>
                      
                    <table height="450px">
                    <tr>
                        <td><b>Test 1:</b></td>
                        <td>
                            <input id="log" type="text" name="roll_no"  value="<?php echo $row['test1'];?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 2:</b></td>
                        <td>
                            <input id="log" type="text" name="name" value="<?php echo $row['test2'];?>"disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Test 3:</b></td>
                        <td>
                            <input type="text"  id="log" name="email" value="<?php echo $row['test3'];?> "disabled>
                        </td>
                    </tr>
                    <?php
                  }
                }
                ?>
                  
               
                  </div>
         </div>
                </div>
                </div>
        </body>
        </html>