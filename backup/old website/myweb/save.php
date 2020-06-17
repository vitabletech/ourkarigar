<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dummy Form</title>
</head>

<body>

<?php
$file_name=$_FILES["studentimage"]["name"];

$temp_name=$_FILES["studentimage"]["tmp_name"];

$target_path="images/".$file_name;
//echo $target_path;
   move_uploaded_file($temp_name,$target_path);





?>
</body>
</html>
