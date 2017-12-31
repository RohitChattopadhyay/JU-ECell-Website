<?php
session_start();

$_SESSION['message'] = "";

//requiring the credentials
include 'assets/dbconnect.php';
// Create connection
$dbName     = "";
$connection = @mysqli_connect($server, $username, $password, $dbName);

// Check connection
if (!$connection) {
    $error_message = trim(preg_replace('/\s+/', ' ', "Connection failed: " . mysqli_connect_error()));
    echo "<script>console.log('" . addslashes($error_message) . "');</script>";
}

?>

    <html>

    <head>
        <?php
if (isset($_POST['coordinator-form-submit'])) {
    $coordinator_name       = addslashes($_POST['coordinator-form-name']);
    $coordinator_email      = addslashes($_POST['coordinator-form-email']);
    $coordinator_department = addslashes($_POST['coordinator-form-department']);
    $coordinator_team       = addslashes($_POST['coordinator-form-team']);
    $coordinator_phone      = addslashes($_POST['coordinator-form-phone']);
    $_SESSION['message']    = "We're extremely happy to know that you want to join our team of talented coordinators! Our team will get back to you shortly!";
    
    $Csql = "INSERT INTO coordinators (name, email, phone, department, post) VALUES ('$coordinator_name','$coordinator_email','$coordinator_phone','$coordinator_department','$coordinator_team')";
    if (mysqli_query($connection, $Csql)) {
    } else {
        $error_message = trim(preg_replace('/\s+/', ' ', "Connection failed: " . mysqli_connect_error()));
        echo "<script>console.log(\"" . addslashes($error_message) . "\");</script>";
    }
}

if (isset($_POST['ambassador-form-submit'])) {
    $ambassador_name     = addslashes($_POST['ambassador-form-name']);
    $ambassador_email    = addslashes($_POST['ambassador-form-email']);
    $ambassador_college  = addslashes($_POST['ambassador-form-college']);
    $ambassador_phone    = addslashes($_POST['ambassador-form-phone']);
    $ambassador_reason  = addslashes($_POST['ambassador-form-reason']);
    $_SESSION['message'] = "You just signed up to be well-informed about the great things we do at the Jadavpur University E-Cell!<br>
Ideate. Innovate. Build!";
    
    $Asql = "INSERT INTO ambassador (name, email, phone, college, reason) VALUES ('$ambassador_name','$ambassador_email','$ambassador_phone','$ambassador_college','$ambassador_reason')";
    if (mysqli_query($connection, $Asql)) {
    } else {
        $error_message = trim(preg_replace('/\s+/', ' ', "Connection failed: " . mysqli_connect_error()));
        echo "<script>console.log(\"" . addslashes($error_message) . "\");</script>";
    }
}

if (isset($_POST['contact-form-submit'])) {
    $contact_name        = addslashes($_POST['contact-form-name']);
    $contact_email       = addslashes($_POST['contact-form-email']);
    //		$contact_institute=addslashes($_POST['contact-form-college']);
    $contact_message     = addslashes($_POST['contact-form-message']);
    $contact_phone       = addslashes($_POST['contact-form-phone']);
    $_SESSION['message'] = "We're extremely happy to see your interest in the Jadavpur University E-Cell! Our team will get back to you shortly!";
    
    $Csql = "INSERT INTO contact (name, email, phone, message) VALUES ('$contact_name','$contact_email','$contact_phone','$contact_message')";
    if (mysqli_query($connection, $Csql)) {
    } else {
        $error_message = trim(preg_replace('/\s+/', ' ', "Connection failed: " . mysqli_connect_error()));
        echo "<script>console.log(\"" . addslashes($error_message) . "\");</script>";
    }
}
?>
            <meta charset="utf-8">
            <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
	    <meta name="description" content="Entrepreneurship Cell of  Jadavpur University aims at manifesting the entrepreneurial spirit of young students by conducting workshops, competitions & sessions.">
	    <meta property="og:description" content="We build young entrepreneurs through our initiatives.">
            <meta property="og:type" content="website">
            <meta property="og:image" content="https://i.imgur.com/hF7wWFJ.png">
            <meta property="og:url" content="https://juecell.in/"> 
            <meta property="og:title" content="JU Entrepreneurship Cell">

            <title>JU E-CELL | A Jadavpur University,Kolkata Students initiative</title>

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <link rel="stlyesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="assets/css/homestyle.css?noached">
            <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bowlby+One+SC|Changa+One|Neuton|Titan+One|Archivo+Black|Scada|Changa+One|Anton" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="assets/js/modernizr.custom.js"></script>
            <script src="assets/js/jssor_home.js"></script>
            <script src="assets/js/smoothScroll.js"></script>
            <script>
                $(function() {
                    $.scrollSpeed(100, 800);
                });
            </script>

            <style>
                .container-fluid {
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                }
                
                .plus-for-numbers {
                    display: none;
                }
                
                #footer .footer-links a {
                    text-decoration: none;
                    color: white;
                    font-family: 'Merriweather', serif;
                }
                
                #home-gallery .ti {
                    display: none;
                }
                
                @media screen and (min-width: 900px) {
                    .honeycomb-size-fix {
                        padding-left: 50px;
                        padding-right: 50px;
                    }
                }
                
                .hexLink .skew-box-diagonal-border {
                    transform: rotate3d(0 0 1 90deg) skewY(-40deg);
                    border: 3px solid red;
                    height: 100%;
                    width: 100%;
                    z-index: 1;
                    bottom: 0;
                    left: -1.75%;
                }
                
                .hexLink .box-vertical-border {
                    width: 100%;
                    height: 100%;
                    left: 0;
                    border: 3px solid red;
                    z-index: 2;
                }
                
                .carousel-image-bg {
                    color:white;
                    background-position: center top;
                    background-attachment: fixed;
                    background-size: cover;
                    width: 100%;
                    height: 100%
                }


            .font-outline {
                text-shadow: -1px -1px 0 #000,      1px -1px 0 #000,      -1px 1px 0 #000,      1px 1px 0 #000,        -2px 0 0 #000,      2px 0 0 #000,      0 2px 0 #000,      0 -2px 0 #000;
            }

            .heading-1 {
                font-size: 5vw;
            }
        
            .heading-2 {
                font-size: 4vw;
            }
            
            .heading-3 {
                font-size: 3vw;
            }
            
            @media only screen and (max-width: 780px) {
                .heading-1 {
                    font-size: 12vw;
                }

                .heading-2 {
                    font-size: 9vw;
                }

                .heading-3 {
                    font-size: 5vw;
                }
            }
        
        </style>
           <script type="text/javascript">
    //<![CDATA[
        $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
          })
    //]]>
</script>   
        <style>
        body {
	overflow: hidden;
}

/* Preloader */
#preloader {
	position: fixed;
	top:0;
	left:0;
	right:0;
	bottom:0;
	background-color:#231F20; /* change if the mask should have another color then white */
	z-index:999999999999999999999999999; /* makes sure it stays on top */
}

#status {
	width:100%;
	height:100%;
	position:absolute;
/*	left:50%; /* centers the loading animation horizontally on the screen */
/*	top:50%; /* centers the loading animation vertically on the screen */
	background-image:url(./assets/img/preLoader.gif); /* path to your loading animation */
	background-repeat:no-repeat;
	background-position:center;
/*  margin:-20% 0 0 -0%; /* is width and height divided by two */
}
        </style>
    </head>

    <body id="body-of-the-page">
        
        <div id="preloader">
	<div id="status">&nbsp;</div>
</div>
        <button class="md-trigger" data-modal="modal-12" id="thank-you-modal-button" style="display:none"></button>
        <div class="md-modal md-effect-4" id="modal-12">
            <div class="md-content">
                <h3>Thank You<a class="md-close" style="float:right ; text-decoration:none;color:white;cursor:pointer;">x</a></h3>
                <div>
                    <p>
                        <?php
echo $_SESSION['message'];
?>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div>
                <section class="navigation" style="width:100%;position:fixed ; z-index : 100">
                    <div class="nav-container">
                        <div class="brand" style="width : 25%">
                            <p style="padding-top: 0px;margin-top: 0;">
                                <a href="#body-of-the-page"><img src="https://i.imgur.com/NSBCfAX.png" style="height: 80%;margin-top: 4px;"></a>
                            </p>
                        </div>

                        <nav class="headd">
                            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                            <ul class="nav-list" style="font-family: 'Asap', sans-serif;">

                                <li>
                                    <a href="#about" >About</a>
                                </li>
                                <li>
                                    <a href="#pasts">Initiatives</a>
                                    <ul class="nav-dropdown" style="display: none;">
                                        <li>
                                            <a href="./hult">Hult Prize</a>
                                        </li>
                                        <li>
                                            <a href="#past-events-sis">Summer in a Startup</a>
                                        </li>
                                        <li>
                                            <a href="#past-events-abc">abc | Analytics Club</a>
                                        </li>
                                        <li>
                                            <a href="#past-events-e-week">E-Weekend</a>
                                        </li>
                                    </ul>
                                </li>
                               <li>
                                    <a href="./winner/" >Winners</a>
                                </li>
                       <!--         <li>
                                    <a href="#">The Team</a>
                                </li> -->
                                <li>
                                    <a href="#apply">Apply</a>
                                    <ul class="nav-dropdown" style="display: none;">

                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#Coordinator-Modal">As Coordinator</a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#Ambassador-Modal">As Campus Ambassador</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#ContactUs">Contact</a>
                                </li>
                                <li>
                                    <a href="./alumni" target="_black">For Alumni</a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        
                                            <!-- 2nd -->
                        <div class="item carousel-image-bg" id="topthree" style="background-image:url('assets/img/carousel/2.svg');background-color:#5E5A5B">

                            <!-- /header-text -->
                        </div>
                        
                        
                        
                        
                                            <!-- 3rd -->
                        <div class="item carousel-image-bg" id="toptw" style="background-image:url('assets/img/carousel/3.png'); background-color:#f3f337">

                            </div>
                            <!-- /header-text -->
                                                    <div class="header-text"  >
                                <div class="col-md-12 text-left font-outline" style=" color:white; width: 100% ; text-align: left">
                                    <div class="heading-1"  style=" ; font-weight: bold;font-family: 'Archivo Black', sans-  serif">JADAVPUR UNIVERSITY</div>
                                        <div class="heading-2">Entrepreneurship Cell</div>
                                        <div class="heading-3">Dedicated to inspiring young minds and imparting experience.</div>
                                        <br>
                                    
                                </div>
                        </div>
                        
                        
                        
                        
                        
                                    <!-- 1st -->
                        <div class="item active carousel-image-bg" id="topone" style="background-image:url('assets/img/carousel/1.png');">
<!--                            <div class="header-text " style="color:white">
                                <div class="col-md-12 text-left" style="color:white ; width: 100% ; text-align: left">
                                    <h2 style="font-size: 56px ; font-weight: bold;font-family: 'Archivo Black', sans-serif
">
                                JADAVPUR UNIVERSITY
                             </h2>

                                    <h3>
                                 Entrepreneurship Cell
                             </h3>
                                    <br>
                                    <div class="opening-button">
                                        <button class="btn btn-danger">KNOW MORE</button>
                                    </div>
                                </div>
                            </div>-->
                            <!-- /header-text -->
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control slide_fade" href="#myCarousel" data-slide="prev" onmouseover="slide_on_hover(0,1)" onmouseout="slide_on_hover(0,0)">
                        <span class="glyphicon glyphicon-chevron-left" id="slide_on_hover_0" style="display:none"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control slide_fade" href="#myCarousel" data-slide="next" onmouseover="slide_on_hover(1,1)" onmouseout="slide_on_hover(1,0)">
                        <span class="glyphicon glyphicon-chevron-right" id="slide_on_hover_1" style="display:none"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <script>
                        function slide_on_hover(dir, fState) {
                            var target = "slide_on_hover_" + dir;
                            if (fState == 1) {
                                document.getElementById(target).style.display = "inline";
                            } else if (fState == 0) {
                                document.getElementById(target).style["display"] = "none";
                            }
                        }
                    </script>
                </div>

            </div>
        </div>
        <div class="container-fluid ">
            <div class='paget vision' style="text-align:center">
                <div id="vision" class=" right-stop left-stop " style="text-align:center">
                    <h2 style="color:#B69BFA ; font-family :'Playfair Display', serif; font-size: 42px;font-weight:bold">
                  VISION
               </h2>
                    <br>
                    <p style="text-align: justify;font-size: 15px ; font-family: 'Raleway', sans-serif;">
                        Entrepreneurship is the set of wings that a country requires to soar higher. And the Jadavpur University Entrepreneurship Cell aims at invoking a spirit of entrepreneurship among the new generation, a stepping stone towards the better future of our Nation and her growing economy. We believe in providing a platform to guide these creative minds through effective interaction between the student body and esteemed members of the corporate world, successful entrepreneurs, investors, venture capitalists, thus helping their ideas transform into entrepreneurial ventures. We aim to help dreams take off, here at Jadavpur University!
                    </p>
                </div>
            </div>
            <div class='paget' style="background-color: #100F0F !important">
                <div class='sectiont featuret-1'>
                    <div class="uppertest hvr-ripple-out"> <i class="fa fa-lightbulb-o fa-3x" aria-hidden="true" style="color:black"></i></div>
                    <div>
                        <h3 style="color: #B69BFA ;font-family: 'Playfair Display' , serif;font-weight:bold">IDEATE</h3>
                    </div>
                    <div>
                        <p style="text-align: center ; font-family: 'Raleway', sans-serif;">Put on your Imagination Hats! </p>
                    </div>
                </div>
                <div class='sectiont featuret-2'>
                    <div class="uppertest hvr-ripple-out"><i class="fa fa-users fa-3x" aria-hidden="true"></i></div>
                    <div>
                        <h3 style="color: #B69BFA ;font-family: 'Playfair Display' , serif;font-weight:bold">INNOVATE</h3>
                    </div>
                    <div>
                        <p style="text-align: center ; font-family: 'Raleway', sans-serif;">Explore hidden potentials!</p>
                    </div>
                </div>
                <div class='sectiont featuret-3'>
                    <div class="uppertest hvr-ripple-out"><i class="fa fa-cogs fa-3x" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h3 style="color: #B69BFA ;font-family: 'Playfair Display' , serif;font-weight:bold">BUILD</h3>
                    </div>
                    <div>
                        <p style="text-align: center">Pick up your Magic Wands!</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid upcoming-events">

            <div class="upcoming-header">
                <h1 style="color: #2b2828; padding-top: 30px ; font-family: 'Playfair Display' , serif; font-weight: bold ">UPCOMING EVENTS</h1>
                <p style="color:#585252;font-size:18px">An overview of the exciting events we have planned</p>
            </div>
            <div class="cards">

                <div class="card card-1">
                    <div class="card-image">
                        <img class="upcoming-card-1-img" src="https://i.imgur.com/Wmqxv19.png" alt="Josh Talks"></img>
                    </div>

                    <div class="card-body">
                        <h2 style="text-align: center;color: black;font-family:'Roboto', seriff;font-weight: 500">Josh Talks</h2>
                        <p style="color: #666 ; font-family: 'Raleway', sans-serif;">Every idea needs a proper blend of inspiration and motivation to come up with flying colours. So, here we have Josh Talks to provide the right driving force to the young and bright minds of the nation. This year JU E-Cell is all set to collaborate with Josh Talks and put forth its maiden venture with many eminent speakers gracing the the occasion like Indranil Roy (CEO Outlook Group) , Colonel Prabir Sengupta (Param Vir Chakra Awardee) to name a few.</p>

                        <p><strong style="color: black ; font-size : 16px">Where </strong>: Jadavpur University Gandhi Bhavan </p>
                        <p><strong style="color: black ; font-size : 16px">When :</strong> 14th January , 2018 </p>
                        <p style="text-align: center"><a href="https://events.joshtalks.com/kolkata18/" class="btn btn-lg btn-primary detail-button">Details</a></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img class="upcoming-card-1-img" src="https://i.imgur.com/fLGTOmN.png" alt="Falling Walls Lab"></img>
                    </div>

                    <div class="card-body">
                        <h2 style="text-align: center;color: black;font-family:" DINWebPro ", Helvetica, Arial, sans-serif;font-weight: 500">Falling Walls</h2>
                        <p style="color: #666 ; font-family: 'Raleway', sans-serif; ">On 1989 witnessed the fall of the Berlin wall. This paved the path for the establishment of The Falling Walls Lab in Berlin in 2009 , which by far is considered to be one of the best talk shows on new scientific discoveries where scientists , economists, Nobel laureates and professors and inventors orate about their discoveries and make the world aware of the amazing inventions having the potential to change the world.</p>

                        <p><strong style="color: black ; font-size : 16px">Where </strong>: Jadavpur University Gandhi Bhavan </p>
                        <p><strong style="color: black ; font-size : 16px">When :</strong> April , 2018 </p>
<!--                        <p style="text-align: center"><a href="#" class="btn btn-lg btn-primary detail-button">Details</a></p>-->
                    </div>
                </div>

            </div>

        </div>

        <div class="container-fluid ">
            <div class="section honeycomb-size-fix" style="text-align: center" id="pasts">
                <h1 style="color: white ;font-family: 'Changa One', cursive;
               ">PAST EVENTS</h1>
                <ul id="hexgrid" style="padding-left:0px">
                    <li class="hex">
                        <div class="hexIn" id="past-events-hult-prize">
                            <a class="hexLink" href="./hult" target="_blank">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/b92rjqb.png" alt="" />
                                <h3 style="font-weight:bold" >Hult Prize at JU</h3>
                                <p>Nobel Prize for Student Entrepreneurs</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn" id="past-events-abc">
                            <a class="hexLink" href="./abc" target="_blank">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/VKnSAKH.jpg" alt="" />
                                <h3 style="font-weight:bold" >JU ABC Club</h3>
                                <p>Analytics, Business and Consulting Division</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/TcoGzRz.png" alt="" />
                                <h3 style="font-weight:bold" >Jet Set Vote</h3>
                                <p>Spreading Awareness about Voting with Youth Ki Awaaz</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn"  id="past-events-sis">
                            <a class="hexLink">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/qHO3RqD.png" alt="Summer in a Startup " />
                                <h3 style="font-weight:bold" >Summer in a Startup</h3>
                                <p>Grab amazing internships this summer!</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn" id="past-events-e-week">
                            <a class="hexLink">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/9hrDuBc.png" alt="E-Weekend 2017" />
                                <h3 style="font-weight:bold" >E-Weekend 2017</h3>
                                <p>A trio of events that brought 400+ enthusiasts together!</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/jQWjiWF.png" alt="Facebook on Campus" />
                                <h3 style="font-weight:bold" >FB on Campus</h3>
                                <p>JU E-Cell, with FB & YouthKiAwaaz, set up a Startup workshop!</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn" id="past-events-s-week">
                            <a class="hexLink">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/Rcs85FJ.png" alt="" />
                                <h3 style="font-weight:bold" >Start-Up Weekend</h3>
                                <p>54 engaging hours of brainstorming, B-plan making and mentoring!</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/oos8JME.png" alt="" />
                                <h3 style="font-weight:bold" >Epiphany</h3>
                                <p>Dive into the Case Challenge @Srijan</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/e4ZNWyQ.png" alt="" />
                                <h3 style="font-weight:bold" >B-Model</h3>
                                <p>Pitch your Business plan @Srijan</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/lDO9V4O.png" alt="" />
                                <h3 style="font-weight:bold" >The Great Debate</h3>
                                <p>The most prestigious Debate in the City with BDHC</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                    <li class="hex">
                        <div class="hexIn">
                            <a class="hexLink">
                                <span class="box-vertical-border"></span>
                                <img src="https://i.imgur.com/tWqBvhe.png" alt="NASSCOM" />
                                <h3 style="font-weight:bold" >Analytics Workshop</h3>
                                <p>Two-day workshop on Hadoop & Sentiment Analysis by NIVT</p>
                                <span class="hexIn skew-box-diagonal-border"></span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <div class="container-fluid ">
            <div class='application-container' id="daaamn">
                <div class='application'>
                    <div id='about' class="col-md-8">
                        <h1 style="font-family: 'Playfair Display' , serif
                  ;color:#B69BFA;font-weight: bold;font-size:38px">ABOUT US</h1>
                        <p style="text-align:justify;font-size: 15px ; font-family: 'Raleway', sans-serif;">
                            Are you a Start-up Enthusiast with a plan in hand, looking for the missing piece in your start-up puzzle? Are you a Venture Capitalist or Angel Investor, hunting to find the best place to invest ? Or, Are you just a Student with a passionate heart and curious mind, exploring all what college-life has to offer? Well, you have come to the right place! Jadavpur University Entrepreneurship-Cell is an organisation that aims to actively infuse the spirit of entrepreneurship among students by creating just the perfect environment that is start-up friendly. Right from sowing the seed of Entrepreneurship in aspiring hearts, to watering them with workshops and training and then providing them with the manures of Mentoring, the exuberant team of student coordinators at Jadavpur University E-Cell strive hard to make your Start-up journey smooth, enriching and euphoric! Helping dreams take off at Jadavpur University, The Entrepreneurship Cell.
                        </p>
                    </div>
                    <div class='apply col-md-4' id="apply">
                        <h1 style="font-family: 'Playfair Display' , serif
                     ;color:#B69BFA;font-weight: bold;font-size:38px">Join Us</h1>
                        <div class="application-buttons">
                            <button type="button" class="btn btn-info btn-lg hvr-float-shadow" data-toggle="modal" data-target="#Coordinator-Modal">As Coordinator</button>
                            <button type="button" class="btn btn-info btn-lg hvr-float-shadow" data-toggle="modal" data-target="#Ambassador-Modal">As Campus Ambassador</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <div class="counter-section">
                <div>
                    <h2 style="color: white ;font-family: 'Archivo Black', sans-serif"> In Numbers </h2>
                </div>
                <div class="countersz" style="color: white;font-family:'Playfair Display' , serif">
                    <div>
                        <span id="counter" class="counter-value" data-count="500" style="font-size: 45px; font-family: 'Raleway', sans-serif;">0</span><span style="font-size:40px" class="plus-for-numbers counter-value">+</span>
                        <h3>Members</h3>
                    </div>
                    <div>
                        <span id="counter" class="counter-value" data-count="50" style="font-size: 45px;font-family: 'Raleway', sans-serif;">0</span><span style="font-size:40px" class="plus-for-numbers counter-value">+</span>
                        <h3>Coordinators</h3>
                    </div>
                    <div>
                        <span id="counter" class="counter-value" data-count="75" style="font-size: 45px;font-family: 'Raleway', sans-serif;">0</span><span style="font-size:40px" class="plus-for-numbers counter-value">+</span>
                        <h3>Campus<br>Ambassadors</h3>
                    </div>
                    <div>
                        <span id="counter" class="counter-value" data-count="5" style="font-size: 45px;font-family: 'Raleway', sans-serif;">0</span><span style="font-size:40px" class="plus-for-numbers counter-value">+</span>
                        <h3>Events</h3>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="container-fluid ">
            <div id="home-gallery" style="text-align:center">
                <div>
                    <h1 style="color: black ;font-family: 'Changa One', cursive; text-align:center"> Gallery </h1>
                    <hr>
                </div>
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="./assets/img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="https://i.imgur.com/7eNMu4gh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/7eNMu4gh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/DZGzy40h.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/DZGzy40h.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/4FK4wTTh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/4FK4wTTh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/BipMlJ6h.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/BipMlJ6h.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/NPLfNkDh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/NPLfNkDh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/G6fpYyVh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/G6fpYyVh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/S3gdrXJh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/S3gdrXJh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/0DixybJh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/0DixybJh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/sSp5in3h.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/sSp5in3h.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/L2cGMaVh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/L2cGMaVh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/QrqR21wh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/QrqR21wh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/MHbEul0h.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/MHbEul0h.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/hu2vjelh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/hu2vjelh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/mGO3iCUh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/mGO3iCUh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/ACRz2zXh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/ACRz2zXh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/7VCL82Lh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/7VCL82Lh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/Spv6qbWh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/Spv6qbWh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/qqDGkL4h.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/qqDGkL4h.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/7ORANtWh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/7ORANtWh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/yxAuSZNh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/yxAuSZNh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/Slyzj2uh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/Slyzj2uh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/pWyDwqjh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/pWyDwqjh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                        <div>
                            <img data-u="image" src="https://i.imgur.com/CoseHySh.jpg" />
                            <div data-u="thumb">
                                <img data-u="thumb" src="https://i.imgur.com/CoseHySh.jpg" />
                                <div class="ti">Tiltle of image</div>
                            </div>
                        </div>
                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort111" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;cursor:default;" data-autocenter="1" data-scale-bottom="0.75">
                        <div data-u="slides">
                            <div data-u="prototype" class="p">
                                <div data-u="thumbnailtemplate" class="t"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:162px;left:25px;" data-scale="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:162px;right:25px;" data-scale="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>
                <script type="text/javascript">
                    jssor_1_slider_init();
                </script>
            </div>
            <div id="testinomial" class="container-fluid">
                <div class="roww">
                    <div class="col-md-12">
                        <h1 style="color: black ;font-family: 'Changa One', cursive; text-align:center"> Testimonial </h1>
                        <div class="carousel slide" data-ride="carousel" id="testinomial-quote-carousel">

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p style="padding-left:30px ; font-family: 'Alegreya Sans', sans-serif; font-size:21px;">Really great to hear the ECell in JU has achieved so much in just a year. Only remember, hard work and taking risk are never going to go out of fashion in any era. Just add this to your repertoire and you all will flourish.</p>
                                                <small><b>Sauvik Banerjee</b><br>VP ,Tata CLiQ</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p style="padding-left:30px ; font-family: 'Alegreya Sans', sans-serif; font-size:21px">To any entrepreneur: if you want to do it, do it now. If you don’t, you’re going to regret it. Do Or do not. There is no try.It’s not about ideas. It’s about making ideas happen.I congratulate to all those students who made rigorous efforts to make this idea of an Entrepreneurship Cell in Jadavpur University come to life.</p>
                                                <small><b>Prof. Surjayan Sen</b><br>VC, Jadavpur University</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p style="padding-left:30px ; font-family: 'Alegreya Sans', sans-serif; font-size:21px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testinomial-quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://i.imgur.com/2tqMelrt.png" alt="">
                                </li>
                                <li data-target="#testinomial-quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://i.imgur.com/cXQ9Wsrt.png" alt="">
                                </li>
                                <li data-target="#testinomial-quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#testinomial-quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#testinomial-quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
<div class="container-fluid ">
            <div class="container-contact">
                <div class="container-form col-sm-7 col-md-5" id="ContactUs">
                    <form action="#ContactUs" method="post" id="contact-form" name="contact-form">
                        <h1> Contact Us </h1>
                        <ul class="flex-outer">

                            <li>
                                <label for="contact-form-name"></label>
                                <input style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color:  black;" type="text" name="contact-form-name" id="contact-form-name" placeholder="Name*" required>
                            </li>

                            <li>
                                <label for="contact-form-email"></label>
                                <input style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color:  black;" type="email" name="contact-form-email" id="contact-form-email" placeholder="EMail Address*" required>
                            </li>
                            <li>
                                <label for="contact-form-phone"></label>
                                <input style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color:  black;" type="text" pattern = "[0-9]{1,10}" name="contact-form-phone" id="contact-form-phone" placeholder="Contact Number">
                            </li>
                            <li>
                                <label for="contact-form-message"></label>
                                <textarea style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color:  black; border-radius:0" rows="6" name="contact-form-message" id="contact-form-message" placeholder="Your message*"></textarea>
                            </li>

                            <li>
                                <center style="width:100%;text-align:right ">
                                    <input type="submit" value="Send" id="contact-form-submit" name="contact-form-submit" style="
    position:  relative;
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    z-index: 0;
    margin-right: 0 ;
    background:  black;
    box-shadow: 0 0;
    border-radius: 0 ; 
">
                                </center>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="container-map" style="margin-left:0;padding-right:0;height:600px">
                    <h1>FIND US HERE </h1>
                    <div id="map" style="width: 100%; color: black"></div>
                </div>
            </div>

        </div>
            <div class="container-fluid" style="background-color:#1f2930">
                <div id="footer" class="container">
                    <div id="img-footer" class="col-sm-4">
                        <span><img id="footer-logo" src="https://i.imgur.com/NSBCfAX.png"  style="margin-top:20px;height:70px"></span>
                        <hr>
                        <div id="footer-info">
                            <span id="footer-info" style="font-family: 'Merriweather', serif;">
               Jadavpur University<br>
               Kolkata, IN
               </span>
                            <br>
                            <br>
                            <br>
                            <span style="padding-top:10px" style="font-family: 'Merriweather', serif;"><a href="mailto:contact@juecell.in" style="text-decoration:none;color:inherit">contact@juecell.in</a>
               </span>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <span style="font-family: 'Anton', sans-serif;">
               <h3>Navigate</h3>
            </span>
                        <br>
                        <br>
                        <span class="footer-links">
            <a href="#body-of-the-page">Home</a><br><br>
            <a href="#about">About</a><br><br>
            <a href="#home-gallery">Gallery</a><br><br>
            <a href="#testinomial">Testinomial</a><br><br>
            <a href="./winner/">Winners</a><br><br>
            <a href="#ContactUs">Reach Us</a><br><br>
                    </span>
                    </div>
                    <div class="col-sm-2">
                        <span style="font-family: 'Anton', sans-serif;">
               <h3>Initiatives</h3>
            </span>
                        <br>
                        <br>
                        <span class="footer-links">
            <a href="./hult" target="_blank">Hult Prize</a><br><br>
            <a href="#past-events-e-week">E-Weekend</a><br><br>
            <a href="#past-events-s-week">Startup Weekend</a><br><br>
            <a href="#past-events-sis">Summer in a Startup</a><br><br>
            </span>
                    </div>
                    <div class="col-sm-3">
                        <span style="font-family: 'Anton', sans-serif;">
               <h3>Social Media</h3>
            </span>
                        <br>
                        <br>
                        <span>
					<a href="https://www.facebook.com/juecell/" target="_blank" class="col-sm-2 footer-social fa fa-facebook"></a>
					<a href="https://twitter.com/ju_ecell" target="_blank" class="col-sm-2 footer-social fa fa-twitter"></a>
					<a href="https://in.linkedin.com/company/jadavpur-university-entrepreneurship-cell" target="_blank" class="col-sm-2 footer-social fa fa-linkedin"></a>
					<a href="https://www.youtube.com/channel/UCAiMo_wiKzdJd0rPoBlmf3Q" target="_blank" class="col-sm-2 footer-social fa fa-youtube-play"></a>
					<a href="https://www.instagram.com/ecell_jadavpur/" target="_blank" class="col-sm-2 footer-social fa fa-instagram"></a>
			</span>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            <div class="col-xs-12" style="background-color:grey; text-align:center">
                <div>©2018 Jadavpur University Entrepreneurship Cell</div>
                <div>Crafted by &#128009;</div>
            </div>

        </div>
        </div>

        <!-- Modal content for coordinator-->
        <div id="modal-form" class="row">
            <div class="modal fade" id="Coordinator-Modal" role="dialog" class="col-xs-12">
                <div class="formstl">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Coordinator Application Form</h3>
                            <button style="background: 00; border: 0; font-size: 21px;" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="#about" method="post" id="coordinator-form" name="coordinator-form" style="display:inline">
                                Only for JU Students
                                <input type="text" id="coordinator-form-name" name="coordinator-form-name" placeholder="Name*" required>
                                <input type="email" id="coordinator-form-email" name="coordinator-form-email" placeholder="Email*" required>
                                <select class="form-control" id="coordinator-form-department" name="coordinator-form-department" placeholder="Department" >
                            <option value="" selected disabled hidden>Department</option>
                            <optgroup label="Engineering &amp; Technology">
                               <option value="Architecture">Architecture</option>
                               <option value="Chemical Engineering">Chemical Engineering</option>
                               <option value="Civil Engineering">Civil Engineering</option>
                               <option value="Computer Science &amp; Engineering">Computer Science &amp; Engineering</option>
                               <option value="Construction Engineering">Construction Engineering</option>
                               <option value="Electrical Engineering">Electrical Engineering</option>
                               <option value="Electronics &amp; Telecommunication Engineering">Electronics &amp; Telecommunication Engineering</option>
                               <option value="Food Technology &amp; Bio-Chemical Engineering">Food Technology &amp; Bio-Chemical Engineering</option>
                               <option value="Information Technology">Information Technology</option>
                               <option value="Instrumentation &amp; Electronics Engineering">Instrumentation &amp; Electronics Engineering</option>
                               <option value="Mechanical Engineering">Mechanical Engineering</option>
                               <option value="Metallurgical &amp; Material Engineering">Metallurgical &amp; Material Engineering</option>
                               <option value="Pharmaceutical Technology">Pharmaceutical Technology</option>
                               <option value="Power Engineering">Power Engineering</option>
                               <option value="Printing Engineering">Printing Engineering</option>
                               <option value="Production Engineering">Production Engineering</option>
                            </optgroup>
                            <optgroup label="Arts">
                                        <option value="Bengali">Bengali</option>
                                        <option value="Comparative Literature">Comparative Literature</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Education">Education</option>
                                        <option value="English">English</option>
                                        <option value="Film Studies">Film Studies</option>
                                        <option value="History">History</option>
                                        <option value="International Relations">International Relations</option>
                                        <option value="Library &amp; Information Science">Library &amp; Information Science</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Physical Education">Physiring">Production Engineering</option>
                             </optgroup>
                                    <optgroup label="Science">
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Geological sciences">Geological sciences</option>
                                        <option value="Instrumentation Science">Instrumentation Science</option>
                                        <option value="Life science &amp; Bio-technology">Life science &amp; Bio-technology</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Physics">Physics</option>
                                    </optgroup>
                                </select>
                                <input type="number" id="coordinator-form-phone" name="coordinator-form-phone" placeholder="Phone*" required>
                                <select name="coordinator-form-team" id="coordinator-form-team" class="form-control" required>
                                    <option value="1" selected disabled hidden>Select a team Preference*</option>
                                    <option value="Any">Any</option>
                                    <option value="Events">Events</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Public Relations/Sponsorship">Public Relations/Sponsorship</option>
                                    <option value="Creative content">Creative content</option>
                                    <option value="Technical">Technical</option>
                                    <option value="Finanace/Logistics">Finanace/Logistics</option>
                                </select>
                                <br>
                                <input type="submit" value="Apply" id="coordinator-form-submit" name="coordinator-form-submit">
                            </form>
                            <span id="coordinator-form-ty" style="display:none">Thank You for applying, We will get back to you soon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal content for coordinator ends-->
        <!-- Modal content for Campus Ambassador-->
        <div id="modal-form" class="row">
            <div class="modal fade" id="Ambassador-Modal" role="dialog" class="col-xs-12">
                <div class="formstl">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Apply as a Campus Ambassador</h3>
                            <button style="background: 00; border: 0; font-size: 21px;" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="#about" method="post" id="ambassador-form" style="display:inline">
                                Be a part of the extended family
                                <input type="text" id="ambassador-form-name" name="ambassador-form-name" placeholder="Name*" required>
                                <input type="text" id="ambassador-form-email" name="ambassador-form-email" placeholder="Email*" required>
                                <input type="text" id="ambassador-form-college" name="ambassador-form-college" placeholder="College/University*" required>

                                <textarea name="ambassador-form-reason" id="ambassador-form-reason" cols="30" rows="6" placeholder="Your reasons for applying"></textarea>
                                <input type="number" id="ambassador-form-phone" name="ambassador-form-phone" placeholder="Phone">
                                <br>
                                <input type="submit" value="Apply" name="ambassador-form-submit">
                            </form>
                            <span id="ambassador-form-ty" style="display:none">Thank You for subscribing.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal content for Campus Ambassador ends-->
        
      <script type="text/javascript" src="assets/js/home.js">      </script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="assets/js/GMap.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRiDrm36Kcz2OWvZgnwFAB1-Lk9SIQOlY&callback=initMap"></script>
	 
	 
	 
	 
	 
      <div class="md-overlay"></div>
      <!-- the overlay element -->
      <!-- classie.js by @desandro: https://github.com/desandro/classie -->
      <script src="assets/js/classie.js"></script>
      <script src="assets/js/modalEffects.js"></script>
      <!-- for the blur effect -->
      <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
      <script>
         // this is important for IEs
         var polyfilter_scriptpath = '/js/';
    </script>


      <?php 
         if(strlen($_SESSION['message'])!=0){
         	echo "<script>
         	function button4ty(){
         	document.getElementById('thank-you-modal-button').click();
         }
         window.onload= button4ty ;
         	</script>";
         }
         ?>
    </body>

    </html>