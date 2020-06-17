 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="" />
<title>BOOKING DETAILS</title>
</head>

<body bgcolor="orange">
  <a href="worker_list.php">
            <img width="60" height="50" alt="Back to home"  src="logo/logo.png">
          </a>
<marquee behavior="alternate" scrollamount="10"><h1>THIS SITE IS UNDER-CONSTRUCTION</h1></marquee>







<?php
require('db.php');
       $result=mysqli_query($conn,"select * from booking");

	echo "<table border=0 align=center>";
            echo "<tr>";
                echo "<td><FONT COLOR=RED SIZE=5>TOTATL BOOKING LIST</FONT></td>";
            echo "</tr>";
        echo "</table>";







        
 	echo "<table border=1 align=center>";
           
			echo "<tr>";
            echo "<th>BOOKING ID</th>";
            echo "<th>DATE OF BOOKING</th>";
			echo "<th>COSTUMER NAME</th>";
			echo "<th>WORKER REQUEST</th>";
            echo "<th>MOBILE NO.</th>";
		    echo "<th>ALTERNATE MOBILE NO.</th>";
			echo "<th>ADDRESS</th>";
            
           echo "</tr>";
	while($ans=mysqli_fetch_array($result))
	{
	    echo "<tr>";
          	 	echo "<td>" .'2018OW' .$ans['id']."</td>";
			    echo "<td>" . $ans['date']."</td>";
				echo "<td>" . $ans['fname']."</td>";
				echo "<td>" . $ans['worker']."</td>";
				echo "<td>" . $ans['mobile']."</td>";
				echo "<td>" . $ans['alter_mobile']."</td>";
				echo "<td>" . $ans['address']."</td>";
	
			
	    echo "</tr>";
	}
	echo "</table>";





?>
</body>
</html>
