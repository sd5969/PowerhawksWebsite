<?php @include('connect.php'); ?>
<?php if(!$included) die(); ?>
<div id="howtosponsordiv" class="wrappedcontent">
<?php
	$result = mysql_query("SELECT * FROM sponsors WHERE id = '#howtosponsordiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
</div>
