<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Profile -- Food.Inc</title>
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
 }
  </style>
</head>

<body>
  <?php
    session_start();
    // if don't have session user.. then redirect to login page
  	if(!isset($_SESSION['user']))
  		header("location: login.html");
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
          <li><a href="menu.php">Order Now</a></li>
          <?php
          //If user is not logged in
          if (!isset($_SESSION['user']))
          { ?>
          <li><a href="login.html" class="seperate_nav">Login</a></li>
          <li><a href="register.html">Register</a></li>
          <?php }
          //If user is logged in
          else { ?>
          <li class="drop-down active"><a class="seperate_nav"><?php echo $_SESSION['user'] ?></a>
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

  <main id="main">
  <section id="My_profile_title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>My Profile</h2>
        </div>
      </div>
    </div>
  </section>

<!--=====================
 User Profile Section
=======================-->
  <?php
  include("php/connection.php");
  $sql = "SELECT * FROM user_table WHERE user_name = '". $_SESSION['user']."'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);
  ?>
  <section id="My_profile_info" class="section-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 U_info">
          <h3>User Information</h3>
        <form class="contact100-form validate-form" method="post" action="php/updateuser.php">
          <div class="wrap-input100 validate-input">
            <label class="label-input100" for="name">Username</label>
            <?php
            echo " <input id=\"name\" class=\"input100\" type=\"text\" name=\"name\" placeholder=\"Enter your new username...\" value=\"" .$row['user_name']. "\"required>"
            ?>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <label class="label-input100" for="email">Email Address</label>
            <?php
            echo " <input id=\"email\" class=\"input100\" type=\"email\" name=\"email\" placeholder=\"Enter your new email...\" value=\"" .$row['user_email']. "\"required>"
            ?>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <label class="label-input100" for="p_nummber">Phone Number</label>
            <?php
            echo "<input id=\"p_number\" class=\"input100\" type=\"tel\" name=\"p_number\" placeholder=\"Enter your new phone number...\" value=\"" .$row['user_pnumber']."\"required>"
            ?>
            <span class="focus-input100"></span>
          </div>
          <div class="container-contact100-form-btn">
  					<button class="contact100-form-btn">
  						Update Information
  					</button>
  				</div>
        </form>
      </div>
      <div class="col-md-12 U_info">
        <h3>Change Password</h3>
      <form class="contact100-form validate-form" method="post" action="php/updatepassword.php">
        <div class="wrap-input100 validate-input">
          <label class="label-input100" for="c_password">Current Password</label>
          <input id="c_password" class="input100" type="password" name="c_password" placeholder="Enter your current password..." required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input">
          <label class="label-input100" for="n_password">New Password</label>
          <input id="n_password" class="input100" type="password" name="n_password" placeholder="Enter your new password..." required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input">
          <label class="label-input100" for="n_cpassword">Confirm Password</label>
          <input id="n_cpassword" class="input100" type="password" name="n_cpassword" placeholder="Reenter your new password..." required>
          <span class="focus-input100"></span>
        </div>
        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn">
            Change Password
          </button>
        </div>
      </form>
    </div>
    </div>
  </div>
  </section>
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
              <p>If encounter any problems or issues, feel free to send us a message.</p>
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
