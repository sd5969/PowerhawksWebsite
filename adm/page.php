<?php
	session_start();
	if(!$_SESSION[loggedIn]) die();
	@include('../includes/connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo isset($_GET[tab]) ? "Editing Page $_GET[tab]: $_GET[id]" : "Edit a Page"; ?></title>
<meta http-equiv="content-language" content="en-us" />
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

<?php
	if(!isset($_GET[id]) || !isset($_GET[tab])) {
?>
Edit a Page:<br />
<br />
Who We Are:<br />
<a href="page.php?id=whowearediv&tab=whoWeAre">Who We Are</a><br />
<a href="page.php?id=firstdiv&tab=whoWeAre">FIRST</a><br />
<a href="page.php?id=frcdiv&tab=whoWeAre">FRC</a><br />
<a href="page.php?id=ftcdiv&tab=whoWeAre">FTC</a><br />
<a href="page.php?id=historydiv&tab=whoWeAre">History</a><br />
<a href="page.php?id=mentordiv&tab=whoWeAre">Mentors</a><br />
<a href="page.php?id=resourcesdiv&tab=whoWeAre">Resources</a><br />
<a href="page.php?id=alumnidiv&tab=whoWeAre">Alumni</a><br />
<br />
Latest News:<br />
<a href="latest.php">New</a><br />
<?php
	$result = mysql_query("SELECT *, DATE_FORMAT(lastUpdated, '%M %e, %Y, %l:%i%p') AS newdate FROM latestNews ORDER BY lastUpdated DESC");
	while($row = mysql_fetch_array($result)) {
?>
<a href="page.php?id=<?php echo $row[id]; ?>&tab=latestNews"><?php echo $row[newdate]; ?></a><br />
<?php
	$count = $row[id];
	}

?>
<br />
Powerhawks Outreach:<br />
<a href="page.php?id=outreachdiv&tab=outreach">Powerhawks Outreach</a><br />
<br />
Calendar/Schedule:<br />
<a href="page.php?id=calendardiv&tab=calendar">Calendar/Schedule</a><br />
<br />
Subteams:<br />
<a href="page.php?id=subteamsdiv&tab=subteams">Subteams</a><br />
<a href="page.php?id=committeesdiv&tab=subteams">Committees</a><br />
<br />
More:<br />
<a href="page.php?id=more&tab=more">More</a><br />
<br />
Contact:<br />
<a href="page.php?id=derp&tab=contactUs">Contact Us</a><br />
<br />
Sponsors:<br />
<a href="page.php?id=sponsorsdiv&tab=sponsors">Sponsors</a><br />
<a href="page.php?id=howtosponsordiv&tab=sponsors">How to Sponsor</a><br />
<?php
	} else {
	$result = mysql_query("SELECT * FROM $_GET[tab] WHERE id = '#$_GET[id]' OR id = '$_GET[id]'");
	while($row = mysql_fetch_array($result)) {
		echo "Editting: $row[id]<br />";
		echo "Tab: $_GET[tab]<br />";
?>
<br />
<script type="text/javascript" src="../includes/jquery.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js?t=A8LE4JO"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#apply').click(function(e) {
			e.preventDefault();
			$('#derp').html("");
			$.post("pagesaved.php", {editor1 : CKEDITOR.instances.editor1.getData(), id : $('[name=id]').val(), table : $('[name=table]').val(), date : $('[name=date]').val()}, function(data) {
				$('#derp').html("Applied.");
			});
		});
	});
</script>
<fieldset title="Output">
<legend>Output</legend>
<form action="pagesaved.php" method="post">
<p>
<label for="editor1">
Editor 1:</label><br/>
</p>
<p>
<textarea name="editor1" rows="20" cols="60">
<?php echo $row[content]; ?>
</textarea>
<script type="text/javascript">
//<![CDATA[
	CKEDITOR.replace('editor1');
	CKEDITOR.config.contentsCss = '../includes/stylecss.php' ;
	CKEDITOR.config.height = '40em';
//]]>
</script>
<input type="hidden" name="id" id="id" value="<?php echo ($_GET[tab] !== "latestNews") ? '#' . $_GET[id] : $_GET[id]; ?>" />
<input type="hidden" name="table" id="table" value="<?php echo $_GET[tab]; ?>" />
Date: <input type="text" name="date" value="<?php echo $row[lastUpdated]; ?>" /><br />
<input type="submit" value="Submit"/> <input type="button" id='apply' value="Apply" /> <span id='derp'></span>
</p>
</form>
</fieldset>
<br />
<a href="page.php">Return to Editing Choices (Does Not Save!)</a><br />
<?php
	}
?>


<?php
	}
?>



</body>
</html>
