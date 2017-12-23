<?php
$JSON = json_decode(file_get_contents('eventDetails.json'), true); // Getting JSON file named eventDetails.json and encoding the JSON into an associative array object

$eCode= $_SERVER['QUERY_STRING']; //Will get input from URL Query
$i=0;
$HTML_summary = $JSON[$eCode]['summary'];
$HTML_name = $JSON[$eCode]['name'];
$HTML_year =  $JSON[$eCode]['year'];
$SQL_ecode =  $JSON[$eCode]['code'];
$SQL_year =  $JSON[$eCode]['SQLyear'];
$HTML_display_section2 = $JSON[$eCode]['section'][1]; // (0)1-> Gallery           (1)2->Judges           (2)3-> Sponsors
$HTML_display_section3 = $JSON[$eCode]['section'][2];
$HTML_style_Header_bgColor = $JSON[$eCode]['color'][0]['bg-color'];
$HTML_style_Header_fontColor = $JSON[$eCode]['color'][0]['font-color'];
$HTML_style_Front_fontColor = $JSON[$eCode]['color'][1]['font-color'];
$HTML_style_Front_bgImg = $JSON[$eCode]['color'][1]['bg-img'];
$HTML_style_Front_bgColor = $JSON[$eCode]['color'][1]['bg-color'];
$HTML_style_Gallery_bgColor = $JSON[$eCode]['color'][2]['bg-color'];
$HTML_style_Gallery_fontColor = $JSON[$eCode]['color'][2]['font-color'];
$HTML_style_Judges_bgColor = $JSON[$eCode]['color'][3]['bg-color'];
$HTML_style_Judges_fontColor = $JSON[$eCode]['color'][3]['font-color'];
$HTML_style_Judges_sectionName = $JSON[$eCode]['color'][3]['section_name'];
$HTML_style_Sponsor_bgColor = $JSON[$eCode]['color'][4]['bg-color'];
$HTML_style_Sponsor_fontColor = $JSON[$eCode]['color'][4]['font-color'];
$HTML_style_Sponsor_sectionName = $JSON[$eCode]['color'][4]['section_name'];
$HTML_style_Sponsor_bgColor = $JSON[$eCode]['color'][4]['bg-color'];
$HTML_style_Footer_fontColor = $JSON[$eCode]['color'][5]['font-color'];
$HTML_style_Footer_bgColor = $JSON[$eCode]['color'][5]['bg-color'];

//DateBase PHP Code Begins
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juecelli_images";

// Creating connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Checking connection
if (!$connection) {
    die("<script>console.log('Connection Failed: " . addslashes(mysqli_connect_error()) . "');</script>");
}
// Connection Completed

?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <link rel="stylesheer" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/GalleryStyle.css?noCache">
	  <link rel="stylesheet" type="text/css" href="assets/css/GalleryStyle2.css?noCache">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Changa+One" rel="stylesheet">
      <link href="assets/lightgallery/css/lightgallery.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
	  <title><?php echo $HTML_name . ' ' . $HTML_year; ?> | JU ECell</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   </head>
   <body>
      <nav>
         <a href="./" style="height: 85px;">
            <div id="logo" style="width:100%">
               <center><img src="https://i.imgur.com/NSBCfAX.png"  style="height: 60px; margin-bottom:5px"></center>
            </div>
         </a>
      </nav>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 " style="text-align:center;padding-bottom:10%;background-color:<?php echo $HTML_style_Front_bgColor; ?>" >
			<div class="header " id="header">
               <h2 style="font-family: 'Changa One', cursive"><?php echo $HTML_name . ' ' . $HTML_year; ?></h2>
			   </div>
               <hr>
               <h3 style="text-align:justify;color:<?php echo $HTML_style_Front_fontColor; ?>;"><?php echo $HTML_summary; ?></h3>
            </div>
         </div>
		 
<script src="script.js"></script>
		
         <!-- Event Head Starts-->
         <div class="row event-header" style="background-color:<?php echo $HTML_style_Gallery_bgColor; ?>">
            <div class="col-md-12 col-sm-12">
               <div class="competition_separator" style="text-align: center;padding-bottom: 5%">
                  <h1 style="color:<?php echo $HTML_style_Gallery_fontColor; ?>">Gallery</h1>
               </div>
               <div class="row">
                  <span class="col-sm-12">
                     <div class="demo-gally">
                        <ul id="lightgallery" class="list-unstyled rtw">
<?php
            $GallerySQL = "SELECT `link` FROM image$SQL_year WHERE `event`=$SQL_ecode AND `section`=1 ORDER BY RAND()";
            $GalleryResult = mysqli_query($connection, $GallerySQL);
if (mysqli_num_rows($GalleryResult) > 0) {
    // output data of each row
    $i=0;
    while($row = mysqli_fetch_assoc($GalleryResult)) {
            $i +=1;
        
        if($i<21){
            echo "<li class='cal' data-src='https://i.imgur.com/" . $row['link'] . ".png'>
                              <a href=''>
                              <img class='img-responsive imgx' src='https://i.imgur.com/" . $row['link'] . "t.png'>
                              </a>
                           </li>";
        }
        else{
            echo "<li class='cal' style='display:none' data-src='https://i.imgur.com/" . $row['link'] . "l.png'>
                              <a href=''>
                              <center><img class='img-responsive imgx' src='https://i.imgur.com/" . $row['link'] . "t.png'></center>
                              </a>
                           </li>";
        }
        
    }
} else {
}
?>
						   
                        </ul><br>                     </div>

                     <script type="text/javascript">
                        $(document).ready(function(){
                            $('#lightgallery').lightGallery();
                        });
                     </script>
                     <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
                     <script src="assets/lightgallery/js/lightgallery-all.min.js"></script>
                     <script src="assets/lightgallery/js/jquery.mousewheel.min.js"></script>
                  </span>
               </div>
            </div>
         </div>
         <!-- Event Head End-->
         <!--Transparent row starts-->
         <div class="row" style="height:0px"></div>
         <!--Transparent row ends-->
         <!-- Event Year Starts-->
         <!-- Year 2017 Starts-->
         <div class="row event-year" style="background-color:<?php echo $HTML_style_Judges_bgColor; ?>; display:<?php echo $HTML_display_section2; ?>">
            <div class="col-md-12 col-sm-12">
               <div class="competition_separator" style="text-align: center;padding-bottom: 5%">
                  <h1 style="color:<?php echo $HTML_style_Judges_fontColor; ?>"><?php echo $HTML_style_Judges_sectionName; ?></h1>
               </div>
               <div class="row">
                  <span>
                     <div id="judges-gallery" class="owl-carousel owl-theme">
<?php
            $JudgeSQL = "SELECT `link` FROM image$SQL_year WHERE `event`=$SQL_ecode AND `section`=2 ORDER BY RAND()";
            $JudgeResult = mysqli_query($connection, $JudgeSQL);
if (mysqli_num_rows($JudgeResult) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($JudgeResult)) {

            echo "<div class='item'>
                           <img src='https://i.imgur.com/" . $row['link'] . "t.png'>
                    </div>";
        
        
    }
} else {
}
?>
                     </div>
                  </span>
               </div>
            </div>
         </div>
         <div class="row event-year" style="background-color:<?php echo $HTML_style_Sponsor_bgColor; ?>; display:<?php echo $HTML_display_section3; ?>" >
            <div class="col-md-12 col-sm-12">
               <div class="competition_separator" style="text-align: center;padding-bottom: 5%">
                  <h1 style="color:<?php echo $HTML_style_Sponsor_fontColor; ?>"><?php echo $HTML_style_Sponsor_sectionName; ?></h1>
               </div>
               <div class="row">
                  <span class="col-sm-12">
                     <div id="sponsor-gallery" class="owl-carousel owl-theme">
<?php
            $SponsSQL = "SELECT `link` FROM image$SQL_year WHERE `event`=$SQL_ecode AND `section`=3 ORDER BY RAND()";
            $SponsResult = mysqli_query($connection, $SponsSQL);
if (mysqli_num_rows($SponsResult) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($SponsResult)) {

            echo "<div class='item'>
                           <img src='https://i.imgur.com/" . $row['link'] . "t.png'>
                    </div>";
        
        
    }
} else {
}
?>
                     </div>
                  </span>
               </div>
               <br>
            </div>
         </div>
         <!-- Year 2017 Ends -->
         <!-- Event Head End-->
         <!--Transparent row starts-->
         <div class="row" style="height:0px"></div>
         <!--Transparent row ends-->
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
      <script>
         $('#sponsor-gallery').owlCarousel({
             margin:10,
             loop:true,
             autoWidth:true,
         	autoplay: true,
             items:4,
         	dots:false
         });
         $('#judges-gallery').owlCarousel({
             loop:true,
             margin:10,
         	autoplay: true,
         })
      </script>
      <footer>
         <div id="footer" class="container" style="background-color:<?php echo $HTML_style_Footer_bgColor; ?> ; width:100%; color:<?php echo $HTML_style_Footer_fontColor; ?>">
            <div class="col-sm-4">
               <span><a href="./"><img src="https://i.imgur.com/NSBCfAX.png"  style="height:65px ;margin-top:5px;margin-bottom:5px"></a></span>
            </div>
            <div class="col-sm-5">
            </div>
            <div class="col-sm-3" style="text-align:center" >
               <br><span>
               <a href="#" class="col-sm-2 footer-social fa fa-facebook"></a>
               <a href="#" class="col-sm-2 footer-social fa fa-twitter"></a>
               <a href="#" class="col-sm-2 footer-social fa fa-linkedin"></a>
               <a href="#" class="col-sm-2 footer-social fa fa-youtube-play"></a>
               <a href="#" class="col-sm-2 footer-social fa fa-google-plus"></a>
               </span>
            </div>
            <div class="col-sm-1"></div>
         </div>
         </div>
         <style>
            .vcenter {
            vertical-align: middle;
            float: none;
            }
            .footer-social {
            font-size:20px;
            color: inherit;
            text-decoration:none !important;
            padding-left:0  !important;
            }
            .fa-facebook:hover {
            color:#3b5998;
            }
            .fa-linkedin:hover {
            color:#007bb5;
            }
            .fa-twitter:hover {
            color:#55acee;
            }
            .fa-youtube-play:hover {
            color:#bb0000;
            }
            .fa-google-plus:hover {
            color:#dd4b39;
            }
         </style>
         <!-- Footer content for member ends-->			
         </div>
      </footer>
   </body>
</html>
<?php mysqli_close($connection); ?>