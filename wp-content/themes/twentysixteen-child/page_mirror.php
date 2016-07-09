<?php 
/** 
 * Template Name: Mirror
**/
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' href='../wp-content/themes/twentysixteen-child/scripts/homepage.css' type='text/css' />
		<script data-main="../wp-content/themes/twentysixteen-child/scripts/homepage" async="true" src="../wp-content/themes/twentysixteen-child/scripts/require.js"></script>
	</head>
	<body>
		<header>
			<div id="clock"></div>
		</header>

		<footer>
			<div style="float:left;height:250px"><canvas id="currentIcon" width="250" height="250"></canvas></div>
			<div id="currentTemp"></div>

			<div id="forecast">
				<div id="forecastSummary"></div>
				<div id="forecastDaily"></div>
			</div>

		</footer>
	</body>
</html>