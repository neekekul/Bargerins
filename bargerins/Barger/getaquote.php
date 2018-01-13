<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>barger_ins</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Barger Insurance Website">
    <meta name="author" content="Luke Keen">
    <meta http-equiv="refresh" content="180">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://www.bargerins.com/getaquote_style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
    <div id="main">
        <header>
            <a href="http://www.bargerins.com/bargerins.php" target="_self" title="HOME">
<img id="Logo" src="barger_insurance_agency_logo.png" alt="Barger Insurance Company Logo"/>
</a>
            <section>
                <a href="tel:+12703842457" id="phone">270-384-2457</a>
            </section>
            <figure>
                <p><strong>Proud member of</strong></p>
                <a href="http://www.keystoneinsgrp.com/" target="_blank" title="keystoneinsgrp">
<img id="Keystone" src="BlackLogo.jpg" alt="Keystone Logo"/>
</a>
            </figure>
        </header>
        <hr/>
        <nav>
            <ul>
                <li><a>Insurance Solutions</a></li>
                <li><a>Our Staff</a></li>
                <li><a href="http://www.bargerins.com/getaquote.php">Service</a></li>
                <li><a>Blog</a></li>
                <li><a>About</a></li>
                <li><a>Contact</a></li>
            </ul>
        </nav>
    </div>

    <div id="quote">
        <h1>All we need is a little information from you. Fill out the form below then click submit.</h1>
        <form action="/getaquote_finish.php" method="POST">
            Type of Coverage:
            <input id="coverage" type="text" name="coverage" placeholder="Auto..." list="types" autocomplete="Off" required/>
            <datalist id="types">
			<option>Farm</option>
			<option>Auto</option>
			<option>Home</option>
			<option>Boat</option>
			<option>Mobile Home</option>
			<option>Classic Car</option>
			<option>Motorcycle</option>
			<option>Renters</option>
			<option>Condo</option>
			<option>Recreational Vehicle</option>
			<option>Off Road Vehicle</option>
			<option>Umbrella</option>
			<option>Flood</option>
			<option>Life</option>
			<option>Business</option>
		</datalist></br>
            </br>
            Email Address:
            <input id="mail" type="email" name="mail" placeholder="soandso@gmail.com..." autocomplete="Off" required/></br>
            </br>
            Phone Number:
            <input id="num" type="tel" name="phone" placeholder="(___) ___-____" autocomplete="Off" /></br>
            </br>
            First Name:
            <input id="first" type="text" name="first" placeholder="John..." autocomplete="Off" required/></br>
            </br>
            Last Name:
            <input id="last" type="text" name="last" placeholder="Doe..." autocomplete="Off" required/></br>
            </br>
            <input id="submit" type="submit" value="Submit">

        </form>
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

    <div id="copyright">
        <p>Copyright © 2018 Barger Insurance Agency, Inc. | <a href="http://www.bargerins.com/privacy.php">Privacy</a> | <a href="http://www.bargerins.com/terms.php">Terms</a></p>

    </div>
</body>

</html>
