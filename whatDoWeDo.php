<!DOCTYPE html>
<html>

	<head>
		<title>Beyond - about</title>
		<link href="CSS/normalize.css" rel="stylesheet">
		<link href="CSS/whatDoWeDo.css" rel="stylesheet">
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
				<div id="inPart1">
					<img id="inP1Img" src="Img/WhatDoWeDo/bigImg01.jpg">
					<div id="inP1LogoContainer">
						<img id="P1CoLogo" src="Img/Shared/logo.png">
					</div>
					<div id="inP1DiagramContainer">
						<img id="P1CoDiagram" src="Img/WhatDoWeDo/diagram.png">
						<h1 class="P1CoTitle" id="P1CoTitle1">
							Analysis
						</h1>
						<h1 class="P1CoTitle" id="P1CoTitle2">
							Brand Strategy
						</h1>
						<h1 class="P1CoTitle" id="P1CoTitle3">
							Portfolio</br>Development
						</h1>
						<h1 class="P1CoTitle" id="P1CoTitle4">
							Partnerships and</br> Co-brandings
						</h1>
						<h1 class="P1CoTitle" id="P1CoTitle5">
							Integrated an/or</br> Licensed Collections
						</h1>
					</div>
				</div>
				<div id="inPart2">
					<img id="inP2Img" src="Img/WhatDoWeDo/bigImg02.jpg">
					<div id="inP2DiagramContainer">
						<img id="inP2CoDiagram" src="">
					</div>
				</div>
			</div>
		</div>
		<script src="JS/whatDoWeDo.js"></script>
		<script src="JS/Includes/smallMenu.js"></script>
	</body>
</html> 