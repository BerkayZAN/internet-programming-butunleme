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
<title>İletişim - <?=$ayar['site_title']?></title>
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
<?php include("inc/header.php");?>
<div class="subheader normal-bg section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-custom-white">İletişim</h1>
        <ul class="custom-flex justify-content-center">
          <li class="fw-500"> <a href="index.html" class="text-custom-white">Anasayfa</a> </li>
          <li class="active fw-500"> İletişim </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="section-padding contact-form-map">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-header style-left">
          <div class="section-heading">
            <h3 class="text-custom-black">Bize Ulaşabilirsiniz</h3>
            <div class="section-description">
              <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
            </div>
          </div>
        </div>
        <form class="mb-md-80">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="#" class="form-control form-control-custom" placeholder="Adı" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="#" class="form-control form-control-custom" placeholder="Email" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="#" class="form-control form-control-custom" placeholder="Konu" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="#" class="form-control form-control-custom" placeholder="Telefon No." required="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="message" rows="5" class="form-control form-control-custom" placeholder="Mesajınız..." required></textarea>
              </div>
              <button type="submit" class="btn-first btn-submit">Gönder</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-5">
        <div class="contact-map full-height">
          <?=$ayar['google_maps']?>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="section-padding bg-light-white contact-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="contact-info-box mb-md-40"> <i class="flaticon-placeholder"></i>
          <h6 class="text-theme fw-600"><?=$ayar['firma_adres']?></h6>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="contact-info-box mb-md-40"> <i class="flaticon-telephone-1"></i>
          <h6 class="text-theme fw-600"><a href="#" class="text-theme"><?=$ayar['firma_telefon']?></a><br>
            Pzt-Cuma: 7/24</h6>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="contact-info-box"> <i class="flaticon-envelope"></i>
          <h6 class="text-theme fw-600"><a href="mailto:<?=$ayar['firma_email']?>" class="text-theme"><?=$ayar['firma_email']?></a><br>
            7/24 Online Destek</h6>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include("inc/footer.php");?>
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
