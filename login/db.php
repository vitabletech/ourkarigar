<?php
$host="localhost";
#$username="id7104505_root";
$username="root";

$password="";
$dbname="myweb";
//create a connection
$conn = new mysqli($host,$username,$password,$dbname);
//cheak connection
if($conn->connect_error){
	die("could not connect......." . $conn->connect_error);
}
		 ?>