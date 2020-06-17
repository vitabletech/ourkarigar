<?php
 session_start();
	include 'conn.php';

	    if(isset($_POST['login']))
				{   
					$email=$_POST['email'];
					$pass=$_POST['pass'];
					$que= "SELECT `cus_id` FROM `tbl_cus_registeration` WHERE `cus_email`='$email' AND `cus_password`='$pass'";
					$res=mysqli_query($con,$que) or die("Query Error");
					if(mysqli_num_rows($res)>0)
						{  
						    $_SESSION['user_email']=$email;
							$row = mysqli_fetch_array($res);
						    $_SESSION['id'] = $row['cus_id'];
							header("Location:register.php");
						}
					else
						{
							echo "user not exists";
						}
				}
?>

