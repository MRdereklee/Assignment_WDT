<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>About Us -- Food.Inc</title>
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
          <li><a href="home.php">Home</a></li>
          <li class="drop-down active"><a href="aboutUs.php">About Us</a>
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
        <div class="col-md-8 order-md-last order-first">
          <div class="intro-img">
            <img src="img/about_us.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-3 intro-info order-md-first order-last">
          <h2 style="width: 85% ">Food.INC</h2>
          <h3>The world best food ordering website that you ever can imagine.</h3>
        </div>
      </div>

    </div>


  </section><!-- #intro -->



  <main id="main">
    <!--==========================
      Intro Company Section (features)
    ============================-->
    <section id="introduction">
      <div class="container">

        <div class="row introduction-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/helping.jfif" class="img-fluid" alt="Focus on Community" style="padding: 15spx 0px 40px 0">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Our Heart and Desire created our history</h4>
            <p>
              A group of three friends with motivated heart is dedicated in helping the society in any sort of form. Three of them tried different ways and method to fullfill their dream, and at the end, all of them finally found their end goal.
            <p>
              Good quality and friendly services is what all customer are searching for. "It's a common requirement for every single services. Therefore, we provide them the best service we ever could." said one of the founder.
            </p>
            <p>
              And yes, we <b>LOVE</b> food.
            </p>
          </div>
        </div>

        <div class="row introduction-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/food_delivery.png" class="img-fluid" alt="Food Delivery" style="padding: 0 40px;">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Creation of Food.INC</h4>
            <p>
              Food.INC is just a food ordering website that is waiting the whole world to recgonise. Dedication from three friends, three of them together built a food system that aimed to be the best of the best. "It is easy".
            </p>
            <p>
              Providing the best of the best means in focusing in outcome of our product and services but not our income. We focus on how we provide the service to all customer, we focus on the ability to help customer to get their needs in the most efficiency and effective way, we focus the most on all customer feedback.
            </p>
              Staff and employee within us have the same value as our customer. We put them in our main priority to make sure their desire and needs is met.
            <p>
            <p>
              <b>We Share,  We Give,  We Listen, We Care, We love, We Understand</b>
            </p>
          </div>

        </div>

      </div>
    </section><!-- #about -->
    <!--==========================
      Company About and Aims
    ============================-->
    <section id="about" class="section-bg">

      <div class="container">
        <div class="row">

          <div class="">
            <div class="about-content">
              <h2>Understand Our Concept</h2>
              <h3>Willing to help our society is what bring us togther.</h3>
              <p>One of our biggest mission is to provide different type of help to our society, making our surrounding a better place to live.</p>
              <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">

        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>Choosing us is your best bet. Need convincing? Need a reason? Here's why.</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="img/top-rated.png" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
              <p>
                Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                et temporibus. Labore est odio.

                Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
              </p>

              <div class="features wow bounceInUp clearfix">
                  <i class="fa fa-cutlery" style="color: #f058dc;"></i>
                <h4>Various type</h4>
                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-truck" style="color: #ffb774;"></i>
                <h4>Eum ut aspernatur</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-comment" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
              </div>

            </div>

          </div>

        </div>

      </div>
      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
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
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
