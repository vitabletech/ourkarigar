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
	width:auto%;
	background:#4caf50;
}

.left_content{
	float:left;
	padding-left:20px;
	padding-top:20px;
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
button{
	background: linear-gradient(rgba(206,20,20), rgba(1,4,4));
	border-radius:4px;
	border:none;
	color:#fff;
	font-size:15px;
}
input{
	width:100%;
	height:20px;
	border:none;
	padding-left:10px;
}
</style>
<head>
<?php

		$user = $_GET['cos_id'];
		
        $get_user = "select * from costumers where cos_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);


      $cos_id=$row['cos_id'];
      $cos_name=$row['cos_name'];
	  $reg_date=$row['date'];
	  $cos_address=$row['cos_address'];
	  $cos_worker_type=$row['worker_type'];
	  $cos_mob=$row['mobile'];
	  $cos_status=$row['p_status'];
	  
	  $user = $_GET['cos_id'];
		
        $get_user = "select * from entery where cos_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);
	  
		$entery_id=$row['entery_id'];
		
?>
</head>
 <body>
  <div class="header"><strong><font size=6 style="color:white";>OUR</font><font size=6 style="color:Blue";>KARIGAR</font></strong></div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  <div class="left_content"> 
  
 
   
  <div align="center">

   <div style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
 INVOICE
   </div>
  <table style="float:left;margin-left:84px; ">
   <tr>
    <td><b>Name: </b></td><td><?php echo $cos_name;?></td>
	</tr>
	<tr>
    <td><b>Mobile No.: </b></td><td><?php echo $cos_mob;?></td>
	</tr>
	<tr>
    <td><b>Address: </b></td><td><?php echo $cos_address;?></td>
	</tr>
	<tr>
    <td><b>worker_type: </b></td><td><?php echo $cos_worker_type;?></td>
   </tr>
   </table>
   <table style="width:939px;">
   <tr>

   <th align="center">Works</th>
   <th align="center">Descripation</th> 
   <th align="center">Work assign to</th>
   <th align="center">Price</th>

   
   <th>Add</th>
   </tr>
  <tr>
  <form method="post" action="addin_costumer.php?cos_id=<?php echo $cos_id; ?>" enctype="multipart/form-data">
  <td><input type="text" name="work" /></td>
  <td><input type="text" name="pro_desc" /></td>
  <td><input type="text" name="assignto" /></td>
  <td><input type="text" name="pro_price" /></td>
  <td><input type="submit" name="insert" value="Add" /></td>
  </form>
  </tr>
 
	
  </table>
  
 <div align="center">-------------------- </div>
  
			<table style="width:939px;">
			<tr>
			<th align="center" style="width:50px;">Sr No.</th>
            <th align="center" style="width:100px;">Work</th>
			<th align="center" style="width:90px;">Assign to</th>
			<th align="center" style="width:150px;">Descripation</th>
			<th align="center" style="width:180px;">Date</th>
			<th align="center" style="width:50px;">Price</th>
			<th align="center" style="width:50px;">paid amount</th>
			<th align="center" style="width:110px;">Modify</th>
			</tr>
 
			
<?php
 
      $p_user = $_GET['cos_id'];

       $i=0;
		$get_costumers="select*from entery WHERE cos_id='$p_user' order by 1 DESC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers)){
			
			
			$en_id = $row_costumers['entery_id'];
			$work = $row_costumers['work'];
			$assign_to = $row_costumers['assign_to'];
			$cos_desc = $row_costumers['wr_desc'];
			$amount = $row_costumers['price'];
			$paid_amount = $row_costumers['paid_amount'];
			$date = $row_costumers['date'];
			$i++;
			
			if($amount=='0'){
				$u_status="<img src='images/paid.png' width='40'height='20'>";
			}
			
			  else{
				 $u_status="<img src='images/due.png' width='40'height='20'>";
			      }
			
			
	     ?> 

			<tr>
			<td align="center" ><?php echo $i; ?></td>
            <td align="center" ><?php echo $work; ?></td>
            <td align="center" ><?php echo $assign_to; ?></td>
			<td align="center" ><?php echo $cos_desc; ?> </td>
			<td align="center" ><?php echo $date; ?></td>
			<td align="center" ><?php echo $amount; ?></td>
			<td align="center" ><?php echo $paid_amount; ?></td>

			<td align="center" >
			<a href="view_work.php?en_id=<?php echo $en_id; ?>"><img src="images/view.png"width="20"height="20"></a>&nbsp;
			<a href="edit_work.php?en_id=<?php echo $en_id; ?>"><img src="images/edit.png"width="20"height="20"></a>&nbsp;
			<a href="delete_work.php?en_id=<?php echo $en_id; ?>"><img src="images/delete.png" width="20"height="20"></a></td>
			</tr>
			
			
			
		<?php } ?>
		<tr>
		<?php
		
		$user=$_GET['cos_id'];
		
         $total=0;
			$pro_price="select*from entery WHERE cos_id='$user'";
			$run_pro_price=mysqli_query($con,$pro_price);
			
            
			while($p_price=mysqli_fetch_array($run_pro_price)){
			$amount=array($p_price['price']);
			$values=array_sum($amount);
			$total +=$values;
			}

		?>
		<td colspan="4" align="center" style="font-size:20px;"><b> SUB TOTAL </b></td><td colspan="2" align="center" style="font-size:20px;"><b> <?php echo $total ?> </b></td>
		</tr>

      </table>
  
  
   </div>



  </div>
  <div class="right_content">
    <ul>
	   <li><a href="index.php">Dashboard</a></li>
       <li><a href="all_costumer.php">All Customer</a></li>
       <li><a href="add_pro.php">Add Product</a></li>
       <li><a href="#contact">Contact</a></li>
       <li><a href="#about">About</a></li>
    </ul>
  
  </div>
  <div class="footer"><div align="center" class="footer_text">&copy: copyright 2018 by ourkarigar</div></div>
  
 
 
 
 </body>
</html>

<?php 
if(isset($_POST['insert'])){

$work = $_POST['work'];
$assignto = $_POST['assignto'];
$pr_desc = $_POST['pro_desc'];
$price = $_POST['pro_price'];
$paid_amount = 00;


	   if($work=='' OR $pr_desc=='' OR $price=='' )
			  {
		      echo"<script>alert('please fill all the fields !')</script>";
		      exit();
		      }
	  
	        else{


 $insert_costumer="insert into entery (cos_id,date,work,wr_desc,price,paid_amount,assign_to)values('$cos_id',NOW(),'$work','$pr_desc','$price','$paid_amount','$assignto') ";

	  $run_costumer = mysqli_query($con, $insert_costumer);
	  if($run_costumer){
		  
		  echo"
		  <script>alert('costumer inserted successfully');</script>";
	 // header("Location:index.php");
		  
	     }

       }
   }

?>




