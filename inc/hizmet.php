<section class="section-padding service-symptoms parallax  bg-light-white">
    <div class="overlay overlay-bg-theme"></div>
    <div class="container">
      <div class="section-header text-center">
        <div class="section-heading">
          <h3 class="text-custom-black">Hizmetler <span class="text-custom-blue"></span></h3>
         
        </div>
      </div>
      <div class="row">
      
       <?php $hzmt=$db->query("select * from hizmet_kategori limit 8",PDO::FETCH_ASSOC);
					    if($hzmt->rowCount()){
							foreach($hzmt as $hzmtg){
				?>
      
        <div class="col-lg-3 col-md-6">
          <div class="service-sy-grid mb-xl-30">
            <div class="img-wrap"> <img src="lib/images/hizmet_kategori/<?=$hzmtg['kategori_resim']?>" class="image-fit" alt="img"> </div>
            <div class="caption">
              <h5 class="no-margin fw-600"><a href="halt-<?=$hzmtg['seo']?>-<?=$hzmtg['id']?>" class="text-custom-black"><?=$hzmtg['kategori_adi']?></a></h5>
            </div>
          </div>
        </div>
         <?php }}?> 
        
        
      </div>
    </div>
  </section>