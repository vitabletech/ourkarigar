<?php
$to="amanbaj1230@gmail.com";
$subject="Test mail";
$message= "this email is from mayank singh";
$headers ="From: Mayank singh<msrajawat300@gmail.com>";

if(mail($to,$subject,$message,$headers))
{
	echo "thanks for sending.......";
}
else
{
echo "please tru";
}
