<?php
session_start();
if(isset($_POST['submit']))
{
	$_SESSION['sid']=$_POST['id'];
	$_SESSION['spass']=$_POST['pass'];

	$var1=$_SESSION['sid'];
	$var2=$_SESSION['spass'];

	$conn=new mysqli('localhost','root','','hostel_allocation');
	$sql="select * from student where student_id='$var1' and pwd='$var2'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)==1)
	{
		header("Location:http://localhost/Student_page.html");
	}
else {
	
	header("Location:http://localhost/Student_login.php");
	
}
    //session_start();    
}
?>


<html>
	<head>
		<title> Student Login </title>
		<link rel="stylesheet" href="Student_login_style.css">
	

	</head>
	<body>
	<div class="loginBox">
		
		<img src="student1.jpg" class="user">
		<h2>Log In </h2>
		<form action="#" method="POST">
			<p>Student Id</p>
			<input type="text" class="form-control" name = "id" placeholder="Enter Student Id" required="required">
			<p>Password</p>
			<input type="password" class="form-control" name = "pass"  placeholder="Enter Password" required="required">
			<input type="submit" name = "submit" value="Sign In">
			<p>&nbsp;Not a user? <a href="Signup.php">Sign UP</a> </p>
</form>
	</div>
	</body>
</html>