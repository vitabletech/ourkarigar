
<!DOCTYPE html>
<!-- saved from url=(0046)https://www.ourkarigar.com/privacy&policy.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>worker details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
<body id="example1">
        <a href="welcome.php">
            <img width="60" height="50" alt="Back to home"  src="logo/logo.png">
          </a>
<marquee behavior="alternate" scrollamount="10"><h1>THIS SITE IS UNDER-CONSTRUCTION</h1></marquee>
<center>
<a href="welcome.php">
<button class="dropbtn">TOTAL BOOKING
</button></a>

<a href="message.php">
<button class="dropbtn">MESSAGES
</button></a></center>
<?php
session_start();

if(isset($_SESSION['uname'])){
require('db.php');

								
       $result=mysqli_query($conn,"select * from worker");

	echo "<table border=0 align=center>";
            echo "<tr>";
                echo "<td><h1>REGISTERED WORKER LIST</h1></td>";
            echo "</tr>";
        echo "</table>";

 	echo "<table border=1 align=center>";
           
            echo "<tr color=blue>";
                echo "<th><FONT COLOR=blue SIZE=3>USER_ID</font></th>";
                echo "<th><FONT COLOR=red SIZE=3>WORKER TYPE</font></th>";
				echo "<th><FONT COLOR=green SIZE=3>WORKER NAME</font></th>";
                echo "<th><FONT COLOR=vilote SIZE=3>WORKER FATHER NAME</font></th>";
		 echo "<th><FONT COLOR=yellow SIZE=3>ADDRESS</font></th>";
 		echo "<th><FONT COLOR=yellow SIZE=3>MOBILE</font></th>";
 		echo "<th><FONT COLOR=yellow SIZE=3>id_prove</font></th>";
 		echo "<th><FONT COLOR=yellow SIZE=3>PHOTO</font></th>";
            echo "</tr>";
	while($ans=mysqli_fetch_array($result))
	{
	    echo "<tr>";
          	 	echo "<td>" .  $ans['username']."</td>";
			echo "<td>" . $ans['type']."</td>";
			echo "<td>". $ans['wname']."</td>";
			echo "<td>" .  $ans['fname']."</td>";
			echo "<td>" .  $ans['address']."</td>";
			echo "<td>" .  $ans['mobile']."</td>";
			echo "<td><a href='$ans[ID]'>".$ans['ID']."/></a></td>";
			echo "<td><a href='$ans[image]'> <img src='".$ans['image']."' width=150 height=100/></a></td>";

	    echo "</tr>";
	}
	echo "</table>";


}

else{
	echo "<script>location.href='login.php'</script>";
}	
	
	
	

?>
</body>
</html>
