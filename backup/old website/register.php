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

#example1 {
    
    background: url(images/bg-01.jpg);
   background-repeat: no-repeat;
    background-size: 100%,100%;
}
</style>

<body id="example1">	

		
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			
			<img src="images/mainLogo.jpg" alt="KARIGAR" width="95%" height="60" class="mainLogo">
				
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
						<li><a href="services.html">Services</a></li>
						<li><a href="career.php">CAREER</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">contact us</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		

<!--  33Navigation 
    
    <img src="images/android-banner.png" style= "background-size:cover; width:100%; height: auto;" class="ebanner">-->
		
		<section id="register" >
		
		<div class="container">
		<div class="row">
			<div class="text-center">
			<h2>Customer Registration</h2>
			</div>
			
			<div class="main-content">
			<div class="register">
						<form method="post" action="insert.php" enctype="multipart/form-data">
<table>
<tr>
<td><b>First Name:</b></td>
<td><input type='text' name='fn' placeholder='First Name..' required></td>
</tr>
<tr>
<td><b>Last Name:</b></td>
<td><input type='text' name='ln' placeholder='Last Name..' required></td>
</tr>
<tr>
<td><b>Birth Date*:</b></td>
<td><input type='date' name='dob' required></td>
</tr>

<tr>
<td><b>Gender:</b></td>
<td><input type='Radio' name='cg' value='Male' required>Male<input type='Radio' name='cg' value='Female' required>Female</td>
</tr>
<tr>
<tr>
<td><b>MOBILE NO*.:</b></td>
<td><input type='mobile' name='mob' required></td>
</tr>
<td><b>Email*:</b></td>
<td><input type='email' name='email' required></td>
</tr>
<tr>
<td><b>Password*</b></td><td> <input type="password" id='txt1' placeholder='Password' name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
</tr>
<tr>
<td><b>Confirm Password*</b></td><td>
<input type='password' id='txt2' placeholder='Confirm Password'  onkeyup="call();" name="cpass" required> <img src='' id='img'></td>




</tr>

<td><b>City*:</b></td>
<td>
<select name='st' required>
<option>-GWALIOR-</option>

<option value="1">1].Gole ka mandir</option>
<option value="2">2].City Center</option>
<option value="3">3].Gol Pahadiya</option>
<option value="4">4].Railway Station</option>
<option value="5">5].Shinde ki Chhawani</option>
<option value="6">6].Morar</option>
<option value="7">7].Guda gudi ka naka</option>
<option value="8">8].Bahodapur</option>
</select>
</td>
</tr>
<tr>
<td><b>Address:</b></td>
<td><textarea rows='3' cols='25' name='add' required>
</textarea>
</td>
</tr>




<tr>
<td><b>Picture:</b></td>
<td><input type='file' name='cp' required></td>
</tr>



</table>
<br><br>
<input type='submit'>
<input type='reset'>
</form>
</div> 
</div>
</div>
</section>
			
			<footer id="footer">
			<div class="container">
				<div class="row myfooter">
				<div class="text-center height-contact-element">
					
					<ul class="list-unstyled list-inline list-social-icons">
						
						<li>
						<a href="https://www.facebook.com/pg/msrajawat7000/about/" target="blank">
						<i class="fa fa-facebook"></i>
						</a>
						</li>
						<li>
							<a href="https://twitter.com/" target="blank">
						<i class="fa fa-twitter">
						</i>
						</a>
						</li>
						<li>
						<a href="https://plus.google.com/" target="blank">
						<i class="fa fa-google-plus">
						</i>
						</a>
						</li>
						
						<li>
						<a href="https://www.youtube.com" target="blank">
						<i class="fa fa-youtube">
						</i>
						</a>
						</li>
						
						<li>
						<a href="https://www.gmail.com" target="blank">
						<i class="fa fa-email">
						</i>
						</a>
						</li>
					
					</ul>
				</div>
					
					
						<div class="pul"><i style="color: silver;"><b>Developed By</b><a href="team.html" >Our Web Development Team</a>					
				</div>
							
				
				</div>
				
			
			
		</footer>

		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
     	<!-- Portfolio -->
		<script src="js/jquery.quicksand.js"></script>	    
	

		<!--Jquery Smooth Scrolling-->
		<script>
			$(document).ready(function(){
				$('.custom-menu a[href^="#"], .intro-scroller .inner-link').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						'scrollTop': $target.offset().top
					}, 900, 'swing', function () {
						window.location.hash = target;
					});
				});

				$('a.page-scroll').bind('click', function(event) {
					var $anchor = $(this);
					$('html, body').stop().animate({
						scrollTop: $($anchor.attr('href')).offset().top
					}, 1500, 'easeInOutExpo');
					event.preventDefault();
				});

			   $(".nav a").on("click", function(){
					 $(".nav").find(".active").removeClass("active");
					$(this).parent().addClass("active");
				});

				$('body').append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>');
					$(window).scroll(function () {
						if ($(this).scrollTop() != 0) {
							$('#toTop').fadeIn();
						} else {
							$('#toTop').fadeOut();
						}
					}); 
				$('#toTop').click(function(){
					$("html, body").animate({ scrollTop: 0 }, 700);
					return false;
				});

			});

		</script>

	


</script>



</body>
</html>
