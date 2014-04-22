<?php
include_once("dbconnection.php");
if(!isset($_SESSION['user_id'])){
header('Location:index.php');
}

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
								<span style="margin-top:1%; "><?php  include_once 'picsave.php';?></span>
								</div>
					
						</div>
						<div id="information" style="margin-top:-10%;">
							<h3 id="info">Information<a href='editusinfo.php?w=150'style='margin-left:25%;'>Edit</a></h3><?php require'showuserinfo.php';?>
						</div>
					</div>
					<div id="right2">

							
						<div id='update'>
						<span id='updatestatus'>Update Status</span>
						<form name="dispatches" action="postdispach.php" method="post">
						<textarea rows="3" cols="20"  placeholder="What's on your mind......"name="dispatch" required></textarea>
						
						<br></br><input id="postbtn" type="submit" value="Post"></input></form>
						<hr>
						</div>
						
						<div id="rest">
							
							
						
								<?php
								require_once 'dbconnection.php';
								$query="SELECT * FROM SOCIAL";
								$result=mysql_query($query);
								while($fetch=mysql_fetch_array($result)){
								$Name=$fetch['Fname'].$fetch['Lname'];
									echo "<div style='margin-left:60px;'><a href='otherprofile.php?m=".$fetch['User_Id']."'>
									<img src='upload/".$fetch['Image']."' height='90' width='90'>
									</div><p><div style='margin-left:164px;margin-top:-30px;'><strong>".$Name.":  </strong></a></div>";
									}
									?>
								</div>
					</div>
					<div id="right1">
					</div>
									
				</div><!--End main content-->
			</div><!--End wrapper-->
		</body>
</html>
<?php
if(isset($_GET['remarks']))
{
if($_GET['remarks']=='unsuccess1')
{
echo "<script>alert('You have already liked this post..')</script>";
}
if($_GET['remarks']=='unsuccess2')
{
echo "<script>alert('Only liked posts can be unliked..')</script>";
}
}
?>						
