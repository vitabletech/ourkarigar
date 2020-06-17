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


		$fname=$_POST['fname'];
		$mob=$_POST['mobile'];
		$email=$_POST['email'];
		$mess=$_POST['subject'];
		
#//=============================E-MAIL SENDING FUNCTION==============//
$to=$email;
$subject="Thanks for contact us";
$message= "Thanks for being awesome!
We have received your message and would like to thank you for writing to us.
If your inquiry is urgent, please use the telephone number (7000636149) to talk to one of our staff members. Otherwise, we will reply by email as soon as possible.
Talk to you soon,

Signature:- [KARIGAR PVT.LTD COMPANY]";
$headers ="From: ourKarigar PVT. LTD COMPANY<contact-us@ourkarigar.com>";

#========================Q U E R Y======================================//

 $sql="insert into contacts (fname,mobile,email,message) values ('$fname','$mob','$email','$mess')";

if($conn->query($sql)===TRUE)
{
  if(mail($to,$subject,$message,$headers))
{$to="contact-us@ourkarigar.com";
$subject="Someone try to to contact you ";
$message= "CoustomerName:-  $fname\nMobile number:-$mob\nEmail:-$email\nMessage:-$mess";

    
	echo '<script type="text/javascript">';
	 echo'window.location.href="thankyoucontact.html"';
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
