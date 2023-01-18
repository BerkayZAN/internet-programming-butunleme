<aside class="main-sidebar">
    <section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
          <img src="../lib/images/logo/<?=$ayar['logo']?>"  alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$_SESSION['ad_soyad']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a><br/>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header" >YÖNETİM SAYFALARI</li>
        <li>
          <a href="index.php">
            <i class="fa fa-home"></i>
            <span>Anasayfa</span>
          </a>
         
        </li>
        <?php if($yonetici_izin["slider"]==1){?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-pie-chart"></i>
            <span>Slider Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="slider_ekle.php"><i class="fa fa-circle-o"></i>Slider Ekle</a></li>
            <li><a href="slider_listele.php"><i class="fa fa-circle-o"></i> Slider Listele</a></li>
          </ul>
        </li>
        <?php }?>
        
        <?php if($yonetici_izin["uye"]==1){?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-users"></i>
            <span>Üyeler Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="uye_ekle.php"><i class="fa fa-circle-o"></i>Üye Ekle</a></li>
            <li><a href="uye_listele.php"><i class="fa fa-circle-o"></i> Üyeleri Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["sss"]==1){?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-eyedropper"></i>
            <span>S.S.S Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sss_ekle.php"><i class="fa fa-circle-o"></i>S.S.S Ekle</a></li>
            <li><a href="sss_listele.php"><i class="fa fa-circle-o"></i> S.S.S Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["yorum"]==1){?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-comments"></i>
            <span>Yorum Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="yorum_ekle.php"><i class="fa fa-circle-o"></i>Yorum Ekle</a></li>
            <li><a href="yorum_listele.php"><i class="fa fa-circle-o"></i> Yorum Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["sayfa"]==1){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Sayfa Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sayfa_ekle.php"><i class="fa fa-circle-o"></i>Sayfa Ekle</a></li>
            <li><a href="sayfa_listele.php"><i class="fa fa-circle-o"></i> Sayfa Listele</a></li>
          </ul>
        </li>
        <?php }?>
        
        <?php if($yonetici_izin["urun_kat"]==1){?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-files-o"></i>
            <span>Ürün Kategori Yönetimi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          
          </a>
          <ul class="treeview-menu">
            <li><a href="urun_kategori_ekle.php"><i class="fa fa-circle-o"></i>Ürün Kategori Ekle</a></li>
            <li><a href="urun_kategori_listele.php"><i class="fa fa-circle-o"></i>Ürün Kategori Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["urun"]==1){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Ürün Yönetimi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          
          </a>
          <ul class="treeview-menu">
            <li><a href="urun_ekle.php"><i class="fa fa-circle-o"></i>Ürün Ekle</a></li>
            <li><a href="urun_listele.php"><i class="fa fa-circle-o"></i> Ürün Listele</a></li>
          </ul>
        </li>
        <?php }?>
        
        <?php if($yonetici_izin["haber_kat"]==1){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Haber Kategori Yönetimi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          
          </a>
          <ul class="treeview-menu">
            <li><a href="haber_kategori_ekle.php"><i class="fa fa-circle-o"></i>Haber Kategori Ekle</a></li>
            <li><a href="haber_kategori_listele.php"><i class="fa fa-circle-o"></i>Haber Kategori Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["haber"]==1){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Haber Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="haber_ekle.php"><i class="fa fa-circle-o"></i>Haber Ekle</a></li>
            <li><a href="haber_listele.php"><i class="fa fa-circle-o"></i> Haber Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["hizmet_kat"]==1){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map" aria-hidden="true"></i>
            <span>Hizmet Kategori Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="hizmet_kategori_ekle.php"><i class="fa fa-circle-o"></i>Hizmet Kategori Ekle</a></li>
            <li><a href="hizmet_kategori_listele.php"><i class="fa fa-circle-o"></i> Hizmet Kategori Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["hizmet"]==1){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map" aria-hidden="true"></i>
            <span>Hizmet Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="hizmet_ekle.php"><i class="fa fa-circle-o"></i>Hizmet Ekle</a></li>
            <li><a href="hizmet_listele.php"><i class="fa fa-circle-o"></i> Hizmet Listele</a></li>
          </ul>
        </li>
		<?php }?>
        <?php if($yonetici_izin["referans_kat"]==1){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bandcamp" aria-hidden="true"></i>
            <span>Referans Kategori Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="referans_kategori_ekle.php"><i class="fa fa-circle-o"></i>Referans Kategori Ekle</a></li>
            <li><a href="referans_kategori_listele.php"><i class="fa fa-circle-o"></i> Referans Kategori Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["referans"]==1){?>
        <li class="treeview">
          <a href="#">
           <i class="fa fa-bandcamp" aria-hidden="true"></i>
            <span>Referans Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="referans_ekle.php"><i class="fa fa-circle-o"></i>Referans Ekle</a></li>
            <li><a href="referans_listele.php"><i class="fa fa-circle-o"></i> Referans Listele</a></li>
          </ul>
        </li>
        <?php }?>
        
        <?php if($yonetici_izin["galeri_kat"]==1){?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-photo"></i>
            <span>Galeri Kategori Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="fotograf_kategori_ekle.php"><i class="fa fa-circle-o"></i>Galeri Kategori Ekle</a></li>
            <li><a href="fotograf_kategori_listele.php"><i class="fa fa-circle-o"></i> Galeri Kategori Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["galeri"]==1){?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-photo"></i>
            <span>Galeri Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="fotograf_galeri_ekle.php"><i class="fa fa-circle-o"></i>Galeri Ekle</a></li>
            <li><a href="fotograf_galeri_listele.php"><i class="fa fa-circle-o"></i> Galeri Listele</a></li>
          </ul>
        </li>
        <?php }?>
        <?php if($yonetici_izin["video"]==1){?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-video-camera"></i>
            <span>Video Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="video_ekle.php"><i class="fa fa-circle-o"></i>Video Ekle</a></li>
            <li><a href="video_listele.php"><i class="fa fa-circle-o"></i> Video Listele</a></li>
          </ul>
        </li>
        <?php }?>
        
         <?php if($yonetici_izin["sube"]==1){?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-database"></i>
            <span>Şube Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sube_ekle.php"><i class="fa fa-circle-o"></i>Şube Ekle</a></li>
            <li><a href="sube_listele.php"><i class="fa fa-circle-o"></i> Şubeleri Listele</a></li>
          </ul>
        </li>
        <?php }?>
        
        <li class="treeview">
          <a href="">
            <i class="fa fa-user"></i>
            <span>Yönetici Yönetimi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="yonetici_ekle.php"><i class="fa fa-circle-o"></i>Yönetici Ekle</a></li>
            <li><a href="yonetici_listele.php"><i class="fa fa-circle-o"></i> Yönetici Listele</a></li>
          </ul>
        </li>
        <li>
          <a href="ayar.php">
           <i class="fa fa-gears"></i>
            <span>Site Ayar Yönetimi</span>
          
          </a>
        </li>
        <li>
          <a href="include/cikis.php">
            <i class="fa fa-power-off"></i>
            <span>Çıkış Yap</span>
          </a>
         
        </li>
        
          
       
      </ul>
    </section>
  </aside>