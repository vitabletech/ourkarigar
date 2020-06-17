<?php

include 'conn.php';
$id=$_GET['user_id'];
 echo $query="select * from `tbl_cus_registeration` where `cus_id`='$id'";
 $res=mysqli_query($con,$query);
 $rows=mysqli_fetch_array($res);
 echo $photoname= $rows['cus_img'];
  unlink("user/userphoto/".$photoname); 
 $query="DELETE from `tbl_cus_registeration` WHERE `cus_id`=$id";
 mysqli_query($con,$query) or die("errorrrrrrrrrrrrr");
 header("location:view_users.php");



?>