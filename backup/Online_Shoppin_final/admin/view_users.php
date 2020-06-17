
<?php
	include "conn.php";
	$que="select * from `tbl_cus_registeration`";
	$run=mysqli_query($con,$que);
	$html="";
	  
	   while($rows = mysqli_fetch_array($run))
	   		{
				echo $rows['cus_img'];
	 			$html.= '<tr>
						  <td>'.$rows['cus_name'].'</td>
						  <td>'.$rows['cus_email'].'</td>
						  <td>'.$rows['cus_contact'].'</td>
						  <td><img src="user/userphoto/'.$rows['cus_img'].'" height="50px" width="150px" alt="no photo"/></td>
						   <td>'.$rows['cus_password'].'</td>
						  <td>'.$rows['cus_city'].'</td>
						  <td>'.$rows['cus_address'].'</td>
						  <td><a href="delete_users.php?user_id='.$rows['cus_id'].'">Delete</a>
						 
						  </td> 
					</tr>';
	  		 }
	include "include/head.php";
	include "include/header.php";
	include "html/view_users.php";
	include "include/footer.php";
?>



