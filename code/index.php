<?php
require 'dbconnection.php';
if(isset($_COOKIE['email']) && isset($_COOKIE['pass']))
	header('Location:login.php?auto=1');
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
			<div id='l'>
				<form class="loginform" action="login.php" method='POST'>
					<table cellspacing="0">
						<tbody>
							<tr>
								<td><label for="email">Email</label></td>
								<td><label for="pass">Password</label></td>
							</tr>
							<tr>
								<td><input class="logininput" type="email" name="email" title="PLACE YOUR EMAIL-ID" required></td>
								<td><input class="logininput" type="password" name="pwd" title="PLACE YOUR PASSWORD" required></td>
								<td><input type="submit" id="buttonl" name="login" value="Log In"></input></td>
							</tr>
							<tr>
								<td>
									<div>
										<input type="checkbox" name="loginchk" value="1">
										<label id="sp">Save Password</label>
									</div>
									<div>
										<input type="hidden" name="forget" >
									</div>
								</td>
								<td>
									<a id="sp" href="resetpass.php">Forgot password?</a>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
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
				<h3 class='Newuser'><span>New User</span> <br/> </h3>
				<?php
				if(isset($_GET['remarks'])){
				$remarks=$_GET['remarks'];
				if ($remarks=='unsuccess')
				{
				?>
				<h1 id="mark"><?php echo 'Email Already Registered ';?></h1>
				<?php
				}
				if ($remarks=='success')
				{
				?>
				<h1 id="mark"><?php echo 'Registration Successful';?></h1>
				<?php
				}
				if ($remarks=='unsuccess1')
				{
				?>
				<h5 id="mark"><?php echo 'Wrong Email or Password';?></h5>
				<?php
				}
				if($_GET['remarks']=='passchngd')
				{
					?>
					<h5 id="mark"><?php echo 'Password changed successfully';?></h5>
					<?php
				}
			}
				?>
				<form id='Registration_form' name="fform" action="question.php"  onsubmit="return checkForm(fform)" method="POST">
					<p>
					<input type='text' name='fname' placeholder='Firstname' title="PLACE YOUR FIRST NAME" id="firstName" required><br>
					<p>
					<input type='text' name='lname'  placeholder='Lastname' title="PLACE YOUR LAST NAME" id="laststName" required><br>
					<p>
					<input type='password' name='pwd'placeholder='password' title="PLACE YOUR PASSWORD" id="password" maxlength="20" required><br>
					<p>
					<input type='password' name='repwd' placeholder='Re-password' title="PLACE YOUR RE-PASSWORD" id="repassword" maxlength="20" required><br>
					<p>
					<input type='mobile' name='mo' placeholder='Mobile No' title="PLACE YOUR MOBILE NO"maxlength="14" id="mobile" required><br>
					<p>
					<input type='Email' name='email' placeholder='Email Id' title="PLACE YOUR EMAIL-ID" id="email" required>
					<div>
						<div id="dob" >Birthday</div>
						<div id="D0B">
						<select class="DOB" name="day" title="SELECT DAY" id="day" >
							<option selected="0" value="0">Day</option>
							<?php
							for($i=1;$i<=31;$i++)
							{
							?>
							<option><?php echo $i;?></option>
							<?php
							}
							?>
						</select>
						<select class="DOB" name="month" title="SELECT MONTH" id="month" >
						<option selected="0" value="0">Month</option>
						<?php
						$i=1;
						$month=array('JAN','FEB','MAR','APR','MAY','JUNE','JULY','AUG','SEP','OCT','NOV','DEC');
							foreach($month as $val)
							{
							?>
							<option value='<?php echo $i;?>'><?php echo $val;?></option>
							<?php
							$i++;
							}
							?>
						</select>
						<select class="DOB" name="year" title="SELECT YEAR" id='year' required >
						<option selected="0" value="0">Year</option>
						<?php
							for($i=1900;$i<=2013;$i++)
							{
							?>
							<option><?php echo $i;?></option>
							<?php
							}
							?>
							</select>
							</div>
							<div id="gender">
								<table  style='margin-top:16px;'>
									<tr >
								<td>Male</td><td><input required type="radio" name='gender' title="SELECT GENDER"  value="Male" ></td>
								<td>Female</td><td><input  required type="radio" name='gender' title="SELECT GENDER" value="Female"></td>
								</tr>
								</table>
							</div>
						</div>
					<div>
						<input type="submit" name="submit" id="buttonr"value="Register"></input>
					</div>
				</form>
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
