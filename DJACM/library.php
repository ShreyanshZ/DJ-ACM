<!doctype html>
<html>
	<head>
		<TITLE>DJSCOE ACM</TITLE>
		<script type="text/javascript" src="min.js"></script>
		<script type="text/javascript" src="fancynew/source/jquery.fancybox.js"></script>
		<link href="fancynew/source/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen"/>

		
		<link rel="stylesheet" media="screen" href="css/style.css" type="text/css">
        <link rel="stylesheet" media="screen" href="css/login_2.css" type="text/css">
        <link rel="stylesheet" media="screen" href="css/libstyle.css" type="text/css">
		
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
			
			 $("#view").fancybox({				
            'autoDimensions': 'false',
            'width': 900,
			'height': 720,
            'transitionIn': 'elastic',
            'transitionOut': 'none',
            'type': 'iframe'						
        });

		});
	</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-49248039-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	</head>
	<body>
		
		
			<div id="header">
			<div class="headers">
				<span><a href="index.php" class="main_logo"></a></span>
				<span class="nav_bar">
					<ul id="nav">
    					<li class="left"><a  href="index.php">Home</a></li>
    					<li class="right"><a href="about.php">About US</a></li>
    					<li class="left"><a href="events.php">Events</a></li>
   						<li class="right"><a class="active" href="library.php">Library</a></li>
   						<li class="left"><a href="committee.php">Committee</a></li>
   						
					</ul>
				</span>
			</div>
			</div>
			<div id="body">
			<div id="bodys">
			
				
			<table class = "t1" cellspacing="15" style=" position:relative; bottom:20px;">
				<tr>
					<td style="background:#091A2A;"><a id="various1" href="library.php#inline1" style="color:white;">Sign In</a></td>
					<td ><a id="various2" style="text-decoration:underline;" href="library.php#inline2">Forgot Password ?</a></td>
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
				<form action="library.php">
					<div id="heading">Forgot Password</div>
					<div id="row"><label for="Username">Username :&nbsp;</label> <input type="text" name="Username" /></div>
					<div id="row"><input type="submit" value="Submit" class="button2 button" /></div>
				</form>		
			</div>
		
			</div>
		
			<div class ="LibT"></div>
							<h1 class="noliblog">Please login to avail the facility of e-library......</h1>
							</table>
				</center>
			</div>
			</div>
			<div id="footer">
			<div id="footers">
				<div class="foots foot1">
					<h1>Sitemap</h1>
					<h2>- <a href="index.php">Home</a></h2>
					<h2>- <a href="about.php">About Us</a></h2>
					<h2>- <a href="events.php">Events</a></h2>
					<h2>- <a href="library.php">Library</a></h2>
					<h2>- <a href="committee.php">Committee</a></h2>
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
					<h2><a href="https://www.facebook.com/nandish.kotadia" target="_blank">Nandish Kotadia</a></h2>
					<h2><a href="https://www.facebook.com/parth494" target="_blank">Parth Shah</a></h2>
					<h2><a href="https://www.facebook.com/umang.k.shah" target="_blank">Umang Shah</a></h2>
					<h2><a href="https://www.facebook.com/shreyanshz" target="_blank">Shreyansh Zatakia</a></h2>
					<h2><a href="https://www.facebook.com/rohandvora" target="_blank">Rohan Vora</a></h2>
					
				</div>
			</div>			</div>
		
	</body>
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
