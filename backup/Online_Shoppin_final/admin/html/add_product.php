

	
		
		
		
			
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
						<h1 class="left">Insert Your Products</h1>
						<div class="right">
							<label>search articles</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					<!-- End Box Head -->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    	

					<div class="table">
                    <form method="post" action="" enctype="multipart/form-data">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">  
                        	<tr>
    						<td colspan="3">   <strong class="heading">Add Product</strong></td>
  							</tr>
  							<tr>
    							<td width="333">Product name:</td>
    							<td colspan="2"><label for="textfield"></label>
    							<input type="text" name="textname" /></td>
  							</tr>
  							<tr>
    							<td>product catagore:</td>
    							<td colspan="2"><label for="select"></label>
      							<select name="textcategory">
      							<option>Select a category</option>
     							 <?php
	  
	 									echo  $cat="select * from  tbl_categories";
	  											$run_cat = mysqli_query($con,$cat);
	  									while($cat_rows = mysqli_fetch_array($run_cat))
	  										{
											  $cat_id= $cat_rows['cat_id'];
											  $cat_name= $cat_rows['cat_name'];
											  echo "<option value='".$cat_id."'>".$cat_name."</option>";
	  										}
	  							?>
    							</select></td>
  							</tr>
  							<tr>
    							<td><p>product image:</p></td>
    							<td colspan="2"><label for="fileField"></label>
    							<input type="file" name="textimg" id="fileField" /></td>
  							</tr>
  							<tr>
    							<td><p>product price:</p></td>
    							<td colspan="2"><input type="text" name="textprice" id="textfield3" /></td>
  							</tr>
  							<tr>
    							<td>product status:</td>
    							<td width="120"><input type="radio" name="rdstatus" id="rdstatus" value="available" />
   							    <label for="radio">available</label></td>
    							<td width="751"><input type="radio" name="rdstatus" id="rdstatus" value="unavailable" />
unavailable</td>
  							</tr>
  							<tr>
    							<td><input type="submit" name="submit"  value="Add" /></td>
  							</tr>
						</table>
                        </form>
                        
                        
                        
                        </table>
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
	
