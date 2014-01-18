<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : StylePrecision 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130720

Copyright: Siakavaras Dimitrios August 2013

-->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- What is the current page? -->
<?php 
	$labels = array("home", "prenatal yoga", "Unnata<sup>&reg;</sup> Aerial Yoga", "events-workshops",
	                "Πρόγραμμα και Τιμές",  "ο χώρος μας", "shop", "policy", "teachers", "επικοινωνία");
	$pages = array("home", "prenatal_yoga", "unnata_aerial_yoga", "events", 
	                "program", "our_place", "shop", "policy", "teachers", "contact");

	$current_page = $_GET['page'];
	if (!in_array($current_page,$pages))
		$current_page = "home";
?>

<!-- HEAD -->
<head profile="http://www.w3.org/2005/10/profile">
	<meta name="keywords" content="yoga,studio,trikala,santie,siakavara,om shanti yoga studio,om,shanti,asana,shakti,gentle,meditation,morning light,hatha,aerial" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>Om shanti yoga studio</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'/>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
	<script type="text/javascript" src="utils.js"></script>

	<!-- if we are in `our_place` tab we need slideshow. -->
	<?php
	if ($current_page == 'our_place') {
		echo '<link type="text/css" rel="stylesheet" href="slideshow/skins/tn3/tn3.css"></link>';
		echo "\n";
		echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>';
		echo "\n";
		echo '<script type="text/javascript" src="slideshow/js/jquery.tn3lite.min.js"></script>';
		echo "\n";
		echo '<script type="text/javascript">
				$(document).ready(function() {
					//Thumbnailer.config.shaderOpacity = 1;
					var tn1 = $(\'.mygallery\').tn3({
						skinDir:"skins",
						imageClick:"fullscreen",
						image:{
							maxZoom:1.5,
							crop:true,
							clickEvent:"dblclick",
							transitions:[{
								type:"blinds"
							},{
								type:"grid"
							},{
								type:"grid",
								duration:460,
								easing:"easeInQuad",
								gridX:1,
								gridY:8,
								// flat, diagonal, circle, random
								sort:"random",
								sortReverse:false,
								diagonalStart:"bl",
								// fade, scale
								method:"scale",
								partDuration:360,
								partEasing:"easeOutSine",
								partDirection:"left"
							}]
						}
					});
				});
			</script>';
		echo "\n";
	}
	?>

	<link rel="icon" type="image/png" href="images/logo_favicon.png" />
</head>
<!-- END HEAD -->

<!-- BODY -->
<body>

<div id="wrapper">
<div id="page" class="container">

	<!-- BANNER -->
	<a href="?page=home" id="banner_link">
	<div id="my_banner">
		<!--
		<div id="invitation">
			<h1>ΠΡΟΣΚΛΗΣΗ</h1>
			<p>Το Σάββατο 21 Σεπτεμβριου και ώρα 14:00-16:00 σας έλατε να δείτε το χώρο μας, να κεραστείτε και να γνωριστούμε!</p>
		</div>
		-->
		<img src="images/logo.jpg" alt="Logo image" />
		<h1>Om shanti</h1>
		<h2>yoga studio</h2>
	</div>
	</a>
	<!-- END BANNER -->

	<!--
	<a href="?page=home">
		<div id="banner">
			<div id="slider">
				<div class="viewer">
					<div class="reel">
						<div class="slide"> 
							<h1>Om shanti</h1> 
							<h2>yoga studio</h2>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$('#slider').slidertron({
					viewerSelector: '.viewer',
					reelSelector: '.viewer .reel',
					slidesSelector: '.viewer .reel .slide',
					// was 3000
					advanceDelay: 999000,
					speed: 'slow'
				});
			</script> 
		</div>
	</a>
	-->

	<!-- HEADER -->
	<div id="header" class="container">
		<!-- MENU -->
		<div id="menu">
		<ul>
			<?php
			for ($i=0; $i<count($labels); $i++) {
				echo "<li";
				if ($pages[$i] == $current_page)
					echo " class=\"current_page_item\"";
				echo "><a href=\"?page=", $pages[$i], "\">", $labels[$i], "</a></li>\n";
			}
			?>
		</ul>
		</div>
		<!-- END MENU -->
	</div>
	<!-- END HEADER -->

	<!-- CONTENT -->
	<?php
		$pagefile = "pages/".$current_page.".html";
		$form = fopen($pagefile, "r");
		if (!$form) {
			$pagefile = "pages/nopage.html";
			$form = fopen($pagefile, "r");
		}
		$contents = fread($form, filesize($pagefile));
		echo $contents;
	?>
	<!-- END CONTENT -->

</div>
</div>

<!-- FOOTER -->
<div id="footer">
	<p>Copyright (c) 2013 Sitename.com. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
</div>
<!-- END FOOTER -->

</body>
<!-- END BODY -->

</html>
