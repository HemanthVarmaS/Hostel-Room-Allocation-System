<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $var1 = $_SESSION['sid'];
        $_SESSION['a']=$_POST['mob'];
        $_SESSION['b']=$_POST['mail'];
    
        $var2 = $_SESSION['a'];
        $var3 = $_SESSION['b'];


        $conn=new mysqli('localhost','root','','hostel_allocation');
	    $sql="UPDATE student SET mob_no = '$var2' WHERE student_id = '$var1'  ";
        $res=mysqli_query($conn,$sql);
        $sql1="UPDATE student SET email_id = '$var3' WHERE student_id = '$var1'  ";
        $res1=mysqli_query($conn,$sql1);
        
        
        


    }

?>


<html>
    <head>
        <title> Student_page</title>
        <link rel="stylesheet" href="Student_update_style.css">
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


        <div class="loginBox">
		
		
		<h2>Update Info</h2>
		<form action="#" method="POST">
			<p>Mobile </p>
			<input type="text" class="form-control" name = "mob" placeholder="Enter new Mobile no" >
            <p>Email-id</p>
            
            <input type="text" class="form-control" name = "mail"  placeholder="Enter new Mail id">
        <br><br>
			<input type="submit" name = "submit" value="Update">
			
</form>
	</div>

        
        
    </body>
</html>
    