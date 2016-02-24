<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Random — Float — Balls</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
$amount = mt_rand(15,50);
$i = 0;
$color = array('blue','red','white','green','yellow');
while ($i < $amount) {
	$cl = $color[mt_rand(0,(count($color)-1))];
	echo '<article class="ball '.$cl.'"><h1>A '.$cl.' ball</h1></article>';
	$i++;
}
?>
</body>
</html>
