<?php
include_once 'dbconnection.php';
if($_GET['a']==1)
{
$sql="select * from votes where msgid=".$_GET['b']." and userid=".$_SESSION['user_id']."";
$result=mysql_query($sql) or die(mysql_error());
$num=mysql_num_rows($result);
if($num==0)
{
	$sql1="insert into votes values('','".$_SESSION['user_id']."','".$_GET['b']."')";
	$result1=mysql_query($sql1) or die(mysql_error());
	header('Location:home.php');
}
else
{
	header('Location:home.php?y=1');
}
}
if($_GET['a']==2)
{
$sql="select * from votes where msgid=".$_GET['b']." and userid=".$_SESSION['user_id']."";
$result=mysql_query($sql) or die(mysql_error());
$num=mysql_num_rows($result);
if($num==0)
{
	header('Location:home.php?y=2');
}	
else
{
	$sql2="DELETE FROM votes where msgid='".$_GET['b']."' and userid='".$_SESSION['user_id']."'";
	$result2=mysql_query($sql2);
	header('Location:home.php');
}
}
?>
