<?php
$host="localhost";
#$username="id7104505_root";
$username="root";
$password="";
$dbname="contact";
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
#$state=$_POST['st'];
$worker=$_POST['oc'];

#========================Q U E R Y======================================//
$sql="insert into booking (fname,email,date,address,mobile,worker) values ('$fname','$email','$date','$address','$mobile','$worker')";

$to=("karigarpvtltd@gmail.com");
$subject="your customer requested for '$worker'"  ;
$message= "ref. no. is 2019OK$last_id\n\nCostumer name:-'$fname'\nrequested for '$worker'\n\nCustomer Address:- '$address'.\n\nCustomer mobile number '$mobile'.\n\nCustomer eamil '$email'";
$headers ="From:Booking request<contact-us@ourkarigar.com>";



if($conn->query($sql)===TRUE)
{
     $last_id = $conn->insert_id;
     
#//=============================E-MAIL SENDING FUNCTION==============//


  if(mail($to,$subject,$message,$headers))
  
{
    
$to=$email;
$subject="Thanks for Booking '$worker'"  ;
$message= "Your ref. booking no. is 2019OK$last_id\n.
\nDownload our app:https://drive.google.com/file/d/1rfD6vh-cQ0I8KVf_prGMRVe2rib9WwnR/view?usp=sharing
\nAny Query you can ask on whatsapp click here https://wa.me/917000636149
\nThanks visit our website WWW.OURKARIGAR.COM
\nFor know new offers.
\nFollow on instagram :- https://www.instagram.com/ourkarigar31/
\nFacebook page:- facebook.com/ourkarigar
\nTo know how we work watch on
\nYouTube :- https://www.youtube.com/channel/UCjZkzI_be3XBlM24Cn1qWJA";
 $headers ="From:www.ourkarigar.com<contact-us@ourkarigar.com>";


  if(mail($to,$subject,$message,$headers))
{    
echo '<script type="text/javascript">alert("Thanks for Booked the worker, Your ref. booking no. is send your mail. \n Please check your mail\n our team contact you very soon.");window.location=\'index.html\';</script>';
}
else{
}    
echo '<script type="text/javascript">alert("Thanks for Booked the worker.\n our team contact you very soon.");window.location=\'index.html\';</script>';
}
else
{
    
echo '<script type="text/javascript">alert("Your request is not booked please try again");window.location=\'index.html\';</script>';
}
	 
}
else{
	echo "Error:" .$sql . " <br>" . $conn->error;
}

$conn->close();
?>
