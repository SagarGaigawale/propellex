
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
 <!--<![endif]-->
<head>
    <!-- meta character set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Propellex Solutions | Vehicle Tracking,Personnel Tracking,UPS Monitoring,Remote Genset Monitoring</title>
    <!-- Meta Description -->
    <?php
    include('includes/header.php');
    ?>
    <script type="text/javascript">
        var myVar = setInterval(myTimer, 8000);
        function myTimer() {
            document.getElementById("nxt").click();
        }
    </script>
</head>

<body id="body" style="margin-top: -30px">

    <!-- preloader -->
    <div id="preloader">
        <div class="loder-box">
            <div class="battery"></div>
        </div>
    </div>
  

    <!-- end preloader -->
    <!--
    Fixed Navigation
    ==================================== -->
    <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->
                <!-- logo -->
                <h1 class="navbar-brand">
                    <a href="#body">Propellex</a>
                </h1>
                <!-- /logo -->
            </div>
            <!-- main nav -->
            <!--<nav  class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li><a href="#body">Home</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonials">Testimonial</a></li>
                    <li><a href="#price">price</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>-->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">

                <ul id="nav" class="nav navbar-nav">
                    <li><a href="#body">Home</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="about.php">About Us</a></li>
                    <li>
                        <script type="text/javascript">
                            function scrolll() {
                                $('html, body').animate({
                                    scrollTop: $("#portfolio").offset().top
                                }, 2000);
                            }
                        </script>
                        <a href="#" onclick="scrolll()">Products &#9662;</a>
                        <ul class="dropdown">
                       <li class="myclass1"><a href="tracking.php" class="myclass">Tracking</a></li>
                        <li class="myclass1"><a href="genset.php" class="myclass">Remote Genset Monitoring </a></li>
                        <li class="myclass1"><a href="pms.php" class="myclass">Patrol Management System</a></li>
                        <li class="myclass1"><a href="solar.php" class="myclass">Solar Inverter Remote Monitoring</a></li>
                        <li class="myclass1"><a href="bts.php" class="myclass">BTS Energy Monitoring</a></li>
                        </ul>
                    </li>
                    <li><a href="careers.php">Careers</a></li>
                </ul>
                <ul id="navv" class="nav navbar-nav">
                    <!--<li><a href="#service">Service</a></li>-->
                    
                    <li><a href="#contact">Contact</a></li>
                    
                </ul>
                <ul class="nav navbar-nav">
                    <li class="newa">
                        <a href="customerLogin.php" style="color: black">Customer Login</a>
                    </li>
                </ul>
</nav>
            <!-- /main nav -->
   
        </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->

    <main class="site-content" role="main">

        <!--
        Home Slider
        ==================================== -->

        <section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

                <div class="sl-slider">

                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

                        <div class="bg-img bg-img-1"></div>

                        <div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated fadeInDown">Welcome to Propellex Solutions</h2>
                                <span class="animated fadeInDown">Vehicle Tracking</span>
                                <!--<a href="#" class="btn btn-blue btn-effect">Join US</a>-->
                            </div>
                        </div>

                    </div>

                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

                        <div class="bg-img bg-img-2"></div>
                        <div class="slide-caption">
                            <div class="caption-content">
                                <h2>Welcome to Propellex Solutions</h2>
                                <span>Personnel Tracking</span>
                                <!--<a href="#" class="btn btn-blue btn-effect">Join US</a>-->
                            </div>
                        </div>

                    </div>

                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">

                        <div class="bg-img bg-img-3"></div>
                        <div class="slide-caption">
                            <div class="caption-content">
                                <h2>Welcome to Propellex Solutions</h2>
                                <span>Solar UPS Monitoring </span>
                                <!--<a href="#" class="btn btn-blue btn-effect">Join US</a>-->
                            </div>
                        </div>

                    </div>

                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

                        <div class="bg-img bg-img-4"></div>
                        <div class="slide-caption">
                            <div class="caption-content">
                                <h2>Welcome to Propellex Solutions</h2>
                                <span>Remote Genset Monitoring</span>
                                <!--<a href="#" class="btn btn-blue btn-effect">Join US</a>-->
                            </div>
                        </div>

                    </div>
                </div><!-- /sl-slider -->
                <!--
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a id="nxt" href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a id="prv" href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>


                <nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>

            </div><!-- /slider-wrapper -->
        </section>

        <!--
        End Home SliderEnd
        ==================================== -->
        <!-- about section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1 wow animated fadeInRight">
                        <div class="welcome-block">
                            <h3>Welcome to Propellex Solutions </h3>
                            <div class="message-body">
                                <img src="img/Rama1.jpg" class="pull-left" alt="member">
                                <p>Propellex Solutions Pvt Ltd is a specialist in Remote Monitoring . We commenced operations in 2012 and since then have executed a number of cutting edge Remote Monitoring Solutions to the satisfaction of both government and private sector organizations. To see what we have done , click on Products .</p>
                            </div>
                            <a href="about.php" class="btn btn-border btn-effect pull-right">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->
        <!-- Service section -->
        <section id="service">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center">
                        <h2 class="wow animated bounceInLeft">Services</h2>
                        <p class="wow animated bounceInRight" style="width: 50%; margin-left: 25%">In addition to the integration of sensors with GSM/GPRS we provide ongoing service where the client can view the data in real time on our server. </p>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-desktop fa-3x"></i>
                            </div>
                            <h3>Product Design</h3>
                            <p>We undertake bespoke projects in Remote Communication where we design prototypes , test it and provide you with production pieces in a time bound and transparent manner. Our expert team of embedded engineers take the load off.   </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-support fa-3x"></i>
                            </div>
                            <h3>Support</h3>
                            <p>We offer on going support where the data from the remote device is captured on our server , stored in the database and made visible through application software. You don’t have to worry about middle-ware , server software and .Net or PHP ! ( we work in both ).</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-file-o fa-3x"></i>
                            </div>
                            <h3>Documentation </h3>
                            <p>If, you prefer the softwares can reside on your server. Adequate documentation is provided so that , in future , changes can be made by your programmers without the need to get back to us.  </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-heart-o fa-3x"></i>
                            </div>

                            <h3>UI</h3>
                            <p>our in house team of  web designers can provide you with a number of options to make your website come alive. </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end Service section -->
        <!-- portfolio section -->
        <section id="portfolio">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center wow animated fadeInDown">
                        <h2>OUR PRODUCTS</h2>
                      
                    </div>

                    <script type="text/javascript">
                        function call(a) {
                            //$("#" + a).toggle(500);
                            document.getElementById(a).style.display = "block";
                        }
                        function call1(b) {
                            //$("#" + b).fadeOut(500);
                            document.getElementById(b).style.display = "none";
                        }
                    </script>
                    <ul class="project-wrapper wow animated fadeInUp">
                        <li class="portfolio-item" onmouseover="call('one')" onmouseout="call1('one')">
                            <img src="img/portfolio/item.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
                            <figcaption class="mask">
                                <h3 style="font-size: 16px">Tracking</h3>
                              
                            </figcaption>
                           
                            <ul class="external1">
                                <li id="one" style="display: none"><a class="fancybox" title="Tracking" href="tracking.php" data-fancybox-group="works">View Details</a></li>
                            </ul>
                        </li>

                       <!-- <li class="portfolio-item" onmouseover="call('two')" onmouseout="call1('two')">
                            <img src="img/portfolio/rsz_itemm.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3 style="font-size: 16px">GPSTracking</h3>

                            </figcaption>
                            <ul class="external1">
                                <li id="two" style="display: none"><a class="fancybox" title="GPSTracking" href="gps.php" data-fancybox-group="works">View Details</a></li>
                            </ul>
                        </li>-->

                        <li class="portfolio-item" onmouseover="call('three')" onmouseout="call1('three')">
                            <img src="img/portfolio/patrol.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3 style="font-size: 16px">Patrol Management System </h3>

                            </figcaption>
                      
                            <ul class="external1">
                                <li id="three" style="display: none"><a  class="fancybox" title="Patrol Management System " href="pms.php" data-fancybox-group="works">View Details</a></li>
                            </ul>
                        </li>

                        <li class="portfolio-item" onmouseover="call('four')" onmouseout="call1('four')">
                            <img src="img/portfolio/solar.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
                            <figcaption class="mask">
                                <h3 style="font-size: 16px">Solar Inverter Remote Monitoring </h3>

                            </figcaption>
                            
                            <ul class="external1">
                                <li id="four" style="display: none"><a  class="fancybox" title="Solar energy monitoring" href="solar.php" data-fancybox-group="works">View Details</a></li>
                            </ul>
                        </li>

                        <li class="portfolio-item" onmouseover="call('five')" onmouseout="call1('five')">
                            <img src="img/portfolio/BTS.png" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3 style="font-size: 16px">BTS Energy Monitoring</h3>

                            </figcaption>
                            
                            <ul class="external1">
                                <li id="five" style="display: none"><a class="fancybox" title="Solar energy monitoring" href="bts.php" data-fancybox-group="works">View Details</a></li>
                            </ul>
                        </li>

                        <li class="portfolio-item" onmouseover="call('six')" onmouseout="call1('six')">
                            <img src="img/portfolio/genset1.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3 style="font-size: 16px">Remote Genset Monitoring </h3>

                            </figcaption>

                            <ul class="external1">
                                <li id="six" style="display: none"><a class="fancybox" title="Remote Genset Monitoring" href="genset.php" data-fancybox-group="works">View Details</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </section>
       
        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center wow animated fadeInDown">
                        <h2>Contact</h2>
                        <p>Leave a Message</p>
                    </div>


                    <div class="col-md-7 contact-form wow animated fadeInLeft">
                        <form  method="POST" action="send_mail.php">
                            <div class="input-field">
                                <input type="text" name="name" class="form-control" placeholder="Your Name..." required>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email..." required>
                            </div>
                            <div class="input-field">
                                <input type="text" name="subject" class="form-control" placeholder="Subject..." required>
                            </div>
                            <div class="input-field">
                                <textarea name="message" class="form-control" placeholder="Messages..." required></textarea>
                            </div>
                            <input type="submit"  class="btn btn-blue btn-effect" name="send_mail" id="send_mail"  value="Send" />
                        </form>
                    </div>

                    <div class="col-md-5 wow animated fadeInRight">
                        <address class="contact-details">
                            <h3>Contact Us</h3>
                            <p>
                                <i class="fa fa-pencil"></i>Propellex Solutions Pvt. Ltd <span>
                                     2 , Sunshree Woods Commercial Complex
                                     Next to RIMS International School , Above Allahabad Bank 
                                    NIBM Road, Pune 411 048
                                </span>
                            </p>
                            <p><i class="fa fa-mobile" style="font-size: 26px"></i>Mobile: +91 - 80879 90311</p>
                            <p><i class="fa fa-envelope"></i>rama@propellex.co.in</p>

                            <h3>Working Hours</h3>

                            <p>Monday - Saturday - 9:30am to 6:30pm</p>
                            <p>Sunday - Closed</p>
                        </address>
                    </div>

                </div>
            </div>
        </section>
        <!-- end Contact section -->

        <section id="google-map">
            <div id="map-canvas" class="wow animated fadeInUp"></div>
        </section>

    </main>

    <?php
    include('includes/footer.php');
    ?>
    <!-- Essential jQuery Plugins
    ================================================== -->
    <!-- Main jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- Google Map API -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA3_WOP73EQruEn4Ygbuf0Qva-NznXRe0"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Fullscreen slider -->
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
</body>
</html>
