<?php

include "conn.php";
if(isset($_POST['submit']))
	{
		
		$name = $_POST['textname'];
		echo $name;
		$photo = date('d-m-Y').rand(10,1000).$_FILES['textphoto']['name'];
		
		echo $query="insert into `tbl_categories` (`cat_name`,`cat_img`) values ('$name','$photo')";
		mysqli_query($con,$query) or die("errorrrrrrrrrrr");
		move_uploaded_file($_FILES['textphoto']['tmp_name'],"photo/".$photo);
		}

include "include/head.php";
include "include/header.php";
include "html/add_category.php";
include "include/footer.php";

	
?>








