<?php
	$included = true;
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) $ie = true;
	else $ie = false;
	@include('includes/connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="content-language" content="en-us" />
<meta name="language" content="en-us" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="keywords" content="FIRST, For Inspiration and Recognition of Science and Technology, Team 1111, Eleven-Eleven, Powerhawks, Power Hawks, Power, Hawks, South River High, Edgewater" />
<meta name="description" content="The South River High School Power Hawks Robotics Team is a group of students and adult mentors dedicated to the practical education of future engineers based in Edgewater, Maryland. These motivated students annually design and build a robot to compete locally and nationally in the FIRST (For Inspiration and Recognition of Science and Technology) robotics competition. The Power Hawks improve their science, technology, engineering, and math skills, learn to cooperatively problem solve, and develop self-confidence, communication skills, and leadership." />
<title>Power Hawks - Contact Us</title>
<link rel="stylesheet" href="includes/stylecss.php" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<script src="/includes/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="includes/sitejs.php"></script>
</head>
<body>

<div id="header">
<a href="./#whoWeAre" id="headerclick">
<?php echo $ie ? '<img src="images/logo.png" style="float: left; position: relative; left: -60px;" alt="logo" />' : '<img src="images/logo.png" style="float: left; position: relative; left: -60px; " alt="logo" />'; ?>
</a>
<a href="http://usfirst.org/" target="_blank"><img src="http://powerhawks.org/images/first_logo_small.png" alt="logo" style="top: -163px; left: 410px;" /></a>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="position: relative; top: -245px; left: 567px; z-index: 1000; width: 200px;"> <input type="hidden" name="cmd" value="_s-xclick" /> <input type="hidden" name="hosted_button_id" value="10675448" /> <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" style="border: 0px;" name="submit" alt="PayPal - The safer, easier way to pay online!" /> <img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" /> </form>
</div>

<div id="main">
<div id="part1">

<div id="tab1" style="visibility: visible;" class="tab oddtab">
<img src="images/contact.png" alt="contact" /><br />
<a href="./"><img src="/images/home.png" alt="home" /></a>
</div>

<div id="content1" class="content" style="width: <?php echo $ie ? 925 : 920; ?>px;">
<div class="contentwrapped">
<?php
	$result = mysql_query("SELECT * FROM contactUs");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
</div>
</div>

</div>
</div>

<div id="more" class="wrappedcontent">
<img src="/images/galleries.png" alt="galleries" /><br />
<?php
	$result = mysql_query("SELECT * FROM more WHERE id = '#more'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
</div>

<div id="sponsor">
<img src="images/sponsors.png" alt="Sponsors" /><div style="float: right;"><a id="sponsorclick" href="sponsor.php">How can I become a sponsor?</a></div><br />
<?php @include("includes/sponsors.php"); ?>
</div>
<br />
<?php include("footer.php"); ?>
</body>
</html>
