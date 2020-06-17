<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title lang="en-US" lang="en-IN">MAJDOOR PVT.LTD</title>
		 <link rel="icon" href="logo/mainLogo.ico" type="image/x-icon">
		 
		
		
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/patros.css" >

	
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #5922D8;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #FF0000;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #fefbd8;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color:#92a8d1;
    padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>

<body>
<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			<img src="images/mainLogo.jpg" class="mainLogo" width="50%" alt="MAJDOOR">
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
			
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu" style="font-family:OpenSans-CondBold;">
						<li class="active"><a href="index.html">Home</a></li>
					
						<li>	<a href="How.html">How we work..?</a></li>  
						<li><a href="#rate.html">Rate Card</a></li> 
						<li><a href="product.php">My shop</a></li> 
						<li><a href="services.html">Services</a></li>	<li><a href="career.php">CAREER</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">contact us</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    
  </div>
  <div class="row">
    <div class="column">
      <div id="map" style="width:100%;height:500px"></div>
    </div>
    <div class="column">
      <form action="conn.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name.." required>
        <label for="email">EMAIL</label>
        <input type="text" id="email" name="email" placeholder="type your mail id....." required>
       
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject"  placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<script>

// Initialize google maps
function myMap() {
  var myCenter = new google.maps.LatLng(22.97342,78.65689);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
			
			<footer id="footer">
			
			
				
				<div><b>Contact:</b> <br>
        
        <b><u>MAJDOOR PVT.LTD COMPANY</u> </b><br>
        
        GUDA GUDI KA NAKA NADRIYA KI MATA ROAD PIPARI LASHKAR<br>
	    Gwalior(M.P.), India- 474001<br> 
        Mobile number :- 7000636149
        Email- msrajawat300@gmail.com<br></div>
						<div class="pul"><i style="color: silver;"><b>Developed By: - </b><a href="#team.html" >Our Web Development Team</a>						</div>

				</div>
				
			
			
		</footer>
</body>
</html>
 