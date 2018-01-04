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
<div id="main">
<header>
<a href="bargerins.php" target="_self" title="HOME">
<img id="Logo" src="barger_insurance_agency_logo.png" alt="Barger Insurance Company Logo"/>
</a>
<figure>
<p><strong>Proud member of</strong></p>
<a href="http://www.keystoneinsgrp.com/" target="_blank" title="keystoneinsgrp">
<img id="Keystone" src="Black Logo Layout for Partners-01.jpg" alt="Keystone Logo"/>
</a>
</figure>
</header>
<hr/>
<nav>
<ul>
	<li><a>Insurance Solutions</a></li>
  <li><a>Our Staff</a></li>
	<li><a>Service</a></li>
	<li><a>Blog</a></li>
	<li><a>About</a></li>
	<li><a>Contact</a></li>
</ul>
</nav>
</div>
<div id="quote">
  <h1>Start your savings today</h1>
  <p>Get your quote online</p>
  <form>
    <input type="button" name="bestbutton" id="bestbutton" value="GET A QUOTE"></input>
  </form>
  <p id="call">or call us at:</p>
  <a href="tel:+12703842457">270-384-2457</a>
</div>
<div class="w3-content w3-display-container" style="max-width:50%; margin-top: -37.5vw; margin-left: 0">
  <img class="mySlides" src="IMG_courthouse.png" style="width:100%">
  <img class="mySlides" src="IMG_2587.JPG" style="width:100%">
  <img class="mySlides" src="IMG_2611.JPG" style="width:100%">
  <img class="mySlides" src="IMG_4248.JPG" style="width:100%">
  <img class="mySlides" src="IMG_church.png" style="width:100%">
  
  <!--<div id="Farms" class="w3-display-topleft w3-container w3-padding-16 w3-black"></div>-->
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
  	<div class="w3-left" onclick="plusDivs(-1)" style="cursor: pointer;">&#10094;</div>
  	<div class="w3-right" onclick="plusDivs(1)" style="cursor: pointer;">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)" style="cursor: pointer;"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)" style="cursor: pointer;"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)" style="cursor: pointer;"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)" style="cursor: pointer;"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)" style="cursor: pointer;"></span>
  </div>
</div>

<div id="address">
  <address id="one"><span>Barger Insurance Agency<br/>
                          326 Public Square<br/>
                          Suite 100<br/>
                          Columbia, KY 42728<br/>
                          <a href="tel:+12793842457">270-384-2457</a></span></address>
  <address id="two"><span>Barger Insurance Agency<br/>
                          DBA Jack & Jack Insurance Agency<br/>
                          2395 N. Main St.<br/>
                          Jamestown, KY 42629<br/>
                          <a href="tel:+12703435363">270-343-5363</a></span></address>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
</body>
</html>