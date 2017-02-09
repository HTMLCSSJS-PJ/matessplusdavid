<?php
if(isset($_POST['submit'])){
    $to = "piercejord@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "R.S.V.P - " . $first_name . " " . $last_name;
    $subject2 = "Copy of R.S.V.P" ;
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: thankyou.php');
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <![endif]-->
  <title class="title">Matess + David</title>
  <!--REQUIRED STYLE SHEETS-->
  <!-- BOOTSTRAP CORE STYLE CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLE CSS -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- VEGAS STYLE CSS -->
  <link href="assets/plugins/vegas/jquery.vegas.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLE CSS -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- GOOGLE FONT -->
  <link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css' />
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
  <!-- Navigation -->
  <nav class='navbar navbar-inverse navbar-fixed-top'>
    <div class='container-fluid'>
      <header class='navbar-header'>
        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
        <a class='navbar-brand' href='#home'><i class="fa fa-home" aria-hidden="true"></i> Matess + David</a>
      </header>
      <div class='collapse navbar-collapse' id='myNavbar'>
        <ul class='nav navbar-nav'>
          <li><a href='#about'><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 18 March 2017</a></li>
          <li><a href='#about'><i class="fa fa-clock-o" aria-hidden="true"></i> 14:00</a></li>
        </ul>
        <ul class='nav navbar-nav navbar-right'>
          <li><a href='#about'><i class="fa fa-bell" aria-hidden="true"></i> Wedding</a></li>
          <li><a href='#about'><i class="fa fa-cutlery" aria-hidden="true"></i> Reception</a></li>
          <li><a href='#about2'><i class="fa fa-car" aria-hidden="true"></i> Directions</a></li>
          <li><a href='#about2'><i class="fa fa-bed" aria-hidden="true"></i> Accommodation</a></li>
          <li><a href='#about2'><i class="fa fa-leaf" aria-hidden="true"></i> Wicklow</a></li>
          <li><a href='#contact-sec'><i class="fa fa-envelope" aria-hidden="true"></i> RSVP</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!--Header section  -->
  <div class="container" id="home">
    <div class="row text-center">
      <div class="col-md-12">
        <h1 class="head-main">Matess + David Wedding</h1>
        <a class="btn btn-primary btn-lg " href="#about">Details </a><a class="btn btn-warning btn-lg" href="#contact-sec">RSVP </a>
        <br><br><br><br>
        <div class="head-last"></div>
      </div>
    </div>
  </div>
  <!--End Header section  -->


  <!--words Section-->
  <section class="for-full-back color-white" id="about">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h1><i class="fa fa-calendar" aria-hidden="true"></i> SAVE THE DATE</h1>
          <p>We are getting married Saturday the 18th of March 2017</p>
          <p>We kindly request your company on our special day <br>From Mary Therese Sanchez Castillo and David Anthony Goodwin </p>
          <!-- <blockquote class="blockquote">
            <p>Love is patient, love is kind. It does not envy, it does not boast, it is not proud.</p>
            <footer class="blockquote-footer">1 Corinthians 13:4</footer>
          </blockquote> -->
        </div>

      </div>

      <div class="row text-center space-pad">
        <div class="col-sm-6 ">
          <div class="about-div">
            <i class="fa fa-bell fa-4x main-color-black"></i>
            <h3>Ceremony </h3>
            <h4>The Holy Redeemer Church</h4>
            <i class="fa fa-clock-o fa-2x"></i><p>14:00</p>
            <i class="fa fa-map-marker fa-2x"></i><p>Main Street, Bray, Co Wicklow</p>
          </div>
        </div>

        <div class="col-md-6 ">
          <div class="about-div">
            <i class="fa fa-cutlery fa-4x main-color-black"></i>
            <h3>Reception </h3>
            <h4>South Beach Pavilion </h4>
            <i class="fa fa-clock-o fa-2x"></i><p>17:00</p>
            <i class="fa fa-map-marker fa-2x"></i><p>Greystones, Co.Wicklow</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="for-full-back " id="Parallax-one">
    <div class="container">

      <div class="row text-center for-parallax-one">
        <div class="col-md-6 ">
          <h3></h3>
          <h4>
            <strong>
            </strong>
          </h4>
        </div>
        <div class="col-md-6 ">
          <h3></h3>
          <h4>
            <strong>
            </strong>
          </h4>
        </div>
      </div>


    </div>
  </section>
  <!--./parallax one-->
  <!--End words Section-->




  <!-- Tutorial Section -->
  <!--words Section-->
  <section class="for-full-back color-white" id="about2">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h1><i class="fa fa-calendar" aria-hidden="true"></i> SAVE THE DATE</h1>
          <p>We are getting married Saturday the 18th of March 2017</p>
          <p>We kindly request your company on our special day <br>From Mary Therese Sanchez Castillo and David Anthony Goodwin </p>
          <!-- <blockquote class="blockquote">
            <p>Love is patient, love is kind. It does not envy, it does not boast, it is not proud.</p>
            <footer class="blockquote-footer">1 Corinthians 13:4</footer>
          </blockquote> -->
        </div>

      </div>

      <div class="row text-center space-pad">
        <div class="col-sm-4 ">
          <div class="about-div">
            <i class="fa fa-bed fa-4x main-color-black"></i>
            <h3>Accomodation List</h3>
            <a href='#'><i class="fa fa-link"></i>B+B</a><br>
            <a href='#'><i class="fa fa-link"></i>Hotel</a>
          </div>
        </div>

        <div class="col-md-4 ">
          <div class="about-div">
            <i class="fa fa-leaf fa-4x main-color-black"></i>
            <h3>Wiclow Attractions</h3>
            <a href='http://visitwicklow.ie/attractions/glendalough-monastic-city/'><i class="fa fa-link"></i><p class='lead'>Glendalough</p></a>
            <p>The Glendalough Valley is a fantastic base for outdoor activities.  It is also a great location to stay, eat &amp; shop.  Find on the link below a list of activities, accommodation, food &amp; drink, services and more.</p>
            <a href='http://visitwicklow.ie/attractions/powerscourt-house-gardens-2/'><i class="fa fa-link"></i><p class='lead'>Powerscourt</p></a>
            <p>Powerscourt is one of the world’s great gardens and is located 20km south of Dublin City Centre.</p>
            <a href='http://visitwicklow.ie/map-box/?category=1746'><i class="fa fa-link"></i><p class='lead'>The Garden Of Ireland</p></a>
            <p>Other attractions located in Wicklow.</p>
          </div>
        </div>

        <div class="col-md-4 ">
          <div class="about-div">
            <i class="fa fa-car fa-4x main-color-black"></i>
            <h3>Directions </h3>
            <h4>To Church </h4>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="for-full-back for-parallax-two" id="Parallax-two">
    <div class="container">

      <div class="row text-center">
        <div class="col-md-8 col-md-offset-2 ">
          <h1></h1>
          <h4>
            <strong>
            </strong>
          </h4>
        </div>

      </div>


    </div>
  </section>
  <!--./parallax two-->
  <!--End Pricing Section -->

  <!-- Contact Section -->
  <section class="for-full-back color-white " id="contact-sec">
    <div class="container">


      <div class="row">
        <div class="col-md-8">
          <h2>R.S.V.P.</h2>
          <p>
            RSVP to us via the form below.
          </p>
          <form action="" method="post">
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="First Name" name="first_name"><br>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="Last Name" name="last_name"><br>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="email" required="required" placeholder="Email address"><br>
                </div>
              </div>
              <div class="col-md-12 col-sm-12">
                <div class="form-group">
                  <br><textarea rows="4" name="message" cols="30" required="required" class="form-control" placeholder="Message"></textarea><br>
                </div>
                <div class="form-group">
                  <button class="btn btn-default" name="submit" value="submit">Submit Request</button>
                </div>
              </div>
              </form>
        </div>
      </div>
      <div class="col-md-4 contact-cls">
        <h3 align="center">CONTACT Web Developer </h3>
        <div align="center">
          <span class='webDev'><i class="webDev2 fa fa-male"></i>&nbsp;Name: Pierce Jordan</span>
          <br />
          <span class='webDev'><i class="webDev2 fa fa-home"></i>&nbsp; Address: Athenry, Galway</span>
          <br />
          <span class='webDev'><i class="webDev2 fa fa-envelope-o"></i>&nbsp;E-Mail: piercejord@gmail.com</span>
          <br />
          <span class='webDev'><i class="webDev2 fa fa-globe"></i>&nbsp;Web Developer: www.piercej.com</span>
          <br />
          <span class='webDev'><i class="webDev2 fa fa-phone"></i>&nbsp;Call: +353 87 778 55 33</span>
          <br />
        </div>
        <br />
        <div align="center" id="social-icon">
          <a href="https://www.facebook.com/profile.php?id=100014576020952"><i id="fbook" class="fa fa-facebook fa-align-left fa-2x"></i></a>
          <a href="https://ie.linkedin.com/in/pierce-jordan-55b83242"><i id="linked" class="fa fa-align-center fa-linkedin fa-2x"></i></a>
          <a href="https://plus.google.com/u/0/105194030540292764423"><i id="gPlus" class="fa fa-align-right fa-google-plus fa-2x"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!--End Contact Section -->
  <!--footer Section -->
  <!--footer-->
  <footer class='text-center'>
    <nav class='navbar navbar-inverse'>
      <div class='container-fluid'>
        <ul class='nav navbar-nav'>
          <li class='navbar-text'>Copyright &copy; PierceJ</li>
        </ul>
        <ul class='nav navbar-nav navbar-right'>
          <li><a href='https://www.facebook.com/profile.php?id=100014576020952'><i class='fa fa-facebook'></i></a></li>
          <li><a href='https://ie.linkedin.com/in/pierce-jordan-55b83242'><i class='fa fa-linkedin'></i></a></li>
          <li><a href='https://plus.google.com/u/0/105194030540292764423'><i class='fa fa-google'></i></a></li>
        </ul>
      </div>
  </footer>

  <!--End footer Section -->
  <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
  <!-- CORE JQUERY  -->
  <script src="assets/plugins/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP CORE SCRIPT   -->
  <script src="assets/plugins/bootstrap.js"></script>
  <!-- VEGAS SLIDESHOW SCRIPTS -->
  <script src="assets/plugins/vegas/jquery.vegas.min.js"></script>
  <script src="assets/plugins/jquery.parallax-1.1.3.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/myJS.js"></script>

</body>
</html>
