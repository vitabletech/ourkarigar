<?php
	
	$host		=	"localhost";
	$username	=	"root";
	$password	=	"";
	$db			=	"db_online_shop";

	$shipping_cost      = 1.50; //shipping cost
	$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );

	
	$con = mysqli_connect($host,$username,$password,$db) 
	or 
	die("Error");
?>
