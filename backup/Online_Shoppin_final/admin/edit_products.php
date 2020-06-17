<?php

include "conn.php";
$id = $_GET['id'];
$query ="select * from `tbl_products` where `pro_id`='$id'";
	   $res= mysqli_query($con,$query);
	   $_rows = mysqli_fetch_array($res);
	   {
		$pro_name=$_rows['pro_name'];
	    $pro_cat= $_rows['pro_catagore'];
		$photo = $_rows['pro_img'];
		$pro_price = $_rows['pro_price'];
		$pro_status = $_rows['pro_status'];
		
	   }
	   
	   
if(isset($_POST['btnedit']))
	   {
		 
		$pro_name=$_POST['textname'];
		$pro_cat=$_POST['textcategory'];
		$pro_img = $_FILES['textimg']['name'];
		$pro_price=$_POST['textprice'];
		$pro_status=$_POST['rdstatus'];
		
		if($_FILES['textimg']['name'] == "")
			{
			$query="update `tbl_products`
			 set `pro_name`='$pro_name',
			`pro_catagore`='$pro_cat',
			`pro_price`='$pro_price',
			`pro_status`='$pro_status'
			 where `pro_id`='$id'";
				mysqli_query($con,$query) or die("errorrrrrrrrrrr");
			}
			else
			{
				unlink("photo/".$photo);
				$query="update `tbl_products` set `pro_name`='$pro_name',`pro_catagore`='$pro_cat',`pro_price`='$pro_price',`pro_status`='$pro_status',`pro_img`='$pro_img' where `pro_id`='$id'";
				move_uploaded_file($_FILES['textimg']['tmp_name'],"photo/".$pro_img);
				mysqli_query($con,$query) or die("errorrrrrrrrrrr");
			}
		
		
	
			 header("LOCATION:view_products.php");
	   }
	 include "include/head.php";
	include "include/header.php";
	include "html/edit_product.php";
	include "include/footer.php";  
	  
	
?>
    