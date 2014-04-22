
<?php
include_once("dbconnection.php");
$m=$_SESSION['m'];
$sql=("SELECT * FROM  messages where User_Id='$m' order by id desc");
$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
//start
{
	
while($fetch=mysql_fetch_array($result))
{
	$dt=$fetch['timestamp'];
	$fd = date('d-M-Y, h:i A', strtotime($dt));
echo "<div style='margin-right:5px;'><a href='otherprofile.php?m=".$fetch['User_Id']."'><img src='upload/".$fetch['Image']."' height='50' width='50'></a></div>";
echo "<div style='float:left; margin-left:55px;margin-top:-45px;'><a href='otherprofile.php?m=".$fetch['User_Id']."'><b>".$fetch['Name']." </b></a> <span style='color:black;  font-size:11px;'>".$fd."</span> <a href='deletepost.php?d=".$fetch['id']." && uid=".$_SESSION['user_id']."'><img title='Delete' src='images/di.png' width=10 height=10></a>";
echo "<div style='margin-left:500px; margin-top:-20px;'><a href='vote.php?a=1 && b=".$fetch['id']."'><img src='images/buttonsfeat1.jpg' ></a>";

$sql6="Select * from votes where msgid='".$fetch['id']."'";
$res6=mysql_query($sql6) or die(mysql_error());
$numv=mysql_num_rows($res6);
echo "<span style='background:black;'> ".$numv." </span>";
echo "<a href='vote.php?a=2 && b=".$fetch['id']."'><img src='images/buttonsfeat2.jpg' ></a></div>";
echo "";
echo nl2br($fetch['content'])."</div>";
echo "<div style='margin-left:55px;'><form action='commentin.php?n=".$fetch['id']."'  method='post'>";
echo "<textarea style='resize: none;  width: 50%; height: 4%; border: 1px solid #8b9dc3;' name='cmnt' placeholder='Write a comment..' ></textarea><br/><input type='submit' 
	style='cursor:pointer;
	font-weight:bold;
    margin-top:2px;
    border: 1px solid #426A57;
    background-color:#426A57;
    color:#FFFFFF;' 
    name='cmntbtn' value='comment'></form></div>";
    
$sql1="SELECT * FROM comment order by c_id desc";
$result1=mysql_query($sql1) or die(mysql_error());
while($fetch1=mysql_fetch_array($result1))
{
if($fetch['id']==$fetch1['msgid'])
{
	$sql2="SELECT User_Id,Fname,Lname,Image from SOCIAL where User_Id='".$fetch1['userid']."'";
	$result2=mysql_query($sql2) or die(mysql_error());
	$fetch2=mysql_fetch_array($result2);
	
	echo "<div><div style='margin-left:60px;'><a href='otherprofile.php?m=".$fetch2['User_Id']."'><img src='upload/".$fetch2['Image']."' width=30 height=30></div><div style='margin-left:94px; margin-top:-33px;'>".$fetch2['Fname']." ".$fetch2['Lname']."</a> <a href='cmntdelete.php?cid=".$fetch1['c_id']." && cmntr=".$fetch1['userid']." && msgr=".$fetch1['msgposterid']."'><img title='Delete' src='images/di.png' width=10 height=10></a><br/>".$fetch1['comment']."<hr></div></div>";
}
else
{
	echo "";
}
}



}
echo "";
}
//end
else
{
	echo "No post";
}
?>

