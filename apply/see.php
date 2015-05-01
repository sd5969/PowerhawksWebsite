<html>
<head>
<title>The Game</title>
</head>
<body>
<?php
	if($_POST[password] == "thegame") {
		include("../includes/connect.php");
		mysql_select_db("powerhaw_form");
		$result = mysql_query("SELECT * FROM applicants");
?>
<table border=1>
<tr><th>Type</th><th>ID</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Birthday</th><th>Home Number</th><th>Cell Number</th><th>Email</th><th>Past FIRST Experience</th><th>Technical Skills</th><th>Extracurriculars</th><th>Past Leadership</th><th>Subteam</th><th>Applying For</th><th>Parent 1 First Name</th><th>Parent 1 Last Name</th><th>Parent 1 Cell Number</th><th>Parent 1 Email</th><th>Parent 2 First Name</th><th>Parent 2 Last Name</th><th>Parent 2 Cell Number</th><th>Parent 2 Email</th></tr>
<?php
		while($row = mysql_fetch_array($result)) {
			echo "<tr>";
			$count = 0;
			foreach($row as $value) {
				if($count % 2 == 1) echo "<td>$value</td>";
				$count++;
			}
			echo "</tr>\n";
		}
	} else {
?>
<form action="see.php" method="POST">
<input type="password" name="password" /><input type="submit" />
</form>
<?php
	}
?>
</table>
</body>
</html>
