<?php

require('db.php');

session_start();
if(isset($_SESSION['uname'])){
	echo "<script>location.href='worker_list.php'</script>";
}

else{
	   $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
       $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
       $result=mysqli_query($conn,"select * from admin WHERE mobile = '$myusername' and Password = '$mypassword'");
	   $records = mysqli_num_rows($result);
	   $row = mysqli_fetch_array($result);
       if ($records==0)
{
echo '<script type="text/javascript">
alert("Wrong Username or Password please try again ");
window.location=\'login.php\';</script>';
}

else
{
	
		$_SESSION['myusername']=$uname;
		echo "<script>location.href='worker_list.php'</script>";
#header("location:worker_list.php");
}
} 
mysql_close($con);

    
?>