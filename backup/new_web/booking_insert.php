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
$fname=$_POST['fn'];
$mobile=$_POST['mob'];
$email=$_POST['mob1'];
$date=$_POST['dob'];
$address=$_POST['add'];
#$state=$_POST['st'];
$worker=$_POST['oc'];

#========================Q U E R Y======================================//
$sql="insert into booking (fname,alter_mobile,date,address,mobile,worker) values ('$fname','$email','$date','$address','$mobile','$worker')";




if($conn->query($sql)===TRUE)
{
     $last_id = $conn->insert_id;
#//=============================E-MAIL SENDING FUNCTION==============//

$to=("karigarpvtltd@gmail.com");
$subject="your customer requested for '$worker'"  ;
$message= "ref. booking no. is 2018OW$last_id\n\nCostumer name:-'$fname'\t\trequested to you for '$worker'\n\nCustomer Address:- '$address'.\n\nCustomer mobile number '$mobile'.";
$headers ="From: KARIGAR PVT.LTD COMPANY<contact-us@ourkarigar.com>";

  if(mail($to,$subject,$message,$headers))
{	echo '<script type="text/javascript">';
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
