<?php
$host="localhost";
$username="id7104505_msrajawat";
$password="12345";
$dbname="id7104505_worker";

//create a connection
$conn = new mysqli($host,$username,$password,$dbname);
//cheak connection
if($conn->connect_error){
	die("could not connect......." . $conn->connect_error);
}
#echo "connected.....";

$file_name=$_FILES["cp"]["name"];

$temp_name=$_FILES["cp"]["tmp_name"];

$target_path="costumer_images/".$file_name;
//echo $target_path;
   move_uploaded_file($temp_name,$target_path);



$fname=$_POST['fn'];
$mobile=$_POST['mob'];
$email=$_POST['email'];
$date=$_POST['dob'];
$gender=$_POST['cg'];
$address=$_POST['add'];
$wtype=$_POST['oc'];
$pas=$_POST['pass'];
$cpass=$_POST['cpass'];

#//=============================E-MAIL SENDING FUNCTION==============//
$to=$email;
$subject="Conformation mail";
$message= "Thanks for registration....."." How can i help you..?";
$headers ="From: MAJDOOR PVT.LTD COMPANY<msrajawat300@gmail.com>";

#========================Q U E R Y======================================//
$sql="insert into demo (fname,email,pass,date,gender,address,type,mobile,cpass,image) values ('$fname','$email','$pas','$date','$gender','$address','$wtype','$mobile','$cpass','$target_path')";

if($conn->query($sql)===TRUE)
{
  if(mail($to,$subject,$message,$headers))
{
	echo '<script type="text/javascript">';
	 echo'window.location.href="thankyou.html"';
	 echo '</script>';
}
else
{echo '<script type="text/javascript">';
	 echo'window.location.href="error.html"';
	 echo '</script>';
}
	 
}
else{
	echo "Error:" .$sql . " <br>" . $conn->error;
}

$conn->close();
?>

