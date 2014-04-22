
	<?php
	require 'dbconnection.php';
	if(isset($_POST['email']))
	{	
	$sql=("select Email_Id,question,answer from SOCIAL where Email_Id='".$_POST['email']."'");
	$res=mysql_query($sql);
	$fetch=mysql_fetch_array($res);
	$_SESSION['answer']=$fetch['answer'];
	$_SESSION['question']=$fetch['question'];
	$_SESSION['email']=$_POST['email'];
	if($_SESSION['email']!=$fetch['Email_Id'])
	{
		header("location:resetpass.php?remarks=emailnot");

	}
	else
	{
}
}	
?>
		
<!DOCTYPE HTML>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='css/style.css'/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/indexscript.js"></script>
	<script type="text/javascript" src="js/image.js"></script>
	<script type="text/javascript" src="js/abc.js"></script>
	<link rel="stylesheet" type="text/css" href="1-simple-calendar/tcal.css" />
	<script type="text/javascript" src="1-simple-calendar/tcal.js"></script> 

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
			<div class='div-register1'>
				<?php
				if(isset($_GET['remarks'])){
				$remarks=$_GET['remarks'];
				if ($remarks=='wans')
				{
				?>
				<h1 id="mark5"><?php echo 'Wrong Answer';?></h1>
				<?php
				}}
				?>
			<div id='op'>
				<form id='Registration_form' name="fform" onsubmit="return checkForm(fform)" action="resetpass2.php"  method="POST">
				<div>
					<input type="text" name='ques' placeholder="" value="<? if(isset($_SESSION['question'])) echo $_SESSION['question'];?>" readonly>
				</div>
				<div>
					<input type="text" name='ans' placeholder="enter your answer">
				</div>
				<div>
					<button type="submit" name="submit" id="buttonr"value="Register">Submit</button>
				</div>
				</form>
				</div>
			</div><!--end right--->
		</div><!--end center-->
		<div id="foo" style='margin-left:50px'><!--footer-->
			<nav>
				<hr>
				<ul >	
					<li><a href="index.php">Home</a></li>
					<li><a href="Aboutus.php">About</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					
				</ul>
			</nav>
			</div>
	</div><!--end wrapper-->
</body>

</html>


