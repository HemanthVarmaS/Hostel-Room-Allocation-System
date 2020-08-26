<?php
session_start();
$var1 = $_SESSION['v1'];
$conn=new mysqli('localhost','root','','hostel_allocation');
$sql="select hostel_id from administrator where mail_id='$var1'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
//print_r($row);
$hid = $row["hostel_id"];


$conn=new mysqli('localhost','root','','hostel_allocation');
$sql1 = "select * from student where hostel_id = '$hid'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);
//print_r($row1);
$sql2 = "select hostel_name from hostel where hostel_id = '$hid'";
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2);
$hname=$row2["hostel_name"];

$sql3 = "select * from student where hostel_id = '$hid'";
$res3=mysqli_query($conn,$sql3);









?>




<html>
    <head>
        <title> Admin_page</title>
        <link rel="stylesheet" href="Admin_page_student_info_style.css">
        <style>
            table, th, td {
  
  border-collapse: collapse;
}
th, td {
  padding: 20px;
}
th ,td{
  text-align: center;
}
table#t01 th {
  background-color: rgb(0,0,0,0.5);
  color: white;
}

        </style>
    </head>
    
    <body>
        <div class="all">
    <div class="head" >
        <div class="combine container">
            <div class="left">
                
            
    <div class="login box">
    <img src="Admin.png" class="user">
    </div>


</div>
<div class="right">



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


</div>

</div>

</div>

          <br>  <br>  <br>  <br>   <br>   <br>  <br>  <br>  <br>   <br>   <br>  <br>  <br>  <br>     
<div class="ds">
        
        
            <?php
            
            
            if(mysqli_num_rows($res1)==0)
            {
                ?>
        
           <h1 > <br> <br><br> <?php echo "Sorry...No student info available in   $hname :(";?></h1><br><br><br><br><br><br><br>
        
            <?php
            }
            
            else
            {?>
                 <table style="width:100%"  id="t01"><br>
                 <caption><h2><?php echo "$hname Student Info"?></h2><br></caption>
  <tr>
    <th> <h1>Roll-Number</h1></th>
    <th><h1>Name</h1></th>
    <th><h1>Department</h1></th>
    <th><h1>Mobile</h1></th>
    <th><h1>Room-Number</h1></th>
    

  </tr>
<?php
    
    while($row3=mysqli_fetch_array($res3))
    {


?>


  
  <tr>
    <td><h3><?php echo $row3['student_id']; ?></h3></td>
    <td><h3><?php echo $row3['fname'] ;?> &nbsp <?php echo $row3['lname'];?></h3></td>
    <td><h3><?php echo $row3['dept'];?></h3></td>
    <td><h3><?php echo $row3['mob_no'];?></h3></td>
    <td><h3><?php echo $row3['room_no'];?></h3></td>
  </tr>
  <?php
    }
    ?>
  
              <?php
            }
        ?>
    
</div>

    </body>
</html>

    