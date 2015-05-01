<?php @include('connect.php'); ?>
<?php if(!$included) die(); ?>
<?php if(!$plain) { ?>
<ul class="oddnav">
<li><a href="#subteam" id="subteams">FRC Subteams</a></li>
<li><a href="#committee" id="committees">Committees</a></li>
</ul>
<?php } ?>

<div class="innerdivwrapper">

<div class="innerdiv wrappedcontent" id="subteamsdiv">
<?php
	$result = mysql_query("SELECT * FROM subteams WHERE id = '#subteamsdiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

<div class="innerdiv wrappedcontent" id="committeesdiv">
<?php
	$result = mysql_query("SELECT * FROM subteams WHERE id = '#committeesdiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
<br />
</div>

</div>
