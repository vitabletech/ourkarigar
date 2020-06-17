<?php
$host="localhost";
$username="id7104505_root";
$password="12345";
$dbname="id7104505_contact";

//create a connection
$conn = new mysqli($host,$username,$password,$dbname);
//cheak connection
if($conn->connect_error){
	die("could not connect......." . $conn->connect_error);
}
#echo "connected.....";

$file_name=$_FILES["cp"]["name"];

$temp_name=$_FILES["cp"]["tmp_name"];

$target_path="user_images/".$file_name;
//echo $target_path;
   move_uploaded_file($temp_name,$target_path);



$fname=$_POST['fn'];
$mobile=$_POST['mob'];
$email=$_POST['email'];
$date=$_POST['dob'];
$gender=$_POST['cg'];
$address=$_POST['add'];
$pas=$_POST['pass'];
$cpass=$_POST['cpass'];

#//=============================E-MAIL SENDING FUNCTION==============//
$to=$email;
$subject="Conformation mail";
$message= "Thanks for registration.\n\n If you have any need for any work then contact with us.\n\n Now we are also avilable on whatsapp 7000636149.";
$headers ="From: Karigar PVT.LTD COMPANY<contact-us@ourkarigar.com>";

#========================Q U E R Y======================================//
$sql="insert into user (fname,email,pass,date,gender,address,mobile,cpass,image) values ('$fname','$email','$pas','$date','$gender','$address','$mobile','$cpass','$target_path')";

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

