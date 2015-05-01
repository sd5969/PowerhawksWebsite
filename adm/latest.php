<?php
	session_start();
	if(!$_SESSION[loggedIn]) die();
	@include('../includes/connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Add New News</title>
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
	$count = mysql_num_rows(mysql_query("SELECT * FROM latestNews"));
	$id = $count + 1;
?>
<script type="text/javascript" src="ckeditor/ckeditor.js?t=A8LE4JO"></script>
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
	CKEDITOR.config.contentsCss = '../includes/stylecss.php';
	CKEDITOR.config.height = '40em';
//]]>
</script>
<input type="hidden" name="derp" value="true" />
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
<input type="hidden" name="table" id="table" value="latestNews" />
<input type="submit" value="Submit"/>
</p>
</form>
</fieldset>
<br />
<a href="page.php">Return to Editing Choices (Does Not Save!)</a><br />
</body>
</html>
