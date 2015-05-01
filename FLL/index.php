<?php
	$x = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Team 1111 | FLL Competition</title>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="thescript.js"></script>
</head>
<body>
<div class="container">
<div class="small"><br /></div>
<center>
<div class="header">
<a href="/FLL/"><img src="logo22.png" style="border: 0px; margin-top: 3px;" /></a>
</div>
</center>
<div id="menu" style="font-family: sans serif">
<ul>
<li><a href="#A" id="menuItemA" style="border-radius:  0px 0px 0px 10px; -webkit-border-radius: 0px 0px 0px 10px; -moz-border-radius: 0px 0px 0px 10px;">Home</a></li>
<li><a href="#B" id="menuItemB" style="">Information</a></li>
<li><a href="#C" id="menuItemC" style="">Directions</a></li>
<li><a href="#D" id="menuItemD" style="">Teams</a></li>
<li><a href="#E" id="menuItemE" style="">Sponsors</a></li>
<li><a href="#G" id="menuItemG" style="">Results</a></li>
<li><a href="#F" id="menuItemF" style="border-radius:  0px 10px 0px 0px; -webkit-border-radius: 0px 10px 0px 0px; -moz-border-radius: 0px 10px 0px 0px;">Contacts</a></li>
</ul>
</div>
<noscript>
<br /><b>It's likely you will not be able to see the fun part of this website. The information will still be accessible but it isn't as cool. Turn on javascript.</b><br /><br />
</noscript>
<div class="content" id="contentA">
<?php
	include("tab1.php");
?>
</div>
<div class="content" id="contentB">
<?php
	include("tab2.php");
?>
</div>
<div class="content" id="contentC">
<?php
	include("tab3.php");
?>
</div>
<div class="content" id="contentD">
<?php
	include("tab4.php");
?>
</div>
<div class="content" id="contentE">
<?php
	include("tab5.php");
?>
</div>
<div class="content" id="contentF">
<?php
	include("tab6.php");
?>
</div>
<div class="content" id="contentG">
<?php
	include("tab7.php");
?>
</div>
<div class="small"><br /></div>
</div>
<span style="color: #FFFFFF; font-size: 12px;">Copyright Power Hawks Robotics Club, Inc.</span>
</body>
</html>
