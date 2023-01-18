<header class="main-header">
    <a href="#" class="logo">
             <img src="../lib/images/logo/<?=$ayar['logo']?>"  alt="User Image">
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="../" target="_blank">Site Ön İzleme</a>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../lib/images/logo/<?=$ayar['logo']?>" class="user-image" alt="">
              <span class="hidden-xs"><?=$_SESSION['ad_soyad']?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../lib/images/logo/<?=$ayar['logo']?>" class="img-circle" alt="">

                <p>
                  <?=$_SESSION['ad_soyad']?>
                  <small><?=$ayar['site_title']?></small>
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-left">
                
                  <a href="yonetici_ekle.php?islem=duzenle&id=<?=$_SESSION['id']?>" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="include/cikis.php" class="btn btn-default btn-flat">Çıkış Yap</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="ayar.php"><i class="fa fa-gears"></i></a>
          </li>
          <li>
            <a href="include/cikis.php"><i class="fa fa-power-off"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>