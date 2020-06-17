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

$img="worker_images/".$file_name;
//echo $target_path;
   move_uploaded_file($temp_name,$img);
   
 //===========================================================upload id======================================================//  
$file_name=$_FILES["id"]["name"];

$temp_name=$_FILES["id"]["tmp_name"];

$target_path="ID/".$file_name;
//echo $target_path;
   move_uploaded_file($temp_name,$target_path);



$worker_name=$_POST['name'];
$fname=$_POST['fn'];
$mobile=$_POST['mob'];
$date=$_POST['dob'];
$gender=$_POST['cg'];
$address=$_POST['add'];
$wtype=$_POST['oc'];

#//=============================E-MAIL SENDING FUNCTION==============//
$to="contact-us@ourkarigar.com";
$subject="Conformation mail";
$message= "New worker join your company";
$headers ="From: Karigar PVT.LTD COMPANY<contact-us@ourkarigar.com>";

#========================Q U E R Y======================================//
$sql="insert into worker (wname,fname,date,gender,address,type,mobile,image,ID) values ('$worker_name','$fname','$date','$gender','$address','$wtype','$mobile','$img','$target_path')";


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

