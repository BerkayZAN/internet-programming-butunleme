<?php 
include"include/baglan.php";
include"include/fonksiyonlar.php";
ob_start();
session_start();
oturumkontrolana();	
if(isset($_GET['sil'])){
 $id=$_GET['sil'];
 $resim_sorgu=$db->query("select * from slider where id='$id'")->fetch(PDO::FETCH_ASSOC);
 unlink('../lib/images/slider/'.$resim_sorgu['resim']);
 $sonuc = $db->query("DELETE FROM  slider where id='$id'");
 $bilgi = '	 <div class="alert alert-success">
						Başarı ile Silinmiştir !
			 </div>' ;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$ayar["site_title"]?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include"include/header.php";?>
  <?php include"include/menu.php";?>
  
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?=$ayar["site_title"]?> | Site Yönetim Paneli
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa</a></li>
        <li class="active">Slider Listele</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Slider Listele</h3>
              <div class="clearfix" style="margin-top:10px; margin-bottom:10px; width:100%;">
               <a href="slider_ekle.php" style="color:#FFF;">
                   <div class="btn btn-warning col-md-12" style="padding:10px; width:100%;">
                     Slider Ekle <i class="fa fa-plus"></i>
                   </div>
               </a> 
             </div>
              <?=$bilgi?>
            </div>
            <div class="box-body" style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sıra</th>
                  <th>Slider Adı</th>
                  <th>Slider Resmi</th>
                  <th>Durumu</th>
                  <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                <?php
                	$sorgu=$db->query("select * from slider order by id desc");
					if($sorgu->rowCount()){
					
						foreach($sorgu as $sonuc){
				?>
                    <tr>
                      <td><?=$sonuc['sira']?></td>
                      <td><?=$sonuc['adi']?></td>
                      <td>
                      	<?php 
							if($sonuc['resim']=='no-image'){
								echo"Resim Yok";	
							}
							else{
						?>
                      		<a href="../lib/images/slider/<?=$sonuc['resim']?>" target="_blank"><img src="../lib/images/slider/<?=$sonuc['resim']?>" width="50"/></a>
                            
                        <?php }?>
                      </td>
                      <td>
                      	<?php 
							if($sonuc['durum']==0){
						?>
                        	<img src="../lib/images/aktif.png"/>
                        <?php }else{?>
                        	<img src="../lib/images/pasif.png"/>
                        <?php }?>
                      </td>
                      <td>
                      
                      <a href='?sil=<?=$sonuc['id']?>' class='btn btn-danger'>Sil</a>
                     <a href='slider_ekle.php?islem=duzenle&id=<?=$sonuc['id']?>' class='btn btn-primary m-r1em'>Düzenle</a>
                     
                     </td>
                    </tr>
                <?php } }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Sıra</th>
                  <th>Slider Adı</th>
                  <th>Slider Resmi</th>
                  <th>Durumu</th>
                  <th>İşlem</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 <?php include"include/footer.php";?>
 

</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
