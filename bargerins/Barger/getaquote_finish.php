<?php
	$coverageType = htmlspecialchars($_POST['coverage']);
	$email = htmlspecialchars($_POST['mail']);
	$phoneNum = htmlspecialchars($_POST['phone']);
	$firstName = htmlspecialchars($_POST['first']);
	$lastName = htmlspecialchars($_POST['last']);
?>
    <!DOCTYPE html>
    <html lang="en-US">

    <head>
        <title>barger_ins</title>
        <meta charset="UTF-8" />
        <meta name="description" content="Barger Insurance Website">
        <meta name="author" content="Luke Keen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="getaquote_style.css" />
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
                    <li><a href="getaquote.php">Service</a></li>
                    <li><a>Blog</a></li>
                    <li><a>About</a></li>
                    <li><a>Contact</a></li>
                </ul>
            </nav>
        </div>

        <div id="quote">
            <h1>Thank you for your interest!</h1>
            <h2>You should be recieving an email comformation at the address given.</h2>
            <h3>If you don't know where to go from here just click the home button below.</h3>
    <!--<?php
		$to = 'barger1@duo-county.com';
		$subject = $firstName .' '. $lastName .' wants a quote.';
		$message = 'Hello, my name is '.$firstName.' '.$lastName.'. I would like a '.$coverageType.' quote. My email address is '.$email.'. Furthermore, I may be contacted by phone at '.$phoneNum.'.';
		$message = wordwrap($message, 50, "\r\n");
		$headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n".'X-Mailer: PHP/'.phpversion();

		mail($to, $subject, $message, $headers);
	?>-->
            <form action="bargerins.php" method="GET">
                <input id="submit" type="submit" value="Home">
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
        <hr></hr>

        <div id="copyright">
            <p>Copyright © 2018 Barger Insurance Agency, Inc. | <a href="privacy.php">Privacy</a> | <a href="terms.php">Terms</a></p>

        </div>
    </body>

    </html>
