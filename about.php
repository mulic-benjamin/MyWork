<!DOCTYPE html>
<html>

	<head>
		<title>Beyond - about</title>
		<link href="CSS/normalize.css" rel="stylesheet">
		<link href="CSS/about.css" rel="stylesheet">
		<link href="CSS/shared.css" rel="stylesheet">
		<script src="JS/jquery-3.1.1.min.js"></script>
	</head>

	<body>
		<div id="window">
			<?php
				define('__ROOT__', dirname(__FILE__)); 
				require_once(__ROOT__.'/Includes/smallMenu.php');
			?>
			<div id="language">
				<span id="laFrancais">FR</span>
				<span>EN</span>
			</div>
			<div id="intro">
				<img id="inImg" src="Img/About/bigImg01.jpg">
			</div>
		</div>
		<script src="JS/about.js"></script>
		<script src="JS/Includes/smallMenu.js"></script>
	</body>
</html> 