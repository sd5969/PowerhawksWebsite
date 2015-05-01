<?php if(!$plain) { ?>
<ul class="oddnav">
<li><a href="#whoWeAre" id="whowearez">Who We Are</a></li>
<li><a href="#FIRST" id="firstz">FIRST</a></li>
<li><a href="#FRC" id="frcz">FRC</a></li>
<li><a href="#FTC" id="ftcz">FTC</a></li>
<li><a href="#histories" id="history">History</a></li>
<li><a href="#mentors" id="mentor">Mentors</a></li>
<li><a href="#resources" id="resource">Resources</a></li>
<li><a href="#alumni" id="alum">Alumni</a></li>
</ul>
<?php } ?>

<div class="innerdivwrapper">

<div class="innerdiv wrappedcontent" id="whowearediv">
<?php
	$result = mysql_query("SELECT * FROM whoWeAre WHERE id = '#whowearediv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

<div class="innerdiv wrappedcontent" id="firstdiv">
<?php
	$result = mysql_query("SELECT * FROM whoWeAre WHERE id = '#firstdiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

<div class="innerdiv wrappedcontent" id="frcdiv">
<?php
	$result = mysql_query("SELECT * FROM whoWeAre WHERE id = '#frcdiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

<div class="innerdiv wrappedcontent" id="ftcdiv">
<?php
	$result = mysql_query("SELECT * FROM whoWeAre WHERE id = '#ftcdiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

<div class="innerdiv wrappedcontent" id="historydiv">
<?php
	$result = mysql_query("SELECT * FROM whoWeAre WHERE id = '#historydiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

<div class="innerdiv wrappedcontent" id="mentordiv">
<?php
	$result = mysql_query("SELECT * FROM whoWeAre WHERE id = '#mentordiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

<div class="innerdiv wrappedcontent" id="resourcesdiv">
<?php
	$result = mysql_query("SELECT * FROM whoWeAre WHERE id = '#resourcesDiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

<div class="innerdiv wrappedcontent" id="alumnidiv">
<?php
	$result = mysql_query("SELECT * FROM whoWeAre WHERE id = '#alumniDiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

</div>
