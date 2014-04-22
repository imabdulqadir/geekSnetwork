<?php
require_once 'dbconnection.php';
$postid=$_GET['n'];
$msgrid=$_GET['m'];
$cmnt=mysql_real_escape_string($_POST['cmnt']);
$userid=$_SESSION['user_id'];
$sql="INSERT INTO comment values('','$postid','$cmnt','$userid','$msgrid')";
mysql_query($sql);
header("Location:home.php");
?>
