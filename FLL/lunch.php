<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Team 1111 | FLL Competition</title>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="thescript.js"></script>
</head>
<body>
<div class="container">
<div class="small"><br /></div>
<center>
<div class="header">
<a href="/FLL/"><img src="logo22.png" style="border: 0px; margin-top: 3px;" /></a>
</div>
</center>
<div class="content" id="contentA" style="text-align:left">
<?php
	require_once('recaptchalib.php');
	$privatekey = "6LfmxwkAAAAAALabNwq5rNM6ND_lyTx8R-2urMCN";
	$captcha = false;
	if($_POST[sent]) {
		$resp = recaptcha_check_answer ($privatekey,
										$_SERVER["REMOTE_ADDR"],
										$_POST["recaptcha_challenge_field"],
										$_POST["recaptcha_response_field"]);
		if (!$resp->is_valid) {
			echo "<span style='color: red; font-weight: bold;'>Please try another captcha.</span>";
		} else {
			$captcha = true;
		}
	}
?>
<?php
	if(!$captcha) {
?>
<form action="lunch.php" method="post">
<input type="hidden" value="true" name="sent" />
Food can be provided so long as an order is place prior to the day of the qualifier.<br/> All money will be due at registration.<br/><br/>
Team Number: <br/><input type="text" value="<?php echo htmlentities($_POST[number]); ?>" name="number" /> <br />
Team Name: <br/><input type="text" value="<?php echo htmlentities($_POST[name]); ?>" name="name" /> <br/>
Email: <br/><input type="text" value="<?php echo htmlentities($_POST[email]); ?>" name="email" /><br/>
<br />
<a><b>Please specify how many of each item you would like to order:</b></a><br /><br />
<input type="text" value="<?php echo htmlentities($_POST[order1]); ?>" name="order1" size="3" /> Hot Dog, Chips, and Drink - $4<br />
<input type="text" value="<?php echo htmlentities($_POST[order2]); ?>" name="order2" size="3" /> Hamburger/Cheeseburger, Chips, and Drink - $4.50 <br />
<input type="text" value="<?php echo htmlentities($_POST[order3]); ?>" name="order3" size="3" /> Chicken Sandwich, Chips, and Drink - $5 <br />
<input type="text" value="<?php echo htmlentities($_POST[order4]); ?>" name="order4" size="3" /> Large Pizza* - $15<br />
<br/>
*Must be ordered by Tuesday, December 8th, 2009<br />
<br/>

<?php

require_once('recaptchalib.php');
$publickey = "6LfmxwkAAAAAAPuO5aVfH1NfFCXytoutrXGWbF7M "; // you got this from the signup page
echo recaptcha_get_html($publickey);

?>
<br />
<input type="submit" value="Submit" /><br />
<?php
	} else {
	$subject = "Team " . htmlentities($_POST[number]) . " lunch order";
	echo "Thank you for your order.<br/><br />This is what you ordered:<br/><br />";
	echo "<div style='background-color: #CCCCCC; padding: 10px;'>";
	echo $repeat = "Team " . htmlentities($_POST[number]) . ", the " . htmlentities($_POST[name]) . ",<br/>
	Is ordering: <br/><br />
	<b>" . htmlentities($_POST[order1]) . "</b> Hot Dog, Chips and Drink,<br />
	<b>" . htmlentities($_POST[order2]) . "</b> Hamburger/Cheeseburger Chips and a drink,<br/>
	<b>" . htmlentities($_POST[order3]) . "</b> Chicken Sandwich chips and a drink and<br />
	<b>" . htmlentities($_POST[order4]) . "</b> Large Pizzas.<br /><br />
	Price:<br />
	<div style='margin-left: 10px;'>
	$4.00 * " . htmlentities($_POST[order1]) . "<br />
	$4.50 * " . htmlentities($_POST[order2]) . "<br />
	$5.00 * " . htmlentities($_POST[order3]) . "<br />
	$15.00 * " . htmlentities($_POST[order4]) . "<br />
	-------------------<br />$"
	 . number_format(4 * htmlentities($_POST[order1]) + 4.50 * htmlentities($_POST[order2]) + 5 * htmlentities($_POST[order3]) + 15 * htmlentities($_POST[order4]), 2) . "
	</div></div><br />";
	$content = "<html><head></head><body>$repeat</body></html>";

	$email = htmlentities($_POST[email]);
	if (htmlentities($_POST[email]) == '') $email = 'noreply@powerhawks.org';
	mail("rsackett@aacps.org, mdl0394@gmail.com, mjparangot@gmail.com, dan@wfchesley.com", $subject, $content, "From: " . $email . "\r\nContent-type: text/html\r\n");
?>
You're request has been sent.
<?php
	}
?>
</div>
<div class="small"><br /></div>
</div>
<span style="color: #FFFFFF; font-size: 12px;">Copyright Powerhawks Team 1111</span>
</body>
</html>
