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
			<!--<div id="language">
				<span id="laFrancais">FR</span>
				<span>EN</span>
			</div>-->
			<div id="intro">
				<img id="inBackground" src="Img/About/bigImg01.jpg">
				<div id="inText">
					"I created Beyond to provide brands and designers with a buisness development platform</br> encompassing brand extensions, full licensing portfolios and high value partnerships.</br> With my extensive experience in the luxury, fashion and lyfestyle industries, and a trusted network</br> of skilled individuals and companies. i deliver custom crafted strategies with strong</br> brand awareness value and optimal revenue potential. In a highly competitive marketplace,</br> my role is to help brands develop impactful collaborations and products from concept to market launch."
				</div>
				<div id="inLogoContainer">
					LEYLA MATISSON</br> FOUNDER
					<div id="inCoLine">
					</div>
				</div>
			</div>
		</div>
		<script src="JS/about.js"></script>
		<script src="JS/Includes/smallMenu.js"></script>
	</body>
</html> 