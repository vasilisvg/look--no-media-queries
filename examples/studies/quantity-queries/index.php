<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>quantity queries</title>
<style>
body {
	margin: 0;
	padding: 0;
}
nav {
	position: fixed;
	top: 0;
}
nav * {
	display: inline-block;
}
#wrapper {
	display: flex;
	flex-wrap: wrap;
}
div div {
	flex: 1;
	min-height: 10vh;
	min-width: 23vw;
	margin: 1vh 1vw;
	float: left;
	box-sizing: border-box;
	border: 1px solid black;
}
div div:nth-last-child(3n):first-child, 
div div:nth-last-child(3n):first-child ~ * {
  min-width: 31.333vw;
}
div div:nth-last-child(5n):first-child, 
div div:nth-last-child(5n):first-child ~ * {
  min-width: 18vw;
}



</style>
</head>
<body>
<div id="wrapper">	
<?php 
$n = mt_rand(9,33);
$i = 0;
while ( $i < $n) {
	echo '<div></div>';
	$i++;
}
?>
</div>
<nav>
	<button id="add">+</button>
	<button id="remove">-</button>
</nav>
<script>
document.getElementById('add').onclick = function(){
	document.getElementById('wrapper').innerHTML = document.getElementById('wrapper').innerHTML + '<div></div>';
}
document.getElementById('remove').onclick = function(){
	var node = document.querySelector('div div:last-child');
	node.parentNode.removeChild(node);
}
</script>
</body>
</html>
