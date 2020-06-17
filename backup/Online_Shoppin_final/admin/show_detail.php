<?php
include "conn.php";
	if(isset($_GET['order_id']))
		{
			$order_id = $_GET['order_id'];
		}
$html="";
$que="select * from `tbl_order_detail` where `ord_id`='$order_id'";
$run = mysqli_query($con,$que);
  while ($rows = mysqli_fetch_array($run))
		   {
			$html.= '<tr>
						<td width="109">'.$rows['ord_detail_id'].'</td>
						<td width="113">'.$rows['ord_pro_id'].'</td>
						<td width="144">'.$rows['ord_id'].'</td>
						<td width="144">'.$rows['ord_pro_qty'].'</td>
						<td width="164">'.$rows['ord_pro_price'].'</td>
					  </tr>';
		   }
	include "include/head.php";
	include "include/header.php";
	include "html/order_detail.php";
	include "include/footer.php";
		   
?>
