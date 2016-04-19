<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Drwichman.com<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:200,400,600,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css">

    <script type="text/javascript" src="inc/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>
  </head>
  <body>

    <div class="dw-header">
      <div class="site-width">
        <div class="header-left">
          <a href="."><img src="images/logo.png" alt="Drwichman.com" id="logo"></a>
        </div>

        <div class="header-right">
          <div class="top-menu">
            FOR APPOINTMENTS: <span>(888) 123-4567</span>
          </div>

          <input type="checkbox" id="show-menu" role="button">
          <label for="show-menu" id="menu-toggle"></label>
          <div class="menu">
            <ul>
              <li>
                <a href="#" class="drop">OUR PRACTICE</a>
                <ul>
                  <li><a href="#">Mark Wichman, MD</a></li>
                  <li><a href="#">Matthew Wichman, MD</a></li>
                  <li><a href="#">Hours &amp; Location</a></li>
                  <li><a href="#">Schedule an Appointment</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="drop">SPORTS MEDICINE</a>
                <ul>
                  <li><a href="#">Knee</a></li>
                  <li><a href="#">Shoulder</a></li>
                  <li><a href="#">Hip</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="drop">EDUCATION</a>
                <ul>
                  <li><a href="#">Learning Center</a></li>
                  <li><a href="#">Media</a></li>
                  <li><a href="#">Medical Definitions &amp; Links</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="drop">PATIENT CARE</a>
                <ul>
                  <li><a href="#">Diagnosis</a></li>
                  <li><a href="#">Pre-Op Care</a></li>
                  <li><a href="#">Procedures</a></li>
                  <li><a href="#">Post-Op Care</a></li>
                </ul>
              </li>
              <li><a href="#">CONTACT</a></li>
              <li class="mobile"><a href="tel:888-123-4567">APPOINTMENTS</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="inc/jquery.cycle2.scrollVert.min.js"></script>
    <div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="8000" data-cycle-pause-on-hover="true" data-cycle-fx="scrollVert" data-cycle-pager-template="<span></span>">
      <p class="cycle-pager"></p>
      <div style="background-image: url(images/banner-hockey.jpg);">
        <div class="site-width">
          <h3>MATTHEW WICHMAN, MD &amp; MARK WICHMAN, MD ENJOY SERVING THE COMMUNITY THEY LIVE AND WORK IN.</h3>
          <div class="orange">Proudly serving as the Team Physician for the Milwaukee Admirals, Grafton Blackhawks &amp; Homestead Highlanders.</div>

          <div class="banner-logos">
            <img src="images/banner-logo-admirals.png" alt="">
            <img src="images/banner-logo-blackhawks.png" alt="">
            <img src="images/banner-logo-highlanders.png" alt="">
          </div>

          <a href="#">LEARN MORE</a>
        </div>
      </div>
      <div style="background-image: url(images/banner-bicycles.jpg);">
        <div class="site-width">
          <h2>SPORTS MEDICINE</h2>
          We Specialize in <strong>Sports Medicine</strong>, <strong>Knee</strong>, <strong>Shoulder</strong> and <strong>Hip</strong>.<br>
          <a href="#" class="more-bike">DISCOVER MORE</a>
        </div>
      </div>
    </div>

    <div class="banner">
      <div class="site-width">
        <div class="one-third">
          <a href="#"><img src="images/banner-icon-education.png" alt=""> PATIENT EDUCATION</a>
        </div>

        <div class="one-third">
          <a href="#"><img src="images/banner-icon-postop.png" alt=""> POST-OP CARE</a>
        </div>

        <div class="one-third">
          <a href="#"><img src="images/banner-icon-appointment.png" alt=""> APPOINTMENT</a>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="inc/shapes-polyfill.min.js"></script>
    <div class="wichmans">
      <div class="site-width">
        <div class="wichman-left">
          <div class="wl-wrap"></div>

          <h5>DR. MATTHEW P. WICHMAN, MD</h5>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
          <a href="https://www.linkedin.com/in/matthew-wichman-md-1342b477" class="social linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a><br>
          <a href="#" class="more">READ FULL PROFILE</a>
        </div>

        <div class="wichman-right">
          <div class="wr-wrap"></div>

          <h5>DR. MARK T. WICHMAN, MD</h5>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
          <a href="https://www.linkedin.com/in/drmarkwichman" class="social linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a><br>
          <a href="#" class="more">READ FULL PROFILE</a>
        </div>
      </div>
    </div>

    <div class="site-width">
      CONTENT (TWO COL)<br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>

    <div class="news-home">
      <div class="site-width">
        NEWS / BLOG (FULL WIDTH / TWO COL)<br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
    </div>

    <div class="testimonials">
      <div class="site-width">
        ROTATING TESTIMONIALS (FULL WIDTH)<br>
        "I would like to thank you for the amazing job you did in the surgery repairing my right rotator cup. It certainly was a long road to recovery, but it now feels free of pain and has near 100% range of motion. I cannot describe the blessing this has been, my work is what not only provides me with an income of making a living but is also my dignity that gives me self worth and allows me to continue my trade that I enjoy doing."<br>
        <br>-Steve S., Rotator Cup
      </div>
    </div>

    <div class="dw-footer">
      <div class="site-width">
        FOOTER MENU<br>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
        &copy; <?php echo date("Y"); ?> Drwichman.com
      </div>
    </div>

  </body>
</html>