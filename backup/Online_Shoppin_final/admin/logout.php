<?php
session_start();
unset($_SESSION['user']);
header("LOCATION:admin.php");
session_destroy();
?>