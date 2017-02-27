<!DOCTYPE html>
<html>

	<head>
		<title>Beyond</title>
		<link href="CSS/normalize.css" rel="stylesheet">
		<link href="CSS/index.css" rel="stylesheet">
		<link href="CSS/shared.css" rel="stylesheet">
		<script src="JS/jquery-3.1.1.min.js"></script>
	</head>

	<body>
		<div id="window">
			<?php
				define('__ROOT__', dirname(__FILE__)); 
				require_once(__ROOT__.'/Includes/smallMenu.php');
			?>
			<div id="intro">
				<img id="inBackground" src="Img/Index/backgroundImg.jpg">
				<div id="inLogoContainer">
					<img id="inCoLogo" src="Img/Shared/logo.png">
				</div>
				<h1 id="inText">
					When merging creativity and business it is just</br> as important to exceed expectations</br> as it is to connect with the right people.</br> Synergy is key and vision is essential</br> when pushing forward new ideas.
				</h1>
			</div>
			<!--<div id="language">
				<span id="laFrancais">FR</span>
				<span>EN</span>
			</div>-->
			<div id="instagram">
				<a href="index.php">
					<img id="inLogo" src="Img/Shared/logoInsta.png">
				</a>
			</div>
			<div id="newsletter">
				<a href="index.php">
					<img id="neLogo" src="Img/Shared/logoFb.png">
				</a>
			</div>
			<div id="content">
				<div id="bigMenu">
					<div id="line1">
						<div class="bgMeCells" id="bgMeCell1">
							<a class="bgMeCeLink" href="about.php">
								<img class= "imgMenu" src="Img/Index/BigMenu/about.jpg" alt="about">
								<div class="bgMeCeHoover">
									<div class="bgMeCeHoTextBlock">
										<h1 class="bgMeCeHoTeTitle">About</h1>
									</div>
								</div>
							</a>
						</div>
						<div  class="bgMeCells" id="bgMeCell2">
							<a class="bgMeCeLink" href="whatDoWeDo.php">
								<img class= "imgMenu" src="Img/Index/BigMenu/whatDoWeDo.jpg" alt="Leyla matisson">
								<div class="bgMeCeHoover">
									<div class="bgMeCeHoTextBlock">
										<h1 class="bgMeCeHoTeTitle">What do we do ?</h1>
									</div>
								</div>
							</a>
						</div>
						<div  class="bgMeCells" id="bgMeCell3">
							<a class="bgMeCeLink" href="collections.php">
								<img class= "imgMenu" src="Img/Index/BigMenu/collections.jpg" alt="Leyla matisson">
								<div class="bgMeCeHoover">
									<div class="bgMeCeHoTextBlock">
										<h1 class="bgMeCeHoTeTitle">Collections</h1>
									</div>
								</div>
							</a>
						</div>
						<div  class="bgMeCells" id="bgMeCell4">
							<a class="bgMeCeLink" href="contactUs.php">
								<img class= "imgMenu" src="Img/Index/BigMenu/contactUs.jpg" alt="Leyla matisson">
								<div class="bgMeCeHoover">
									<div class="bgMeCeHoTextBlock">
										<h1 class="bgMeCeHoTeTitle">Contact us</h1>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div id="line2">
						<div  class="bgMeCells" id="bgMeCell5">
							<a class="bgMeCeLink" href="mission.php">
								<img class= "imgMenu" src="Img/Index/BigMenu/mission.jpg" alt="about">
								<div class="bgMeCeHoover">
									<div class="bgMeCeHoTextBlock">
										<h1 class="bgMeCeHoTeTitle">Mission</h1>
									</div>
								</div>
							</a>
						</div>
						<div  class="bgMeCells" id="bgMeCell6">
							<a class="bgMeCeLink" href="co-branding.php">
								<img class= "imgMenu" src="Img/Index/BigMenu/co-branding.jpg" alt="Leyla matisson">
								<div class="bgMeCeHoover">
									<div class="bgMeCeHoTextBlock">
										<h1 class="bgMeCeHoTeTitle">Co-branding</h1>
									</div>
								</div>
							</a>
						</div>
						<div  class="bgMeCells" id="bgMeCell7">
							<a class="bgMeCeLink" href="press.php">
								<img class= "imgMenu" src="Img/Index/BigMenu/press.jpg" alt="Leyla matisson">
								<div class="bgMeCeHoover">
									<div class="bgMeCeHoTextBlock">
										<h1 class="bgMeCeHoTeTitle">Press</h1>
									</div>
								</div>
							</a>
						</div>
						<div  class="bgMeCells" id="bgMeCell8">
							<a class="bgMeCeLink" href="instagram.php">
								<img class= "imgMenu" src="Img/Index/BigMenu/instagram.jpg" alt="Leyla matisson">
								<div class="bgMeCeHoover">
									<div class="bgMeCeHoTextBlock">
										<h1 class="bgMeCeHoTeTitle">Instagram</h1>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--<div id="flex">
				<div id="b1">
				</div>
				<div id="b2">	FLEX TEST
				</div>
				<div id="b3">
				</div>
				<div id="b4">
				</div>
			</div>-->
		</div>
		<script src="JS/index.js"></script>
		<script src="JS/Includes/smallMenu.js"></script>
	</body>
</html> 