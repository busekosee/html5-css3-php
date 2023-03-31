<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="paylastıkça";
$baglant=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);


if(!$baglant)
{
die("veritabanı bağlantı islemi basarısız".mysqli_connect_error());
}

?>
