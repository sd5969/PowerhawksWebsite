<?php
	header("Content-type: text/javascript");
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) $ie = true;
	else $ie = false;	
	@include('connect.php');
	$left1 = $ie ? 0 : 0;
	$left2 = $ie ? 790 : 780;
	$left3 = $ie ? 845 : 835;
	$left4 = $ie ? 900 : 890;
	$left5 = $ie ? 955 : 945;
	$left2norm = $ie ? 55 : 55;
	$left3norm = $ie ? 110 : 110;
	$left4norm = $ie ? 165 : 165;
	$left5norm = $ie ? 220 : 220;
	$divHeight = 580;
?>

var part = 0;

function part1(callback) {
	if(part != 1) $.post("/includes/getcontent.php", {tab : 'whoweare'}, function(data) {
		$('#content1wrapped').html(data);
		$('#part5').stop().animate({left: '<?php echo $left5; ?>px'}, 500, 'swing');
		$('#part4').stop().animate({left: '<?php echo $left4; ?>px'}, 500, 'swing');
		$('#part3').stop().animate({left: '<?php echo $left3; ?>px'}, 500, 'swing');
		$('#part2').stop().animate({left: '<?php echo $left2; ?>px'}, 500, 'swing');
		$('#part1').stop().animate({left: '<?php echo $left1; ?>px'}, 500, 'swing');
		callback();
	});
	else callback();
	part = 1;
}

function part2(callback) {
	if(part != 2) $.post("/includes/getcontent.php", {tab : 'latest'}, function(data) {
		$('#content2wrapped').html(data + "<br />");
		$('#part5').stop().animate({left: '<?php echo $left5; ?>px'}, 500, 'swing');
		$('#part4').stop().animate({left: '<?php echo $left4; ?>px'}, 500, 'swing');
		$('#part3').stop().animate({left: '<?php echo $left3; ?>px'}, 500, 'swing');
		$('#part2').stop().animate({left: '<?php echo $left2norm; ?>px'}, 500, 'swing');
		$('#part1').stop().animate({left: '<?php echo $left1; ?>px'}, 500, 'swing');
		callback();
	});
	else callback();
	part = 2;
}

function part3(callback) {
	if(part != 3) $.post("/includes/getcontent.php", {tab : 'outreach'}, function(data) {
		$('#content3wrapped').html(data + "<br />");
		$('#part5').stop().animate({left: '<?php echo $left5; ?>px'}, 500, 'swing');
		$('#part4').stop().animate({left: '<?php echo $left4; ?>px'}, 500, 'swing');
		$('#part3').stop().animate({left: '<?php echo $left3norm; ?>px'}, 500, 'swing');
		$('#part2').stop().animate({left: '<?php echo $left2norm; ?>px'}, 500, 'swing');
		$('#part1').stop().animate({left: '<?php echo $left1; ?>px'}, 500, 'swing');
		callback();
	});
	else callback();
	part = 3;
}

function part4(callback) {
	if(part != 4) $.post("/includes/getcontent.php", {tab : 'calendar'}, function(data) {
		$('#content4wrapped').html(data + "<br />");
		$('#part5').stop().animate({left: '<?php echo $left5; ?>px'}, 500, 'swing');
		$('#part4').stop().animate({left: '<?php echo $left4norm; ?>px'}, 500, 'swing');
		$('#part3').stop().animate({left: '<?php echo $left3norm; ?>px'}, 500, 'swing');
		$('#part2').stop().animate({left: '<?php echo $left2norm; ?>px'}, 500, 'swing');
		$('#part1').stop().animate({left: '<?php echo $left1; ?>px'}, 500, 'swing');
		callback();
	});
	else callback();
	part = 4;
}

function part5(callback) {
	if(part != 5) $.post("/includes/getcontent.php", {tab : 'subteams'}, function(data) {
		$('#content5wrapped').html(data);
		$('#part5').stop().animate({left: '<?php echo $left5norm; ?>px'}, 500, 'swing');
		$('#part4').stop().animate({left: '<?php echo $left4norm; ?>px'}, 500, 'swing');
		$('#part3').stop().animate({left: '<?php echo $left3norm; ?>px'}, 500, 'swing');
		$('#part2').stop().animate({left: '<?php echo $left2norm; ?>px'}, 500, 'swing');
		$('#part1').stop().animate({left: '<?php echo $left1; ?>px'}, 500, 'swing');
		callback();
	});
	else callback();
	part = 5;
}

function whoWeAre() {
	part1(function() {
		$('#whowearediv').stop().animate({top: '0px'}, 500, 'swing');
		$('#firstdiv').stop().animate({top: '0px'}, 500, 'swing');
		$('#frcdiv').stop().animate({top: '<?php echo -$divHeight; ?>px'}, 500, 'swing');
		$('#ftcdiv').stop().animate({top: '<?php echo -2 * $divHeight; ?>px'}, 500, 'swing');
		$('#historydiv').stop().animate({top: '<?php echo -3 * $divHeight; ?>px'}, 500, 'swing');
		$('#mentordiv').stop().animate({top: '<?php echo -4 * $divHeight; ?>px'}, 500, 'swing');
		$('#resourcesdiv').stop().animate({top: '<?php echo -5 * $divHeight; ?>px'}, 500, 'swing');
		$('#alumnidiv').stop().animate({top: '<?php echo -6 * $divHeight; ?>px'}, 500, 'swing');
	});
}

function first() {
	part1(function() {
		$('#whowearediv').stop().animate({top: '<?php echo $divHeight; ?>px'}, 500, 'swing');
		$('#firstdiv').stop().animate({top: '<?php echo -$divHeight; ?>px'}, 500, 'swing');
		$('#frcdiv').stop().animate({top: '<?php echo -$divHeight; ?>px'}, 500, 'swing');
		$('#ftcdiv').stop().animate({top: '<?php echo -2 * $divHeight; ?>px'}, 500, 'swing');
		$('#historydiv').stop().animate({top: '<?php echo -3 * $divHeight; ?>px'}, 500, 'swing');
		$('#mentordiv').stop().animate({top: '<?php echo -4 * $divHeight; ?>px'}, 500, 'swing');
		$('#resourcesdiv').stop().animate({top: '<?php echo -5 * $divHeight; ?>px'}, 500, 'swing');
		$('#alumnidiv').stop().animate({top: '<?php echo -6 * $divHeight; ?>px'}, 500, 'swing');
	});
}

function frc() {
	part1(function() {
		$('#whowearediv').stop().animate({top: '<?php echo $divHeight; ?>px'}, 500, 'swing');
		$('#firstdiv').stop().animate({top: '0px'}, 500, 'swing');
		$('#frcdiv').stop().animate({top: '<?php echo -2 * $divHeight; ?>px'}, 500, 'swing');
		$('#ftcdiv').stop().animate({top: '<?php echo -2 * $divHeight; ?>px'}, 500, 'swing');
		$('#historydiv').stop().animate({top: '<?php echo -3 * $divHeight; ?>px'}, 500, 'swing');
		$('#mentordiv').stop().animate({top: '<?php echo -4 * $divHeight; ?>px'}, 500, 'swing');
		$('#resourcesdiv').stop().animate({top: '<?php echo -5 * $divHeight; ?>px'}, 500, 'swing');
		$('#alumnidiv').stop().animate({top: '<?php echo -6 * $divHeight; ?>px'}, 500, 'swing');
	});
}

function ftc() {
	part1(function() {
		$('#whowearediv').stop().animate({top: '<?php echo $divHeight; ?>px'}, 500, 'swing');
		$('#firstdiv').stop().animate({top: '0px'}, 500, 'swing');
		$('#frcdiv').stop().animate({top: '<?php echo -$divHeight; ?>px'}, 500, 'swing');
		$('#ftcdiv').stop().animate({top: '<?php echo -3 * $divHeight; ?>px'}, 500, 'swing');
		$('#historydiv').stop().animate({top: '<?php echo -3 * $divHeight; ?>px'}, 500, 'swing');
		$('#mentordiv').stop().animate({top: '<?php echo -4 * $divHeight; ?>px'}, 500, 'swing');
		$('#resourcesdiv').stop().animate({top: '<?php echo -5 * $divHeight; ?>px'}, 500, 'swing');
		$('#alumnidiv').stop().animate({top: '<?php echo -6 * $divHeight; ?>px'}, 500, 'swing');
	});
}

function history() {
	part1(function() {
		$('#whowearediv').stop().animate({top: '<?php echo $divHeight; ?>px'}, 500, 'swing');
		$('#firstdiv').stop().animate({top: '0px'}, 500, 'swing');
		$('#frcdiv').stop().animate({top: '<?php echo -$divHeight; ?>px'}, 500, 'swing');
		$('#ftcdiv').stop().animate({top: '<?php echo -2 * $divHeight; ?>px'}, 500, 'swing');
		$('#historydiv').stop().animate({top: '<?php echo -4 * $divHeight; ?>px'}, 500, 'swing');
		$('#mentordiv').stop().animate({top: '<?php echo -4 * $divHeight; ?>px'}, 500, 'swing');
		$('#resourcesdiv').stop().animate({top: '<?php echo -5 * $divHeight; ?>px'}, 500, 'swing');
		$('#alumnidiv').stop().animate({top: '<?php echo -6 * $divHeight; ?>px'}, 500, 'swing');
	});
}

function mentors() {
	part1(function() {
		$('#whowearediv').stop().animate({top: '<?php echo $divHeight; ?>px'}, 500, 'swing');
		$('#firstdiv').stop().animate({top: '0px'}, 500, 'swing');
		$('#frcdiv').stop().animate({top: '<?php echo -$divHeight; ?>px'}, 500, 'swing');
		$('#ftcdiv').stop().animate({top: '<?php echo -2 * $divHeight; ?>px'}, 500, 'swing');
		$('#historydiv').stop().animate({top: '<?php echo -3 * $divHeight; ?>px'}, 500, 'swing');
		$('#mentordiv').stop().animate({top: '<?php echo -5 * $divHeight; ?>px'}, 500, 'swing');
		$('#resourcesdiv').stop().animate({top: '<?php echo -5 * $divHeight; ?>px'}, 500, 'swing');
		$('#alumnidiv').stop().animate({top: '<?php echo -6 * $divHeight; ?>px'}, 500, 'swing');
	});
}

function resources() {
	part1(function() {
		$('#whowearediv').stop().animate({top: '<?php echo $divHeight; ?>px'}, 500, 'swing');
		$('#firstdiv').stop().animate({top: '0px'}, 500, 'swing');
		$('#frcdiv').stop().animate({top: '<?php echo -$divHeight; ?>px'}, 500, 'swing');
		$('#ftcdiv').stop().animate({top: '<?php echo -2 * $divHeight; ?>px'}, 500, 'swing');
		$('#historydiv').stop().animate({top: '<?php echo -3 * $divHeight; ?>px'}, 500, 'swing');
		$('#mentordiv').stop().animate({top: '<?php echo -4 * $divHeight; ?>px'}, 500, 'swing');	
		$('#resourcesdiv').stop().animate({top: '<?php echo -6 * $divHeight; ?>px'}, 500, 'swing');
		$('#alumnidiv').stop().animate({top: '<?php echo -6 * $divHeight; ?>px'}, 500, 'swing');
	});
}

function alumni() {
	part1(function() {
		$('#whowearediv').stop().animate({top: '<?php echo $divHeight; ?>px'}, 500, 'swing');
		$('#firstdiv').stop().animate({top: '0px'}, 500, 'swing');
		$('#frcdiv').stop().animate({top: '<?php echo -$divHeight; ?>px'}, 500, 'swing');
		$('#ftcdiv').stop().animate({top: '<?php echo -2 * $divHeight; ?>px'}, 500, 'swing');
		$('#historydiv').stop().animate({top: '<?php echo -3 * $divHeight; ?>px'}, 500, 'swing');
		$('#mentordiv').stop().animate({top: '<?php echo -4 * $divHeight; ?>px'}, 500, 'swing');	
		$('#resourcesdiv').stop().animate({top: '<?php echo -5 * $divHeight; ?>px'}, 500, 'swing');
		$('#alumnidiv').stop().animate({top: '<?php echo -7 * $divHeight; ?>px'}, 500, 'swing');
	});
}

function subteams() {
	part5(function() {
		$('#subteamsdiv').stop().animate({top: '0px'}, 500, 'swing');
		$('#committeesdiv').stop().animate({top: '0px'}, 500, 'swing');
	});
}

function committees() {
	part5(function() {
		$('#subteamsdiv').stop().animate({top: '<?php echo $divHeight; ?>px'}, 500, 'swing');
		$('#committeesdiv').stop().animate({top: '<?php echo -$divHeight; ?>px'}, 500, 'swing');
	});
}

$(document).ready(function() {
	
	$('#thurs').live("click", function() {
		if($(this).parent().next('#thursdurr').is(':visible')) {
			$('#thursdurr').slideUp();
		} else {
			$('#thursdurr').slideDown();
		}
	});
	
	$('#fri').live("click", function() {
		if($(this).parent().next('#fridurr').is(':visible')) {
			$('#fridurr').slideUp();
		} else {
			$('#fridurr').slideDown();
		}
	});
	
	$('#satur').live("click", function() {
		if($(this).parent().next('#saturdurr').is(':visible')) {
			$('#saturdurr').slideUp();
		} else {
			$('#saturdurr').slideDown();
		}
	});
	
	$('#sund').live("click", function() {
		if($(this).parent().next('#sundurr').is(':visible')) {
			$('#sundurr').slideUp();
		} else {
			$('#sundurr').slideDown();
		}
	});
	
	var url = window.location.toString();
	var anchor = url.substring(url.indexOf('#') + 1);

	switch(anchor) {

		case "whoWeAre":
		default:
			whoWeAre();
			break;

		case "FIRST":
			first();
			break;

		case "FRC":
			frc();
			break;

		case "FTC":
			ftc();
			break;

		case "histories":
			history();
			break;

		case "mentors":
			mentors();
			break;

		case "resources":
			resources();
			break;

		case "alumni":
			alumni();
			break;

		case "latest":
			part2(function() { });
			break;

		case "outreach":
			part3(function() { });
			break;

		case "calendar":
			part4(function() { });
			break;

		case "subteam":
			subteams();
			break;

		case "committee":
			committees();
			break;

	}

	$('#headerclick').live("click", function() {
		whoWeAre();
	});

	$('#tab1click').live("click", function() {
		whoWeAre();	
	});
	
	$('#tab2click').live("click", function() {
		part2(function() { });
	});
	
	$('#tab3click').live("click", function() {
		part3(function() { });
	});
	
	$('#tab4click').live("click", function() {
		part4(function() { });
	});
	
	$('#tab5click').live("click", function() {
		subteams();
	});
	
//	WHO WE ARE
	
	$('#whowearez').live("click", function() {
		whoWeAre();
	});
	$('#firstz').live("click", function() {
		first();
	});
	$('#frcz').live("click", function() {
		frc();
	});
	$('#ftcz').live("click", function() {
		ftc();
	});
	$('#history').live("click", function() {
		history();
	});
	$('#mentor').live("click", function() {
		mentors();
	});
	$('#resource').live("click", function() {
		resources();
	});
	$('#alum').live("click", function() {
		alumni();
	});
	
//	SUBTEAMS

	$('#subteams').live("click", function() {
		subteams();
	});
	$('#committees').live("click", function() {
		committees();
	});

//	MENTORS

	$('.thegame').live("click", function() {
		if($(this).parent().next('.no').is(':visible')) {
			$(this).parent().next('.no').slideUp();
			$('#theirony').html("<h4>Expand All</h4>");
		} else {
			$(this).parent().next('.no').slideDown();
			$('#theirony').html("<h4>Collapse All</h4>");
		}
	});

	$('#theirony').live("click", function() {
		if($('.no').is(':visible')) {
			$('.no').slideUp("normal");
			$('#theirony').html("<h4>Expand All</h4>");
		} else {
			$('.no').slideDown("normal");
			$('#theirony').html("<h4>Collapse All</h4>");
		}
	});

});
