<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Robotics Application</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container" style="padding: 20px;">
<?php
	if(isset($_POST[element_1_1])) {
	include("../includes/connect.php");
	mysql_select_db("database");
	$type = $_POST[element_0_1];
	$firstname = $_POST[element_1_1];
	$lastname = $_POST[element_1_2];
	$address = $_POST[element_2_1] . " " . $_POST[element_2_2] . ", " . $_POST[element_2_3] . ", " . $_POST[element_2_4] . " " . $_POST[element_2_5];
	$birthday = $_POST[element_6_1] . "/" . $_POST[element_6_2] . "/" . $_POST[element_6_3];
	$homenumber = $_POST[element_3_1] . "-" . $_POST[element_3_2] . "-" . $_POST[element_3_3];
	$cellnumber = $_POST[element_4_1] . "-" . $_POST[element_4_2] . "-" . $_POST[element_4_3];
	$email = $_POST[element_5];
	$pastfirst = $_POST[element_7];
	$tskills = $_POST[element_15_1] . $_POST[element_15_2] . $_POST[element_15_3] . $_POST[element_15_4] . $_POST[element_15_5] . $_POST[element_15_6] . $_POST[element_15_7] . $_POST[element_15_8] . $_POST[element_15_9] . $_POST[element_15_10] . $_POST[element_15_11] . $_POST[element_15_12] . $_POST[element_15_13] . $_POST[element_15_14] . $_POST[element_15_15] . $_POST[element_15_16] . $_POST[element_15_17] . $_POST[element_15_18] . $_POST[element_15_19] . $_POST[element_15_20];
	$extrac = $_POST[element_18];
	$pastlead = $_POST[element_19];
	$subteam = $_POST[element_20_1];
	$applying = $_POST[element_20];
	$p1_firstname = $_POST[element_9_1];
	$p1_lastname = $_POST[element_9_2];
	$p1_cell = $_POST[element_10_1] . "-" . $_POST[element_10_2] . "-" . $_POST[element_10_3];
	$p1_email = $_POST[element_11];
	$p2_firstname = $_POST[element_12_1];
	$p2_lastname = $_POST[element_12_2];
	$p2_cell = $_POST[element_13_1] . "-" . $_POST[element_13_2] . "-" . $_POST[element_13_3];
	$p2_email = $_POST[element_14];
	mysql_query("INSERT INTO applicants (type, firstname, lastname, address, birthday, homenumber, cellnumber, email, pastfirst, tskills, extrac, pastlead, subteam, applying, p1_firstname, p1_lastname, p1_cell, p1_email, p2_firstname, p2_lastname, p2_cell, p2_email) VALUES ('$type', '$firstname', '$lastname', '$address', '$birthday', '$homenumber', '$cellnumber', '$email', '$pastfirst', '$tskills', '$extrac', '$pastlead', '$subteam', '$applying', '$p1_firstname', '$p1_lastname', '$p1_cell', '$p1_email', '$p2_firstname', '$p2_lastname', '$p2_cell', '$p2_email');") or die(mysql_error());
?>
	<h2 style="padding: 20px;"><a><br />Thank You!</a></h2>
	<p style="padding-bottom: 10px;">Your application has been submitted.  Good luck.</p>
<?php } else {
?>
	<a href="./">Something went wrong.  Try again.</a>
<?php } ?>
	</div>
	
</body>
</html>