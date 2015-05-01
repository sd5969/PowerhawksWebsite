<?php @include('connect.php'); ?>
<?php if(!$included) die(); ?>
<div id="outreachdiv" class="wrappedcontent">
<?php
	$result = mysql_query("SELECT * FROM outreach WHERE id = '#outreachdiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
</div>
