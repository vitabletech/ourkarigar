<?php
include 'conn.php';
$id=$_GET['id'];
 $query="select * from `tbl_categories` where `cat_id`='$id'";
 $res=mysqli_query($con,$query);
 $rows=mysqli_fetch_array($res);
 $photoname= $rows['cat_img'];
  unlink("photo/".$photoname);
 echo "ok";




 
 $query="DELETE from `tbl_categories` WHERE `cat_id`=$id";
 mysqli_query($con,$query) or die("errorrrrrrrrrrrrr");
 header("location:view_categories.php");

?>
