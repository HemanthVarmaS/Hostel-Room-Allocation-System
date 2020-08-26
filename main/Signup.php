<?php
session_start();
if(isset($_POST['signup-submit']))
{
	$_SESSION['student_id']=$_POST['student_roll_no'];
	$_SESSION['student_fname']=$_POST['student_fname'];
    $_SESSION['student_lname']=$_POST['student_lname'];
    $_SESSION['student_mobile_no']=$_POST['mobile_no'];
    $_SESSION['student_mail']=$_POST['mail'];
    $_SESSION['student_dept']=$_POST['department'];
    $_SESSION['student_year']=$_POST['year_of_study'];
    $_SESSION['student_pwd']=$_POST['pwd'];
    $_SESSION['student_confirmpwd']=$_POST['confirmpwd'];

    $sid = $_SESSION['student_id'];
	$sfname = $_SESSION['student_fname'];
    $slname =$_SESSION['student_lname'];
    $smobno = $_SESSION['student_mobile_no'];
    $semail = $_SESSION['student_mail'];
    $sdept = $_SESSION['student_dept'];
    $syear = $_SESSION['student_year'];
    $spwd = $_SESSION['student_pwd'];
    $sconfirmpwd = $_SESSION['student_confirmpwd'];

    if($spwd != $sconfirmpwd)
    {
        header("Location:http://localhost/Signup.php");    
    }
    else{
	    $conn=new mysqli('localhost','root','','hostel_allocation');
	    $sql="select * from student where student_id='$sid' ";
	    $res=mysqli_query($conn,$sql);
	    if(mysqli_num_rows($res)!=0)
	    {
            echo "you are already in!";
	    	//header("Location:http://localhost/Student_login.php");
	    }
        else {

            
            $conn=new mysqli('localhost','root','','hostel_allocation');
            $sql1="insert into student values ('$sid','$sfname','$slname','$smobno','$semail','$sdept','$syear','1','1','$spwd','')";
            $res1=mysqli_query($conn,$sql1);
            
            header("Location:http://localhost/Student_login.php");
        
	
        }
    //session_start();
    }   
}
?>

<html lang="en">

<head>
    <title>SIGNUP PAGE</title>

    <link href="Signup_style.css" rel="stylesheet" type="text/css" />

     <link href="font.css" rel="stylesheet" />

</head>
<body>
    <h1>Hostel Room Allocation System</h1>
    <div class=" w3l-login-form">
        <h2>Sign Up Here</h2>
        <form action="#" method="POST">

            <div class=" w3l-form-group">
                <label>Student Id</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="student_roll_no" placeholder="Student Id" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>First Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_fname" placeholder="First Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Last Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_lname" placeholder="Last Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mobile No</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                 <label>Email</label>
                 <div class="group">
                     <i class="fas fa-envelope"></i>
                     <input type="text" class="form-control" name="mail" placeholder="Email" required="required" />
                 </div>
             </div>

            <div class=" w3l-form-group">
                <label>Department</label>
                <div class="group">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="text" class="form-control" name="department" placeholder="Department" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Year of Study</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <input type="text" class="form-control" name="year_of_study" placeholder="Year of Study" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Password</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password" required="required" />
                </div>
            </div>
            <button type="submit" name="signup-submit">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="Student_login.php" class="register"> Login</a></p>
    </div>
</body>

</html>
