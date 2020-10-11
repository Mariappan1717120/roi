<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>3D Floor Plan</title>
</head>

<body>


<!--=================================
 mega menu -->
<?php include 'navmenu.php';?> 
<!--=================================
 header -->

<?php include'header.php';?>


<section class="gallery">
  <div class="container">
  <a class="btn btn-primary" href="gallery.php" role="button"> < Back to Gallery</a>
       <h2 class="text-center">3D Floor Plan</h2>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 text-center">
              <div class="isotope columns-2 ">
            
                     <?php 
                  for ($i = 1; $i<= 5; $i++) { ?>
 
    
    <div class="grid-item completed">
             
                   
                      
                    <a href="images/3dfloorplan/<?php echo $i; ?>.jpg" data-fancybox="gallery"><img src="images/3dfloorplan/<?php echo $i; ?>.jpg" alt=""></a>
               
              </div>
              
    <?php
} 
?>
     </div>
     
       </div>
     </div>
  
  </div>

</section>
 <?php include 'footer.php';?>
</body>
</html>