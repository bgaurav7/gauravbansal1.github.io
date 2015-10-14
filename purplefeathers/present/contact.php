
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact us</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.png">
    <!--link rel="shortcut icon" href="assets/ico/favicon.ico" -->

    <!-- CSS Global -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">
    <link href="assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

    <link href="assets/css/theme.css" rel="stylesheet">

    <link href="assets/css/custom.css" rel="stylesheet">
    <style type="text/css">
      .error{
          color:red;
          border-color:red;
      }
    </style>
    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body id="home" class="wide body-dark" style="overflow-x:hidden;">

<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <img src="img/logo.png" style="height: 76%;position: relative;top: 14px;"/>
        <div class="spinner"></div>
    </div>
</div>

<div class="wrapper">

    <!-- HEADER -->
    <header class="headerc fixed shrink">
        <div class="container">
            <div class="header-wrapper clearfix">

            <!-- Logo -->
            <div class="logo">
                <a href="#home" class="scroll-to">
                    <span class="fa-stack">
                        <img src="img/logo.png" style="height:100%;padding-bottom:10%;"/>
                    </span>
                    <span style="color:white;font-family:'als';font-size:1.12em;">Purple Feathers</span>
                </a>
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div id="mobile-menu"></div>
            <nav class="navigation closed clearfix">
                <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                <ul class="sf-menu nav">
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="index.php#clients">Clients</a></li>
                    <li><a href="index.php#team">Team</a></li>
                    <li><a href="index.php#subscribe">Subscribe</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <!--li><a href="#price">Price</a></li-->
                    <li class="active"><a href="#location">Location</a></li>
                    <li><a href="#contact">Contact us</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->

            </div>
        </div>
    </header>
    <div class="content-area">
      <section class="page-section" id="location">
          <div class="container full-width gmap-background">

              <div class="container">
                  <div class="on-gmap color">
                      <h1 class="section-title">
                          <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                          <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Our Location</span>
                      </h1>
                      <p data-animation="fadeInUp" data-animation-delay="200" class="text-uppercase">Purple Feathers <br/>
                          India, <br/>
                          India.<br/>
                          1234567.</p>
                      <p><a href="mailto:youremail@domain.com">hello@purplefeathers.in</a></p>
                      <a href="#" class="btn btn-theme"
                         data-animation="flipInY" data-animation-delay="300">Get Direction <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>

              <!-- Google map -->
              <div class="google-map">
                  <div id="map-canvas"></div>
              </div>
              <!-- /Google map -->

          </div>
      </section>
      <section class="page-section color" id="contact">
          <div class="container">

              <h1 class="section-title">
                  <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                  <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Contact Us <small>/ We would love if you contact us.</small></span>
              </h1>

              <!-- Contact form -->
              <form method="post" action="api/contact-form.php" id="contactForm">

                  <div class="col-sm-12 af-outer af-required">
                      <div class="form-group af-inner">
                        <label>Name *</label>
                          <input type="text" name="name" id="name" value="" size="30"
                                  data-toggle="tooltip" title="Name is required"
                                  class="form-control"/>
                      </div>
                  </div>

                  <div class="col-sm-12 af-outer af-required">
                      <div class="form-group af-inner">
                        <label>Email ID *</label>
                          <input type="text" name="email" id="email" value="" size="30"
                                  data-toggle="tooltip" title="Email is required"
                                  class="form-control"/>
                      </div>
                  </div>

                  <div class="col-sm-12 af-outer af-required">
                      <div class="form-group af-inner">
                        <label>Contact No.*</label>
                          <input type="text" name="phone" id="phone" value="" size="30"
                                  data-toggle="tooltip" title="Contact No is required"
                                  class="form-control"/>
                      </div>
                  </div>

                  <div class="col-sm-12 af-outer af-required">
                      <div class="form-group af-inner">
                        <label>Message *</label>
                          <textarea name="message" id="input-message" rows="4" cols="50"
                                  data-toggle="tooltip" title="Message is required"
                                  class="form-control"></textarea>
                      </div>
                  </div>

                  <div class="col-sm-12 af-outer af-required">
                      <div class="af-inner">
                          <h3 style="color:white;">Or give us a call</h3>+919999999999
                      </div>
                  </div>

                  <div class="g-recaptcha col-sm-12 af-outer" style="margin:2% 35%;" data-sitekey="6LfUTw4TAAAAAHD0uDBtWbI4_KVios6u7oHvy3LM"></div>                  

                  <div class="col-sm-12 af-outer af-required text-center">
                      <div class="form-group af-inner">
                          <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-lg btn-theme-transparent" id="submit_btn" value="Send message"/>
                      </div>
                  </div>

              </form>
              <!-- /Contact form -->


          </div>
          
          <div class="alert alert-success" id="formSuc" style="margin: 0 10%;display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Your message has been sent.
          </div>
          <div class="alert alert-danger" id="formErr" style="margin: 0 10%;display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> There was an error sending your message. Please try later.
          </div>
          <div class="alert alert-danger" id="formCErr" style="margin: 0 10%;display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> There was an error in captcha.
          </div>
      </section>
    </div>
    <footer class="footer">
        <div class="footer-meta">
            <div class="container text-center">
                <div class="clearfix">
                    <ul class="social-line list-inline">
                        <li data-animation="flipInY" data-animation-delay="100"><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="200"><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="300"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="400"><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="500"><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="600"><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="700"><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
                <span class="copyright" data-animation="fadeInUp" data-animation-delay="100">&copy; 2015 GeekHaven</span>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->
  </div>


    <!-- JS Global -->

    <!--[if lt IE 9]><script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!--><script src="assets/plugins/jquery/jquery-2.1.1.min.js"></script><!--<![endif]-->
    <script src="assets/plugins/modernizr.custom.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/plugins/superfish/js/superfish.js"></script>
    <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script src="assets/plugins/placeholdem.min.js"></script>
    <script src="assets/plugins/jquery.smoothscroll.min.js"></script>
    <script src="assets/plugins/jquery.easing.min.js"></script>
    <script src="assets/plugins/jquery.validate.js"></script>

    <!-- JS Page Level -->
    <script src="assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
    <script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script src="assets/js/theme-ajax-mail.js"></script>
    <script src="assets/js/theme.js"></script>
    <!--script src="assets/js/custom.js"></script-->

    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="assets/plugins/jquery.cookie.js"></script>
    <!--<![endif]-->

    <script type="text/javascript">
      $("#contactForm").validate({
          submitHandler: function (form) {
              var url = $(form).attr("action");
              var formData = $(form).serializeArray();
              $.post(url, formData).done(function (data) {
                  console.log(data.trim());
                  if(data.trim() == 'y') {
                    $('#formSuc').css("display", "block");
                    $('#formCErr').css("display", "none");
                    $('#formErr').css("display", "none");
                  } else if(data.trim() == 'c') {
                    $('#formSuc').css("display", "none");
                    $('#formCErr').css("display", "block");
                    $('#formErr').css("display", "none");
                  } else {
                    $('#formSuc').css("display", "none");
                    $('#formCErr').css("display", "none");
                    $('#formErr').css("display", "block");
                  }
              });
              // your ajax here
              //console.log("fire ajax");
              return false;
          },
          rules: {
              name: "required",
              email: "required",
              phone: "required",
              message: "required"
          },
          messages: {
              name: "Name is required",
              email: "Email is required",
              phone: "Conatct No is required",
              message: "Message is required"
          }
      });
    </script>

    <script type="text/javascript">

        jQuery(document).ready(function () {
            theme.init();
            theme.initMainSlider();
            //theme.initCountDown();
            theme.initPartnerSlider();
            theme.initTestimonials();
            theme.initGoogleMap();
        });
        jQuery(window).load(function () {
            theme.initAnimation();
        });

        jQuery(window).load(function () { jQuery('body').scrollspy({offset: 100, target: '.navigation'}); });
        jQuery(window).load(function () { jQuery('body').scrollspy('refresh'); });
        jQuery(window).resize(function () { jQuery('body').scrollspy('refresh'); });

        jQuery(document).ready(function () { theme.onResize(); });
        jQuery(window).load(function(){ theme.onResize(); });
        jQuery(window).resize(function(){ theme.onResize(); });

        jQuery(window).load(function() {
            if (location.hash != '') {
                var hash = '#' + window.location.hash.substr(1);
                if (hash.length) {
                    jQuery('html,body').delay(0).animate({
                        scrollTop: jQuery(hash).offset().top - 44 + 'px'
                    }, {
                        duration: 1200,
                        easing: "easeInOutExpo"
                    });
                }
            }
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/media.js"></script>
    <script src="assets/js/contact.js"></script>

    </script>
    <script type="text/javascript">
    $(window).load(function() {
        $('.post-title').click(function() {
            $('.header').css('display', 'none');
    		$('.to-top').css('display', 'none');
        });
        $('.glyphicon-remove').click(function() {
            $('.header').css('display', 'block');
    		$('.to-top').css('display', 'block');
        });
    });
    </script>
</body>

</html>
