<?php @include('connect.php'); ?>
<?php if(!$included) die(); ?>
<div id="calendardiv" class="wrappedcontent">
<?php
	$result = mysql_query("SELECT * FROM calendar WHERE id = '#calendardiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
</div>
