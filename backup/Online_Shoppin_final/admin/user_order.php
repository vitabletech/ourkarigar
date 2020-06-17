
<?php

include "conn.php";

$html = "";
$query ="select * from `tbl_order`";
	   $res= mysqli_query($con,$query);
	   while ($rows = mysqli_fetch_array($res))
		   {
			   
			   $ord_id= $rows['ord_id'];
			   
			   
			$html.= '<tr>
						<td width="109">'.$rows['ord_id'].'</td>
						<td width="113">'.$rows['ord_date'].'</td>
						<td width="144">'.$rows['ord_price'].'</td>
						<td width="144">'.$rows['ord_address'].'</td>';
						if($rows['ord_status']=='Notdelever')
							{
								$html.= '<td width="144"><a href="change_order_status.php?order_id='.$rows['ord_id'].'">Notdelever</a></td>';
								}
							else
								{
								$html.= '<td width="144">Delever</td>';
								}
						
						
						$html.='<td width="164"><a href="show_detail.php?order_id='.$ord_id.'">Detail</a></td>
					  </tr>';
		   }
    include "include/head.php";
	include "include/header.php";
	include "html/view_order.php";
	include "include/footer.php";
		
			
		   
	
?>

