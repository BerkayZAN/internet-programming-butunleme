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
	$kategori	=	$_POST['kategori'];
	$adi	=	$_POST['adi'];
	$adi_en	=	$_POST['adi_en'];
	$adi_fr	=	$_POST['adi_fr'];
	$adi_ar	=	$_POST['adi_ar'];
	$adi_ru	=	$_POST['adi_ru'];
	$adi_de	=	$_POST['adi_de'];
	$icon	=	$_POST['icon'];
	$durum	=	$_POST['durum'];	
	$aciklama	=	$_POST['aciklama'];
	$aciklama_en	=	$_POST['aciklama_en'];
	$aciklama_fr	=	$_POST['aciklama_fr'];
	$aciklama_ar	=	$_POST['aciklama_ar'];
	$aciklama_ru	=	$_POST['aciklama_ru'];
	$aciklama_de	=	$_POST['aciklama_de'];
	$seo =	$_POST['seo'];
	$site_title	=	$_POST['site_title'];
	$site_description =	$_POST['site_description'];
	
	$klasor="../lib/images/hizmetler/";
	
	$resim_tmp = $_FILES['resim']['tmp_name'];
	
	if(empty($resim_tmp))
	{
		$resim = "resim-yok";
	}
	else
	{
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
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
	
	$klasor_banner="../lib/images/hizmetler/";
	
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

if(empty($adi)){
	$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen Bir Başlık / Ad Yazınız.
									</div>';
}
else{
	$query=$db->prepare("insert into hizmetler set
		sira	= :sira,
		kategori	= :kategori,
		site_title		= :site_title,
		site_description	= :site_description,
		adi		= :adi,
		adi_en	= :adi_en,
		adi_fr	= :adi_fr,
		adi_ar	= :adi_ar,
		adi_ru	= :adi_ru,
		adi_de	= :adi_de,
		icon	= :icon,
		durum	= :durum,
		aciklama	= :aciklama,
		aciklama_en	= :aciklama_en,
		aciklama_fr	= :aciklama_fr,
		aciklama_ar	= :aciklama_ar,
		aciklama_ru	= :aciklama_ru,
		aciklama_de	= :aciklama_de,
		seo		= :seo,
		banner_resim	= :banner_resim,
		resim	= :resim
	
	");	
	
	$insert=$query->execute(array(
		"sira"	=> $sira,
		"kategori"	=> $kategori,
		"site_title"		=> $site_title,
		"site_description"	=> $site_description,
		"adi"	=> $adi,
		"adi_en"	=> $adi_en,
		"adi_fr"	=> $adi_fr,
		"adi_ar"	=> $adi_ar,
		"adi_ru"	=> $adi_ru,
		"adi_de"	=> $adi_de,
		"icon"		=> $icon,
		"durum"		=> $durum,
		"aciklama"	=> $aciklama,
		"aciklama_en"	=> $aciklama_en,
		"aciklama_fr"	=> $aciklama_fr,
		"aciklama_ar"	=> $aciklama_ar,
		"aciklama_ru"	=> $aciklama_ru,
		"aciklama_de"	=> $aciklama_de,
		"seo"		=> $seo,
		"banner_resim"	=> $banner_resim,
		"resim"		=> $resim
	
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
	
	
	$sira  		=	$_POST["sira"];
	$kategori  	=	$_POST["kategori"];
	$adi	=	$_POST['adi'];
	$adi_en	=	$_POST['adi_en'];
	$adi_fr	=	$_POST['adi_fr'];
	$adi_ar	=	$_POST['adi_ar'];
	$adi_ru	=	$_POST['adi_ru'];
	$adi_de	=	$_POST['adi_de'];
	$icon	=	$_POST['icon'];
	$durum	=	$_POST['durum'];		
	$aciklama	=	$_POST['aciklama'];
	$aciklama_en	=	$_POST['aciklama_en'];
	$aciklama_fr	=	$_POST['aciklama_fr'];
	$aciklama_ar	=	$_POST['aciklama_ar'];
	$aciklama_ru	=	$_POST['aciklama_ru'];
	$aciklama_de	=	$_POST['aciklama_de'];
	$seo			=	$_POST["seo"];
	$site_title	=	$_POST['site_title'];
	$site_description =	$_POST['site_description'];
	
	$klasor="../lib/images/hizmetler/";
	
	$resim_tmp = $_FILES['resim']['tmp_name'];
	
	if(empty($resim_tmp))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM hizmetler WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM hizmetler WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../lib/images/hizmetler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
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
	
	$klasor_banner="../lib/images/hizmetler/";
	
	$resim_tmp_banner = $_FILES['banner_resim']['tmp_name'];
	
	if(empty($resim_tmp_banner))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM hizmetler WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$banner_resim = $ayar_kaydi['banner_resim'];
	}
	else
	{
		if ($_FILES["banner_resim"]["type"] =="image/gif" || $_FILES["banner_resim"]["type"] =="image/png"|| $_FILES["banner_resim"]["type"] =="image/jpg"|| $_FILES["banner_resim"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM hizmetler WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['banner_resim']!="resim-yok")
			{
			  unlink("../lib/images/hizmetler/".$ayar_kaydi['banner_resim']);	  
			}
			
			$random = rand(0,99999);
			
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
	
	
	
	$update = $db->prepare("UPDATE hizmetler SET 
						sira        = :sira,
						kategori 	= :kategori,
						site_title		= :site_title,
						site_description	= :site_description,
						adi		= :adi,
						adi_en	= :adi_en,
						adi_fr	= :adi_fr,
						adi_ar	= :adi_ar,
						adi_ru	= :adi_ru,
						adi_de	= :adi_de,
						icon	= :icon,
						durum	= :durum,
						aciklama	= :aciklama,
						aciklama_en	= :aciklama_en,
						aciklama_fr	= :aciklama_fr,
						aciklama_ar	= :aciklama_ar,
						aciklama_ru	= :aciklama_ru,
						aciklama_de	= :aciklama_de,
						seo		= :seo,
						banner_resim	= :banner_resim,
						resim 		= :resim
						WHERE 
						id 			= :id");
					$result = $update->execute(array(
							'sira'		=>$sira,
							'kategori'	=>$kategori,
							"site_title"		=> $site_title,
							"site_description"	=> $site_description,
							'adi'		=>$adi,
							"adi_en"	=> $adi_en,
							"adi_fr"	=> $adi_fr,
							"adi_ar"	=> $adi_ar,
							"adi_ru"	=> $adi_ru,
							"adi_de"	=> $adi_de,
							"icon"		=> $icon,
							"durum"		=> $durum,
							"aciklama"	=> $aciklama,
							"aciklama_en"	=> $aciklama_en,
							"aciklama_fr"	=> $aciklama_fr,
							"aciklama_ar"	=> $aciklama_ar,
							"aciklama_ru"	=> $aciklama_ru,
							"aciklama_de"	=> $aciklama_de,
							'seo'			=>$seo,
							"banner_resim"	=> $banner_resim,
							'resim'			=>$resim,
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
	$guncelle_dizi = $db->query("SELECT * FROM hizmetler Where id='$id'")->fetch(PDO::FETCH_ASSOC);
}
$id_bul = $db->query("SELECT * FROM hizmetler order by id desc LIMIT 1")->fetch(PDO::FETCH_ASSOC);
$idim=$id_bul['id']+1;
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
        <li><a href="">Hizmet Ekle</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary col-md-12">
            <div class="box-header with-border">
              <h3 class="box-title">Hizmet Ekle</h3>
              <?=$bilgi?>
            </div>   
			<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active dr"><a href="#tab_1" data-toggle="tab">Genel Bilgiler</a></li>
              <li class="dr "><a href="#tab_2" data-toggle="tab">Hizmet Resimleri</a></li>
              <li class="dr"><a href="#tab_3" data-toggle="tab">Seo Ayarları</a></li>
              
             
            </ul>
            <form role="form" action="#" method="post" enctype="multipart/form-data">
            <div class="tab-content col-md-12">
            
              <div class="tab-pane active" id="tab_1">
               <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Sırası</label>
                  <input type="text" class="form-control" name="sira" value="<?=$guncelle_dizi['sira']?>">
                </div>
                <?php if($yonetici_izin["hizmet_kat"]==1){?>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Kategori</label>
                 
                <select class="form-control select2" name="kategori">
                  <option selected="selected" value="">Seçiniz</option>
                  
                  
                 <?php $kategori_cek=$db->query("select * from hizmet_kategori where ustid='0' order by sira asc",PDO::FETCH_ASSOC);
				 		if($kategori_cek->rowCount()){
							foreach($kategori_cek as $kategori_dizi){
				 ?>
                <option style="background:#F2F2F2;" value="<?=$kategori_dizi['id']?>" <?php if($guncelle_dizi['kategori']==$kategori_dizi['id']) { ?> selected="selected" <?php } ?>><?=$kategori_dizi['kategori_adi']?></option>
                              
                         <?php $ustid = $kategori_dizi['id'];
						 		$kategori_cek1=$db->query("select * from hizmet_kategori where ustid='$ustid' order by sira asc",PDO::FETCH_ASSOC);
				 		
						
						
							if($kategori_cek1->rowCount()){
							foreach($kategori_cek1 as $kategori_dizii){
						 ?>
    <option value="<?=$kategori_dizii['id']?>" <?php if(@$kategori_dizii['id']==$guncelle_dizi['kategori']){?> selected="selected"<?php } ?>><span style="font-size:10px; color:#039;"> --> <?=$kategori_dizii['kategori_adi']?> - <?=$kategori_dizii['id']?></span></option>                      
                          <?php }}?>   
                          
                           
                                    
                 <?php }}?>
                </select>
                
                
                
              </div>
              	<?php }?>
              	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Adı</label>
                  <input type="text" class="form-control" name="adi" id="adi" value="<?=$guncelle_dizi['adi']?>" >
                </div>
                
                
        <?php if($yonetici_izin["en"]==1){?>            
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Adı İngilizce</label>
                  <input type="text" class="form-control" name="adi_en" value="<?=$guncelle_dizi['adi_en']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["fr"]==1){?> 
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Adı Fransızca</label>
                  <input type="text" class="form-control" name="adi_fr" value="<?=$guncelle_dizi['adi_fr']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ar"]==1){?>         
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Adı Arapça</label>
                  <input type="text" class="form-control" name="adi_ar" value="<?=$guncelle_dizi['adi_ar']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ru"]==1){?>         
				<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Adı Rusça</label>
                  <input type="text" class="form-control" name="adi_ru" value="<?=$guncelle_dizi['adi_ru']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["de"]==1){?>        
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Adı Almanca</label>
                  <input type="text" class="form-control" name="adi_de" value="<?=$guncelle_dizi['adi_de']?>" >
                </div>
        <?php }?> 
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet İcon</label>
                  <input type="text" class="form-control" name="icon" value="<?=$guncelle_dizi['icon']?>" >
                </div>
                
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
                        <h1 class="h1s">HİZMET RESMİ</h1>
                    </div>
                    <div class="dropzone">
                     <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/hizmetler/<?=$guncelle_dizi['resim']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="resim" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim">Resim Seç</button>
                    <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill" value="sil"/>';
							if($_POST["sill"]){
							 unlink("../lib/images/hizmetler/".$guncelle_dizi['resim']);
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
                        <img src="../lib/images/hizmetler/<?=$guncelle_dizi['banner_resim']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="banner_resim" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="banner_resim">Resim Seç</button>
                    <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill_banner" value="sil"/>';
							if($_POST["sill_banner"]){
							 unlink("../lib/images/hizmetler/".$guncelle_dizi['banner_resim']);
						}
						}
					?>
				</div>

                </div>
                <?php }?>
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Açıklama</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama'] ;
										$ckeditor = new CKEditor("aciklama") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '200';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama', $initialValue, $config);
										?>
             			</div>
              </div>
              
        <?php if($yonetici_izin["en"]==1){?>   
              	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Açıklama İngilizce</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama_en'] ;
										$ckeditor = new CKEditor("aciklama_en") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '200';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama_en', $initialValue, $config);
										?>
             			</div>
              </div>
        <?php }?>
        <?php if($yonetici_izin["fr"]==1){?>       
              	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Açıklama Fransızca</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama_fr'] ;
										$ckeditor = new CKEditor("aciklama_fr") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '200';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama_fr', $initialValue, $config);
										?>
             			</div>
              </div>
        <?php }?>
        <?php if($yonetici_izin["ar"]==1){?>      
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Açıklama Arapça</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama_ar'] ;
										$ckeditor = new CKEditor("aciklama_ar") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '200';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama_ar', $initialValue, $config);
										?>
             			</div>
              </div>
        <?php }?>
        <?php if($yonetici_izin["ru"]==1){?>      
			    <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Açıklama Rusça</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama_ru'] ;
										$ckeditor = new CKEditor("aciklama_ru") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '200';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama_ru', $initialValue, $config);
										?>
             			</div>
              </div>
        <?php }?>
        <?php if($yonetici_izin["de"]==1){?>      
			    <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Hizmet Açıklama Almanca</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama_de'] ;
										$ckeditor = new CKEditor("aciklama_de") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '200';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama_de', $initialValue, $config);
										?>
             			</div>
              </div>
        <?php }?>
         
         </div>
            
              <div class="tab-pane" id="tab_2">
              	
                   <div class="form-group col-md-12" style="text-align:center; padding:30px; background-color:#333; color:#fff;">
                              <label class="control-label">Hizmet Resimlerini Gir</label>
                              <div class="controls">
                                 <a href="javascript:NewWindow=window.open('galeri_hizmet.php?urun_id=<?php if($_GET['islem']=="duzenle"){echo $guncelle_dizi['id'];}else{echo $idim;}?>','newWin','width=468,height=600,left=0,top=0 ,toolbar=No,location=No,scrollbars=No,status=No,re sizable=No,fullscreen=No'); NewWindow.focus();void(0);">Sınırsız Resim Eklemek İçin Tıklayınız.</a>
                              </div>
                           </div>
          
              </div>
              
              <div class="tab-pane" id="tab_3">
             
               
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
