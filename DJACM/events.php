<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<TITLE>DJSCOE ACM</TITLE>
		<link rel="stylesheet" media="screen" href="css/style_def.css" type="text/css">
		<link rel="stylesheet" media="screen" href="css/style3.css" type="text/css">
		<link rel="stylesheet" media="screen" href="css/login.css" type="text/css">
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="fancynew/source/jquery.fancybox.js"></script>
		<link href="fancynew/source/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen"/>
		
		<script type="text/javascript" src="js/simple.expand.js"></script>
		
		<script type="text/javascript">
			$(function () {
				$('.expander').simpleexpand({'defaultTarget': '.sum'});
			});
		</script>
		

		<!-- Favicon -->
	
		<link rel="shortcut icon" href="acm-logo.ico">
		<link rel="apple-touch-icon" href="acm-logo.ico">

		<!-- End Favicon -->

		<script type="text/javascript">
			$(document).ready(function() {
			
			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

		});
	</script>	
		
		


		
	</head>
	<body>
		
		
			<div id="header">
			<div class="headers">
				<span><a href="index.php" class="main_logo"></a></span>
				<span class="nav_bar">
					<ul id="nav">
    					<li class="left"><a href="index.php">Home</a></li>
    					<li class="right"><a href="about.php">About US</a></li>
    					<li class="left"><a class="active" href="events.php">Events</a></li>
   						<li class="right"><a href="library.php">Library</a></li>
   						<li class="left"><a href="committee.php">Committee</a></li>
						
					</ul>
				</span>
			</div>
			</div>
			

		
		</div>
			
			<div id="body">
			<div id="bodys">
			
			
					
			<table class = "t1" cellspacing="15" style=" position:relative; bottom:20px;">
				<tr>
					<td style="background:#091A2A;"><a id="various1" href="events.php#inline1" style="color:white;">Sign In</a></td>
					<td ><a id="various2" style="text-decoration:underline;" href="events.php#inline2">Forgot Password ?</a></td>
				</tr>
			</table>
						
			<div style="display: none;">
			<div id="inline1" style="width:450px;height:100%; overflow:none;">
				<form action="http://www.djacm.in/login-exe.php" method="post">
					<div id="heading">Sign in</div>
					<div id="row"><label for="Username">Username : &nbsp;</label><input type="text" name="Username" /></div>
					<div id="row"><label for="Password">Password : &nbsp;</label><input type="password" name="Password" /></div>
					<div id="row">
						<input type="submit" value="Sign In" class="button" />
				</form>		
			</div>
			</div>
			<div id="inline2" style="width:450px;height:100%;overflow:none;">
				<form action="events.php">
					<div id="heading">Forgot Password</div>
					<div id="row"><label for="Username">Username :&nbsp;</label> <input type="text" name="Username" /></div>
					<div id="row"><input type="submit" value="Submit" class="button2 button" /></div>
				</form>		
			</div>
		
		</div>
			
			<div class="eventsT" ></div>		

				
				<div class="info" style="overflow:auto;">
			<ul class='timeline'>

  <li class="year first"><p style="padding:3px 3px 5px 5px;font-size:23px;color:white;">Upcoming</p></li>
  
  <li class='event offset-first'>
    <!--<h1 class = "expander">DJ Open 2013<br><date>5th-6th October</date></h1>-->

	<p class = "sum">
		
	<b>No Upcoming Events Currently.</b>
	</p>
  </li>
  

  <li class="year first">2013</li>

 

<li class="event">
    <h1 class = "expander">iOS App Making<br><date>25<sup>th</sup>-26<sup>th</sup>March </date></h1>
	
	<p class = "sum">
	<img class="disimg" src="images/iosapp.png" height="100px" width="140px" />
	<b>ACM presents a certified iOS App Making workshop on 25th & 26th March, 2013. The speaker will be Mr. Priyank Ranka from Nimap Infotech. Memebers of ACM will be charged Rs.1350 and non-members will be charged Rs.1450. 10 Mac Laptops will be provided for an exclusive workshop ! Hurry up & Register now ! For any queries or for registrations contact,
Sarthak Doshi: +919320739309</b>
	</p>
  </li>

   <li class='event offset-first'>
    <h1 class = "expander">DJ Open 2013<br><date>5th-6th October</date></h1>

	<p class = "sum">
		<img class="disimg" src="images/wca.gif" height="147px" width="145px" />
	<b>If you know how to solve a Rubik's cube but are unable to showcase your talent, here is the opportunity. Recognised by WCA,DJ Sanghvi College of Engineering,Mumbai presents to you the biggest Rubik's Cube tournament of the year.Giving you an opportunity to compete at the international level. The goal is straightforward, the faster you go the better you stand in the competition.</b>
	</p>
  </li>
  
  <li class="event">
    <h1 class = "expander">Industrial Visit<br><date>14<sup>th</sup>February</date></h1>
	<p class = "sum">
	<img class="disimg" src="images/industrialvisit.png" height="100px" width="140px" />
	<b>An Industrial Visit that will give you an opportunity to explore one of the largest and leading industries of India. ACM brings to you the chance to visit the reputed Tata Consultancy Services (TCS) and Tata Consultant Engineers Ltd(TCE) at Pune on 14th February,2013. Don't miss out the chance for the hands-on experience ! </b>
	</p>
  </li>

 	 <li class="event">
    <h1 class = "expander">Game Programming and Animation<br><date>26<sup>th</sup>-27<sup>th</sup>February</date></h1>
	
	<p class = "sum">
	<img class="disimg" src="images/webdev1.png" height="100px" width="140px" />
	<b>ACM presents a workshop on Game Programming and Animation using software called Blender. It will be conducted by Nitin Ayer and his team from IIT on 26th and 27th February.</b>
	</p>
  </li>

 <li class="year">2012</li>

 <li class='event'>
  <h1 class = "expander">Photoshop Workshop<br><date>19<sup>th</sup>September</date></h1>
  <p class = "sum">
  <img class="disimg" src="images/ps.png" height="80px" width="90px" />
    <b>ACM's first workshop of the academic year 2012-2013 was Photoshop by NIIT, Vile Parle. It was a great hit as it saw a footfall of 150 students, who carried their own laptops. It was a free, certified workshop !</b>
  </p>
 </li>

<li class="event offset-first">
	<h1 class = "expander">Coding Workshop<br><date>29<sup>th</sup>-30<sup>th</sup>March </date></h1>
	
	<p class = "sum">
	<img class="disimg" src="images/codingworkshop.png" height="80px" width="90px" />
	<b>The CODING WORKSHOP primarily focused on strengthening the basics of coding and also preparing students from the placement point of view . This workshop was spanned over 2 days ie 29th & 30th March ,2012 . On the 1st day, Mr. Bhavin Desai from TCS conducted a session on placement oriented coding and on the 2nd day , Mr. Mohit from REBEL GURU taught students the concepts of OOPS , complexity and data structure s emphasizing on their industrial use. This workshop witnessed 120 participants on the 1st day and 70 participants on the 2nd day.</b>

	</p>
</li>




</ul>

				</div>
			</div>
			</div>
			<div id="footer">
			<div id="footers">
				<div class="foots foot1">
					<h1>Sitemap</h1>
					<h2>- <a href="events.php#">Home</a></h2>
					<h2>- <a href="events.php#">About Us</a></h2>
					<h2>- <a href="events.php#">Events</a></h2>
					<h2>- <a href="events.php#">Library</a></h2>
					<h2>- <a href="events.php#">Committee</a></h2>
				</div>
				<div class="foots foot2">
					<h1>Contact Us</h1>
					<h2>Address:</h2>
 					 <p>Dwarkadas J. Sanghvi College of Engineering,
 					Vile Parle(W), Mumbai.</p>
 					<h3><span class="fb common"></span>
					<span class="twit common"></span>
					<span class="gplus common"></span></h3>
				</div>
				<div class="foots foot3">
					<h1>Developers</h1>
					<h2><a href="events.php#">Nandish Kotadia</a></h2>
					<h2><a href="events.php#">Parth Shah</a></h2>
					<h2><a href="events.php#">Umang Shah</a></h2>
					<h2><a href="events.php#">Shreyansh Zatakia</a></h2>
					<h2><a href="events.php#">Rohan Vora</a></h2>
					
				</div>
			</div>
			</div>
		
	</body>
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
