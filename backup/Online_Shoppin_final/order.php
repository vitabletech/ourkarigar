<?php
session_start();
include_once("config.php");
/*if (!isset($_SESSION['id']) || $_SESSION['id'] == '')
header('Location:register.php');*/
echo 'data insert';
if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$product_name = $cart_itm["pro_name"];
			$product_qty = $cart_itm["pro_qty"];
			$product_price = $cart_itm["pro_price"];
			$product_code = $cart_itm["pro_id"];
			$mysqli->query("insert into tbl_order (pro_name,pro_qty,pro_price) values('$product_name','$product_qty','$product_price')");
		   
        }
        echo 'data insert';
        /*header('location:index.php');*/
	}
?>