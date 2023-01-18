<section class="section-padding our-work-sec bg-light-white">
    <div class="container">
      <div class="section-header text-center">
        <div class="section-heading">
          <h3 class="text-custom-black">Ürünler</h3>
          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="row" >
          
          
          
          
                                                  <?php
                $urunkat=$db->query("select * from urunler where durum='0' order by sira asc limit 6",PDO::FETCH_ASSOC);
				if($urunkat->rowCount())
				{
					foreach($urunkat as $urunkatt)
					{
				?> 
                         
          
            <div class="col-sm-4">
              <div class="work-sec animate-img"> <a href="ud-<?=$urunkatt['seo']?>-<?=$urunkatt['id']?>"> <img src="lib/images/urunler/<?=$urunkatt['resim']?>" class="image-fit" alt="img">
                <div class="text-wrapper">
                  <h4 class="text-custom-white no-margin fw-600"><?=$urunkatt['adi']?></h4>
                </div>
                </a> </div>
            </div>
            
                
                                                                <?php }}?>   
            <button type="submit" class="btn-first btn-submit" >Gönder</button>
            
            
            
          </div>
        </div>
      </div>
    </div>
  </section>