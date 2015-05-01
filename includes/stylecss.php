<?php
	header("Content-type: text/css");
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) $ie = true;
	else $ie = false;
	@include('connect.php');
	$left1 = $ie ? 0 : 0;
	$left2 = $ie ? 800 : 780;
	$left3 = $ie ? 855 : 835;
	$left4 = $ie ? 910 : 890;
	$left5 = $ie ? 965 : 945;
?>

* {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	top: 0px;
	left: 0px;
	position: relative;
}

body {
	background-image: url("../images/derp2.jpg");
	background-repeat: no-repeat;
	background-color: #003459;
	color: #fff;
	font-family: <?php echo $ie ? 'Sans Serif, Arial, Helvetica' : 'Helvetica, Arial, Sans Serif'; ?>;
	font-size: 10pt;
	text-align: center;
}

#header {
	margin: 0px auto 0px auto;
	width: 900px;
	height: 120px;
}

#main, #sponsor, #more {
	background-color: rgb(0, 42, 79);
	width: <?php echo $ie ? 1010 : 1000; ?>px;
	height: 650px;
	color: #fff;
	margin: 10px auto 0px auto;
	overflow: hidden;
	text-align: left;
	border: 5px solid black;
	-moz-box-shadow: 3px 3px 8px #000;
	-webkit-box-shadow: 3px 3px 8px #000;
	box-shadow: 3px 3px 8px #000;

}

table.padme {
	width: 98%;
}

table.padme td, table.padme th {
	padding: 5px;
}

#more {
	background-image: url('../images/derp5.jpg');
	background-repeat: repeat-x;
	height: 310px;
	width: <?php echo $ie ? 1000 : 990; ?>px;
	padding: 5px;
}

#sponsor {
	background-image: url('../images/derp5.jpg');
	background-repeat: repeat-x;
	height: 390px;
	width: <?php echo $ie ? 1000 : 990; ?>px;
	padding: 5px;
	overflow: hidden;
}

#sponsortitle {
	width: <?php echo $ie ? 990 : 980; ?>px;
	background-color: rgb(0, 32, 69);
	padding: 5px;
	margin-bottom: 5px;
	overflow: hidden;
}

#sponsorlogos {
	background-image: url('../images/derp5.jpg');
	background-repeat: repeat-x;
	display: block;
}

.tab {
	width: <?php echo $ie ? 45 : 40; ?>px;
	height: <?php echo $ie ? 640 : 640; ?>px;
	color: #fff;
	padding: 5px 5px 5px 5px;
	position: relative;
	float: left;
	z-index: 1000;
	text-align: center;
	border-left: 1px solid black;
}

.oddtab {
	background-image: url('../images/derp3.jpg');
	background-repeat: repeat-y;
}

.eventab {
	background-image: url('../images/derp4.jpg');
	background-repeat: repeat-y;
}

.content {
	width: <?php echo $ie ? 710 : 700; ?>px;
	height: <?php echo $ie ? 630 : 630; ?>px;
	color: #fff;
	border: 5px solid black;
	padding: 5px 10px;
	position: relative;
	overflow: hidden;
	text-align: left;
	line-height: 1.5em;
	<?php if($ie) echo "left: -5px;"; ?>
}

.contentwrapped {
	height: 630px;
	overflow: auto;
}

.wrappedcontent {
	overflow: auto;
	padding-right: 10px;
}

a {
	text-decoration: none;
}

a:link {
	color: #bbbbff;
}
a:hover {
	color: #ffffff;
}
a:visited {
	color: #bbbbff;
}

h1, h2, h3, h4 {
	text-align: center;
}

img {
	border: 0px;
}

ul {
	margin-left: 15px;
}

<?php
$color1 = 'rgb(0, 42, 79)';
$color2 = 'rgb(0, 32, 69)';
$color3 = 'rgb(0, 42, 79)';
$color4 = 'rgb(0, 32, 69)';
$color5 = 'rgb(0, 42, 79)';
?>

#part1 {
	top: 0px;
	left: <?php echo $left1; ?>px;
}

#part2 {
	top: <?php echo $ie ? -650 : -650; ?>px;
	left: <?php echo $left2; ?>px;
}

#part3 {
	top: <?php echo $ie ? -1300 : -1300; ?>px;
	left: <?php echo $left3; ?>px;
}

#part4 {
	top: <?php echo $ie ? -1950 : -1950; ?>px;
	left: <?php echo $left4; ?>px;
}

#part5 {
	top: <?php echo $ie ? -2600 : -2600; ?>px;
	left: <?php echo $left5; ?>px;
}

#tab1 {
	background-color: <?php echo $color1; ?>;
	border-left: 0px solid black;
}

#tab2 {
	background-color:<?php echo $color2; ?>;
}

#tab3 {
	background-color: <?php echo $color3; ?>;
}

#tab4 {
	background-color: <?php echo $color4; ?>;
}

#tab5 {
	background-color: <?php echo $color5; ?>;
}

#content1 {
	background-color: <?php echo $color2; ?>;
	border: 5px solid <?php echo $color1; ?>;
}

#content2 {
	background-color: <?php echo $color3; ?>;
	border: 5px solid <?php echo $color2; ?>;
}

#content3 {
	background-color: <?php echo $color4; ?>;
	border: 5px solid <?php echo $color3; ?>;
}

#content4 {
	background-color: <?php echo $color5; ?>;
	border: 5px solid <?php echo $color4; ?>;
}

#content5 {
	background-color: <?php echo $color4; ?>;
	border: 5px solid <?php echo $color5; ?>;
}

.oddnav {
	top: 4px;
	margin-bottom: 20px;
	background-color: <?php echo $color4; ?>;
}

.oddnav li {
	display: inline;
	padding: 5px 15px;
	margin: 2px 2px;
	background-color: <?php echo $color5; ?>;
	border-radius: 5px 5px 5px 5px;
	border: 1px solid black;
	-webkit-border-radius: 5px 5px 5px 5px;
	-moz-border-radius: 5px 5px 5px 5px;
}

.innerdivwrapper {
	height: <?php echo $ie ? 570 : 580; ?>px;
	overflow: hidden;
}

.innerdiv {
	height: 580px;
	background-color: <?php echo $color2; ?>;
	overflow: auto;
	padding-right: 10px;
}

/* WHO WE ARE */

#whowearediv {

}

#firstdiv {

}

#frcdiv {
	top: -580px;
}

#ftcdiv {
	top: -1160px;
}

#historydiv {
	top: -1740px;
}

#mentordiv {
	top: -2320px;
}

#resourcesdiv {
	top: -2900px;
}

#alumnidiv {
	top: -3480px;
}

img.mentor {
	margin: 10px;
}
