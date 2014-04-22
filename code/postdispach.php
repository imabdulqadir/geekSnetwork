<?php
include("dbconnection.php");

$user_id = $_SESSION['user_id'];
$user_name=$_SESSION['Fname']." ".$_SESSION['Lname'];
$image=$_SESSION['propic'];

$text = mysql_real_escape_string($_POST['dispatch']); //fix to make sure query is not messed up
$content=nl2br($text);
if(isset($_GET['recipient']))
{
	//The user is posting on another's wall
	$recipient = intval($_GET['recipient']);
	$sql = "INSERT into messages(User_Id,recipientid,content) values('$user_id','$recipient','$content')";	
	$result=mysql_query($sql) or die("Unable to insert your posting to $recipient into db");
	header("location: home.php");
}
else
{
	//This means the user is posting a status
	$recipient = intval($_GET['user_id']);
	$sql = "INSERT into messages(User_Id,content,Name,Image) values('$user_id','$content','$user_name','$image')";	
	$result=mysql_query($sql) or die("Unable to insert your status into db");
	header("location: home.php");
}

?>
