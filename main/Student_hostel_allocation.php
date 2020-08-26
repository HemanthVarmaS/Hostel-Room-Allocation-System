<?php
session_start();
$var1=$_SESSION['sid'];
$conn=new mysqli('localhost','root','','hostel_allocation');
$sql="select hostel_id from student where student_id='$var1'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$hid = $row["hostel_id"];
$sql6="select stat from student where student_id='$var1'";
$res6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_array($res6);
$stat= $row6["stat"];

if($stat==0)
{
    $conn=new mysqli('localhost','root','','hostel_allocation');
    $sql1="select * from room where status = '0'";
    $res1=mysqli_query($conn,$sql1);    
    while($row1 = mysqli_fetch_array($res1))
    {
        $temp1=$row1["hostel_id_room"];
        $temp2=$row1["room_no"];

        break;
    }
    $sql2 = "update room set status='1' where hostel_id_room ='$temp1' and room_no='$temp2'";
    $res2 = mysqli_query($conn,$sql2);
    $sql3 = "update hostel set no_of_students=no_of_students+1 where hostel_id='$temp1'";
    $res3 = mysqli_query($conn,$sql3);
    $sql4 = "update student set hostel_id='$temp1' where student_id='$var1'";
    $res4=mysqli_query($conn,$sql4);
    $sql5 = "update student set room_no='$temp2' where student_id='$var1'";
    $res5=mysqli_query($conn,$sql5);
    $sql7 = "update student set stat='1' where student_id='$var1'";
    $res7=mysqli_query($conn,$sql7);
    ?>
         <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> 
        <h1 class="t1"> <br><br> Hurray! A room has been allocated to you. </h1>
        <?php
}

else {
        ?>
         <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> 
        <h1 class="t1"> <br><br> A room has already been allocated to you ! </h1>
        <?php
}


?>











<html>
    <head>
        <title> Student_page</title>
        <link rel="stylesheet" href="Student_hostel_allocation_style.css">
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
        
        
    </body>
</html>
    