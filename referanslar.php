<?php
include("madmin/include/baglan.php");
include("madmin/include/fonksiyonlar.php");
?>


<!DOCTYPE html>
<html lang="tr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="<?=$ayar['site_title']?>">
<meta name="description" content="<?=$ayar['site_title']?>">
<title>Referanslar - <?=$ayar['site_title']?></title>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets\images\favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets\images\favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets\images\favicon.ico">
<link rel="apple-touch-icon-precomposed" href="assets\images\favicon.ico">
<link rel="shortcut icon" href="assets\images\favicon.ico">
<link href="assets\css\bootstrap.min.css" rel="stylesheet">
<link href="assets\css\font-awesome.css" rel="stylesheet">
<link href="assets\css\font\flaticon.css" rel="stylesheet">
<link href="assets\css\slick.css" rel="stylesheet">
<link href="assets\css\ion.rangeSlider.min.css" rel="stylesheet">
<link href="assets\css\datepicker.css" rel="stylesheet">
<link href="assets\css\magnific-popup.css" rel="stylesheet">
<link href="assets\css\nice-select.css" rel="stylesheet">
<link href="assets\css\style.css" rel="stylesheet">
<link href="assets\css\responsive.css" rel="stylesheet">

</head>
<body>
   <?php
  include("inc/header.php");?>
<div class="subheader normal-bg section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-custom-white">Referanslar</h1>
        <ul class="custom-flex justify-content-center">
          <li class="fw-500"> <a href="./" class="text-custom-white">Anasayfa</a> </li>
          <li class="active fw-500"> Referanslar </li>
        </ul>
      </div>
    </div>
  </div>
</div>



<section class="section-padding partners">
    <div class="container">
     
      <div class="row">
        <div class="col-12">
          <div class="partners-slider arrow-layout-2 row">
          
                  <?php 
								$idd=$alt_dizi['id'];
								$ref = $db->query("select * from referanslar ",PDO::FETCH_ASSOC);
								if($ref->rowCount())
								{
									foreach($ref as $refg)
									{
								?>
          
            <div class="slide-item col-12">
              <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="lib/images/referanslar/<?=$refg["resim"]?>" class="img-fluid image-fit" alt="img"> </a> </div>
            </div>
              <?php  } } ?> 
            
            
          </div>
        </div>
      </div>
    </div>
  </section>
  
   <?php
  include("inc/footer.php");?>
<div id="back-top" class="back-top"> <a href="#top"><i class="flaticon-arrows"></i></a> </div>

<script src="assets\js\jquery.min.js"></script>
<script src="assets\js\popper.min.js"></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\ion.rangeSlider.min.js"></script>
<script src="assets\js\slick.min.js"></script>
<script src="assets\js\datepicker.js"></script>
<script src="assets\js\datepicker.en.js"></script>
<script src="assets\js\isotope.pkgd.min.js"></script>
<script src="assets\js\jquery.nice-select.js"></script>
<script src="assets\js\jquery.magnific-popup.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
<script src="assets\js\custom.js"></script>
</body>
</html>
