<?php
if (isset($_POST['submit']))
{
$name=$_POST['name'];
$subject=$_POST['subject'];
$mailFrom=$_POST['email'];
$message=$_POST['message'];
$mailTo="roidesign19@roiconstruction.in";
$headers="From:".$mailFrom;
$text="You have received an e-mail from".$name.".\n\n".
$message;
mail($mailTo,$subject,$text,$headers);
header("Location:contact.php");

 //$result='';
	// If there are no errors, send the email
   // if (mail ($mailto, $subject, $text, $headers)) {
	//		$result='<div class="alert alert-success">Thank you for contacting us. Your message has been successfully sent. We will contact you very soon!</div>';
	//	}
	//	else {
	//	  $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	//	}
	  
    //echo $result;
    
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Roi Design & Construction</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="logo/logo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/main.css" rel="stylesheet"/>
  
</head>

<body>
    
    <section id="intro" class="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url('img/intro-carousel/1.png');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Being a Professional is doing the Things.</h2>
                <p>"The buildings we create inspire us & reflect who we are as a society."</p>
              <!--  <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/2.png');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Designing Dreams Delivering value</h2>
                <p>“You can dream, create, design, and build the most wonderful place in the world. But it requires people to make the dream a reality.”</p>
               <!-- <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/3.png');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Productive Ideas Earn us Prospective Clients</h2>
                <p>“Good buildings come from good people, and all problems are solved by good design.”</p>
                <!--<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

         

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
       <a id="scroll-down" href="#header" class="hidden-xs"></a>
  </section><!-- #intro -->
   
        
       <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><img class="logo" src="logo/logo.png" ><a href="#intro" class="scrollto" style="color:#333;">Roi Design & contruction </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index.html">Home</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="gallery.html">Gallery</a></li>
        <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>-->
          <li class="menu-active active"><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header --> 
        
<!--===========================
BreadCrumb
=======================----->
 <section id="page-title" class="page-title-mini">
   <div class="container-fluid clearfix">      
     <ol class="breadcrumb ">
    <h4 style="padding-top:10px; margin-bottom: 0px;">Contact us</h4>         
    <li class="breadcrumb-item ml-auto"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
     </ol>
</div>
   
     
</section>
   
<!--- end Breadcrumb--->
 <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p style="font-size: 18px;font-weight: bold;color:#199EB8;">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within 24 hours!</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>N0.270/11 3c , Chittoor Bus Stand,</address>
              <address>Katpadi , Vellore - 632 007.</address>    
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+918015617709">+91 8015 617 709</a></p>
              <p><a href="tel:+916380033690">+91 6380 099 690</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">roidesigns19@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"><?=$result; ?></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3><img class="logo" src="logo/logo.png">Roi Design & construction</h3>
            <p>Roi design & construction is the only enterprise to specialize Architecture, Construction  which parts us from the rest. We save your time & money from running in between Architects & Builders thereby avoiding conflicting opinions between each of them. Our in-depth theory and practical knowledge renders harmonious organization . </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.html">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="aboutus.html">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="gallery.html">Gallery</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="contact.php">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              No.270/11 3c, <br>
              Chittoor Bus Stand<br>
              Katpadi , Vellore -632007 <br>
              <strong>Phone:</strong> +91 8015 617 709<br>
              <strong>Phone:</strong> +91 6380 033 690<br>
              <strong>Email:</strong> roidesigns19@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong class="p">Roi Design & Construction.</strong> All Rights Reserved
      </div>
    
    </div>
  </footer><!-- #footer -->
    
    
     <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Template Main Javascript File -->
 <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="js/smooth.scroll.min.js"></script>
 <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- Contact Form JavaScript File -->

  <script src="js/main.js"></script>

</body>
</html>