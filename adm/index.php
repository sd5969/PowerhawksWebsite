<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CMS</title>
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
	if(md5($_POST[user]) === 'somemd5hash' && md5($_POST[pass]) === 'somemd5hash') $_SESSION[loggedIn] = true;
	if(!$_SESSION[loggedIn]) {
		if(isset($_POST[user]) && md5($_POST[user]) !== 'somemd5hash') echo "Wrong username silly.<br />";
		if(isset($_POST[pass]) && md5($_POST[pass]) !== 'somemd5hash') echo "Wrong password.<br />";
?>
<form action="index.php" method="post">
<input name="user" id="user" type="text" />
<input name="pass" id="pass" type="password" />
<input type="submit" value="Login" />
</form>

<?php
	} else {
?>
<h3>Content Management System - Made By Sanjit!</h3>

Great, you're logged in.  Here's what you can do:<br />
<br />
<a href="page.php">Edit a Page</a><br />
<a href="logout.php">Log Out</a><br />
<?php
	}
?>
</body>
</html>
