<?php 
include"include/baglan.php";
include"include/fonksiyonlar.php";
ob_start();
session_start();
oturumkontrolana();
include_once 'ckeditor/ckeditor.php' ;
require_once 'ckfinder/ckfinder.php' ;

// GENEL AYARLAR KODU
if($_POST['gonder']){

	$site_title = $_POST['site_title'];
	$site_meta = $_POST['site_meta'];
	$site_description = $_POST['site_description'];
	$site_mail = $_POST['site_mail'];
	$site_mail_sifre = $_POST['site_mail_sifre'];
	$site_mail_host = $_POST['site_mail_host'];
	$site_mail_port = $_POST['site_mail_port'];
	
	$klasor="../lib/images/logo/";
	$resim_tmp = $_FILES['resim']['tmp_name'];
	
	if(empty($resim_tmp))
	{
		$ayar_kaydi = $db->query("SELECT * FROM ayar WHERE ayar_id ='1'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['logo'];
	}
	else
	{
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM ayar WHERE ayar_id ='1'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['logo']!="resim-yok")
			{
			  unlink("../lib/images/logo/".$ayar_kaydi['logo']);	  
			}
			
			$random = rand(0,9999);
			
			$resim = $random."-logo.".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasor."/".$resim);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$klasor1="../lib/images/logo/";
	$resim_tmp1 = $_FILES['resim1']['tmp_name'];
	
	if(empty($resim_tmp1))
	{
		$ayar_kaydi = $db->query("SELECT * FROM ayar WHERE ayar_id ='1'")->fetch(PDO::FETCH_ASSOC);
		$resim1 = $ayar_kaydi['footer_logo'];
	}
	else
	{
		if ($_FILES["resim1"]["type"] =="image/gif" || $_FILES["resim1"]["type"] =="image/png"|| $_FILES["resim1"]["type"] =="image/jpg"|| $_FILES["resim1"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM ayar WHERE ayar_id ='1'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['footer_logo']!="resim-yok")
			{
			  unlink("../lib/images/logo/".$ayar_kaydi['footer_logo']);	  
			}
			
			$random = rand(0,9999);
			
			$resim1 = $random."-footerlogo.".substr($_FILES['resim1']['name'], -3);
			
			move_uploaded_file($_FILES['resim1']['tmp_name'],$klasor1."/".$resim1);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	

	$update=$db->prepare("UPDATE ayar set
		site_title			= :site_title,
		site_meta			= :site_meta,
		site_description	= :site_description,
		site_mail			= :site_mail,
		site_mail_sifre		= :site_mail_sifre,
		site_mail_host		= :site_mail_host,
		site_mail_port		= :site_mail_port,
		logo				= :logo,
		footer_logo			= :footer_logo
	");	
	
	$insert=$update->execute(array(
		"site_title"		=> $site_title,
		"site_meta"			=> $site_meta,
		"site_description"	=> $site_description,
		"site_mail"			=> $site_mail,
		"site_mail_sifre"	=> $site_mail_sifre,
		"site_mail_host"	=> $site_mail_host,
		"site_mail_port"	=> $site_mail_port,
		"logo"				=> $resim,
		"footer_logo"		=> $resim1
	
	));
	if ($insert){
		
			$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarılı ! </strong> Başarıyla Güncellenmiştir.
			</div>';
		}	
		if(!$insert){
			$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarısız ! </strong> Bir hata oluştu!
			</div>';
			
		}

}
// GENEL AYARLAR BİTİŞ


// SOSYAL MEDYA KODU
if($_POST['gonder1']){

	$facebook = $_POST['facebook'];
	$instagram = $_POST['instagram'];
	$twitter = $_POST['twitter'];
	$gplus = $_POST['gplus'];
	$linkedin = $_POST['linkedin'];
	$pinterest = $_POST['pinterest'];
	$copyright = $_POST['copyright'];
	
	$footer_adres = $_POST['footer_adres'];
	
	
	$update=$db->prepare("UPDATE ayar set
		facebook			= :facebook,
		instagram			= :instagram,
		twitter				= :twitter,
		gplus				= :gplus,
		linkedin			= :linkedin,
		pinterest			= :pinterest,
		copyright			= :copyright,
		footer_adres		= :footer_adres
	
	");	
	
	$insert=$update->execute(array(
		"facebook"			=> $facebook,
		"instagram"			=> $instagram,
		"twitter"			=> $twitter,
		"gplus"				=> $gplus,
		"linkedin"			=> $linkedin,
		"pinterest"			=> $pinterest,
		"copyright"			=> $copyright,
		"footer_adres"		=> $footer_adres
	
	));
	if ($insert){
		
			$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarılı ! </strong> Başarıyla Güncellenmiştir.
			</div>';
		}	
		if(!$insert){
			$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarısız ! </strong> Bir hata oluştu!
			</div>';
			
		}

}
// SOSYAL MEDYA KODU BİTİŞ

// İLETİŞİM BİLGİLERİ KODU
if($_POST['gonder2']){
	
	$firma_adi = $_POST['firma_adi'];
	$firma_telefon = $_POST['firma_telefon'];
	$firma_telefon1 = $_POST['firma_telefon1'];
	$firma_telefon2 = $_POST['firma_telefon2'];
	$whatsapp = $_POST['whatsapp'];
	$firma_fax = $_POST['firma_fax'];
	$firma_email = $_POST['firma_email'];
	$firma_adres = $_POST['firma_adres'];
	
	$google_analytics = $_POST['google_analytics'];
	$google_maps = $_POST['google_maps'];
	

	$update=$db->prepare("UPDATE ayar set
		firma_adi			= :firma_adi,
		firma_telefon		= :firma_telefon,
		firma_telefon1		= :firma_telefon1,
		firma_telefon2		= :firma_telefon2,
		whatsapp			= :firma_fax,
		firma_fax			= :firma_fax,
		firma_email			= :firma_email,
		firma_adres			= :firma_adres,
		google_analytics	= :google_analytics,
		google_maps			= :google_maps
	");	
	
	$insert=$update->execute(array(
		"firma_adi"			=> $firma_adi,
		"firma_telefon"		=> $firma_telefon,
		"firma_telefon1"	=> $firma_telefon1,
		"firma_telefon2"	=> $firma_telefon2,
		"whatsapp"			=> $whatsapp,
		"firma_fax"			=> $firma_fax,
		"firma_email"		=> $firma_email,
		"firma_adres"		=> $firma_adres,
		"google_analytics"	=> $google_analytics,
		"google_maps"		=> $google_maps
	
	));
	if ($insert){
		
			$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarılı ! </strong> Başarıyla Güncellenmiştir.
			</div>';
		}	
		if(!$insert){
			$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarısız ! </strong> Bir hata oluştu!
			</div>';
			
		}

}
// İLETİŞİM BİLGİLERİ KODU BİTİŞ

	$guncelle_dizi = $db->query("SELECT * FROM ayar Where ayar_id='1'")->fetch(PDO::FETCH_ASSOC);

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
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

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
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
        <li><a href="">Site Ayar Yönetimi</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary col-md-12">
            <div class="box-header with-border">
              <h3 class="box-title">Site Ayar Yönetimi</h3>
              <?=$bilgi?>
            </div>
            
          <div>
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active dr"><a href="#tab_1" data-toggle="tab">Genel Ayarlar</a></li>
              <li class="dr "><a href="#tab_2" data-toggle="tab">Sosyal Medya</a></li>
              <li class="dr"><a href="#tab_3" data-toggle="tab">İletişim Bilgileri</a></li>
              
             
            </ul>
            <div class="tab-content col-md-12">
              <div class="tab-pane active" id="tab_1">
                <form role="form" action="#" method="post" enctype="multipart/form-data">
             
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Site Adı</label>
                  <input type="text" class="form-control" name="site_title" value="<?=$guncelle_dizi['site_title']?>">
                </div>
              
              	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Site Meta</label>
                  <input type="text" class="form-control" name="site_meta"  value="<?=$guncelle_dizi['site_meta']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Site Description</label>
                  <input type="text" class="form-control" name="site_description"  value="<?=$guncelle_dizi['site_description']?>" >
                </div>
                <div class="form-group col-md-4">
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">BAŞLIK LOGO</h1>
                    </div>
                    <div class="dropzone">
                     <?php 
						 if($_POST["sill"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/logo/<?=$guncelle_dizi['logo']?>" class="upload-icon" style="width:170px; height:170px;"/>	 
					 <?php }?>
                        <input type="file" class="upload-input" name="resim" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim">Resim Seç</button>
                    <?php 
							echo ' <input type="submit" class="btn btn-danger kay" name="silll" value="sil"/>';
							if($_POST["silll"]){
							 unlink("../lib/images/logo/".$guncelle_dizi['logo']);
						}
					
					?>
				</div>
                </div>
                <div class="form-group col-md-4">
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">FOOTER LOGO</h1>
                    </div>
                    <div class="dropzone">
                   <?php 
						 if($_POST["sill"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/logo/<?=$guncelle_dizi['footer_logo']?>" class="upload-icon" style="width:170px; height:170px;"/>	 
					 <?php }?>
                        <input type="file" class="upload-input" name="resim1" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim1">Resim Seç</button>
                    <?php 
							echo ' <input type="submit" class="btn btn-danger kay" name="sil1" value="sil"/>';
							if($_POST["sil1"]){
							 unlink("../lib/images/logo/".$guncelle_dizi['footer_logo']);
						}
					?>
				</div>

                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Site Mail</label>
                  <input type="text" class="form-control" name="site_mail" value="<?=$guncelle_dizi['site_mail']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Site Mail Şifre</label>
                  <input type="text" class="form-control" name="site_mail_sifre"  value="<?=$guncelle_dizi['site_mail_sifre']?>" >
                </div>
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Site Mail Host</label>
                  <input type="text" class="form-control" name="site_mail_host" value="<?=$guncelle_dizi['site_mail_host']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Site Mail Port</label>
                  <input type="text" class="form-control" name="site_mail_port"  value="<?=$guncelle_dizi['site_mail_port']?>" >
                </div>
              <div class="form-group col-md-12">
                <button type="submit" value="gonder" name="gonder" class="btn btn-warning col-md-12 bb">KAYDET</button>
              </div>
            </form>
              </div>
              
              <div class="tab-pane" id="tab_2">
              <form role="form" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-12 has-feedback">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" class="form-control" name="facebook"  value="<?=$guncelle_dizi['facebook']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">İnstagram</label>
                  <input type="text" class="form-control" name="instagram"  value="<?=$guncelle_dizi['instagram']?>" >
                </div>

                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Twitter</label>
                  <input type="text" class="form-control" name="twitter"  value="<?=$guncelle_dizi['twitter']?>" >
                </div>
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Gplus</label>
                  <input type="text" class="form-control" name="gplus"  value="<?=$guncelle_dizi['gplus']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Linkedin</label>
                  <input type="text" class="form-control" name="linkedin"  value="<?=$guncelle_dizi['linkedin']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Pinterest</label>
                  <input type="text" class="form-control" name="pinterest"  value="<?=$guncelle_dizi['pinterest']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Copyright</label>
                  <input type="text" class="form-control" name="copyright"  value="<?=$guncelle_dizi['copyright']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Footer Adres</label>
                  <input type="text" class="form-control" name="footer_adres"  value="<?=$guncelle_dizi['footer_adres']?>" >
                </div>
              <div class="form-group col-md-12">
                <button type="submit" value="gonder1" name="gonder1" class="btn btn-warning col-md-12 bb">KAYDET</button>
              </div>
            </form>
              </div>
              <div class="tab-pane" id="tab_3">
                <form role="form" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Firma Adı</label>
                  <input type="text" class="form-control" name="firma_adi" value="<?=$guncelle_dizi['firma_adi']?>" >
                </div>
               
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Firma Telefon</label>
                  <input type="text" class="form-control" name="firma_telefon" value="<?=$guncelle_dizi['firma_telefon']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Firma Telefon</label>
                  <input type="text" class="form-control" name="firma_telefon1" value="<?=$guncelle_dizi['firma_telefon1']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Firma Telefon</label>
                  <input type="text" class="form-control" name="firma_telefon2" value="<?=$guncelle_dizi['firma_telefon2']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Whatsapp</label>
                  <input type="text" class="form-control" name="whatsapp" value="<?=$guncelle_dizi['whatsapp']?>" >
                </div>
                
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Firma Fax</label>
                  <input type="text" class="form-control" name="firma_fax"  value="<?=$guncelle_dizi['firma_fax']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Firma Email</label>
                  <input type="text" class="form-control" name="firma_email" value="<?=$guncelle_dizi['firma_email']?>" >
                </div>
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Firma Adres</label>
                  <input type="text" class="form-control" name="firma_adres" value="<?=$guncelle_dizi['firma_adres']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Google Analytics</label>
                  <input type="text" class="form-control" name="google_analytics"  value="<?=$guncelle_dizi['google_analytics']?>" >
                </div>
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Google Maps</label>
                  <textarea class="form-control" name="google_maps" style="height:100px;">
                  	<?=$guncelle_dizi['google_maps']?> 
                  </textarea>
                </div>
             
              <div class="form-group col-md-12">
                <button type="submit" value="gonder2" name="gonder2" class="btn btn-warning col-md-12 bb">KAYDET</button>
              </div>
            </form>
              </div>
            </div>
          </div>
        </div>            
            
          </div>
        </div>
      </div>
    </section>
  </div>
 <?php include"include/footer.php";?>
 

</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
