<html lang="en">
<head>
<?php  $active="Gallery"; ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">


</head>

<body>

<!--=================================
 mega menu -->
<?php include 'navmenu.php';?> 

<!--=================================
 header -->

<?php include'header.php';?>


<body>
  <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p style="font-size: 18px;font-weight: bold;color:#199EB8;">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within 24 hours!</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <a href="https://g.page/roiconstructions?share" target="_blank"> <i class="ion-ios-location-outline"></i></a>
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
              <p><a href="mailto:info@example.com">Info@roiconstruction.in</a></p>
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
	<div class="marginbottom"></div>
	
	<section class="googlemap" class="section-bg wow fadeInUp">
	<div class="container-fluid">
    <div class="row mt-60">
      <div class="col-lg-12">
        <div style="width: 100%; height: 300px;" class="g-map"  >
        <iframe class="col-sm-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0838414186205!2d79.1350141141351!3d12.966486718500441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad499c61a8ef71%3A0x6e5310b97c92f47!2sROI%20DESIGNS%20AND%20CONSTRUCTION!5e0!3m2!1sen!2sin!4v1592814128469!5m2!1sen!2sin"  height="320" frameborder="0" style="border:0" allowfullscreen></iframe>

        
        </div>
        </div>
      </div>
    </div>
	
	
	</section>
	
	<script type="application/javascript">
$(document).ready(function() {
    $(".fancybox").fancybox({
	   width:"70%",
	   height:"30%"	
		
		});
});

</script>
<div class="marginbottom"></div>

 <?php include 'footer.php';?>
</body>
</html>