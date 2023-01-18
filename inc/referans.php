<section class="section-padding partners">
    <div class="container">
      <div class="section-header text-center">
        <div class="section-heading">
          <h3 class="text-custom-black"> Referanslar<span class="text-custom-blue"></span></h3>
          
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="partners-slider arrow-layout-2 row">
          
                  <?php 
								$idd=$alt_dizi['id'];
								$ref = $db->query("select * from referanslar ",PDO::FETCH_ASSOC);
								if($ref->rowCount())
								{
									foreach($ref as $refg)
									{
								?>
          
            <div class="slide-item col-12">
              <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="lib/images/referanslar/<?=$refg["resim"]?>" class="img-fluid image-fit" alt="img"> </a> </div>
            </div>
              <?php  } } ?> 
            
            
          </div>
        </div>
      </div>
    </div>
  </section>