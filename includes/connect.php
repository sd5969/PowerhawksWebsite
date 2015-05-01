<?php
	mysql_connect('localhost', 'username', 'password') or die(mysql_error());
	mysql_select_db('database');
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET utf8");
	mb_internal_encoding("UTF-8");
?>
