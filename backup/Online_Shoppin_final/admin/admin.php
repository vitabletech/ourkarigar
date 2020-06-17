<?php
session_start();
	include 'conn.php';
	if(isset($_SESSION['user']))
		{
			header("Location:main.php");
		}
	else
		{
			if(isset($_POST['signup']))
				{
					$name=mysqli_real_escape_string($con,$_POST['username']);
					$pass=$_POST['password'];
					
					
					if(empty($name) || empty($pass))
						{
						 echo "Enter Name and password also:";
						}
				    else
					{
					
					
					
					
					$que="SELECT `admin_id` FROM `tbl_admin` WHERE `admin_name`='$name' && `admin_password`='$pass'";
					$res=mysqli_query($con,$que);
		
					if(mysqli_num_rows($res)>0)
						{
			
							echo "user already exits";
						}
		
					else
						{
							$que="INSERT INTO `tbl_admin`(`admin_name` , `admin_password` )values('$name','$pass')";
							mysqli_query($con,$que) or die("error"); 
							header("LOCATION:admin.php");
						}
					}
			
				}
			if(isset($_POST['login']))
				{
					$name=$_POST['user'];
					$pass=$_POST['pass'];
					$que= "SELECT `admin_id` FROM `tbl_admin` WHERE `admin_name`='$name' AND `admin_password`='$pass'";
					$res=mysqli_query($con,$que) or die("Query Error");
					if(mysqli_num_rows($res)>0)
						{
							header("Location:main.php");
							$_SESSION['user']=$name;
						}
					else
						{
							echo "user not exists";
						}
				}
			//if(isset($_POST['change_pass']))
				//{
				//	header("LOCATION:change_pass.php");
				//}
			
		}
?>





<html>
	<head>
    
    <style>
body{
background-color:#B74A31;

}
.inside_div{
height:80%;
width:80%;
background-color:white;
margin:0 auto;
padding-left:12px;
border-radius:5px;
font:bold 15px century gothic;

}
.header{
height:15%;
width:80%;
padding-top:30px;
padding-left:30px;
font-size:50px;

color:#C09;
margin:0 auto;
}
.aside{
	height:50%;
	width:20%;
	float:right;
}
    
    
   </style> 
    
	</head>
    <body>
	<div class="header">Online Store</div>
	<div class="inside_div">
	
		<div class="aside">
			<h2>Login Here !</h2>
		<form method="post">
			Username:</br><input type="text" name="user"></br>
			Passward:</br><input type="text" name="pass">
			</br><input type="submit" name="login" value="login">
			<input type="submit" name="change_pass" value="chan_pass">
					
		</form>
		<h2>Register</h2>
		<form method="post">
			Username:</br><input type="text" name="username"></br>
			Passward:</br><input type="text" name="password">
			</br><input type="submit" name="signup" value="signup">
		<form>
		</div>

	</div>
</body>
</html>