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
	$adi	=	$_POST['adi'];
	$seo	=	$_POST['seo'];
	$adi_en	=	$_POST['adi_en'];
	$adi_fr	=	$_POST['adi_fr'];
	$adi_ar	=	$_POST['adi_ar'];
	$adi_ru	=	$_POST['adi_ru'];
	$adi_de	=	$_POST['adi_de'];		
	$aciklama	=	$_POST['aciklama'];
	$aciklama_en	=	$_POST['aciklama_en'];
	$aciklama_fr	=	$_POST['aciklama_fr'];
	$aciklama_ar	=	$_POST['aciklama_ar'];
	$aciklama_ru	=	$_POST['aciklama_ru'];
	$aciklama_de	=	$_POST['aciklama_de'];
	$linki	=	$_POST['linki'];
	
	$klasor="../lib/images/slider/";
	
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
	
	$klasor_en="../lib/images/slider/";
	
	$resim_tmp_en = $_FILES['resim_en']['tmp_name'];
	
	if(empty($resim_tmp_en))
	{
		$resim_en = "resim-yok";
	}
	else
	{
		if ($_FILES["resim_en"]["type"] =="image/gif" || $_FILES["resim_en"]["type"] =="image/png"|| $_FILES["resim_en"]["type"] =="image/jpg"|| $_FILES["resim_en"]["type"] =="image/jpeg") 
		{
			$random = rand(0,999);
			
			$resim_en = $random."-".$seo.".".substr($_FILES['resim_en']['name'], -3);
			
			move_uploaded_file($_FILES['resim_en']['tmp_name'],$klasor_en."/".$resim_en);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$klasor_fr="../lib/images/slider/";
	
	$resim_tmp_fr = $_FILES['resim_fr']['tmp_name'];
	
	if(empty($resim_tmp_fr))
	{
		$resim_fr = "resim-yok";
	}
	else
	{
		if ($_FILES["resim_fr"]["type"] =="image/gif" || $_FILES["resim_fr"]["type"] =="image/png"|| $_FILES["resim_fr"]["type"] =="image/jpg"|| $_FILES["resim_fr"]["type"] =="image/jpeg") 
		{
			$random = rand(0,999);
			
			$resim_fr = $random."-".$seo.".".substr($_FILES['resim_fr']['name'], -3);
			
			move_uploaded_file($_FILES['resim_fr']['tmp_name'],$klasor_fr."/".$resim_fr);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$klasor_ar="../lib/images/slider/";
	
	$resim_tmp_ar = $_FILES['resim_ar']['tmp_name'];
	
	if(empty($resim_tmp_ar))
	{
		$resim_ar = "resim-yok";
	}
	else
	{
		if ($_FILES["resim_ar"]["type"] =="image/gif" || $_FILES["resim_ar"]["type"] =="image/png"|| $_FILES["resim_ar"]["type"] =="image/jpg"|| $_FILES["resim_ar"]["type"] =="image/jpeg") 
		{
			$random = rand(0,999);
			
			$resim_ar = $random."-".$seo.".".substr($_FILES['resim_ar']['name'], -3);
			
			move_uploaded_file($_FILES['resim_ar']['tmp_name'],$klasor_ar."/".$resim_ar);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$klasor_ru="../lib/images/slider/";
	
	$resim_tmp_ru = $_FILES['resim_ru']['tmp_name'];
	
	if(empty($resim_tmp_ru))
	{
		$resim_ru = "resim-yok";
	}
	else
	{
		if ($_FILES["resim_ru"]["type"] =="image/gif" || $_FILES["resim_ru"]["type"] =="image/png"|| $_FILES["resim_ru"]["type"] =="image/jpg"|| $_FILES["resim_ru"]["type"] =="image/jpeg") 
		{
			$random = rand(0,999);
			
			$resim_ru = $random."-".$seo.".".substr($_FILES['resim_ru']['name'], -3);
			
			move_uploaded_file($_FILES['resim_ru']['tmp_name'],$klasor_ru."/".$resim_ru);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$klasor_de="../lib/images/slider/";
	
	$resim_tmp_de = $_FILES['resim_de']['tmp_name'];
	
	if(empty($resim_tmp_de))
	{
		$resim_de = "resim-yok";
	}
	else
	{
		if ($_FILES["resim_de"]["type"] =="image/gif" || $_FILES["resim_de"]["type"] =="image/png"|| $_FILES["resim_de"]["type"] =="image/jpg"|| $_FILES["resim_de"]["type"] =="image/jpeg") 
		{
			$random = rand(0,999);
			
			$resim_de = $random."-".$seo.".".substr($_FILES['resim_de']['name'], -3);
			
			move_uploaded_file($_FILES['resim_de']['tmp_name'],$klasor_de."/".$resim_de);
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
	$query=$db->prepare("insert into slider set
		sira	= :sira,
		adi		= :adi,
		seo		= :seo,
		adi_en	= :adi_en,
		adi_fr	= :adi_fr,
		adi_ar	= :adi_ar,
		adi_ru	= :adi_ru,
		adi_de	= :adi_de,
		resim	= :resim,
		resim_en	= :resim_en,
		resim_fr	= :resim_fr,
		resim_ar	= :resim_ar,
		resim_ru	= :resim_ru,
		resim_de	= :resim_de,
		aciklama	= :aciklama,
		aciklama_en	= :aciklama_en,
		aciklama_fr	= :aciklama_fr,
		aciklama_ar	= :aciklama_ar,
		aciklama_ru	= :aciklama_ru,
		aciklama_de	= :aciklama_de,
		linki	= :linki
	
	");	
	
	$insert=$query->execute(array(
		"sira"	=> $sira,
		"adi"	=> $adi,
		"seo"	=> $seo,
		"adi_en"	=> $adi_en,
		"adi_fr"	=> $adi_fr,
		"adi_ar"	=> $adi_ar,
		"adi_ru"	=> $adi_ru,
		"adi_de"	=> $adi_de,
		"resim"		=> $resim,
		"resim_en"		=> $resim_en,
		"resim_fr"		=> $resim_fr,
		"resim_ar"		=> $resim_ar,
		"resim_ru"		=> $resim_ru,
		"resim_de"		=> $resim_de,
		"aciklama"	=> $aciklama,
		"aciklama_en"	=> $aciklama_en,
		"aciklama_fr"	=> $aciklama_fr,
		"aciklama_ar"	=> $aciklama_ar,
		"aciklama_ru"	=> $aciklama_ru,
		"aciklama_de"	=> $aciklama_de,
		"linki"	=> $linki
	
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
	
	
	$sira	=	$_POST['sira'];
	$adi	=	$_POST['adi'];
	$seo	=	$_POST['seo'];
	$adi_en	=	$_POST['adi_en'];
	$adi_fr	=	$_POST['adi_fr'];
	$adi_ar	=	$_POST['adi_ar'];
	$adi_ru	=	$_POST['adi_ru'];
	$adi_de	=	$_POST['adi_de'];		
	$aciklama	=	$_POST['aciklama'];
	$aciklama_en	=	$_POST['aciklama_en'];
	$aciklama_fr	=	$_POST['aciklama_fr'];
	$aciklama_ar	=	$_POST['aciklama_ar'];
	$aciklama_ru	=	$_POST['aciklama_ru'];
	$aciklama_de	=	$_POST['aciklama_de'];
	$linki	=	$_POST['linki'];
	
	
	$klasor="../lib/images/slider/";
	
	$resim_tmp = $_FILES['resim']['tmp_name'];
	
	if(empty($resim_tmp))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../lib/images/slider/".$ayar_kaydi['resim']);	  
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
	
	
	$klasor_en="../lib/images/slider/";
	
	$resim_tmp_en = $_FILES['resim_en']['tmp_name'];
	
	if(empty($resim_tmp_en))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim_en = $ayar_kaydi['resim_en'];
	}
	else
	{
		if ($_FILES["resim_en"]["type"] =="image/gif" || $_FILES["resim_en"]["type"] =="image/png"|| $_FILES["resim_en"]["type"] =="image/jpg"|| $_FILES["resim_en"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim_en']!="resim-yok")
			{
			  unlink("../lib/images/slider/".$ayar_kaydi['resim_en']);	  
			}
			
			$random = rand(0,999);
			
			$resim_en = $random."-".$seo.".".substr($_FILES['resim_en']['name'], -3);
			
			move_uploaded_file($_FILES['resim_en']['tmp_name'],$klasor_en."/".$resim_en);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	$klasor_fr="../lib/images/slider/";
	
	$resim_tmp_fr = $_FILES['resim_fr']['tmp_name'];
	
	if(empty($resim_tmp_fr))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim_fr = $ayar_kaydi['resim_fr'];
	}
	else
	{
		if ($_FILES["resim_fr"]["type"] =="image/gif" || $_FILES["resim_fr"]["type"] =="image/png"|| $_FILES["resim_fr"]["type"] =="image/jpg"|| $_FILES["resim_fr"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim_fr']!="resim-yok")
			{
			  unlink("../lib/images/slider/".$ayar_kaydi['resim_fr']);	  
			}
			
			$random = rand(0,999);
			
			$resim_fr = $random."-".$seo.".".substr($_FILES['resim_fr']['name'], -3);
			
			move_uploaded_file($_FILES['resim_fr']['tmp_name'],$klasor_fr."/".$resim_fr);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	$klasor_ar="../lib/images/slider/";
	
	$resim_tmp_ar = $_FILES['resim_ar']['tmp_name'];
	
	if(empty($resim_tmp_ar))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim_ar = $ayar_kaydi['resim_ar'];
	}
	else
	{
		if ($_FILES["resim_ar"]["type"] =="image/gif" || $_FILES["resim_ar"]["type"] =="image/png"|| $_FILES["resim_ar"]["type"] =="image/jpg"|| $_FILES["resim_ar"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim_ar']!="resim-yok")
			{
			  unlink("../lib/images/slider/".$ayar_kaydi['resim_ar']);	  
			}
			
			$random = rand(0,999);
			
			$resim_ar = $random."-".$seo.".".substr($_FILES['resim_ar']['name'], -3);
			
			move_uploaded_file($_FILES['resim_ar']['tmp_name'],$klasor_ar."/".$resim_ar);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$klasor_ru="../lib/images/slider/";
	
	$resim_tmp_ru = $_FILES['resim_ru']['tmp_name'];
	
	if(empty($resim_tmp_ru))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim_ru = $ayar_kaydi['resim_ru'];
	}
	else
	{
		if ($_FILES["resim_ru"]["type"] =="image/gif" || $_FILES["resim_ru"]["type"] =="image/png"|| $_FILES["resim_ru"]["type"] =="image/jpg"|| $_FILES["resim_ru"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim_ru']!="resim-yok")
			{
			  unlink("../lib/images/slider/".$ayar_kaydi['resim_ru']);	  
			}
			
			$random = rand(0,999);
			
			$resim_ru = $random."-".$seo.".".substr($_FILES['resim_ru']['name'], -3);
			
			move_uploaded_file($_FILES['resim_ru']['tmp_name'],$klasor_ru."/".$resim_ru);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$klasor_de="../lib/images/slider/";
	
	$resim_tmp_de = $_FILES['resim_de']['tmp_name'];
	
	if(empty($resim_tmp_de))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim_de = $ayar_kaydi['resim_de'];
	}
	else
	{
		if ($_FILES["resim_de"]["type"] =="image/gif" || $_FILES["resim_de"]["type"] =="image/png"|| $_FILES["resim_de"]["type"] =="image/jpg"|| $_FILES["resim_de"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim_de']!="resim-yok")
			{
			  unlink("../lib/images/slider/".$ayar_kaydi['resim_de']);	  
			}
			
			$random = rand(0,999);
			
			$resim_de = $random."-".$seo.".".substr($_FILES['resim_de']['name'], -3);
			
			move_uploaded_file($_FILES['resim_de']['tmp_name'],$klasor_de."/".$resim_de);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	
	
	
	$update = $db->prepare("UPDATE slider SET 
							sira	= :sira,
							adi		= :adi,
							seo		= :seo,
							adi_en	= :adi_en,
							adi_fr	= :adi_fr,
							adi_ar	= :adi_ar,
							adi_ru	= :adi_ru,
							adi_de	= :adi_de,
							resim	= :resim,
							resim_en	= :resim_en,
							resim_fr	= :resim_fr,
							resim_ar	= :resim_ar,
							resim_ru	= :resim_ru,
							resim_de	= :resim_de,
							aciklama	= :aciklama,
							aciklama_en	= :aciklama_en,
							aciklama_fr	= :aciklama_fr,
							aciklama_ar	= :aciklama_ar,
							aciklama_ru	= :aciklama_ru,
							aciklama_de	= :aciklama_de,
							linki	= :linki
						WHERE 
						id 			= :id");
					$result = $update->execute(array(
							"sira"	=> $sira,
							"adi"	=> $adi,
							"seo"	=> $seo,
							"adi_en"	=> $adi_en,
							"adi_fr"	=> $adi_fr,
							"adi_ar"	=> $adi_ar,
							"adi_ru"	=> $adi_ru,
							"adi_de"	=> $adi_de,
							"resim"		=> $resim,
							"resim_en"		=> $resim_en,
							"resim_fr"		=> $resim_fr,
							"resim_ar"		=> $resim_ar,
							"resim_ru"		=> $resim_ru,
							"resim_de"		=> $resim_de,
							"aciklama"	=> $aciklama,
							"aciklama_en"	=> $aciklama_en,
							"aciklama_fr"	=> $aciklama_fr,
							"aciklama_ar"	=> $aciklama_ar,
							"aciklama_ru"	=> $aciklama_ru,
							"aciklama_de"	=> $aciklama_de,
							"linki"	=> $linki,
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
	$guncelle_dizi = $db->query("SELECT * FROM slider Where id='$id'")->fetch(PDO::FETCH_ASSOC);
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
        <li><a href="">Slider Ekle</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary col-md-12">
            <div class="box-header with-border">
              <h3 class="box-title">Slider Ekle</h3>
              <?=$bilgi?>
            </div>            
            <form role="form" action="" method="post" enctype="multipart/form-data">
             
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slider Sırası</label>
                  <input type="text" class="form-control" name="sira" value="<?=$guncelle_dizi['sira']?>">
                </div>
                
              	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slider Adı</label>
                  <input type="text" class="form-control" name="adi" id="adi" value="<?=$guncelle_dizi['adi']?>" >
                </div>
         <?php if($yonetici_izin["en"]==1){?>            
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slider Adı İngilizce</label>
                  <input type="text" class="form-control" name="adi_en" value="<?=$guncelle_dizi['adi_en']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["fr"]==1){?> 
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slider Adı Fransızca</label>
                  <input type="text" class="form-control" name="adi_fr" value="<?=$guncelle_dizi['adi_fr']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ar"]==1){?>         
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slider Adı Arapça</label>
                  <input type="text" class="form-control" name="adi_ar" value="<?=$guncelle_dizi['adi_ar']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ru"]==1){?>         
				<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slider Adı Rusça</label>
                  <input type="text" class="form-control" name="adi_ru" value="<?=$guncelle_dizi['adi_ru']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["de"]==1){?>        
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slider Adı Almanca</label>
                  <input type="text" class="form-control" name="adi_de" value="<?=$guncelle_dizi['adi_de']?>" >
                </div>
        <?php }?>
               <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Başlık / Adı Seo</label>
                 <input type="text" class="form-control" name="seo" id="tseo" readonly value="<?=$guncelle_dizi['seo']?>">
                  <span class="help-inline dip">Bu Kısımda Girilen Başlık veya Ad Otomatik olarak Seo'ya Uygun Hale Getirilir. Bu Kısım Seo İçin Önemlidir</span>
                </div> 
                
                
                <div class="form-group col-md-4">
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">SLİDER RESMİ</h1>
                    </div>
                    <div class="dropzone">
                     <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/slider/<?=$guncelle_dizi['resim']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="resim" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim">Resim Seç</button>
                    <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill" value="sil"/>';
							if($_POST["sill"]){
							 unlink("../lib/images/slider/".$guncelle_dizi['resim']);
						}
						}
					?>
				</div>
                </div>
                
                <?php if($yonetici_izin["en"]==1){?>   
                <div class="form-group col-md-4">
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">SLİDER RESMİ İNGİLİZCE</h1>
                    </div>
                     <div class="dropzone">
                     <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill1"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/slider/<?=$guncelle_dizi['resim_en']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="resim_en" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim_en">Resim Seç</button>
                     <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill1" value="sil"/>';
							if($_POST["sill1"]){
							 unlink("../lib/images/slider/".$guncelle_dizi['resim_en']);
						}
						}
					?>
				</div>
                </div>
                
                 <?php } if($yonetici_izin["fr"]==1){?>   
                <div class="form-group col-md-4">
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">SLİDER RESMİ FRANSIZCA</h1>
                    </div>
                    <div class="dropzone">
                     <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill2"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/slider/<?=$guncelle_dizi['resim_fr']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="resim_fr" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim_fr">Resim Seç</button>
                    <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill2" value="sil"/>';
							if($_POST["sill2"]){
							 unlink("../lib/images/slider/".$guncelle_dizi['resim_fr']);
						}
						}
					?>
				</div>
                </div>
                
                <?php } if($yonetici_izin["ar"]==1){?> 
                <div class="form-group col-md-4">
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">SLİDER RESMİ ARAPÇA</h1>
                    </div>
                    <div class="dropzone">
                     <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill3"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
							
						 ?>
                        <img src="../lib/images/slider/<?=$guncelle_dizi['resim_ar']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="resim_ar" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim_ar">Resim Seç</button>
                      <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill3" value="sil"/>';
							if($_POST["sill3"]){
							 unlink("../lib/images/slider/".$guncelle_dizi['resim_ar']);
						}
						}
					?>
				</div>
                </div>
                
                <?php } if($yonetici_izin["ru"]==1){?> 
                <div class="form-group col-md-4">
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">SLİDER RESMİ RUSCA</h1>
                    </div>
                    <div class="dropzone">
                     <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill4"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/slider/<?=$guncelle_dizi['resim_ru']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="resim_ru" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim_ru">Resim Seç</button>
                     <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill4" value="sil"/>';
							if($_POST["sill4"]){
							 unlink("../lib/images/slider/".$guncelle_dizi['resim_ru']);
						}
						}
					?>
				</div>
                </div>
                
                <?php } if($yonetici_izin["de"]==1){?> 
                <div class="form-group col-md-4">
				<div class="center col-md-12">
                    <div class="titlem">
                        <h1 class="h1s">SLİDER RESMİ ALMANCA</h1>
                    </div>
                    <div class="dropzone">
                       <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill5"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/slider/<?=$guncelle_dizi['resim_de']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="resim_de" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim_de">Resim Seç</button>
                    <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill5" value="sil"/>';
							if($_POST["sill5"]){
							 unlink("../lib/images/slider/".$guncelle_dizi['resim_de']);
						}
						}
					?>
				</div>
                </div>
                <?php }?> 
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slider Açıklama</label>
                
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
                  <label for="exampleInputEmail1">Slider Açıklama İngilizce</label>
                
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
                  <label for="exampleInputEmail1">Slider Açıklama Fransızca</label>
                
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
                  <label for="exampleInputEmail1">Slider Açıklama Arapça</label>
                
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
                  <label for="exampleInputEmail1">Slider Açıklama Rusça</label>
                
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
                  <label for="exampleInputEmail1">Slider Açıklama Almanca</label>
                
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
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slider Linki</label>
                  <input type="text" class="form-control" name="linki" value="<?=$guncelle_dizi['linki']?>" >
                </div>
              
              <div class="form-group col-md-12">
                <button type="submit" value="gonder" name="gonder" class="btn btn-primary">Gönder</button>
              </div>
              </div>
            </form>
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
