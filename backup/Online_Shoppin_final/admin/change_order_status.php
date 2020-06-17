<?php
include "conn.php";
if(isset($_GET['order_id']))
echo $order_id = $_GET['order_id'];
echo $que="update `tbl_order` set `ord_status` = 'Delever' where `ord_id`='$order_id'";
mysqli_query($con,$que);
header("Location:today_order.php");
?>