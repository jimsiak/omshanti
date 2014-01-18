<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Heavenly Bliss  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130517

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Yoga Studio</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

<!-- What is the current page? -->
<?php 
	$labels = array("Αρχική", "Πρόγραμμα Μαθημάτων και τιμές", "Είδη Yoga");
	$pages = array("home", "program", "yoga_styles");

	$current_page = $_GET['page'];
?>


<!-- <div id="banner-wrapper">
	<div id="banner"><a href="#"><img src="images/img01.jpg" width="1200" height="300" alt="" /></a></div>
</div> -->

<!-- Header -->
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#"><span>Yoga </span>Studio</a></h1>
			<p>Καλως ήρθατε στο Studio Yoga.</p>
		</div>
	</div>
</div>
<!-- End of Header -->

<!-- MENU -->
<div id="menu-wrapper">
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
</div> 
<!-- end of MENU -->

<div id="wrapper"> 
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="sidebar">
					<ul>
						<li>
							<h2>Search Here:</h2>
							<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="" />
									</div>
								</form>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</li>
						<li>
							<h2>Aliquam tempus</h2>
							<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
						</li>
						<li>
							<h2>Categories</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Blogroll</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Archives</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Let's fly! Unnata aerial yoga</a></h2>
						<p class="meta"><span class="date">Παρασκευη, 15 Μαρτιου 2013</span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>Φίλοι της γιόγκα,</p>
							<br/>
							<p>Σας ενημερώνω οτι από το Μάρτιο 2013 παραδίδω ιδιαίτερα μαθήματα εναέριας γιόγκα στο χώρο μου.</p>
							<br/>
							<p>H εναέρια γιόγκα είναι ένα νέο είδος γιόγκα που χρησιμοποιεί ένα πανί τσίρκου που κρέμεται από το ταβάνι σα βοήθημα.Το πανί μας βοηθά να βελτιώσουμε τις παραδοσιακές άσανες της γιόγκα, να αισθανθούμε μεγαλύτερο άνοιγμα, να απελευθερωθούμε από φόβους, να αφεθούμε και να ανοίξουμε σημεία του σώματος πχ αυχένας, πλάτη που κρατούν ένταση και αρνητικά συναισθήματα. Μετά το τέλος ενός μαθήματος εναέριας γιόγκα νιώθούμε ευεξία, δύναμη, σωματική και νοητική χαλάρωση, σύνδεση με τον εαυτό και το κέντρο μας. Το πανί μας βοηθά να κάνουμε υπερεκτάσεις χωρίς καταπόνηση της σπονδυλικής στήλης και μας δίνει την αίσθηση οτι ''πετάμε''!Περισσότερα για την εναέρια γιόγκα Unnata μπορείτε να διαβάσετε στον παρακάτω σύνδεσμο:</p>
							<p>www.aerialyoga.com</p>
						</div>
					</div>
					<div class="post">
						<h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
						<p class="meta"><span class="date">May 10, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. Suspendisse lacus turpis, cursus egestas at sem. Sed lacus. Donec lectus. </p>
							<p class="links"><a href="#" class="button">Urnanet non molestie semper</a></p>
						</div>
					</div>
					<div class="post">
						<h2 class="title"><a href="#">Consecteteur hendrerit </a></h2>
						<p class="meta"><span class="date">May 08, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. </p>
							<p class="links"><a href="#" class="button">Consectetuer adipiscing elit</a></p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				
				<div id="sidebar2">
					<ul>
						<li>
							<h2>Aliquam tempus</h2>
							<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
						</li>
						<li>
							<h2>Suspendisse libero</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Aliquam mauris</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Lorem Ipsum</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>&copy; 2013 Sitename.com. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
