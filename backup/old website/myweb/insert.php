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
$email=$_POST['email'];
$date=$_POST['dob'];
$address=$_POST['add'];
$state=$_POST['st'];
$cpass=$_POST['cpass'];
$worker=$_POST['oc'];

#========================Q U E R Y======================================//
$sql="insert into booking (fname,email,date,address,state,mobile,worker) values ('$fname','$email','$date','$address','$state','$mobile','$worker')";




if($conn->query($sql)===TRUE)
{
     $last_id = $conn->insert_id;
   #echo "New record created successfully. Last inserted ID is: " . $last_id;
#//=============================E-MAIL SENDING FUNCTION==============//
$to=$email;
$subject="Confirmation mail your are requested for '$worker'"  ;
$message= "Thanks for booking your ref. booking no. is 2018OW$last_id'\n\nOur supervisor contact you very soon..\n\n If you urgent need help us to contact on 7000636149 also avilable on whatsapp.";
$headers ="From: KARIGAR PVT.LTD COMPANY<contact-us@ourkarigar.com>";
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
