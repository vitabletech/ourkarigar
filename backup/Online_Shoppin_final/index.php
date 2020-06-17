<?php

include "conn.php";
include "header.php";

/*21-12-2016937YouTube.png29-12-201688914907070_1106752372711433_3878339522826240330_n.jpg29-01-201725915027740_656803247811302_5970206404448996374_n.jpg*/
$query ="select * from `tbl_products`";
	   $res= mysqli_query($con,$query);
	   $html="";
	   while($rows = mysqli_fetch_array($res))
	   {
	 $html.= 

	 '<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="product_details.html"><img src="admin/photo/'.$rows['pro_img'].'"/></a>
				<div class="caption">
				  <h5>'.$rows['pro_name'].'</h5>
				  <h4>
					  <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <span class="pull-right">$'.$rows['pro_price'].'</span>
				  </h4>
				</div>
			  </div>
			</li>';
	   }
	   echo $html;exit();
	 //  $_SESSION['values']=$html;

include "html/main.php";
include "footer.php";

?>