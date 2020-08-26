<?php
session_start();
$var1 = $_SESSION['sid'];
$conn=new mysqli('localhost','root','','hostel_allocation');
$sql="select fname from student where student_id='$var1'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$sfname = $row["fname"];


$sql1 = "select lname from student where student_id = '$var1'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);

$slname=$row1["lname"];

$sql5 = "select email_id,mob_no from student where student_id = '$var1'";
$res5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_array($res5);

$semail=$row5["email_id"];
$smobno =$row5["mob_no"];

$sql2 = "select hostel_id from student where student_id = '$var1'";
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2);

$shid=$row2["hostel_id"];

$sql3 = "select stat from student where student_id = '$var1'";
$res3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_array($res3);

$stat=$row3["stat"];

if($stat!=0)
{
$sql3 = "select hostel_name from hostel where hostel_id = '$shid'";
$res3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_array($res3);

            
            


$shname=$row3["hostel_name"];

$sql4 = "select room_no from student where student_id = '$var1'";
$res4=mysqli_query($conn,$sql4);
$row4=mysqli_fetch_array($res4);

$shroom=$row4["room_no"];
}
else{
    $shname = "N/A";
    $shroom = "N/A";
}
?>






<html>
    <head>
        <title> Student_page</title>
        <link rel="stylesheet" href="Student_page_my_info_style.css">
    </head>
    <body>
        <div class="login box">
                <img src="student1.jpg" class="user">
        

        </div>
        <div class="button1">
            <a href="Student_page_about.html" class="btn1"> About </a>

        </div>
        <div class="button4">
                <a href="Student_page.html" class="btn1"> Home </a>
    
            </div>
        <div class="button2">
            <a href="Student_page_my_info.php" class="btn2">My Info</a>

        </div>
        <div class="button3">
            <a href="Student_update.php" class="btn2">Update Info</a>
        </div>
        <div class="button5">
            <a href="first.html" class="btn2">Logout</a>

        </div>
        <br>  <br>  <br>  <br>   <br>   <br>  <br>  <br>  <br>   <br>   <br>  <br>  <br>  <br>
        <div class="ds">
            <br>
        <h1> <?php echo "&nbsp &nbsp &nbsp &nbsp Roll Number &nbsp :&nbsp $var1 ";?></h1>
        <br> <br>
        <h1> <?php echo "&nbsp &nbsp &nbsp &nbsp Name &nbsp :&nbsp $sfname $slname ";?></h1> <br> <br>
        <h1> <?php echo "&nbsp &nbsp &nbsp &nbsp Mobile &nbsp : &nbsp  $smobno";?> </h2><br>  <br>
        <h1> <?php echo "&nbsp &nbsp &nbsp &nbsp Email &nbsp : &nbsp  $semail";?> </h2><br>  <br>
        <h1> <?php echo "&nbsp &nbsp &nbsp &nbsp Hostel &nbsp : &nbsp  $shname";?> </h1><br>  <br>
        <h1> <?php echo "&nbsp &nbsp &nbsp &nbsp Room Number &nbsp : &nbsp  $shroom";?> </h2><br>  <br>

        

    </div>
    </body>
</html>
    