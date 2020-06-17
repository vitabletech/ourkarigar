

	
		
		
		
			
<div id="container">
	<div class="shell">
		
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h1 class="left">Product Edit</h1>
						<div class="right">
							<label>search articles</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					<!-- End Box Head -->	








					<div class="table">
                    <form method="post"  enctype="multipart/form-data">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">     
			
 				 			<tr>
    							<td colspan="2">   <strong class="heading">Edit Product</strong></td>
  							</tr>
 				 			<tr>
   				 				<td width="280">Product name:</td>
    							<td width="858"><input type="text" name="textname" value="<?php echo $pro_name ?>" /></td>
  							</tr>
  							 <tr>
    						<td>product catagore:</td>
    						<td><label for="select"></label>
      						<select name="textcategory">
      						<option>Select a category</option>
      							<?php
	  
	 								echo  $cat="select * from  tbl_categories";
	 								 $run_cat = mysqli_query($con,$cat);
	  								 while($cat_rows = mysqli_fetch_array($run_cat))
	  										{
		  										$cat_id= $cat_rows['cat_id'];
										 echo   $cat_name= $cat_rows['cat_name'];
		  										if( $pro_cat == $cat_id)
		  								 			echo   "<option selected value='".$cat_id."'>".$cat_name."</option>";
		  										else
		  		  									echo "<option  value='".$cat_id."'>".$cat_name."</option>";

	  										}
	  							?>
    						</select></td>
  						</tr>
 						<tr>
    						<td><p>product image:</p></td>
    						<td><img src="photo/<?php echo $photo; ?>" height="50" width="50"><input type="file" name="textimg" value="<?php echo $photo ?>" /></td>
  						</tr>
  						<tr>
    						<td><p>product price:</p></td>
    						<td><input type="text" name="textprice" value="<?php echo $pro_price ?>" /></td>
  						</tr>
  						<tr>
    						<td>product status:</td>
    						<td width="858"><input type="radio" name="rdstatus" id="radio" value="available" <?php if($pro_status == "available"){ echo "checked=checked";}?> />
   						    <label for="radio">available</label></td>
    						<td width="66"><input type="radio" name="rdstatus" id="radio2" value="unavailable"  <?php if($pro_status == "unavailable"){ echo "checked=checked";}?>  />
   						    <label for="radio2">unavailable</label></td>
  						</tr>
  						<tr>
    						<td><input type="submit" name="btnedit"  value="edit" /></td>
  						</tr>
					</table>
				</form>
                        </div>
					
                    
                    
                    
                    
                    
                    
				</div>
				<!-- End Box -->
				
				

			</div>
			<!-- End Content -->
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
      </div>
     <div>
		<!-- Main -->
	
