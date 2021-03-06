<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Order Now -- Food.Inc</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Online Food Ordering System" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <style>
  .ordering {
    margin_right: 40px;
  }
  .container{
    width:100%;
    padding-right:15px;
    padding-left:15px;
    margin-right:auto;
    margin-left:auto;
  }

  </style>
</head>

<body>
  <!--==========================
  PHP
  ===========================-->
  <?php
  //get session
  session_start();

  //connect to database
  include('php/connection.php');
   ?>
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="home.php" class="scrollto"><span>Food.Inc</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li class="drop-down"><a href="aboutUs.php">About Us</a>
            <ul>
              <li><a href="aboutUs.php#introduction">INTRO</a></li>
              <li><a href="aboutUs.php#about">AIMS</a></li>
              <li><a href="aboutUs.php#why-us">WHY US</a></li>
            </ul>
          </li>
          <li class="active"><a href="menu.php">Order Now</a></li>
          <?php
          //If user is not logged in
          if (!isset($_SESSION['user']))
          { ?>
          <li><a href="login.html" class="seperate_nav">Login</a></li>
          <li><a href="register.html">Register</a></li>
          <?php }
          //If user is logged in
          else { ?>
          <li class="drop-down"><a class="seperate_nav"><?php echo $_SESSION['user'] ?></a>
            <ul>
              <li><a href="myorder.php">MY ORDER</a></li>
              <li><a href="profile.php">MY PROFILE</a></li>
              <li><a href="php/logout.php" >Logout</a></li>
            </ul>
          </li>
        <?php } ?>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-12 intro-info order-md-first order-last">
          <h2>Choose your favourite food <span>Now!!</span></h2><br>
          <div>
            <form method="post" action="php/saveaddress.php" class="user_address_form">
              <table class="user_address_table">
                <tr>
                  <td>
<?php
if (isset($_SESSION['address']))
{
  $address = $_SESSION['address'];
   echo "<input type=\"text\" name=\"input_address\" class=\"input_address\" id=\"input_address\" value=\"" .$address. "\"placeholder=\"Type your adddress\">";
}
else {?>
              <input type="text" name="input_address" class="input_address" id="input_address" value="" placeholder="Type your adddress">
<?php } ?>
                  </td>
                  <td>
                    <button type="submit" title="order_now" class="btn-order" name="saveaddress">Save Address</button>
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section><!-- #intro -->

  <main id="main">

        <!--==========================
          Food Menu Section
        ============================-->
        <section id="menu" class="">
          <div class="container">

            <header class="section-header">
              <h3>Select your favourite type of food and Let get started</h3>
              <br/>
            </header>

            <div class="row">
              <!--==============================
              PHP CODE
              ==============================--->
              <?php

              $result = mysqli_query($con, "SELECT * FROM cuisine_table ORDER BY cuisine_type ASC");
              while ($row = mysqli_fetch_array($result))
              //List all product out
              {
              echo "<div class=\"col-md-6 col-lg-4\">";
              echo "<form action=\"item.php\" method=\"post\" id=\"my_form_".$row['cuisine_id']."\">";
              echo  "<div class=\"box\"><a href=\"javascript:{}\" onclick=\"document.getElementById('my_form_".$row['cuisine_id']."').submit();\">";
              echo  "<div class=\"icon\" style=\"background: #fceef3;\"><img src='" . $row['cuisine_pic']. "' alt=\"\" class=\"img-fluid\"></div>";
              echo  "<h4 class=\"title\">". $row['cuisine_type']."</a></h4>";
              echo  "<p class=\"description\">" .$row['cuisine_description']."</p>";
              echo  "</div>";
              echo  "<input type=\"hidden\" name=\"cuisine_type\" value=\"".$row['cuisine_id']."\">";
              echo  "</form>";
              echo  "</div>";
              }
              ?>
            </div>

          </div>
        </section><!-- #services -->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Food.Inc</h3>
                    <p>
                      A108 Adam Street <br>
                      New York, NY 535022<br>
                      United States <br>
                      <strong>Phone:</strong> +1 5589 55488 55<br>
                      <strong>Email:</strong> info@example.com<br></p>
                  </div>

                </div>

              <div class="col-lg-6">
                <div class="col-sm-9">
                  <div class="footer-links">
                    <h3>Explore</h3>
                    <ul>
                      <li><a href="home.html">Home</a></li>
                      <li><a href="aboutUs.html">About us</a></li>
                      <li><a href="#">Order Now</a></li>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="register.html">Register</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <p>Feel Free to send us a message, we will listen to your comments and provide you feedback.</p>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Food.Inc</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Lee Seng Ken
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

 <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="js/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
