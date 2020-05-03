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
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="home.php" class="scrollto"><span>Food.Inc</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="home.php">Home</a></li>
          <li class="drop-down"><a href="aboutUs.php">About Us</a>
            <ul>
              <li><a href="aboutUs.php#introduction">INTRO</a></li>
              <li><a href="aboutUs.php#about">AIMS</a></li>
              <li><a href="aboutUs.php#why-us">WHY US</a></li>
            </ul>
          </li>
          <li><a href="menu.php">Order Now</a></li>
          <?php
          session_start();
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
          <h2>What are you waiting for? <br/><span>Place</span> your order now!!</h2><br>
          <div>
            <form method="post" action="" class="user_address_form">
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
      Call to Register Section
    ============================-->
    <section id="call-to-register" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Register to get special reward!</h3>
            <p class="cta-text">Become part of our big family by register an account to connect with us and be notified. <br/>Food.INC promises everyone with high quality and good services to all customer globally. Get on hold on all the special services and rewards for succesfully register as member.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="register.html">Register Now!</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-regiter -->


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/all_in_one_services.jpeg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>The All-IN-ONE Services</h2>
              <h3>Food.Inc will take care all the work for you.</h3>
              <p>Busy? Not free? Hungry?<br/>Your favourite food from your favourite restaurant will delivery to your desk.</p>
              <p>We are dedicate in delivery your most desire food and drinks to your front house door, making your life easier and satisfying your daily food needs. </p>
              <p><b>We share, We give, We listen</b></p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->

    <section id="about">

      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Providing the best job on EARTH.</h2>
              <h3>Food.INC give out high-quality job. </h3>
              <p>Need a job? Join us as one of our delivery man in Food.INC where we all can help bring a better world to our society.<br/>We want people to do their job in their best form therefore we guarantee<p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Enjoyable Working Experiences</li>
                <li><i class="ion-android-checkmark-circle"></i> Flexible Working Hours </li>
                <li><i class="ion-android-checkmark-circle"></i> High Paid </li>
                <li><i class="ion-android-checkmark-circle"></i> Staff Special Protection </li>
              </ul>
              <p><b>We care, We love, We understand </b></p>
            </div>
          </div>

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/van.png" alt="">
            </div>
          </div>

        </div>
      </div>

    </section><!-- #about -->

    <!--==========================
      Call To Join Job Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Join Us for the best job!</h3>
            <p class="cta-text">We welcome everyone to join our company who wishes to follow our aims and objective. While we promise a good working environment and experices to all our lovely staff.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contactus">Contact us!</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Customer Review Section
    ============================-->
    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Reviews</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <h3>Saul Goodman</h3>
                <h4>Registed Member</h4>
                <p>
                  Been using Food.INC for awhile. I really enjoy the services they provided. They focus on big objective such as sending food on time, giving customer a good experience; they also look through the small things, such as employee's attitude and large variety of food selection. 10/10
                </p>
              </div>

              <div class="testimonial-item">
                <h3>Sara Wilsson</h3>
                <h4>New Customer</h4>
                <p>
                  Good services and right on time. One of the best service i ever could encounter as it not just delivery my food on time, their employee is really polite and well trained. Recommended for all user.
                </p>
              </div>

              <div class="testimonial-item">
                <h3>Jena Karlis</h3>
                <h4>Long-term Employee</h4>
                <p>
                  Been working with Food.INC for 3 years and i do not regret working for them. We were provided with flexible working time, good pay and best of all, special protection for our employee. I enjoy my current work and i will continue working for them.
                </p>
              </div>

              <div class="testimonial-item">
                <h3>Matt Brandon</h3>
                <h4>New Employee</h4>
                <p>
                  One of best job i ever found. Good training and guidance is given which helps us to adapt to this new environment. Can't wait to start working for them.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

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

            <div id="contactus" class="form">

              <h4>Send us a message</h4>
              <p>Feel Free to send us a message, we will listen to your comments and provide you feedback.</p>
              <form action="php/reply.php" method="post" role="form" class="contactForm">
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
