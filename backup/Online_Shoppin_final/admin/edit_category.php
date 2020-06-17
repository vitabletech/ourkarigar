<?php

include "conn.php";
$id = $_GET['id'];
$query ="select * from `tbl_categories` where `cat_id`='$id'";
	   $res= mysqli_query($con,$query);
	   $_rows = mysqli_fetch_array($res);
	   {
		$cat_name=$_rows['cat_name'];
        $photo = $_rows['cat_img'];
		
	   }
	   
	   
	   
	   
	   if(isset($_POST['btnedit']))
	   {
		 
		$cat_name = $_POST['textname'];
		$cat_img = rand(0,9999).$_FILES['textphoto']['name'];
		
		
		if($_FILES['textphoto']['name'] == "")
			{
			$query="update `tbl_categories`
			 set `cat_name`='$cat_name'";
				mysqli_query($con,$query) or die("errorrrrrrrrrrr");
			}
			else
			{
				
				$query="update `tbl_categories` set `cat_name`='$cat_name',`cat_img`='$cat_img' where `cat_id`='$id'";
				move_uploaded_file($_FILES['textphoto']['tmp_name'],"photo/".$cat_img);
				mysqli_query($con,$query) or die("errorrrrrrrrrrr");
				unlink("photo/".$photo);
			}
		
		
	
			 header("LOCATION:view_categories.php");
	   }
	   
	  
	  include "include/head.php";
	include "include/header.php";
	include "html/edit_category.php";
	include "include/footer.php";

	  
	
?>
	   
	   
	   
