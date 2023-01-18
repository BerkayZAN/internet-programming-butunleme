<?php 
include"include/baglan.php";
include"include/fonksiyonlar.php";
ob_start();
session_start();
oturumkontrolana();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$ayar["site_title"]?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php include"include/header.php";?>
  	<?php include"include/menu.php";?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       <?=$ayar["site_title"]?> | Site Yönetim Paneli 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa</a></li>
        <li class="active">Hızlı Menü</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
      <?php if($yonetici_izin["urun_kat"]==1){?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php $urun_kategori_cek=$db->query("select * from urun_kategori");
				  $urun_kategori_say=$urun_kategori_cek->rowCount();
			?>
              <h3><?=$urun_kategori_say?></h3>

              <p>ÜRÜN KATEGORİ</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="urun_kategori_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?> 
      <?php if($yonetici_izin["urun"]==1){?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php $urun_cek=$db->query("select * from urunler");
				  $urun_say=$urun_cek->rowCount();
			?>
              <h3><?=$urun_say?></h3>

              <p>ÜRÜNLER</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="urun_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      <?php if($yonetici_izin["haber_kat"]==1){?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
            <?php $haber_kategori_cek=$db->query("select * from haber_kategori");
				  $haber_kategori_say=$haber_kategori_cek->rowCount();
			?>
              <h3><?=$haber_kategori_say?></h3>
              <p>HABER KATEGORİ</p>
            </div>
            <div class="icon">
              <i class="fa fa-folder"></i>
            </div>
            <a href="haber_kategori_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      <?php if($yonetici_izin["haber"]==1){?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
            <?php $haber_cek=$db->query("select * from haberler");
				  $haber_say=$haber_cek->rowCount();
			?>
              <h3><?=$haber_say?></h3>
              <p>HABERLER</p>
            </div>
            <div class="icon">
              <i class="fa fa-folder"></i>
            </div>
            <a href="haber_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      <?php if($yonetici_izin["hizmet_kat"]==1){?>  
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php $hizmet_kategori_cek=$db->query("select * from hizmet_kategori");
				  $hizmet_kategori_say=$hizmet_kategori_cek->rowCount();
			?>
              <h3><?=$hizmet_kategori_say?></h3>

              <p>HİZMET KATEGORİ</p>
            </div>
            <div class="icon">
              <i class="fa fa-map"></i>
            </div>
            <a href="hizmet_kategori_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      <?php if($yonetici_izin["hizmet"]==1){?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php $hizmet_cek=$db->query("select * from hizmetler");
				  $hizmet_say=$hizmet_cek->rowCount();
			?>
              <h3><?=$hizmet_say?></h3>

              <p>HİZMETLER</p>
            </div>
            <div class="icon">
              <i class="fa fa-map"></i>
            </div>
            <a href="hizmet_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      <?php if($yonetici_izin["referans_kat"]==1){?>  
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
            <?php $referans_kategori_cek=$db->query("select * from referans_kategori");
				  $referans_kategori_say=$referans_kategori_cek->rowCount();
			?>
              <h3><?=$referans_kategori_say?></h3>

              <p>REFERANS KATEGORİ</p>
            </div>
            <div class="icon">
              <i class="fa fa-bandcamp"></i>
            </div>
            <a href="referans_kategori_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      <?php if($yonetici_izin["referans"]==1){?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
            <?php $referans_cek=$db->query("select * from referanslar");
				  $referans_say=$referans_cek->rowCount();
			?>
              <h3><?=$referans_say?></h3>

              <p>REFERANSLAR</p>
            </div>
            <div class="icon">
              <i class="fa fa-bandcamp"></i>
            </div>
            <a href="referans_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      <?php if($yonetici_izin["galeri_kat"]==1){?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
            <?php $galeri_kategori_cek=$db->query("select * from fotograf_galeri_kategori");
				  $galeri_kategori_say=$galeri_kategori_cek->rowCount();
			?>
              <h3><?=$galeri_kategori_say?></h3>
              <p>GALERİ KATEGORİ</p>
            </div>
            <div class="icon">
              <i class="fa fa-photo"></i>
            </div>
            <a href="fotograf_kategori_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      <?php if($yonetici_izin["galeri"]==1){?>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
            <?php $fotograf_galeri_cek=$db->query("select * from fotograf_galeri");
				  $fotograf_galeri_say=$fotograf_galeri_cek->rowCount();
			?>
              <h3><?=$fotograf_galeri_say?></h3>
              <p>GALERİ</p>
            </div>
            <div class="icon">
              <i class="fa fa-photo"></i>
            </div>
            <a href="fotograf_galeri_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      <?php if($yonetici_izin["video"]==1){?> 
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php $video_cek=$db->query("select * from video");
				  $video_say=$video_cek->rowCount();
			?>
              <h3><?=$video_say?></h3>

              <p>VİDEOLAR</p>
            </div>
            <div class="icon">
              <i class="fa fa-video-camera"></i>
            </div>
            <a href="video_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>  
      
      
      
      <?php if($yonetici_izin["sayfa"]==1){?>   
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php $sayfa_cek=$db->query("select * from sayfalar");
				  $sayfa_say=$sayfa_cek->rowCount();
			?>
              <h3><?=$sayfa_say?></h3>

              <p>SAYFALAR</p>
            </div>
            <div class="icon">
              <i class="fa fa-th"></i>
            </div>
            <a href="sayfa_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>
      
      <?php if($yonetici_izin["uye"]==1){?> 
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
            <?php $uye_cek=$db->query("select * from kullanici");
				  $uye_say=$uye_cek->rowCount();
			?>
              <h3><?=$uye_say?></h3>

              <p>ÜYELER</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="uye_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?> 
        <?php if($yonetici_izin["sss"]==1){?>  
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
            <?php $sss_cek=$db->query("select * from sss");
				  $sss_say=$sss_cek->rowCount();
			?>
              <h3><?=$sss_say?></h3>

              <p>SIKÇA SORULAN SORULAR</p>
            </div>
            <div class="icon">
              <i class="fa fa-eyedropper"></i>
            </div>
            <a href="sss_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?> 
      
       <?php if($yonetici_izin["yorum"]==1){?>  
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
            <?php $yorum_cek=$db->query("select * from yorumlar");
				  $yorum_say=$yorum_cek->rowCount();
			?>
              <h3><?=$yorum_say?></h3>

              <p>YORUMLAR</p>
            </div>
            <div class="icon">
              <i class="fa fa-comments"></i>
            </div>
            <a href="yorum_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>
      <?php if($yonetici_izin["sube"]==1){?>  
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
            <?php $sube_cek=$db->query("select * from subeler");
				  $sube_say=$sube_cek->rowCount();
			?>
              <h3><?=$sube_say?></h3>

              <p>ŞUBELER</p>
            </div>
            <div class="icon">
              <i class="fa fa-database"></i>
            </div>
            <a href="sube_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>
      
        <div class="col-lg-6 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php $ayar_cekk=$db->query("select * from ayar");
				  $ayar_say=$ayar_cekk->rowCount();
			?>
              <h3><?=$ayar_say?></h3>

              <p>SİTE AYAR YÖNETİMİ</p>
            </div>
            <div class="icon">
              <i class="fa fa-gears"></i>
            </div>
            <a href="ayar.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
      <?php if($yonetici_izin["slider"]==1){?>  
        <div class="col-lg-6 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php $slider_cek=$db->query("select * from slider");
				  $slider_say=$slider_cek->rowCount();
			?>
              <h3><?=$slider_say?></h3>

              <p>SLİDER</p>
            </div>
            <div class="icon">
              <i class="fa fa-pie-chart"></i>
            </div>
            <a href="slider_listele.php" class="small-box-footer">Hızlı Git <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <?php }?>   
        
     
      
      </div>
      
    </section>
  </div>
	<?php include"include/footer.php";?>
  <div class="control-sidebar-bg"></div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
