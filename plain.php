<?php $plain = true; $included = true; ?>
<?php @include("./includes/connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Power Hawks - South River HS - Edgewater, MD</title>
<meta http-equiv="content-language" content="en-us" />
<meta name="language" content="en-us" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<style type="text/css">
<!--

-->
</style>
<script type="text/javascript">
<!--

//-->
</script>
</head>
<body>

<div id="header">
<h1><a href="./">PowerHawks Robotics Club, Inc.</a></h1>
</div>

<div id="main">
<div id="part1">

<div id="tab1" style="visibility: visible;" class="tab oddtab">
<h2>Who We Are</h2>
</div>

<div id="content1" class="content">
<div id="content1wrapped" class="contentwrapped">
<?php include("includes/whoweare.php"); ?>
</div>
</div>

</div>
<hr />
<div id="part2">

<div id="tab2" class="tab eventab">
<h2>Latest News</h2>
</div>

<div id="content2" class="content">
<div id="content2wrapped" class="contentwrapped">
<?php @include("includes/latest.php"); ?>
</div>
</div>

</div>
<hr />
<div id="part3">

<div id="tab3" class="tab oddtab">
<h2>Powerhawks Outreach</h2>
</div>

<div id="content3" class="content">
<div id="content3wrapped" class="contentwrapped">
<?php @include("includes/outreach.php"); ?>
</div>
</div>

</div>
<hr />
<div id="part4">

<div id="tab4" class="tab eventab">
<h2>Calendar/Schedule</h2>
</div>

<div id="content4" class="content">
<div id="content4wrapped" class="contentwrapped">
<?php @include("includes/calendar.php"); ?>
</div>
</div>
<hr />
</div>

<div id="part5">

<div id="tab5" class="tab oddtab">
<h2>Subteams</h2>
</div>

<div id="content5" class="content">
<div id="content5wrapped" class="contentwrapped">
<?php @include("includes/subteams.php"); ?>
</div>
</div>

</div>

</div>
<hr />
<div id="more" class="wrappedcontent">
<?php
	$result = mysql_query("SELECT * FROM more WHERE id = '#more'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
</div>
<hr />
<div id="sponsor">
<div id="sponsortitle"><h2>Sponsors</h2><div style="float: right;"><a id="sponsorclick" href="sponsor.php">How can I become a sponsor?</a></div></div>
<?php @include("includes/sponsors.php"); ?>
</div>
<br />
<?php include("footer.php"); ?>
</body>
</html>
