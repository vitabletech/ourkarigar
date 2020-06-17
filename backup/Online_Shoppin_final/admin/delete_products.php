<?php
include 'conn.php';
$id=$_GET['id'];
 $query="select * from `tbl_products` where `pro_id`='$id'";
 $res=mysqli_query($con,$query);
 $rows=mysqli_fetch_array($res);
 $photoname= $rows['pro_img'];
  unlink("photo/".$photoname);
 echo "ok";




 
 $query="DELETE from `tbl_products` WHERE `pro_id`=$id";
 mysqli_query($con,$query) or die("errorrrrrrrrrrrrr");
 header("location:view_products.php");

?>