<?php 
include "conn.php";

//session_start();



$query ="select * from `tbl_categories`";
	   $res= mysqli_query($con,$query);
	   $htmll="";
	   //echo "<table id='table'>";
	   while($rows = mysqli_fetch_array($res))
	   {
	 $htmll.= '<tr>
						  <td>'.$rows['cat_id'].'</td>
						  <td>'.$rows['cat_name'].'</td>
						  <td><img src="photo/'.$rows['cat_img'].'" height="50px" width="150px" alt="no photo"/></td>
						  <td><a href="delete_categories.php?id='.$rows['cat_id'].'">Delete</a>
						  <a href="edit_category.php?id='.$rows['cat_id'].'">Edit</a>
						  </td> 
					</tr>';
	   }
	  
       //$_SESSION['html']=$var;

    include "include/head.php";
	include "include/header.php";
	include "html/view_category.php";
	include "include/footer.php";
	


?>
