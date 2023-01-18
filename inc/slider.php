<div class="slider p-relative">
    <div class="main-banner arrow-layout-1 ">
    
    
    
    <?php
        $slider=$db->query("select * from slider",PDO::FETCH_ASSOC);
        if($slider->rowCount())
        {
            foreach($slider as $sliders)
            {
        
        ?>
    
      <div class="slide-item"> <img src="lib/images/slider/<?=$sliders['resim']?>" class="image-fit" alt="Slider">
        <div class="transform-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <div class="slider-content">
                  <h1 class="text-custom-white"><?=$sliders['adi']?> </h1>
                  <ul class="custom">
                    <li class="text-custom-white"><?=$sliders['aciklama']?>  </li>
                  </ul>
                  <a href="<?=$sliders['linki']?>" class="btn-first btn-small">Daha Fazla</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php }}?> 
      
      
      
      
    </div>
  </div>