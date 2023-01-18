<?php 
include"include/baglan.php";
include"include/fonksiyonlar.php";
ob_start();
session_start();
oturumkontrolana();
include_once 'ckeditor/ckeditor.php' ;
require_once 'ckfinder/ckfinder.php' ;

if($_POST['gonder'] and $_GET['islem']==""){

	$sira	=	$_POST['sira'];
	$kategori_adi		=	$_POST['kategori_adi'];
	$kategori_adi_en	=	$_POST['kategori_adi_en'];
	$kategori_adi_fr	=	$_POST['kategori_adi_fr'];
	$kategori_adi_ar	=	$_POST['kategori_adi_ar'];
	$kategori_adi_ru	=	$_POST['kategori_adi_ru'];
	$kategori_adi_de	=	$_POST['kategori_adi_de'];
	$durum				=	$_POST['durum'];
	$kategori_linki			=	$_POST['kategori_linki'];
	$kategori_linki_en		=	$_POST['kategori_linki_en'];
	$kategori_linki_fr		=	$_POST['kategori_linki_fr'];
	$kategori_linki_ar		=	$_POST['kategori_linki_ar'];
	$kategori_linki_ru		=	$_POST['kategori_linki_ru'];
	$kategori_linki_de		=	$_POST['kategori_linki_de'];
	$ustid				= 	$_POST['ustid'];
	$seo 				=	$_POST['seo'];
	$site_title			= 	$_POST['site_title'];
	$site_description 	=	$_POST['site_description'];
	
	$klasor="../lib/images/fotograf_galeri_kategori/";
	
	$resim_tmp = $_FILES['kategori_resim']['tmp_name'];
	
	if(empty($resim_tmp))
	{
		$resim = "resim-yok";
	}
	else
	{
		if ($_FILES["kategori_resim"]["type"] =="image/gif" || $_FILES["kategori_resim"]["type"] =="image/png"|| $_FILES["kategori_resim"]["type"] =="image/jpg"|| $_FILES["kategori_resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,999);
			
			$kategori_resim = $random."-".$seo.".".substr($_FILES['kategori_resim']['name'], -3);
			
			move_uploaded_file($_FILES['kategori_resim']['tmp_name'],$klasor."/".$kategori_resim);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$klasor_banner="../lib/images/fotograf_galeri/";
	
	$resim_tmp_banner = $_FILES['banner_resim']['tmp_name'];
	
	if(empty($resim_tmp_banner))
	{
		$banner_resim = "resim-yok";
	}
	else
	{
		if ($_FILES["banner_resim"]["type"] =="image/gif" || $_FILES["banner_resim"]["type"] =="image/png"|| $_FILES["banner_resim"]["type"] =="image/jpg"|| $_FILES["banner_resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,999);
			
			$banner_resim = $random."-".$seo.".".substr($_FILES['banner_resim']['name'], -3);
			
			move_uploaded_file($_FILES['banner_resim']['tmp_name'],$klasor_banner."/".$banner_resim);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}

if(empty($kategori_adi)){
	$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen Bir Başlık / Ad Yazınız.
									</div>';
}
else{
	$query=$db->prepare("insert into fotograf_galeri_kategori set
		sira				= :sira,
		kategori_adi		= :kategori_adi,
		site_title			= :site_title,
		site_description	= :site_description,
		kategori_adi_en		= :kategori_adi_en,
		kategori_adi_fr		= :kategori_adi_fr,
		kategori_adi_ar		= :kategori_adi_ar,
		kategori_adi_ru		= :kategori_adi_ru,
		kategori_adi_de		= :kategori_adi_de,
		durum				= :durum,
		kategori_linki		= :kategori_linki,
		kategori_linki_en	= :kategori_linki_en,
		kategori_linki_fr	= :kategori_linki_fr,
		kategori_linki_ar	= :kategori_linki_ar,
		kategori_linki_ru	= :kategori_linki_ru,
		kategori_linki_de	= :kategori_linki_de,
		seo					= :seo,
		ustid				= :ustid,
		banner_resim	= :banner_resim,
		kategori_resim		= :kategori_resim
	
	");	
	
	$insert=$query->execute(array(
		"sira"				=> $sira,
		"kategori_adi"		=> $kategori_adi,
		"site_title"		=> $site_title,
		"site_description"	=> $site_description,
		"kategori_adi_en"	=> $kategori_adi_en,
		"kategori_adi_fr"	=> $kategori_adi_fr,
		"kategori_adi_ar"	=> $kategori_adi_ar,
		"kategori_adi_ru"	=> $kategori_adi_ru,
		"kategori_adi_de"	=> $kategori_adi_de,
		"durum"				=> $durum,
		"kategori_linki"		=> $kategori_linki,
		"kategori_linki_en"		=> $kategori_linki_en,
		"kategori_linki_fr"		=> $kategori_linki_fr,
		"kategori_linki_ar"		=> $kategori_linki_ar,
		"kategori_linki_ru"		=> $kategori_linki_ru,
		"kategori_linki_de"		=> $kategori_linki_de,
		"seo"				=> $seo,
		"ustid"				=> $ustid,
		"banner_resim"	=> $banner_resim,
		"kategori_resim"	=> $kategori_resim
	
	));
	if ($insert){
			$last_id = $db->lastInsertId();
			$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarılı ! </strong>'.$last_id.' Numaralı ID ile sisteme kaydınız yapılmıştır.
			</div>';
		}	
		if(!$insert){
			$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarısız ! </strong> Bir hata oluştu
			</div>';
			
		}
}
}


// Guncelle
if(@$_POST['gonder'] and $_GET['islem']=="duzenle" )
{
	$duzenlenecek_id = $_GET['id'];
	
	
	$sira				=	$_POST['sira'];
	$kategori_adi		=	$_POST['kategori_adi'];
	$kategori_adi_en	=	$_POST['kategori_adi_en'];
	$kategori_adi_fr	=	$_POST['kategori_adi_fr'];
	$kategori_adi_ar	=	$_POST['kategori_adi_ar'];
	$kategori_adi_ru	=	$_POST['kategori_adi_ru'];
	$kategori_adi_de	=	$_POST['kategori_adi_de'];
	$durum				=	$_POST['durum'];
	$kategori_linki			=	$_POST['kategori_linki'];
	$kategori_linki_en		=	$_POST['kategori_linki_en'];
	$kategori_linki_fr		=	$_POST['kategori_linki_fr'];
	$kategori_linki_ar		=	$_POST['kategori_linki_ar'];
	$kategori_linki_ru		=	$_POST['kategori_linki_ru'];
	$kategori_linki_de		=	$_POST['kategori_linki_de'];
	$ustid				= 	$_POST['ustid'];
	$seo 				=	$_POST['seo'];
	$site_title			= 	$_POST['site_title'];
	$site_description 	=	$_POST['site_description'];
	
	$klasor="../lib/images/fotograf_galeri_kategori/";
	
	$resim_tmp = $_FILES['kategori_resim']['tmp_name'];
	
	if(empty($resim_tmp))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM fotograf_galeri_kategori WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$kategori_resim = $ayar_kaydi['kategori_resim'];
	}
	else
	{
		if ($_FILES["kategori_resim"]["type"] =="image/gif" || $_FILES["kategori_resim"]["type"] =="image/png"|| $_FILES["kategori_resim"]["type"] =="image/jpg"|| $_FILES["kategori_resim"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM fotograf_galeri_kategori WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['kategori_resim']!="resim-yok")
			{
			  unlink("../lib/images/fotograf_galeri_kategori/".$ayar_kaydi['kategori_resim']);	  
			}
			
			$random = rand(0,999);
			
			$kategori_resim = $random."-".$seo.".".substr($_FILES['kategori_resim']['name'], -3);
			
			move_uploaded_file($_FILES['kategori_resim']['tmp_name'],$klasor."/".$kategori_resim);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$klasor_banner="../lib/images/fotograf_galeri_kategori/";
	
	$resim_tmp_banner = $_FILES['banner_resim']['tmp_name'];
	
	if(empty($resim_tmp_banner))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM fotograf_galeri_kategori WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$banner_resim = $ayar_kaydi['banner_resim'];
	}
	else
	{
		if ($_FILES["banner_resim"]["type"] =="image/gif" || $_FILES["banner_resim"]["type"] =="image/png"|| $_FILES["banner_resim"]["type"] =="image/jpg"|| $_FILES["banner_resim"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM fotograf_galeri_kategori WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['banner_resim']!="resim-yok")
			{
			  unlink("../lib/images/fotograf_galeri_kategori/".$ayar_kaydi['banner_resim']);	  
			}
			
			$random = rand(0,9999);
			
			$banner_resim = $random."-".$seo.".".substr($_FILES['banner_resim']['name'], -3);
			
			move_uploaded_file($_FILES['banner_resim']['tmp_name'],$klasor_banner."/".$banner_resim);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	
	$update = $db->prepare("UPDATE fotograf_galeri_kategori SET 
						sira				= :sira,
						kategori_adi		= :kategori_adi,
						site_title			= :site_title,
						site_description	= :site_description,
						kategori_adi_en		= :kategori_adi_en,
						kategori_adi_fr		= :kategori_adi_fr,
						kategori_adi_ar		= :kategori_adi_ar,
						kategori_adi_ru		= :kategori_adi_ru,
						kategori_adi_de		= :kategori_adi_de,
						durum				= :durum,
						kategori_linki		= :kategori_linki,
						kategori_linki_en	= :kategori_linki_en,
						kategori_linki_fr	= :kategori_linki_fr,
						kategori_linki_ar	= :kategori_linki_ar,
						kategori_linki_ru	= :kategori_linki_ru,
						kategori_linki_de	= :kategori_linki_de,
						seo					= :seo,
						banner_resim	= :banner_resim,
						kategori_resim		= :kategori_resim
						WHERE 
						id 			= :id");
					$result = $update->execute(array(
							"sira"				=> $sira,
							"kategori_adi"		=> $kategori_adi,
							"site_title"		=> $site_title,
							"site_description"	=> $site_description,
							"kategori_adi_en"	=> $kategori_adi_en,
							"kategori_adi_fr"	=> $kategori_adi_fr,
							"kategori_adi_ar"	=> $kategori_adi_ar,
							"kategori_adi_ru"	=> $kategori_adi_ru,
							"kategori_adi_de"	=> $kategori_adi_de,
							"durum"				=> $durum,
							"kategori_linki"		=> $kategori_linki,
							"kategori_linki_en"		=> $kategori_linki_en,
							"kategori_linki_fr"		=> $kategori_linki_fr,
							"kategori_linki_ar"		=> $kategori_linki_ar,
							"kategori_linki_ru"		=> $kategori_linki_ru,
							"kategori_linki_de"		=> $kategori_linki_de,
							"seo"				=> $seo,
							"kategori_resim"	=> $kategori_resim,
							"banner_resim"	=> $banner_resim,
							'id'   			=>$duzenlenecek_id
						)); 
					if ($result) {
						$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarılı ! </strong> Güncelleme  yapılmıştır.
			</div>'; 
					}else{
						$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata ! </strong> Bir Sorun Oluştu.Tekrar Deneyiniz Devam Ederse Firma İle Görüşünüz.
			</div>';  
					}
	
}
if(@$_GET['islem']=="duzenle")
{
	$id=$_GET['id'];
	$guncelle_dizi = $db->query("SELECT * FROM fotograf_galeri_kategori where id='$id'")->fetch(PDO::FETCH_ASSOC);
}
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
        <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa</a></li>
        <li><a href="">Galeri Kategori Ekle</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary col-md-12">
            <div class="box-header with-border">
              <h3 class="box-title">Galeri Kategori Ekle</h3>
              <?=$bilgi?>
            </div>            
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active drr"><a href="#tab_1" data-toggle="tab">Genel Bilgiler</a></li>
              <li class="drr"><a href="#tab_2" data-toggle="tab">Seo Ayarları</a></li>
              
             
            </ul>
            <form role="form" action="#" method="post" enctype="multipart/form-data">
            <div class="tab-content col-md-12">
            
             <div class="tab-pane active" id="tab_1">
            	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Kategori</label>
                  
                <select class="form-control select2" name="ustid">
                  <option selected="selected" value="0">Ana Kategori</option>
                 <?php $kategori_cek=$db->query("select * from fotograf_galeri_kategori where ustid='0' order by sira asc",PDO::FETCH_ASSOC);
				 		if($kategori_cek->rowCount()){
							foreach($kategori_cek as $kategori_dizi){
				 ?>
                 <option value="<?=$kategori_dizi['id']?>" <?php if($kategori_dizi['id']==$guncelle_dizi['ustid']) { ?> selected="selected" <?php } ?>><?=$kategori_dizi['kategori_adi']?></option>
                              
                         <?php $ustid = $kategori_dizi['id'];
						 		$kategori_cek1=$db->query("select * from fotograf_galeri_kategori where ustid='$ustid' order by sira asc",PDO::FETCH_ASSOC);
				 		
						if($kategori_cek1->rowCount()){
							foreach($kategori_cek1 as $kategori_dizii){
						 ?>
    <option value="<?=$kategori_dizii['id']?>" <?php if($kategori_dizii['id']==$guncelle_dizi['ustid']){?> selected="selected"<?php } ?>><span style="font-size:10px; color:#039;"> --> <?=$kategori_dizii['kategori_adi']?> - <?=$kategori_dizii['id']?></span></option>                      
                          <?php }}?>   
                                    
                 <?php }}?>
                </select>
              </div>
               	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Kategori Sırası</label>
                  <input type="text" class="form-control" name="sira" value="<?=$guncelle_dizi['sira']?>">
                </div>
                
              	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Kategori Adı</label>
                  <input type="text" class="form-control" name="kategori_adi" id="adi" value="<?=$guncelle_dizi['kategori_adi']?>" >
                </div>

         <?php if($yonetici_izin["en"]==1){?>                 
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Kategori Adı İngilizce</label>
                  <input type="text" class="form-control" name="kategori_adi_en" id="adi" value="<?=$guncelle_dizi['kategori_adi_en']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["fr"]==1){?>         
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Kategori Adı Fransızca</label>
                  <input type="text" class="form-control" name="kategori_adi_fr" id="adi" value="<?=$guncelle_dizi['kategori_adi_fr']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ar"]==1){?> 
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Kategori Adı Arapça</label>
                  <input type="text" class="form-control" name="kategori_adi_ar" id="adi" value="<?=$guncelle_dizi['kategori_adi_ar']?>" >
                </div>
       	<?php }?>
        <?php if($yonetici_izin["ru"]==1){?> 
				<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Kategori Adı Rusça</label>
                  <input type="text" class="form-control" name="kategori_adi_ru" id="adi" value="<?=$guncelle_dizi['kategori_adi_ru']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["de"]==1){?> 
				<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Kategori Adı Almanca</label>
                  <input type="text" class="form-control" name="kategori_adi_de" id="adi" value="<?=$guncelle_dizi['kategori_adi_de']?>" >
                </div>
        <?php }?>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Başlık / Adı Seo</label>
                 <input type="text" class="form-control" name="seo" id="tseo" readonly value="<?=$guncelle_dizi['seo']?>">
                  <span class="help-inline dip">Bu Kısımda Girilen Başlık veya Ad Otomatik olarak Seo'ya Uygun Hale Getirilir. Bu Kısım Seo İçin Önemlidir</span>
                </div>
                
                
                <div class="form-group col-md-12">
                  <p style="font-weight:bold;">Durumu</p>
                <label style="padding-right:10px;">
                
                  Aktif <input type="radio" name="durum" value="0"  checked<?php if(@$guncelle_dizi['durum']==0){ ?> checked <?php }?>>
                </label>
                <label>
                
                  Pasif <input type="radio" name="durum" value="1" <?php if(@$guncelle_dizi['durum']==1){ ?> checked <?php }?>>
                </label>
              </div>
              
               
                <div class="form-group col-md-4">
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">KATEGORİ RESMİ</h1>
                    </div>
                    <div class="dropzone">
                     <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/fotograf_galeri_kategori/<?=$guncelle_dizi['kategori_resim']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="kategori_resim" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="kategori_resim">Resim Seç</button>
                    <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill" value="sil"/>';
							if($_POST["sill"]){
							 unlink("../lib/images/fotograf_galeri_kategori/".$guncelle_dizi['kategori_resim']);
						}
						}
					?>
				</div>

                </div>
                <?php if($yonetici_izin["banner"]==1){?>
                <div class="form-group col-md-4">
    			
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">BANNER RESMİ</h1>
                    </div>
                    <div class="dropzone">
                     <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill_banner"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/fotograf_galeri_kategori/<?=$guncelle_dizi['banner_resim']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="banner_resim" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="banner_resim">Resim Seç</button>
                    <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill_banner" value="sil"/>';
							if($_POST["sill_banner"]){
							 unlink("../lib/images/fotograf_galeri_kategori/".$guncelle_dizi['banner_resim']);
						}
						}
					?>
				</div>

                </div>
                <?php }?>
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Fotoğraf Kategori Linki </label>
                  <input type="text" class="form-control" name="kategori_linki" value="<?=$guncelle_dizi['kategori_linki']?>" >
                </div>
        <?php if($yonetici_izin["en"]==1){?>                 
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Fotoğraf Kategori Linki İngilizce</label>
                  <input type="text" class="form-control" name="kategori_linki_en" value="<?=$guncelle_dizi['kategori_linki_en']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["fr"]==1){?>         
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Fotoğraf Kategori Linki Fransızca</label>
                  <input type="text" class="form-control" name="kategori_linki_fr" value="<?=$guncelle_dizi['kategori_linki_fr']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ar"]==1){?>         
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Fotoğraf Kategori Linki Arapça</label>
                  <input type="text" class="form-control" name="kategori_linki_ar" value="<?=$guncelle_dizi['kategori_linki_ar']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ru"]==1){?>         
				<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Fotoğraf Kategori Linki Rusça</label>
                  <input type="text" class="form-control" name="kategori_linki_ru" value="<?=$guncelle_dizi['kategori_linki_ru']?>" >
                </div>
       	<?php }?>
        <?php if($yonetici_izin["de"]==1){?>          
				<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Fotoğraf Kategori Linki Almanca</label>
                  <input type="text" class="form-control" name="kategori_linki_de" value="<?=$guncelle_dizi['kategori_linki_de']?>" >
                </div>
       <?php }?>

        	 </div>
             
              <div class="tab-pane" id="tab_2">
             
               
              	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Sayfa Titlesi</label>
                  <input type="text" class="form-control" name="site_title"  value="<?=$guncelle_dizi['site_title']?>" >
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Sayfa Anahtar Kelimeleri</label>
                  <input type="text" class="form-control" name="site_description"  value="<?=$guncelle_dizi['site_description']?>" >
                </div>
      
            
              </div>
              
            </div>
            <div class="form-group col-md-12">
                <button type="submit" value="gonder" name="gonder" class="btn btn-warning col-md-12 bb">KAYDET</button>
              </div>
            </form>
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
<script type="text/javascript">
						   $(document).ready(function(e) {
                            
                       		// Seo linkler için
							function seo_link(name) {
								var ara = new Array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '\\+', '\\#');
								var degis = new Array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
								return name.replace(new RegExp(ara.join('|'), 'g'), function (c) {
									return degis[ara.indexOf(c)]
								})
								.toLowerCase()
								.replace(/^\s+|\s+$/g, '')
								.replace(/\s+/g, '-')
								.replace(/[^a-z-0-9-]/g, '');
							}
					   		
					   
						   $("#adi").keyup(function () {
								var seolu = seo_link($(this).val());
								var  yenideger = seolu;
								$("#tseo").val(yenideger);
								
								var normal_adi = $(this).val() ;
								$("#title").val(normal_adi);
								
							}).keyup();
						    });
						   </script>
</body>
</html>
