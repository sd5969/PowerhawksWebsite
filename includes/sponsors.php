<?php @include('connect.php'); ?><?php if(!$included) die(); ?>

<div id="sponsorsdiv" class="wrappedcontent">
<?php
	$result = mysql_query("SELECT * FROM sponsors WHERE id = '#sponsorsdiv'");
	while($row = mysql_fetch_array($result)) {
		echo $row[content];
	}
?>
</div>
