<?php
include"include/baglan.php";
include"include/fonksiyonlar.php";
ob_start();
session_start();
oturumkontrolana();

if(@$_POST['gonder'] and @$_GET['islem']=="")
{
	
	$ad_soyad  	=	$_POST["ad_soyad"];
	$e_posta  	=	$_POST["e_posta"];
	$sifre  	=	$_POST["sifre"];
	
	$query = $db->query("SELECT * FROM yonetici WHERE eposta = '$e_posta'")->fetch(PDO::FETCH_ASSOC);

	
	if (empty($ad_soyad) || empty($e_posta) || empty($sifre)) 
	{
		$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen Tüm Alanları Doldurunuz.
									</div>';
	}
	elseif(!filter_var($e_posta,FILTER_VALIDATE_EMAIL))
	{
		$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen Geçerli Bir Mail Adresi Giriniz.
		</div>';
	}
	elseif($query)
	{
		$bilgi = '<div class="alert alert-error">
				  <button class="close" data-dismiss="alert">×</button>
				  <strong>Hata !</strong> Bu E-mail Adresi Sistemde Kayıtlıdır Lütfen Başka Bir E-mail Adresi Deneyiniz.
		</div>';
	}
	else
	{
		
		$sifre = sha1($sifre);
		$query = $db->prepare("INSERT INTO yonetici SET
		ad_soyad = :ad_soyad,
		eposta = :eposta,
		sifre = :sifre,
		uyelik_tarihi = :uyelik_tarihi");
		$insert = $query->execute(array(
			  "sifre" => $sifre,
			  "eposta" => $e_posta,
			  "ad_soyad" => $ad_soyad,
			  "uyelik_tarihi" => $tarih,
		));
		if ($insert){
			$last_id = $db->lastInsertId();
			$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Başarılı ! </strong>'.$last_id.' Numaralı ID ile sisteme kaydınız yapılmıştır.
			</div>';
		}
	}
	
}

if(@$_GET['islem']=="duzenle" and @$_POST['gonder'])
{
	$duzenlenecek_id = $_GET['id'];
	$ad_soyad  	=	$_POST["ad_soyad"];
	$e_posta  	=	$_POST["e_posta"];
	$sifre_yeni  	=	$_POST["sifre_yeni"];
	
	if(!filter_var($e_posta,FILTER_VALIDATE_EMAIL))
	{
	}
	
		if(!empty($sifre_yeni))
		{
					$sifre_yeni = sha1($sifre_yeni);
					
					$update = $db->prepare("UPDATE yonetici SET 
						ad_soyad 	= :ad_soyad,
						eposta 	= :eposta,
						sifre 	= :sifre 
						WHERE 
						id 			= :id");
					$result = $update->execute(array(
							'ad_soyad'	=>$ad_soyad,
							'eposta'	=>$e_posta,
							'sifre'		=>$sifre_yeni,
							'id'   		=>$duzenlenecek_id
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
		else
		{
			$update = $db->prepare("UPDATE yonetici SET 
						ad_soyad 	= :ad_soyad,
						eposta 	= :eposta
						WHERE 
						id 			= :id");
					$result = $update->execute(array(
							'ad_soyad'	=>$ad_soyad,
							'eposta'	=>$e_posta,
							'id'   		=>$duzenlenecek_id
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
	
}


if(@$_GET['islem']=="duzenle")
{
	$duzenlenecek_id = $_GET['id'];
	$yonetici_kaydi = $db->query("SELECT * FROM yonetici WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
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
        <li><a href="">Yönetici Ekle</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary col-md-12">
            <div class="box-header with-border">
              <h3 class="box-title">Yönetici Ekle</h3>
              <?=$bilgi?>
            </div>            
            <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-12">
                  <label class="control-label">Yönetici Ad Soyad</label>
                     <div class="controls">
                         <input type="text" class="form-control" name="ad_soyad" value="<?=@$yonetici_kaydi['ad_soyad']?>">
                      <span class="help-inline"></span>
                     </div>
                </div>
                              
                <div class="form-group col-md-12">
                  <label class="control-label">E-Mail Adresiniz</label>
                    <div class="controls">
                        <input type="text" class="form-control" name="e_posta" value="<?=@$yonetici_kaydi['eposta']?>"><br>
                        <span class="help-inline dip">Buraya girilen adres aynı zamanda üye giriş adresinizdir.</span>
                    </div>
                </div>
                              
                <?php
				  if(@$_GET['islem']=="duzenle")
				  {
				 ?>
                              
                <div class="form-group col-md-12">
                                 <label class="control-label">Eski Şifreniz</label>
                                 <div class="controls">
                                    <input type="password" class="form-control" name="sifre" value="******" readonly>
                                    <span class="help-inline"></span>
                                 </div>
                              </div>

                <div class="form-group col-md-12">
                                 <label class="control-label">Yeni Şifreniz</label>
                                 <div class="controls">
                                    <input type="password" class="form-control" name="sifre_yeni"><br>
                                    <span class="help-inline dip">Boş Bırakılırsa Eski Şifreniz Geçerli Olacaktır.</span>
                                 </div>
                              </div>
                              
                              
               <?php
				  }
				  else
				  {
			   ?>
                              
               <div class="form-group col-md-12">
                  <label class="control-label">Şifreniz</label>
                      <div class="controls">
                          <input type="password" class="form-control" name="sifre"><br>
                           <span class="help-inline dip">Minimum 6 Maksimum 15 karakter olmalıdır.</span>
                      </div>
               </div>
                              
              <?php
			  }
			  ?>                
          
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
