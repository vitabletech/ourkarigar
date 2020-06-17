<?php
include "conn.php";
if(isset($_POST['submit']))
 { 
	$name=$_POST['textname'];
	$email=$_POST['textemail'];
	$password=$_POST['textpassword'];
	$contact=$_POST['textcontact'];
	$cus_img = date('d-m-Y').rand(10,1000).$_FILES['photo']['name'];
	$city=$_POST['textcity'];
	$address=$_POST['textaddress'];
	echo $query="insert into `tbl_cus_registeration` (`cus_name`,`cus_email`,`cus_contact`,`cus_password`,`cus_img`,`cus_city`,`cus_address`) values ('$name','$email','$contact','$password','$cus_img','$city','$address')";
	mysqli_query($con,$query) or die("not insert user data");
	move_uploaded_file($_FILES['photo']['tmp_name'],"userphoto/".$cus_img);
	header("LOCATION:user_login.php");	
	}
?>