<div id="header">
					<div id="logo">
						<a style='font-size:22px' href='home.php'>geek<b style='font-size:48px;'>S</b>network</a>
					</div>
					<div id="menu1">
							<ul >
								<li id="nav1"><a style="margin-left:-5px;" href="#" style="padding:10px 0;">
						<img title="Notification" src="images/4298-notifyme_shadow_full_200.png" style="width: 30px;" /></a>
								<ul class='subs' >
									
									<? 
									
											include 'notification.php';
											
											?> 
								</ul>
								</li>
							</ul>
					</div>
					
					<div id="searchbox">
						<form action="fsearch.php" method="get">
						<input  title="Search" required type="text" name="srch" id="searchtxt" placeholder="Search........."/>
					</div>
					
					<div id="searchbtn">
						<input style="height:20px; border:1px solid white;"type="submit" id=srchbtn value="search" name="sbtn"/>
						</form>
					</div>
					
					<div id="home">
						<a  href='home.php'>Home</a>
					</div>
					<div id="menu">
							<ul >
								<li id="nav"><a href='#'>More</a>
								<ul class='subs'>
									<li style="border-top: 1px solid #ccc;"><a href='seeallmembr.php' id='accountSet'>All Members</a></li>
									<li><a href='changepass.php' id='accountSet'>ChangePassword</a></li>
									
								</ul>
								</li>
							</ul>
					</div>
					<div id="logout">
						<a href='logout.php' >Logout</a>	
					</div> 
				</div><!--End header-->
			
