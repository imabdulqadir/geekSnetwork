<?php
require 'dbconnection.php';
if(isset($_SESSION['user_id']))
	header('Location:home.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='css/style.css'/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/indexscript.js"></script>
	<script type="text/javascript" src="js/image.js"></script>
	<title>TRANING SOCIAL</title>
</head>
<body>
	<div class='wrapper'>
		<div class='header'>
			<div id="logo" style='margin-left:30px;'> 
			<a style='font-size:50px' href='index.php'>geek<b style='font-size:70px;'>S</b>network</a>
			</div>
				
		</div><!--end  header-->
		<div class='center'>
			<div class='left'><!--start left-->
				<div id="slideshowContainer">
					<div class="slideshow"> 
						<img src="images/im/image1.png" width="600" height="300" /> 
						<img src="images/im/image2.png" width="600" height="300" /> 
						<img src="images/im/image3.png" width="600" height="300" /> 
						<img src="images/im/image4.png" width="600" height="300" /> 
						<img src="images/im/image5.png" width="600" height="300" /> 
					</div>
					<ul id="nav1">
						<li id="prev"><a href="#">Previous</a></li>
						<li id="next"><a href="#">Next</a></li>
					</ul>
				</div>	
			</div><!--end left-->
			<div class='div-register'>
				<h3 class='Newuser1'><span style='font-size:30px;'>About</span> <br/> </h3>
				<p>geekSnetwork is a place to be in touch with your loved ones. This is 
				a small network where people can express themselves, give their opinion 
				on different posts.
				   geekSnetwork is basically designed for any particular organization or 
				college where all the people in the organization or all the students in
				the college can communicate with each other. So to get started 
				<a style='color:black; text-decoration:underline;'href='index.php'>register 
				here</a>.</p>
			</div><!--end right-signup-->
		</div><!--end center-->
		<div id="foo" style='margin-left:50px'><!--footer-->
			<nav>
				<hr>
				<ul>	
					<li><a href="index.php">Home</a></li>
					<li><a href="Aboutus.php">About</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					
				</ul>
			</nav>
			</div>
	</div><!--end wrapper-->
</body>

</html>

