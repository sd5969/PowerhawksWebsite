<?php @include('connect.php'); ?>
<?php if(!$included) die(); ?>
<div id="latestdiv" class="wrappedcontent">
<?php
	$result = mysql_query("SELECT *, DATE_FORMAT(lastUpdated, '%M %e, %Y, %l:%i%p') AS newdate FROM latestNews WHERE lastUpdated < NOW() ORDER BY lastUpdated DESC");
	while($row = mysql_fetch_array($result)) {
		echo "<p style='font-weight: bold;'><a href='article.php?id=$row[id]'>$row[newdate]:</a></p>";
		echo $row[content] . "<br /><br />";
	}
?>
</div>
