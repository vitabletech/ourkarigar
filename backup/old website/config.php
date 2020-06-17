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
echo "connected.....";

?>