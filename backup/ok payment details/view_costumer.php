<?php

include("includes/db24.php");

?>
<html>
<head>
<title>ourkarigar</title>
<style>
.header{
	padding-top:10px;
	padding-left:10px;	
	height:70px;
	width:auto;
	background:#222;
	
}
.navbar{
	padding-top:5px;
	padding-left:50px;
	height:25px;
	width:auto;
	background:#4caf50;
}

.left_content{
	float:left;
	padding:10px;
	margin-top:5px;
	height:auto;
	width:83%;
	background:#fff;
	border:1px solid black;
}
table,td {
	padding:0px;
	border:1px solid black;
	border-collapse: collapse;

}
th{
	background:#4caf50;
	padding:3px;
}
.right_content{
	float:right;
	margin-top:5px;
	height:500px;
	width:15%;
	background:#fff;
	border:1px solid black;
}
nav  {

    width: 10%;
    background-color: #f1f1f1;
	text-decoration: none;
	text-align:center;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #555;
    color: white;
}
.footer{
	margin-top:5px;
	padding-top:3px;
	float:left;	
	height:30px;
	width:100%;
	background:#222;
}
.footer_text{
	color:#fff;
}
</style>
 <body>
  <div class="header"><strong><font size=6 style="color:white";>OUR</font><font size=6 style="color:Blue";>KARIGAR</font></strong></div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  <div class="left_content">
			
<?php

     $user = $_GET['cos_id'];
		$get_costumers="select*from costumers where cos_id='$user'";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		$row_costumers=mysqli_fetch_array($run_costumers);
			
			
			$cos_id = $row_costumers['cos_id'];
			$cos_name = $row_costumers['cos_name'];
			$cos_mob = $row_costumers['mobile'];
			$cos_add = $row_costumers['cos_address'];
			$cos_worker_type = $row_costumers['worker_type'];
			$date = $row_costumers['date'];
		
		
		
		    $total=0;
			$pro_price="select*from entery WHERE cos_id='$cos_id'";
			$run_pro_price=mysqli_query($con,$pro_price);
			
            
			while($p_price=mysqli_fetch_array($run_pro_price)){
			$amount=array($p_price['price']);
			$values=array_sum($amount);
			$total +=$values;
			}
			
			if($total=='0'){
				$u_status="<img src='images/paid.png' width='40'height='20'>";
			}
			
			  else{
				 $u_status="<img src='images/due.png' width='40'height='20'>";
			      }
			
			
			
			
	     ?> 


 <div align="center" style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
 View Profile Of Mr.<?php echo $cos_name;?>
   </div>
  <table align="center"width="400px"height="300px">
  <tr>
  <td><b>Costumer Id: </b></td>
  <td>  # 
  <?php echo $cos_id;?>
  </td>
  </tr>
    <tr>
  <td><b>Registration Date: </b></td>
  <td> 
  <?php echo $date;?>
  </td>
  </tr>
  <tr>
  <td><b>Name</b></td>
  <td>
 <?php echo $cos_name;?>
  </td>
  </tr>
  <tr>
  <td><b>Contact No.</b></td>
  <td>
<?php echo $cos_mob;?>
  </td>
  </tr>

   <tr>
  <td><b> Address</b></td>
  <td>
<?php echo $cos_add;?>
  </td>
  </tr>
	  <tr>
	  <td><b>Select worker_type</b></td>
	  <td><?php echo $cos_worker_type;?></td>
  </tr>
    </tr>
	  <tr>
	  <td><b>Total Amount</b></td>
	  <td><?php echo $total;?></td>
  </tr>
    </tr>
	  <tr>
	  <td><b>Status</b></td>
	  <td><?php echo $u_status;?></td>
  </tr>

 
<tr style="height:35px;">
	<td align="center" colspan="2"><a href="all_costumer.php"style="text-decoration:none; color:#fff;background: green;padding:5px;">Back</a>
  
  </tr>
	
  </table>

</div>

 
  <div class="right_content">
    <ul>
	   <li><a href="index.php">Dashboard</a></li>
       <li><a href="all_costumer.php">All Customer</a></li>
       <li><a href="#news">News</a></li>
       <li><a href="#contact">Contact</a></li>
       <li><a href="#about">About</a></li>
    </ul>
  
  </div>
  <div class="footer"><div align="center" class="footer_text">&copy: copyright 2018 by ourkarigar</div></div>
  
 
 
 
 </body>
</html>

