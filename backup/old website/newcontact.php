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
/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}


.dropbtn {
    background-color: #651FF0;
    color: white;
    padding: 8px;
    font-size: 15px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 90px;
    box-shadow:#FFFFFF;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #FFFFFF;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

	
</head>
	

	<body>
	

		
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			
			<img src="images/mainLogo.jpg" class="mainLogo" width="50%" alt="KARIGAR">
			
				
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
									<div class="dropdown">
						<button class="dropbtn">Login 
						<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
						<a href="login.php">Customer Login</a>
						<a href="#">Workers Login</a>
					</div>
				</div> 
						<div class="dropdown">
						<button class="dropbtn">Registration 
						<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
						<a href="register.php">Costumer Registration</a>
						<a href="workers_register.html">Workers Registration</a>
					</div>
				</div> 
				
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="product.php">OUR PRODUCT</a></li>
						<li><a href="career.php">CAREER</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">contact us</a></li>
					</ul>
				</div>
			</div>
		</nav>
		

<section>
  <nav>
    We daily work on improving our services,that's why if you experience any problems or notice any mistakes in the work of ....PVT.LTD. report a problem to our customer support service.
Our team constantly strive to achieve exceptional user experience that's why YOUR FEEDBACK IS VERY VALUEABLE TO US.
  </nav>
  
  <article>
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
</div> </article>
</section>


</body>
</html>
