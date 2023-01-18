<?php
include("include/mbaglan.php");

$tarih = date("d.m.Y");
$saat = date("h:i");

function oturumkontrolana(){
	 $kullanici = $_SESSION['yonetici_kullanici'];
	 $sifre = $_SESSION['yonetici_sifre'];
	 $oturumkontrol = mysql_query("select * from yonetici where yonetici_kullanici ='$kullanici' and yonetici_sifre ='$sifre'"); 
	 $durum = mysql_fetch_array($oturumkontrol);
	 if($durum){ }else{ echo '<script language="javascript">window.location="index.php";</script>'; die(); }
 }
 
 
$ayarlar = mysql_query("select * from ayar where ayar_id ='1'"); 
$ayar = mysql_fetch_array($ayarlar);
 
 
 
 
 
function turkceyap($deger) {
$turkce=array("ş", "Ş", "ı", "(", ")", "‘", "ü", "Ü", "ö", "Ö", "ç", "Ç", " ", "/", "*", "?", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
$duzgun=array("s", "S", "i", "", "", "", "u", "U", "o", "O", "c", "C", "-", "-", "-", "", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U");
$deger=str_replace($turkce,$duzgun,$deger);
$deger = preg_replace("@[^A-Za-z0-9-_]+@i","",$deger);
$deger = mb_strtolower($deger);
return $deger;
 
}
 
 
 
 
 
?>
