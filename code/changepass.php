<?php
require 'dbconnection.php';
$user_id= $_SESSION['user_id'];
?>

<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.form.js"></script>
		<script type="text/javascript" >$(document).ready(function(){$('#photoimg').live('change', function(){ 
			    $("#preview").html('');$("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
				$("#imageform").ajaxForm({target: '#preview'}).submit();});}); 
		</script>
		</head>
		<body>
			<div id="wrapper">
				<?php include ("include/header.php");?>
			<div id="maincontent">
					<div id="left1">
					</div>
					<div id="left2">
						<div id="propic">
							<div id="picdis">
								<span style="margin-top:1%;"><?php include_once 'picsave.php'; ?></span>
								</div>
								
						</div>
						<div id="information" style="margin-top:-10%;">
							<h3 id="info">Information<a href='editusinfo.php?w=150' style='margin-left:25%;'>Edit</a></h3><?php require'showuserinfo.php';?>
						</div>
					</div>
					<div id="right2">
				<?php
				if(isset($_GET['remarks'])){
				$remarks=$_GET['remarks'];
				if ($remarks=='success')
				{
				?>
				<script>alert('Password Changed successfully.')</script>
				<?php
				}
				if ($remarks=='success1')
				{
				?>
				<script>alert('Wrong current password!')</script>
				<?php
				}
				if ($remarks=='success2')
				{
				?>
				<script>alert('New password and Confirm New Password do not match!')</script>
				<?php
				}
				if ($remarks=='success3')
				{
				?>
				<script>alert('New password and Current password are same!')</script>
				<?php
				}
				if($remarks=='success4')
				{
					?>
					<script>alert('Password must contain atleast 8 characters!')</script>
					<?php
				}
				
				}
			?>

						<div id="passchange" style="margin-top:12%;">
							<h2 style="color:white; margin:15px;">CHANGE PASSWORD</h2>
							<form name="ccform" action="changepassprocess.php"  method="post">
							<input id="currpass" type="password" placeholder="Current Password" name="oldpass"><br/>
							<input id="newpass" type="password" placeholder="New Password"name="newpass" maxlength="20"><br/>
							<input id="connewpass"placeholder="Confirm New Password" type="password" name="connewpass" maxlength="20"><br/>
							<input style='color:white; border:1px solid white; background: #426A57;'id="submit" name="submit" type="submit" value="Submit" onClick="return check()">
							</form>
						</div>
					</div>
					<div id="right1">
					</div>			
				</div><!--End main content-->
			</div><!--End wrapper-->
		</body>
</html>
	
