<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>App</title>
    <link rel="stylesheet" href="./style/StyleSheet2.css">
	<link rel="stylesheet" href="./style/footer.css">
	<link rel="stylesheet" href="./style/slider.css">
	<link rel="stylesheet" href="./style/card.css">
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
		integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
	/>
</head>
<body>

<?php include './php/header.php';?>
	<script language="javascript" type="text/javascript" src="./script/sidebar.txt"></script>

<section id="main-section">
	<div class="container">
		<h1 class="topicApp">IntelliJ IDEA</h1>
		<img class="topicImg" src="./bin/IntelliJ IDEA/Screenshot 2022-07-17 235554.png" alt="IntelliJ IDEA" srcset="">
		<p class="disSmall">Every aspect of IntelliJ IDEA has been designed to maximize
			 developer productivity. Together, intelligent coding assistance and ergonomic 
			 design make development not only productive but also enjoyable.</p>
	</div>

	<!--Photo slider-->
	<div class="container">
		<div class="sloderContainer">
		<div class="slider">
			<img class="mySlides" src="./bin/IntelliJ IDEA/slid (1).jpg" style="width:100%">
			<img class="mySlides" src="./bin/IntelliJ IDEA/slid (1).png" style="width:100%">
			<img class="mySlides" src="./bin/IntelliJ IDEA/slid (1).webp" style="width:100%">
			<img class="mySlides" src="./bin/IntelliJ IDEA/slid (2).webp" style="width:100%">
			<script src="./script/slideshow.js"></script>
		</div>
		
		<div class="slidSection">
			<button class="slideButton" onclick="plusDivs(-1)" style="float:left">❮ Prev</button>
			<button class="slideButton" onclick="plusDivs(1)" style="float:right">Next ❯</button>
		</div>
		</div>
	</div>
	<div class="container"><a href="./bin/IntelliJ IDEA/in.zip" download>
		<div class="download">
			<button class="btnDw" id="btnDw" name ="btnBw" >Download</button>
		</div>
	</a></div>
	
	<div class="container">
		<div class="discription">
			<h1 class="topicApp">IntelliJ IDEA</h1>

			<div class="cardRow" id="cardRow">

				<div class="card">
					<div class="cardHead">
						<h3>
							Deep intelligence
						</h3>
					</div>
					<p class="cardBody">
					After IntelliJ IDEA has indexed 
					your source code, it offers a blazing
					fast and intelligent experience by giving relevant
					suggestions in every context: instant and clever code 
					completion, on-the-fly code analysis, and reliable 
					refactoring tools.</p>
				</div>
				<div class="card">
					<div class="cardHead">
						<h3>
							Out-of-the-box experience
						</h3>
					</div>
				<p class="cardBody">
					Mission-critical tools such as integrated version control systems 
					and a wide variety of supported languages and frameworks are all to 
					hand — no plugin hassle included.</p>
				</div>
				<div class="card">
					<div class="cardHead">
						<h3>
							Smart code completion
						</h3>
					</div>
					<p class="cardBody">
						While the basic completion suggests names of classes, methods, fields, 
						and keywords within the visibility scope, the smart completion suggests only 
						those types that are expected in the current context.</p>
				</div>
				
			</div>

		</div>
	</div>
	<?php include './php/footer.php';?>
<script src="./script/Upload.js"></script>
</section>
</body>
</html>