<?php
session_start();
include "conn.php";


 $query ="select * from `tbl_products`";
	   $res= mysqli_query($con,$query);
	   $html="";
	   while($rows = mysqli_fetch_array($res))
	   {
	 $html.= '<tr>
						  <td>'.$rows['pro_id'].'</td>
						  <td>'.$rows['pro_name'].'</td>
						  <td>'.$rows['pro_catagore'].'</td>
						  <td><img src="photo/'.$rows['pro_img'].'" height="50px" width="150px" alt="no photo"/></td>
						  <td>'.$rows['pro_price'].'</td>
						  <td>'.$rows['pro_status'].'</td>
						  <td><a href="delete_products.php?id='.$rows['pro_id'].'">Delete</a>
						  <a href="edit_products.php?id='.$rows['pro_id'].'">Edit</a>
						  </td>
						  
					  
					</tr>';
	   }
	 //  $_SESSION['values']=$html;



    include "include/head.php";
	include "include/header.php";
	include "html/view_product.php";
	include "include/footer.php";



?>

