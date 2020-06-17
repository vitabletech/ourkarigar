<?php
$conn = mysqli_connect("localhost", "id7104505_root", "12345","id7104505_contact");
      if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
    
    
    
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
  #    echo   $myusername;
   #  echo  $mypassword;
    
       $result=mysqli_query($conn,"select * from demo WHERE mobile = '$myusername' and pass = '$mypassword'");
if($ans=mysqli_fetch_array($result))
	{
	 echo '<script type="text/javascript">';
	 echo'window.location.href="#workers.php"';
	 echo '</script>';
	}
	else
	{
	 echo '<script type="text/javascript">';
	 echo'window.location.href="login error.html"';
	 echo '</script>';
	    
	}





     
?>