<?php
	session_start();
	if(!$_SESSION[loggedIn]) die();
	@include('../includes/connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Page Saved</title>
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
	if(isset($_POST[derp])) $query = "INSERT INTO latestNews(id, content) VALUES($_POST[id], '$_POST[editor1]')";
	else $query = "UPDATE $_POST[table] SET content = '$_POST[editor1]', lastUpdated = '$_POST[date]' WHERE id = '$_POST[id]'";
	mysql_query($query) or die(mysql_error());
?>

Your changes have been saved.<br />
<br />
<a href="page.php">Back to Editing Pages</a><br />

<script type="text/javascript">
<!--
setTimeout('window.location = "page.php"', 2000);
//-->
</script>

</body>
</html>
