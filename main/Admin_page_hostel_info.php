<?php
session_start();
$var1 = $_SESSION['v1'];
$conn=new mysqli('localhost','root','','hostel_allocation');
$sql="select hostel_id from administrator where mail_id='$var1'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$hid = $row["hostel_id"];


$sql1 = "select hostel_name from hostel where hostel_id = '$hid'";
$res=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res);

$hname=$row1["hostel_name"];
$sql2 = "select no_of_rooms from hostel where hostel_id = '$hid'";
$res=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res);

$nor=$row2["no_of_rooms"];

$sql3 = "select no_of_students from hostel where hostel_id = '$hid'";
$res=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_array($res);

$nos=$row3["no_of_students"];











?>



<html>
    <head>
        <title> Admin_page</title>
        <link rel="stylesheet" href="Admin_page_hostel_info_style.css">
    </head>
    <body>
        <div class="login box">
                <img src="Admin.png" class="user">
        

        </div>
        <div class="button1">
            <a href="Admin_page_about.html" class="btn1"> About </a>

        </div>
        <div class="button4">
                <a href="Admin_page.html" class="btn1"> Home </a>
    
            </div>
        <div class="button2">
            <a href="Admin_page_hostel_info.php" class="btn2">Hostel-Info</a>

        </div>
        <div class="button3">
            <a href="Admin_page_student_info.php" class="btn2">Student-Info</a>
        </div>
        <div class="button5">
            <a href="first.html" class="btn2">Logout</a>

        </div>
        <br>  <br>  <br>  <br>   <br>   <br>  <br>  <br>  <br>   <br>   <br>  <br>  <br>  <br>
        <div class="ds">
            <br>
        <h1> <?php echo "$hname &nbsp  Info";?></h1>
        <br> <br>
        <h2> <?php echo "Number of rooms &nbsp : &nbsp  $nor";?> </h2><br>  <br>
        <h2> <?php echo "Number of students &nbsp : &nbsp  $nos";?> </h2><br>  <br>

        

    </div>
    </body>
</html>
    