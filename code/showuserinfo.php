<?php

$user_id= $_SESSION['user_id'];
	$sql="SELECT *FROM SOCIAL WHERE User_Id='$user_id'";
	$rws = mysql_fetch_array(mysql_query($sql));	
	$_SESSION['Fname']=$rws['Fname'];	
	$_SESSION['Lname']=$rws['Lname'];
	$_SESSION['propic']=$rws['Image'];
?>		
    
	<div align="left" style="font-size: 12px; ; font-weight:bold;">Name:</div><span style='color:black'><?php echo $rws['Fname']." ".$rws['Lname']; ?></span><p>
    <div align="left" style="font-size: 12px;  font-weight:bold;">Date of Birth:</div><span style='color:black'><?php echo $rws['DOB']; ?></span><p>
    <div align="left" style="font-size: 12px; font-weight:bold;">Gender:</div><span style='color:black'><?php echo $rws['Gender']; ?></span><p>
    <div align="left" style="font-size: 12px; font-weight:bold;">Conatact no:</div><span style='color:black'><?php echo $rws['Mobile'];?></span><p>
		<?php if($rws['College']!='')
		{
			?>
    <div align="left" style="font-size: 12px; font-weight:bold;">College:</div><span style='color:black'><?php echo $rws['College'];?></span>
    <?php
}
else
{
	echo "";
	}?>
