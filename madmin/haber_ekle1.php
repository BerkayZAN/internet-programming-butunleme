<?php 
	include"include/baglan.php";
	include_once 'ckeditor/ckeditor.php' ;
	require_once 'ckfinder/ckfinder.php' ;

if($_POST['gonder'] and $_GET['islem']==""){

	$sira	=	$_POST['sira'];
	$adi	=	$_POST['adi'];
	$adi_en	=	$_POST['adi_en'];
	$adi_fr	=	$_POST['adi_fr'];
	$adi_ar	=	$_POST['adi_ar'];
	$seo 	=	$_POST['seo'];	
	$aciklama	=	$_POST['aciklama'];
	$aciklama_en	=	$_POST['aciklama_en'];
	$aciklama_fr	=	$_POST['aciklama_fr'];
	$aciklama_ar	=	$_POST['aciklama_ar'];
	
	$klasor="../lib/images/haberler/";
	
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

if(empty($adi)){
	$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen Bir Başlık / Ad Yazınız.
									</div>';
}
else{
	$query=$db->prepare("insert into haberler set
		sira	= :sira,
		adi		= :adi,
		adi_en	= :adi_en,
		adi_fr	= :adi_fr,
		adi_ar	= :adi_ar,
		seo		= :seo,
		resim	= :resim,
		aciklama	= :aciklama,
		aciklama_en	= :aciklama_en,
		aciklama_fr	= :aciklama_fr,
		aciklama_ar	= :aciklama_ar	
	");	
	
	$insert=$query->execute(array(
		"sira"	=> $sira,
		"adi"	=> $adi,
		"adi_en"	=> $adi_en,
		"adi_fr"	=> $adi_fr,
		"adi_ar"	=> $adi_ar,
		"seo"	=> $seo,
		"resim"		=> $resim,
		"aciklama"	=> $aciklama,
		"aciklama_en"	=> $aciklama_en,
		"aciklama_fr"	=> $aciklama_fr,
		"aciklama_ar"	=> $aciklama_ar	
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
	$adi_en	=	$_POST['adi_en'];
	$adi_fr	=	$_POST['adi_fr'];
	$adi_ar	=	$_POST['adi_ar'];	
	$seo	=	$_POST['seo'];
	$aciklama	=	$_POST['aciklama'];
	$aciklama_en	=	$_POST['aciklama_en'];
	$aciklama_fr	=	$_POST['aciklama_fr'];
	$aciklama_ar	=	$_POST['aciklama_ar'];	
	$klasor="../lib/images/haberler/";
	
	$resim_tmp = $_FILES['resim']['tmp_name'];
	
	if(empty($resim_tmp))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM haberler WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM haberler WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
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
	
	
	
	$update = $db->prepare("UPDATE haberler SET 
							sira	= :sira,
							adi		= :adi,
							adi_en	= :adi_en,
							adi_fr	= :adi_fr,
							adi_ar	= :adi_ar,
							seo		= :seo,
							resim	= :resim,
							aciklama	= :aciklama,
							aciklama_en	= :aciklama_en,
							aciklama_fr	= :aciklama_fr,
							aciklama_ar	= :aciklama_ar
						WHERE 
							id 		= :id");
					$result = $update->execute(array(
							"sira"	=> 	$sira,
							"adi"	=>	$adi,
							"adi_en"	=> $adi_en,
							"adi_fr"	=> $adi_fr,
							"adi_ar"	=> $adi_ar,
							"seo"	=> $seo,
							"resim"		=> $resim,
							"aciklama"	=> $aciklama,
							"aciklama_en"	=> $aciklama_en,
							"aciklama_fr"	=> $aciklama_fr,
							"aciklama_ar"	=> $aciklama_ar,
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
	$guncelle_dizi = $db->query("SELECT * FROM haberler Where id='$id'")->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
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
			Admin Paneli       
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa</a></li>
        <li><a href="">Slider Ekle</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Haber Ekle</h3>
              <?=$bilgi?>
            </div>            
            <form role="form" action="" method="post" enctype="multipart/form-data">
             
                <div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Haber Sırası</label>
                  <input type="text" class="form-control" name="sira" value="<?=$guncelle_dizi['sira']?>">
                </div>
                
              	<div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Haber Adı</label>
                  <input type="text" class="form-control" name="adi" id="adi" value="<?=$guncelle_dizi['adi']?>" >
                </div>
                <div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Haber Adı İngilizce</label>
                  <input type="text" class="form-control" name="adi_en" id="adi" value="<?=$guncelle_dizi['adi_en']?>" >
                </div>
                <div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Haber Adı Fransızca</label>
                  <input type="text" class="form-control" name="adi_fr" id="adi" value="<?=$guncelle_dizi['adi_fr']?>" >
                </div>
                <div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Haber Adı Arapça</label>
                  <input type="text" class="form-control" name="adi_ar" id="adi" value="<?=$guncelle_dizi['adi_ar']?>" >
                </div>
                <div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Başlık / Adı Seo</label>
                 <input type="text" class="form-control" name="seo" id="tseo" readonly value="<?=$guncelle_dizi['seo']?>">
                  <span class="help-inline dip">Bu Kısımda Girilen Başlık veya Ad Otomatik olarak Seo'ya Uygun Hale Getirilir. Bu Kısım Seo İçin Önemlidir</span>
                </div>
                
                
                <div class="form-group col-md-7">
                  <label for="exampleInputFile">Resim Ekle</label>
                  <input type="file" name="resim" id="exampleInputFile">
                  <?php if($_GET['islem']=="duzenle"){?>
                  	<img src="../lib/images/haberler/<?=$guncelle_dizi['resim']?>" width="200"/>
                  <?php }else{?>
					<?=$resim?>
                  <?php }?>
                </div>
               
                
                <div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Haber Açıklama</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama'] ;
										$ckeditor = new CKEditor("aciklama") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '300';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama', $initialValue, $config);
										?>
             			</div>
              </div>
              	<div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Haber Açıklama İngilizce</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama_en'] ;
										$ckeditor = new CKEditor("aciklama_en") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '300';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama_en', $initialValue, $config);
										?>
             			</div>
              </div>
              	<div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Haber Açıklama Fransızca</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama_fr'] ;
										$ckeditor = new CKEditor("aciklama_fr") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '300';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama_fr', $initialValue, $config);
										?>
             			</div>
              </div>
              	<div class="form-group col-md-7">
                  <label for="exampleInputEmail1">Haber Açıklama Arapça</label>
                
             			 <div class="controls">
                                     <?php
					
										$initialValue = $guncelle_dizi['aciklama_ar'] ;
										$ckeditor = new CKEditor("aciklama_ar") ;
										$ckeditor->basePath  = 'ckeditor/' ;
										CKFinder::SetupCKEditor( $ckeditor, 'ckfinder/' ) ;
										$config['height'] = '300';
										
										$ckeditor->config['skin'] = 'kama';
										$ckeditor->editor('aciklama_ar', $initialValue, $config);
										?>
             			</div>
              </div>
              <div class="box-footer">
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
