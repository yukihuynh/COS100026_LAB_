<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Days of the week array">
	<meta name="keywords" content="PHP, arrays">
	<meta name="author" content="Yuki">
	<title>Days Array</title>
</head>
<body>
<h1>PHP Variables, Arrays and Operators</h1>
<?php
	$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	echo "<p>The days of the week in English are:<br />";
	echo implode(", ", $days), ".</p>";

	$days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
	echo "<p>The days of the week in French are:<br />";
	echo implode(", ", $days), ".</p>";
?>
</body>
</html>