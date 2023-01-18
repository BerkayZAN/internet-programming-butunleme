<header class="header">
    <div class="topbar bg-theme">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-5 hidden-xs">
            <div class="leftside">
              <ul class="custom-flex">
                <li> <a href="<?=$ayar['facebook']?>" class="text-custom-white"><i class="fab fa-facebook-f"></i></a> </li>
                <li> <a href="<?=$ayar['twitter']?>" class="text-custom-white"><i class="fab fa-twitter"></i></a> </li>
                <li> <a href="<?=$ayar['instagram']?>" class="text-custom-white"><i class="fab fa-instagram"></i></a> </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-7 ">
            <div class="rightside full-height ">
              <ul class="custom-flex full-height ">
                <li class="book-appointment mobile-telno"> <a href="tel:<?=$ayar['firma_telefon']?>"> <?=$ayar['firma_telefon']?> </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navigation-wrapper" style="padding-top: 20px;padding-bottom:10px;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <div class="main-navigation">
                <div class="logo"> <a href="./"> <img src="lib/images/logo/<?=$ayar['logo']?>" class="img-fluid" alt="logo" > </a> </div>
                <div class="main-menu">
                  <ul class="custom-flex">
                    <li class="menu-item active"> <a href="./">Anasayfa</a> </li>
                    <li class="menu-item "> <a href="kurumsal">Kurumsal</a>
                      
                    </li>
                    <li class="menu-item menu-item-has-children"> <a href="hizmetler">Hizmetler</a>
                      <ul class="submenu custom">
                      <?php $hzmt=$db->query("select * from hizmet_kategori limit 6",PDO::FETCH_ASSOC);
					    if($hzmt->rowCount()){
							foreach($hzmt as $hzmtg){
				?>
                        <li class="menu-item"> <a href="halt-<?=$hzmtg['seo']?>-<?=$hzmtg['id']?>"><?=$hzmtg['kategori_adi']?></a> </li>
                         <?php }}?> 
                      </ul>
                    </li>
                    <li class="menu-item"> <a href="blog.php">Blog</a> </li>
                    <li class="menu-item "> <a href="referanslar">Referanslar</a>
                     
                    </li>
                    <li class="menu-item"> <a href="iletisim">İletişim</a> </li>
                  </ul>
                </div>
                <div class="hamburger-menu">
                  <div class="menu-btn"> <span></span> <span></span> <span></span> </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>