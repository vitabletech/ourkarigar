<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dummy Form</title>
</head>

<body>

<?php
	


											

 $conn = mysqli_connect("localhost", "root", "","computerville");
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
       $result=mysqli_query($conn,"select * from student_info");

	echo "<table border=0 align=center>";
            echo "<tr>";
                echo "<td><FONT COLOR=RED SIZE=5>REGISTERED STUDENTS LIST</FONT></td>";
            echo "</tr>";
        echo "</table>";







        
 	echo "<table border=1 align=center>";
           
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>SCHOOL NAME</th>";
                echo "<th>STUDENT NAME</th>";
                echo "<th>FATHER NAME</th>";
		echo "<th>MOTHER NAME</th>";
		echo "<th>CLASS</th>";
		 echo "<th>ADDRESS</th>";
 		echo "<th>STATE</th>";
 		echo "<th>CITY</th>";
 		echo "<th>MOBILE</th>";
 		echo "<th>PHONE</th>";
 		echo "<th>WHATSAPP</th>";
 		echo "<th>FATHER MOBILE</th>";
 		echo "<th>EMAIL</th>";
 		echo "<th>PHOTO</th>";
            echo "</tr>";
	while($ans=mysqli_fetch_array($result))
	{
	    echo "<tr>";
          	 	echo "<td>" .  $ans['id']."</td>";
			echo "<td>" . $ans['school_name']."</td>";
			echo "<td>" . $ans['student_name']."</td>";
			echo "<td>" .  $ans['father_name']."</td>";
			echo "<td>" .  $ans['mother_name']."</td>";
			echo "<td>" .  $ans['class']."</td>";
			echo "<td>" .  $ans['address']."</td>";
			echo "<td>" .  $ans['state']."</td>";
			echo "<td>" .  $ans['city']."</td>";
			echo "<td>" .  $ans['mobile']."</td>";
			echo "<td>" .  $ans['phone']."</td>";
			echo "<td>" .  $ans['whatsapp']."</td>";
			echo "<td>" .  $ans['father_mobile']."</td>";
			echo "<td>" .  $ans['email']."</td>";
			echo "<td><img src='". $ans['photo']."' width=200 height=200/></td>";

	    echo "</tr>";
	}
	echo "</table>";





?>
</body>
</html>
