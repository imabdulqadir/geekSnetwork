<!--
require 'dbconnection.php';
	if(isset($_REQUEST['submit'])){
		$Fname=$_REQUEST['fname'];
		$Lname=$_REQUEST['lname'];
		$Password=generateHash($_REQUEST['pwd']);
		$Repassword=generateHash($_REQUEST['repwd']);
		$Mobile=$_REQUEST['mo'];
		$Email_Id=$_REQUEST['email'];
		
		$newdate=new DateTime($date);
		$DOB=date_format($newdate,'Y-m-d');
		$gender=$_POST['gender'];
		$pic='default.gif';
		$check=mysql_query("SELECT Email_Id FROM SOCIAL WHERE Email_Id='$Email_Id'");
		$value=mysql_num_rows($check);
		if($value>0){
		header("location: index.php?remarks=unsuccess");
		}
		else
		{
		$sql="INSERT INTO SOCIAL VALUES('','$Fname', '$Lname', '$Password', '$Repassword', '$Mobile', '$Email_Id', '$DOB','$gender','$pic','')";
		mysql_query($sql) or die (mysql_error());
		header("location: index.php?remarks=success");
	}}
	-->
<?php
require 'dbconnection.php';
	if(isset($_REQUEST['submit1'])){
		$Fname=$_SESSION['fname'];
		$Lname=$_SESSION['lname'];
		$Password=$_SESSION['pwd'];
		$Repassword=$_SESSION['repwd'];
		$Mobile=$_SESSION['mo'];
		$Email_Id=$_SESSION['email'];
		$question=$_REQUEST['question'];
		$ans=$_REQUEST['ans'];
		$DOB=$_SESSION['dob'];
		$gender=$_SESSION['gender'];
		$pic='default.gif';
		$check=mysql_query("SELECT Email_Id FROM SOCIAL WHERE Email_Id='$Email_Id'");
		$value=mysql_num_rows($check);
		if($value>0){
		header("location: index.php?remarks=unsuccess");
		}
		else
		{
		$sql="INSERT INTO SOCIAL VALUES('','$Fname', '$Lname', '$Password', '$Repassword', '$Mobile', '$Email_Id', '$DOB','$gender','$pic','','$question','$ans')";
		mysql_query($sql) or die (mysql_error());
		header("location: index.php?remarks=success");
	}}
	?>


