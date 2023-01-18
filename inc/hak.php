<?php


$kurumsal=$db->query("select * from sayfalar where seo='kurumsal'")->fetch(PDO::FETCH_ASSOC);
?>

<section class="section-padding about-us">
    <div class="container">
      <div class="row">
        <div class="col-xl-7 col-lg-6 pl-2 pr-2 align-self-center text-left">
          <div class="about-left-side mb-md-80">
            <div class="section-header style-left">
              <div class="section-heading">
                <h3>Çerkez Teknik <span class="text-custom-blue"></span></h3>
                <div class="section-description">
                  <div class="car-price"> <strong></strong>  </div>
                </div>
              </div>
            </div>
            <p class="pt-2"><?=$kurumsal['aciklama']?></p>
            <a href="kurumsal" class="btn-first btn-submit">Kurumsal</a> </div>
        </div>
        <div class="col-xl-5 col-lg-6">
          <div class="about-right-side full-height">
            <div class="about-img full-height">
              <img src="lib/images/sayfalar/<?=$kurumsal['resim']?>" class="img-fluid image-fit" alt="img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>