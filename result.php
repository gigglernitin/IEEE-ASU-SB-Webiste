<?php
    require 'connect.php';
	$conn    = Connect();
	$mobile    = $conn->real_escape_string($_POST['mobile']);
    $iq1=$conn->real_escape_string($_POST['iq1']);
    $iq2=$conn->real_escape_string($_POST['iq2']);
    $iq3=$conn->real_escape_string($_POST['iq3']);
    $iq4=$conn->real_escape_string($_POST['iq4']);
    $iq5=$conn->real_escape_string($_POST['iq5']);
    $iq6=$conn->real_escape_string($_POST['iq6']);
    $iq7=$conn->real_escape_string($_POST['iq7']);
    $iq8=$conn->real_escape_string($_POST['iq8']);
    $network1=$conn->real_escape_string($_POST['network1']);
    $network2=$conn->real_escape_string($_POST['network2']);
    $network3=$conn->real_escape_string($_POST['network3']);
    $network4=$conn->real_escape_string($_POST['network4']);
    $network5=$conn->real_escape_string($_POST['network5']);
    $network6=$conn->real_escape_string($_POST['network6']);
    $network7=$conn->real_escape_string($_POST['network7']);
    $network8=$conn->real_escape_string($_POST['network8']);
    $network9=$conn->real_escape_string($_POST['network9']);
    $network10=$conn->real_escape_string($_POST['network10']);
    $network11=$conn->real_escape_string($_POST['network11']);
    $programming1=$conn->real_escape_string($_POST['programming1']);
    $programming2=$conn->real_escape_string($_POST['programming2']);
    $results=0;
    if($iq1=="3")
    {
        $results++;
    }
    if($iq2=="3")
    {
        $results++;
    }
    if($iq3=="2")
    {
        $results++;
    }
    if($iq4=="bookstore")
    {
        $results++;
    }
    if($iq5=="dirt")
    {
        $results++;
    }
    if($iq6=="2")
    {
        $results++;
    }
    if($iq7=="2")
    {
        $results++;
    }
    if($iq8=="2")
    {
        $results++;
    }
    if($network1=="128 bits")
    {
        $results++;
    }
    if($network2=="Bridge")
    {
        $results++;
    }
    if($network3=="157, 0x9D")
    {
        $results++;
    }
    if($network4=="Telephone line")
    {
        $results++;
    }
    if($network5=="star network")
    {
        $results++;
    }
    if($network6=="serial")
    {
        $results++;
    }
    if($network7=="a method of determining which device has access to the transmission medium at any time")
    {
        $results++;
    }
    if($network8=="WAN")
    {
        $results++;
    }
    if($network9=="11000000")
    {
        $results++;
    }
    if($network10=="attenuation")
    {
        $results++;
    }
    if($network11=="All of the above")
    {
        $results++;
    }
    if($programming1=="Hello World")
    {
        $results++;
    }
    if($programming2=="6")
    {
        $results++;
    }
    $query   = "INSERT into res (results,mob) VALUES('" . $results . "','" . $mobile . "')";
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
        <nav class="navbar navbar-dark navbar-toggleabl-md">
            <a href="index.html" class="navbar-brand">IEEE <span>ASU SB</span></a>
            <ul class="nav navbar-nav">
              <li class="nav-item"><a href="index.html" class="nav-link hvr-underline-from-center">home</a></li>
              <li class="nav-item"><a href="about-us.html" class="nav-link hvr-underline-from-center">about</a></li>
              <li class="nav-item"><a href="membership.html" class="nav-link hvr-underline-from-center">membership</a></li>
              <li class="nav-item"><a href="career.html" class="nav-link hvr-underline-from-center">IEEE career</a></li>
              <li class="nav-item"><a href="events.html" class="nav-link hvr-underline-from-center">events</a></li>
            </ul>
        </nav>
         </header>
       <div class="container event-cont">

          <div class="row">

<div class="col-sm-12 ">
              <h1>IEEE Career</h1>
            </div></div>
           <div class="row">
           <div class="col-sm-12 image-cont">
              <div > <img class="event-img"  src="images/career.png"></img>
              </div>
              </div>
           </div>
           <div class="row">
           <div class="col-sm-12">
              <h1>Thanks for your time. Your PST is cpmpleted , we will Contact you As soon as possible</h1>
              </div>
           </div>
          </div>

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
