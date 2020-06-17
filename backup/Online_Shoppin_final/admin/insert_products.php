 <?php
 error_reporting(1);


include "conn.php";

if(isset($_POST['submit']))

	{
	
		$pro_name=$_POST['textname'];
		$pro_cat=$_POST['textcategory'];
		$pro_img = date('d-m-Y').rand(10,1000).$_FILES['textimg']['name'];
		$pro_price=$_POST['textprice'];
		$pro_status=$_POST['rdstatus'];
		echo $query="insert into `tbl_products` (`pro_name`,`pro_catagore`, `pro_img`,`pro_price`,`pro_status`) values ('$pro_name','$pro_cat','$pro_img','$pro_price','$pro_status')";
		mysqli_query($con,$query) or die("errorrrrrrrrrrr");
		move_uploaded_file($_FILES['textimg']['tmp_name'],"photo/".$pro_img);
 
	}
	
	include "include/head.php";
	include "include/header.php";
	include "html/add_product.php";
	include "include/footer.php";
?>






