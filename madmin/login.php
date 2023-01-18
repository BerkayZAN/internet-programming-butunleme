<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");
ob_start();
session_start();

			/* burada beni hatırla kısmını kontrol ediyoruz 
			daha önceden hatırla dediyse son 24 saat içinde otomatik giriş yapar */
			
			if(isset($_COOKIE["hatirla"]) && isset($_SESSION["eposta"])){
			header("Location:index.php");
			}

			// burada giriş yapma eylemlerini sırayla gerçekleştiriyoruz

			if (isset($_POST["gonder"])) 
			{
				$email_adres  = $_POST["email_adres"];    
				$sifre = $_POST["sifre"];
				$hatirla = $_POST["hatirla"];
				
				if (empty($email_adres) || empty($sifre)) {
              	$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> E-Mail yada Şifre Boş Olamaz.
						   </div>' ;
				}else {
					$sifre = sha1($sifre);
					$query = $db->prepare("SELECT * FROM yonetici WHERE eposta = :email_adres AND sifre = :sifre");
              		$query->execute(array('email_adres' => $email_adres,'sifre' => $sifre));
              		$result = $query->fetch(PDO::FETCH_ASSOC);	
					
					if($query->rowCount()){ 
					$_SESSION["ad_soyad"]  =  $result["ad_soyad"];
					$_SESSION["eposta"] =  $result["eposta"];
					$_SESSION["id"]   =  $result["id"];
					
					$id = $result["id"] ;
					
					$update = $db->prepare("UPDATE yonetici SET 
						son_giris 	= :son_giris
						WHERE 
						id 			= :id
					");
					$result = $update->execute(
						array(
							'son_giris'	=>$tarih,
							'id'   		=>$id
						)); 
					
					
					if($hatirla==1)
					{
						setcookie("hatirla",$email_adres,time()+2592000);
					}
					
					header("Location:index.php");
					
					
					
					
				  }else{
					$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> E-Mail yada Şifre Hatalı.
						   	  </div>' ;
				  }	
									
				}
				
			}
			
			// burada şifremi unuttum eylemlerini sırayla gerçekleştiriyoruz.
			
			if (isset($_POST["gonder2"])) 
			{
				$email_adres2  = $_POST["email_adres2"];
				
				if (empty($email_adres2)) 
				{
              	$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Şifre Hatırlatma Kısmında E-Mail Boş Olamaz.
						   </div>' ;
				}
				else 
				{
					
					$bilgi = '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Şifre Hatırlatma Mailiniz Sistemde Kayıtlı olan E-mail Adresinize gönderilmiştir.
						   </div>' ;
					
				}
			}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yönetici Paneli</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" >
<div class="login-box">
 
  <div class="login-box-body" style="border-radius:30px;">
   <div class="login-logo">
    <b>Yönetici Paneli</b>
  </div>
    <p class="login-box-msg"><a href="https://utwebtasarim.com/" target="_blank"><img src="utfavicon.jpg" width="200"/></a></p>
    <?=@$bilgi?>

    <form action="#" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email_adres">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Şifre" name="sifre">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck" style="margin-left:20px;">
            <label>
              <input type="checkbox" name="hatirla" value="1"> Beni Hatırla
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="gonder">Giriş Yap</button>
        </div>
      </div>
    </form>
    
    <a href="#">Şifrenimi Unuttun?	</a><br>

  </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
