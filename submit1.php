
<?php

	require 'connect.php';
	$conn    = Connect();
	$name    = $conn->real_escape_string($_POST['name']);
	$mob = $conn->real_escape_string($_POST['mob']);
	$fac = $conn->real_escape_string($_POST['fac']);
	$year = $conn->real_escape_string($_POST['year']);





	$query   = "INSERT into british (name,mob,fac,year) VALUES('" . $name ."','" . $mob . "','" . $fac . "','" . $year . "')";
	$success = $conn->query($query);

	if (!$success) {
		die("Couldn't enter data: ".$conn->error);

	}

	$conn->close();

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IEEE</title>
    <link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick-theme.css" />
    <link rel="stylesheet" href="bower_components/fakeLoader/fakeLoader.css">
    <link rel="icon" type="image/x-icon" href="img/icon1.ico" >
    <link rel="icon" type="image/png" href="img/icon.png" sizes="16x16">

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <style type="text/css">
        #main{
            background-color:aliceblue;
            padding: 10px 20px 10px 5px;
           border-radius: 20px;

        }
        h1{
            font-size: 200%;
            color: black;
        }
        h4 {
            color: darkslategray;

        }
        h2{
            color: black;
        }
    </style>
</head>

<body>

    <div id="fakeLoader"></div>

    <header id="home" class="container-fluid">
        <nav href="index.html" class="navbar navbar-dark navbar-toggleabl-md">
            <a class="navbar-brand">IEEE <span>ASU SB</span></a>
            <ul class="nav navbar-nav">
              <li class="nav-item"><a href="index.html" class="nav-link hvr-underline-from-center">home</a></li>
              <li class="nav-item"><a href="about-us.html" class="nav-link hvr-underline-from-center">about</a></li>
              <li class="nav-item"><a href="membership.html" class="nav-link hvr-underline-from-center">membership</a></li>
              <li class="nav-item"><a href="career.html" class="nav-link hvr-underline-from-center">IEEE career</a></li>
              <li class="nav-item"><a href="events.html" class="nav-link hvr-underline-from-center">events</a></li>
            </ul>
        </nav>

    </header>

<h1>Thank You for your time <br>We are waiting for you on 7/5/2017 </h1>

    <footer id ="cu" class="footer-distributed">

        <div class="footer-left">

            <h3>IEEE|<span>ASU SB</span></h3>

            <p class="footer-links">
                <a href="index.html">Home</a> ·
                <a href="membership.html">Membership</a> ·
                <a href="events.html">Events</a> ·
                <a href="about-us.html">About</a>
            </p>

            <p class="footer-company-name">All rights reserved © 2017 IEEE|ASU SB</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p>Faculty of engineering - Abdo basha<span> Cairo, Egypt</span></p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+201120023329</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p>ieee.asu.sb.2009@gmail.com</p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About IEEE ASU SB</span> Established in 2009 at the faculty of engineering Ain Shams University. Since then, IEEE ASU SB has taken the commitment to spread technological awareness and improve both technical & non technical skills of students.
            </p>

            <div class="footer-icons">

                <a href="https://www.facebook.com/ieeeasueg"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/IEEE_ASU_SB"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/ieeeasueg/"><i class="fa fa-instagram"></i></a>
                <a href="https://plus.google.com/106963750167734551831"><i class="fa fa-google"></i></a>

        </div>

        </div>

    </footer>
</body>

<script src="js/jquery-3.2.1.min.js"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="slick-1.6.0/slick/slick.js"></script>
<!-- Fake Loader -->
<script type="text/javascript" src="bower_components/fakeLoader/fakeLoader.min.js"></script>
<!-- Main core JavaScript -->
<script type="text/javascript" src="js/events.js"></script>
</html>



