 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="" />
<title>BOOKING DETAILS</title>

<style>
#example1 {
     background-color:orange;
   background-repeat: no-repeat;
    background-size: 100%,100%;
}
.dropbtn {
    background-color: #25C7D9;
    color: black;
    padding: 8px;
    font-size: 18px;
    border: none;
}

.btn {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 2px 5px;
    cursor: pointer;
    font-size: 15px;
}

</style>
</head>

<body bgcolor="orange">
 <a href="logout.php">
<button class="dropbtn">logout
</button></a>

<marquee behavior="alternate" scrollamount="10"><h1>THIS SITE IS UNDER-CONSTRUCTION</h1></marquee>
<center>
<a href="worker_list.php">
<button class="dropbtn">TOTAL WORKERS
</button></a>

<a href="message.php">
<button class="dropbtn">MESSAGES
</button></a></center>
<?php
session_start();

if(isset($_SESSION['uname'])){
	require('db.php');

       $result=mysqli_query($conn,"select * from booking");

	echo "<table border=0 align=center>";
            echo "<tr>";
                echo "<td><FONT COLOR=BLUE SIZE=5>TOTAL BOOKING LIST</FONT></td>";
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

}

else{	

$host="localhost";
#$username="id7104505_root";
$username="root";

$password="";
$dbname="admin";
//create a connection
$conn = new mysqli($host,$username,$password,$dbname);
//cheak connection
if($conn->connect_error){
	die("could not connect......." . $conn->connect_error);
}
	   $uname = $_POST['uname'];
       $mypassword =$_POST['psw']; 
       $result=mysqli_query($conn,"select * from admin WHERE mobile = '$uname' and Password = '$mypassword'");
	   $records = mysqli_num_rows($result);
	   $row = mysqli_fetch_array($result);
       if ($records==1)
	   {
		$_SESSION['uname']=$uname;
		echo "<script>location.href='welcome.php'</script>";
	}

	else{
		echo "<script>alert('access-denied!')</script>";
		echo "<script>location.href='login.php'</script>";
	}
	
}	
?>
</body>
</html>