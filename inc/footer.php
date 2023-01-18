<?php


$kurumsal=$db->query("select * from sayfalar where seo='kurumsal'")->fetch(PDO::FETCH_ASSOC);
?>


  <footer class="section-padding footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="footer-box mb-md-40">
            <h4 class="text-custom-white fw-600">Hakkımızda</h4>
            <p class="text-custom-white"><?=substr($kurumsal['aciklama'],0,305)?>
            </p>

          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box mb-md-40">
            <h4 class="text-custom-white fw-600">Hizmetler</h4>
            <ul class="m-0 p-0 main">
            <?php $hzmt=$db->query("select * from hizmet_kategori limit 4",PDO::FETCH_ASSOC);
					    if($hzmt->rowCount()){
							foreach($hzmt as $hzmtg){
				?>
                
            
              <li><a href="halt-<?=$hzmtg['seo']?>-<?=$hzmtg['id']?>" style="color:#fff;"> <?=$hzmtg['kategori_adi']?></a></li>
               <?php }}?> 
              
              
            </ul>
            
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="footer-box mb-md-40">
            <h4 class="text-custom-white fw-600">İletişim</h4>
            <ul class="m-0 p-0 main">
            	<li><i class="fa fa-map-marker"></i><?=$ayar['firma_adres']?></li>
             	 <li><i class="fa fa-phone"></i><a href="tel:<?=$ayar['firma_telefon']?>" class="link-text" style="color:#fff;"><?=$ayar['firma_telefon']?></a></li>
              
              	<li><i class="fa fa-envelope"></i><a href="mailto:<?=$ayar['firma_email']?>" class="link-text" style="color:#fff;"> <?=$ayar['firma_email']?></a></li>
            </ul>
            <ul class="custom-flex socials">
                <li> <a href="<?=$ayar['facebook']?>" class="text-custom-white"><i class="fab fa-facebook-f"></i></a> </li>
                <li> <a href="<?=$ayar['twitter']?>" class="text-custom-white"><i class="fab fa-twitter"></i></a> </li>
                <li> <a href="<?=$ayar['instagram']?>" class="text-custom-white"><i class="fab fa-instagram"></i></a> </li>
              </ul>
          </div>
        </div>
        
      </div>
    </div>
  </footer>

  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="text-custom-white"><a href="https://www.ilterwebtasarim.com" alt="web tasarım" ><img src="assets/images/webtasarim.png" style="width:90px;"></a></p>
        </div>
      </div>
    </div>
  </div>