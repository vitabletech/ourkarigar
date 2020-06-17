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
	   $records = mysqli_num_rows($result);
	   $row = mysqli_fetch_array($result);
       if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'index.php\';</script>';
}
else
{
header("location:index.html");
} 
mysql_close($con);
}






     
?>