<?php
include("madmin/include/baglan.php");
include("madmin/include/fonksiyonlar.php");
$id=$_GET['id'];
$kategori=$db->query("select * from hizmet_kategori where id='$id'")->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="tr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="<?=$ayar['site_title']?>">
<meta name="description" content="<?=$ayar['site_title']?>">
<title><?=$kategori['kategori_adi']?> - <?=$ayar['site_title']?></title>
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
        <h1 class="text-custom-white"><?=$kategori['kategori_adi']?></h1>
        <ul class="custom-flex justify-content-center">
          <li class="fw-500"> <a href="./" class="text-custom-white">Anasayfa</a> </li>
          <li class="active fw-500"> <?=$kategori['kategori_adi']?> </li>
        </ul>
      </div>
    </div>
  </div>
</div>




  
  <section class="section-padding our_articles bg-light-white">
  <div class="container">
    <div class="row">
     <h6 class="d-none">1</h6>
<?php
$hizmetler=$db->query("select * from hizmetler where kategori='$id' and durum='0'",PDO::FETCH_ASSOC);
if($hizmetler->rowCount())
{
    foreach($hizmetler as $h)
    {

?>
      <article class="col-lg-4 col-md-6 post mb-xl-30">
        <div class="post-wrapper bx-wrapper">
          <div class="post-img animate-img"> <a href="hd-<?=$h['seo']?>-<?=$h['id']?>"> <img src="lib/images/hizmetler/<?=$h['resim']?>" style="width:100%;height:250px;" class="full-width" alt="<?=$h['adi']?>"> </a>
           
          </div>
          <div class="blog-meta padding-20 bg-custom-white p-relative">
               <div class="post-heading">
              <h2> <a href="hd-<?=$h['seo']?>-<?=$h['id']?>" class="text-custom-black fw-600 fs-20"><?=$h['adi']?> </a> </h2>
              <p class="text-light-dark no-margin"><?=substr($h['aciklama'],0,200)?></p>
            </div>
          </div>
          <div class="post-footer">
           
            <a href="hd-<?=$h['seo']?>-<?=$h['id']?>" class="btn-first btn-submit fs-14 fs-600">İnceleyin</a> </div>
        </div>
      </article>
   <?php } } ?>
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
