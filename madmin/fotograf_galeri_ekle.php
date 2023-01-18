<?php 
include"include/baglan.php";
include"include/fonksiyonlar.php";
ob_start();
session_start();
oturumkontrolana();

if($_POST['gonder'] and $_GET['islem']==""){

	$sira	=	$_POST['sira'];
	$kategori	=	$_POST['kategori'];
	$adi	=	$_POST['adi'];
	$adi_en	=	$_POST['adi_en'];
	$adi_fr	=	$_POST['adi_fr'];
	$adi_ar	=	$_POST['adi_ar'];
	$adi_ru	=	$_POST['adi_ru'];
	$adi_de	=	$_POST['adi_de'];
	$durum	=	$_POST['durum'];
	$linki	=	$_POST['linki'];
	$linki_en	=	$_POST['linki_en'];
	$linki_fr	=	$_POST['linki_fr'];
	$linki_ar	=	$_POST['linki_ar'];
	$linki_ru	=	$_POST['linki_ru'];
	$linki_de	=	$_POST['linki_de'];
	
	$klasor="../lib/images/fotograf_galeri/";
	
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
			$random = rand(0,9999);
			
			$banner_resim = $random."-bannerresim.".substr($_FILES['banner_resim']['name'], -3);
			
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
	$query=$db->prepare("insert into fotograf_galeri set
		sira	= :sira,
		kategori= :kategori,
		adi		= :adi,
		adi_en	= :adi_en,
		adi_fr	= :adi_fr,
		adi_ar	= :adi_ar,
		adi_ru	= :adi_ru,
		adi_de	= :adi_de,
		durum	= :durum,
		resim	= :resim,
		banner_resim	= :banner_resim,
		linki	= :linki,
		linki_en	= :linki_en,
		linki_fr	= :linki_fr,
		linki_ar	= :linki_ar,
		linki_ru	= :linki_ru,
		linki_de	= :linki_de
	");	
	
	$insert=$query->execute(array(
		"sira"	=> $sira,
		"kategori"	=> $kategori,
		"adi"	=> $adi,
		"adi_en"	=> $adi_en,
		"adi_fr"	=> $adi_fr,
		"adi_ar"	=> $adi_ar,
		"adi_ru"	=> $adi_ru,
		"adi_de"	=> $adi_de,
		"durum"		=> $durum,
		"resim"		=> $resim,
		"banner_resim"	=> $banner_resim,
		"linki"	=> $linki,
		"linki_en"	=> $linki_en,
		"linki_fr"	=> $linki_fr,
		"linki_ar"	=> $linki_ar,
		"linki_ru"	=> $linki_ru,
		"linki_de"	=> $linki_de
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
	$kategori	=	$_POST['kategori'];
	$adi	=	$_POST['adi'];
	$adi_en	=	$_POST['adi_en'];
	$adi_fr	=	$_POST['adi_fr'];
	$adi_ar	=	$_POST['adi_ar'];
	$adi_ru	=	$_POST['adi_ru'];
	$adi_de	=	$_POST['adi_de'];
	$durum	=	$_POST['durum'];
	$linki	=	$_POST['linki'];
	$linki_en	=	$_POST['linki_en'];
	$linki_fr	=	$_POST['linki_fr'];
	$linki_ar	=	$_POST['linki_ar'];
	$linki_ru	=	$_POST['linki_ru'];
	$linki_de	=	$_POST['linki_de'];	
	
	$klasor="../lib/images/fotograf_galeri/";
	
	$resim_tmp = $_FILES['resim']['tmp_name'];
	
	if(empty($resim_tmp))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM fotograf_galeri WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM fotograf_galeri WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../lib/images/fotograf_galeri/".$ayar_kaydi['resim']);	  
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
	
	
	$klasor_banner="../lib/images/fotograf_galeri/";
	
	$resim_tmp_banner = $_FILES['banner_resim']['tmp_name'];
	
	if(empty($resim_tmp_banner))
	{
		$duzenlenecek_id = $_GET['id'];
		$ayar_kaydi = $db->query("SELECT * FROM fotograf_galeri WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$banner_resim = $ayar_kaydi['banner_resim'];
	}
	else
	{
		if ($_FILES["banner_resim"]["type"] =="image/gif" || $_FILES["banner_resim"]["type"] =="image/png"|| $_FILES["banner_resim"]["type"] =="image/jpg"|| $_FILES["banner_resim"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM fotograf_galeri WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['banner_resim']!="resim-yok")
			{
			  unlink("../lib/images/fotograf_galeri/".$ayar_kaydi['banner_resim']);	  
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
	
	
	
	$update = $db->prepare("UPDATE fotograf_galeri SET 
							sira	= :sira,
							kategori	= :kategori,
							adi		= :adi,
							adi_en	= :adi_en,
							adi_fr	= :adi_fr,
							adi_ar	= :adi_ar,
							adi_ru	= :adi_ru,
							adi_de	= :adi_de,
							durum	= :durum,
							resim	= :resim,
							banner_resim	= :banner_resim,
							linki	= :linki,
							linki_en	= :linki_en,
							linki_fr	= :linki_fr,
							linki_ar	= :linki_ar,
							linki_ru	= :linki_ru,
							linki_de	= :linki_de
						WHERE 
							id 		= :id");
					$result = $update->execute(array(
							"sira"		=> 	$sira,
							"kategori"	=> 	$kategori,
							"adi"		=> $adi,
							"adi_en"	=> $adi_en,
							"adi_fr"	=> $adi_fr,
							"adi_ar"	=> $adi_ar,
							"adi_ru"	=> $adi_ru,
							"adi_de"	=> $adi_de,
							"durum"		=> $durum,
							"resim"		=> $resim,
							"banner_resim"	=> $banner_resim,
							"linki"		=> $linki,
							"linki_en"	=> $linki_en,
							"linki_fr"	=> $linki_fr,
							"linki_ar"	=> $linki_ar,
							"linki_ru"	=> $linki_ru,
							"linki_de"	=> $linki_de,
							"id"   		=>$duzenlenecek_id
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
	$guncelle_dizi = $db->query("SELECT * FROM fotograf_galeri Where id='$id'")->fetch(PDO::FETCH_ASSOC);
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
        <li><a href="">Galeri Ekle</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary col-md-12">
            <div class="box-header with-border">
              <h3 class="box-title">Galeri Ekle</h3>
              <?=$bilgi?>
            </div>            
            <form role="form" action="" method="post" enctype="multipart/form-data">
             
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Sırası</label>
                  <input type="text" class="form-control" name="sira" value="<?=$guncelle_dizi['sira']?>">
                </div>
                <?php if($yonetici_izin["galeri_kat"]==1){?>
                 <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Kategori</label>
                                 
                <select class="form-control select2" name="kategori">
                  <option selected="selected" value="">Seçiniz</option>
                  
                  
                 <?php $kategori_cek=$db->query("select * from fotograf_galeri_kategori where ustid='0' order by sira asc",PDO::FETCH_ASSOC);
				 		if($kategori_cek->rowCount()){
							foreach($kategori_cek as $kategori_dizi){
				 ?>
                <option style="background:#F2F2F2;" value="<?=$kategori_dizi['id']?>" <?php if($guncelle_dizi['kategori']==$kategori_dizi['id']) { ?> selected="selected" <?php } ?>><?=$kategori_dizi['kategori_adi']?></option>
                              
                         <?php $ustid = $kategori_dizi['id'];
						 		$kategori_cek1=$db->query("select * from fotograf_galeri_kategori where ustid='$ustid' order by sira asc",PDO::FETCH_ASSOC);
				 		
						
						
							if($kategori_cek1->rowCount()){
							foreach($kategori_cek1 as $kategori_dizii){
						 ?>
    <option value="<?=$kategori_dizii['id']?>" <?php if(@$kategori_dizii['id']==$guncelle_dizi['kategori']){?> selected="selected"<?php } ?>><span style="font-size:10px; color:#039;"> --> <?=$kategori_dizii['kategori_adi']?> - <?=$kategori_dizii['id']?></span></option>                      
                          <?php }}?>   
                          
                           
                                    
                 <?php }}?>
                </select>
                
              </div>
              	<?php } ?>
              	<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Adı</label>
                  <input type="text" class="form-control" name="adi" value="<?=$guncelle_dizi['adi']?>" >
                </div>
		
        <?php if($yonetici_izin["en"]==1){?>            
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Adı İngilizce</label>
                  <input type="text" class="form-control" name="adi_en" value="<?=$guncelle_dizi['adi_en']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["fr"]==1){?> 
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Adı Fransızca</label>
                  <input type="text" class="form-control" name="adi_fr" value="<?=$guncelle_dizi['adi_fr']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ar"]==1){?>         
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Adı Arapça</label>
                  <input type="text" class="form-control" name="adi_ar" value="<?=$guncelle_dizi['adi_ar']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ru"]==1){?>         
				<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Adı Rusça</label>
                  <input type="text" class="form-control" name="adi_ru" value="<?=$guncelle_dizi['adi_ru']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["de"]==1){?>        
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Adı Almanca</label>
                  <input type="text" class="form-control" name="adi_de" value="<?=$guncelle_dizi['adi_de']?>" >
                </div>
        <?php }?>       
                
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
                        <h1 class="h1s">GALERİ RESMİ</h1>
                    </div>
                    <div class="dropzone">
                     <?php if($_GET['islem']=="duzenle"){
						 if($_POST["sill"]){
							echo'<img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>';
							
						}
						else{
						 ?>
                        <img src="../lib/images/fotograf_galeri/<?=$guncelle_dizi['resim']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="resim" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="resim">Resim Seç</button>
                    <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill" value="sil"/>';
							if($_POST["sill"]){
							 unlink("../lib/images/fotograf_galeri/".$guncelle_dizi['resim']);
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
                        <img src="../lib/images/fotograf_galeri/<?=$guncelle_dizi['banner_resim']?>" class="upload-icon" style="width:170px; height:170px;"/>	 <?php }}else{?>
                        
                        <img src="http://100dayscss.com/codepen/upload.svg"	 class="upload-icon" style="width:170px; height:170px;"/>
					 <?php }?>
                        <input type="file" class="upload-input" name="banner_resim" />
                    </div>
            
                    <button type="button" class="btt btn btn-warning" name="banner_resim">Resim Seç</button>
                    <?php 
						if($_GET['islem']=="duzenle"){
							echo ' <input type="submit" class="btn btn-danger kay" name="sill_banner" value="sil"/>';
							if($_POST["sill_banner"]){
							 unlink("../lib/images/fotograf_galeri/".$guncelle_dizi['banner_resim']);
						}
						}
					?>
				</div>

                </div>
                <?php }?>
                
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Linki</label>
                  <input type="text" class="form-control" name="linki" value="<?=$guncelle_dizi['linki']?>" >
                </div>
		<?php if($yonetici_izin["en"]==1){?>              
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Linki İngilizce</label>
                  <input type="text" class="form-control" name="linki_en" value="<?=$guncelle_dizi['linki_en']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["fr"]==1){?>  
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Linki Fransızca</label>
                  <input type="text" class="form-control" name="linki_fr" value="<?=$guncelle_dizi['linki_fr']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ar"]==1){?> 
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Linki Arapça</label>
                  <input type="text" class="form-control" name="linki_ar" value="<?=$guncelle_dizi['linki_ar']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["ru"]==1){?> 
				<div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Linki Rusça</label>
                  <input type="text" class="form-control" name="linki_ru" value="<?=$guncelle_dizi['linki_ru']?>" >
                </div>
        <?php }?>
        <?php if($yonetici_izin["de"]==1){?> 
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Galeri Linki Almanca</label>
                  <input type="text" class="form-control" name="linki_de" value="<?=$guncelle_dizi['linki_de']?>" >
                </div>
        <?php }?>
             <div class="form-group col-md-12">
                <button type="submit" value="gonder" name="gonder" class="btn btn-warning col-md-12 bb">KAYDET</button>
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
</body>
</html>
