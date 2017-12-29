<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>barger_ins</title>
	<meta charset="UTF-8"/>
	<meta name="description" content="Barger Insurance Website">
	<meta name="author" content="Luke Keen">
	<meta http-equiv="refresh" content="180">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bargerins_style.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
<div>
<header>
<a href="bargerins.php" target="_self" title="HOME">
<img id="Logo" src="barger_insurance_agency_logo.png" alt="Barger Insurance Company Logo" width="450" height="80"/>
</a>
<figure>
<a href="http://www.keystoneinsgrp.com/" target="_blank" title="keystoneinsgrp">
<img id="Keystone" src="Black Logo Layout for Partners-01.jpg" alt="Keystone Logo" width="320" height="90"/>
</a>
</figure>
</header>
<hr/>
<nav>
<ul>
	<li><a>Insurance Solutions</a></li>
	<li><a>Get A Quote</a></li>
	<li><a>Service</a></li>
	<li><a>Blog</a></li>
	<li><a>About</a></li>
	<li><a>Contact</a></li>
</ul>
</nav>
</div>
<div class="w3-content w3-display-container" style="max-width: 100%; margin-top: -10px">
  <img class="mySlides" src="IMG_2587.JPG" style="width:100%">
  <img class="mySlides" src="IMG_2611.JPG" style="width:100%">
  <img class="mySlides" src="IMG_4248.JPG" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>