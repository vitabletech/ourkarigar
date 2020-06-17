<?php
$host="localhost";
$username="root";
$password="";
$dbname="contact";
//create a connection
$conn = new mysqli($host,$username,$password,$dbname);
//cheak connection
if($conn->connect_error){
	die("could not connect......." . $conn->connect_error);
}


$uname=$_POST['uname'];

$fname=$_POST['fn'];
$email=$_POST['email'];


#========================Q U E R Y======================================//
$sql="insert into user (username,name,email) values ('$uname','$fname','$email')";


if($conn->query($sql)===TRUE)
{
echo '<script type="text/javascript">alert("Thanks ");window.location=\'index.html\';</script>';
}	
else{
	echo "Error:" .$sql . " <br>" . $conn->error;
}

$conn->close();
?>
