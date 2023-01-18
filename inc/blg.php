<section class="section-padding bg-light-white our_articles">
    <div class="container">
      <div class="section-header text-center">
        <div class="section-heading">
          <h3 class="text-custom-black">Blog <span class="text-custom-blue"></span></h3>
          
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="blog-slider arrow-layout-2 row">


  <?php $blog_cek=$db->query("select * from haberler where durum='0' order by sira ",PDO::FETCH_ASSOC);
					    if($blog_cek->rowCount()){
							foreach($blog_cek as $blog_goster){
				?>
                                                  

            <article class="col-12 post slide-item">
              <div class="post-wrapper bx-wrapper">
                <div class="post-img animate-img"> <a href="bd-<?=$blog_goster['seo']?>-<?=$blog_goster['id']?>"> <img src="lib/images/haberler/<?=$blog_goster['resim']?>" class="full-width" alt="img"> </a>
                 
                </div>
                <div class="blog-meta padding-20 bg-custom-white p-relative">
                  
                  <div class="post-heading">
                    <h2> <a href="bd-<?=$blog_goster['seo']?>-<?=$blog_goster['id']?>" class="text-custom-black fw-600 fs-20"><?=$blog_goster['adi']?> </a> </h2>
                    <p class="text-light-dark no-margin"><?=substr($blog_goster['aciklama'],0,200)?></p>
                  </div>
                </div>
                <div class="post-footer">
                  <div class="post-author"> <cite class="text-custom-black"></cite> </div>
                  <a href="bd-<?=$blog_goster['seo']?>-<?=$blog_goster['id']?>" class="btn-first btn-submit fs-14 fs-600">İnceleyiniz</a> </div>
              </div>
            </article>
            
             <?php }}?> 
            
        
          </div>
        </div>
        
        
      </div>
    </div>
  </section>