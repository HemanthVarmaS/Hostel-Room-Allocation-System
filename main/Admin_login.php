<?php
session_start();
if(isset($_POST['sub']))
{
	$_SESSION['v1']=$_POST['email'];
	$_SESSION['v2']=$_POST['pass'];

	$var1=$_SESSION['v1'];
	$var2=$_SESSION['v2'];

	$conn=new mysqli('localhost','root','','hostel_allocation');
	$sql="select * from administrator where mail_id='$var1' and passwd='$var2'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)==1)
	{
		header("Location:http://localhost/Admin_page.html");
	}
else {
	
	header("Location:http://localhost/Admin_login.php");
	
}




    
    //session_start();
    
}
?>


<html>
	<head>
		<title> Admin Login </title>
		<link rel="stylesheet" href="Admin_login_style.css">
	

	</head>
	<body>
	<div class="loginBox">
		
		<img src="Admin.png" class="user">
		<h2>Log In </h2>
		<form action="#" method="POST">
			<p>Email</p>
			<input type="text" name = "email" placeholder="Enter Email" required="required">
			<p>Password</p>
			<input type="password" name = "pass" placeholder="Enter Password" required="required">
			<button  type="submit" name="sub">       Sign In    </button>  <br> <br> <br>
			<a href="#"> Forget Password</a> 
			
		</form>
	</div>
	</body>
</html>