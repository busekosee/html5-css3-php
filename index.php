
<!doctype html>

<?php
error_reporting(E_ALL);
require_once("baglanti.php");
if(isset($_POST["isim"],$_POST["tel"],$_POST["Email"],$_POST["konu"],$_POST["mesaj"])) {
  $adsoyad = $_POST["isim"];
  $telefon = $_POST["tel"];
  $mail = $_POST["Email"];
  $konu = $_POST["konu"];
  $mesaj = $_POST["mesaj"];

  $ekle = "INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES ('" . $adsoyad . "','" . $telefon . "','" . $mail . "','" . $konu . "','" . $mesaj . "')";
global $baglant;
  if ( $baglant->query($ekle) === TRUE) {
    echo "<script>alert('mesajınız başarı ile gönderildi.')</script>";
  } else {
    echo "Sorgu hatası: " . $baglant->error;
  }
}
?>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Anasayfa</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
 <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <meta name="theme-color" content="#fafafa">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="owl/owl.carousel.min.css">
  <link rel="stylesheet" href="owl/owl.theme.default.min.css">
  <script src="https://kit.fontawesome.com/3838bd6e00.js" crossorigin="anonymous"></script>
</head>

<body>
  <section id="menu">
  <div id="logo">Paylaştıkça</div>
  <nav>
    <a href=""><i class="bi bi-houses-fill ikon"></i>Anasayfa</a>
    <a href=""><i class="bi bi-info-circle-fill ikon"></i>Hakkımızda</a>
    <a href=""><i class="bi bi-journal-bookmark-fill ikon"></i>Eğitimler</a>
    <a href=""><i class="bi bi-telephone-forward-fill ikon"></i>İletişim</a>
    <a href=""><i class="bi bi-geo-fill ikon"></i>Addres</a>

  </nav>
  </section>
  <section id="Anasayfa">
    <div id="black">

    </div>
 <div id="icerik">
   <h2>Paylaştıkça</h2>
   <hr width=300 align=left>
   <p>k değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
   </p>

 </div>

  </section>
<section id="hakkımızda">
  <h3>Hakkımızda</h3>
  <div class="container">
    <div id="sol">
      <h5 id="h5sol">Lorem Ipsum, urmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.
      </h5>
    </div>
    <div id="sag">
      <span>L</span>
      <p id="psag">
        orem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.

      </p>

    </div>
  </div>
  </section>


  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <section id="Egitimler">
    <div class="container">
      <h3>Eğitimler</h3>
      <div class="owl-carousel owl-theme">
        <div class="card item" data-merge=1.4>
          <img src="img/5.jpg" alt="" class="img-fluid">
          <h5 class="cardbaslik">HTML5 CSS3 Eğitimi</h5>
          <p class="cardp">Lorem ipsum doem bla bla!</p>
        </div>
        <div class="card item" data-merge=1.4>
          <img src="img/5.jpg" alt="" class="img-fluid">
          <h5 class="cardbaslik">HTML5 CSS3 Eğitimi</h5>
          <p class="cardp">Lorem ipsum doem bla bla!</p>
        </div>
        <div class="card item"data-merge=1.4>
          <img src="img/5.jpg" alt="" class="img-fluid">
          <h5 class="cardbaslik">HTML5 CSS3 Eğitimi</h5>
          <p class="cardp">Lorem ipsum doem bla bla!</p>
        </div>
      </div>
    </div>

  </section>
  <section id="ekip">
    <div class="container">
      <h3 id="ekiph3">Ekip</h3>
      <div class="sutun-sol-sag">
           <img src="img/7.jpg" alt="" class="img-fluid oval">
      <h4 class="ekipisim">Su Ateş</h4>
      <p class="ekipp">
        Lorem ipsum bla bla bla bla!
      </p> <div class="ekipikon">
        <a href="#"><i class="fa-brands fa-facebook social"></i></a>
        <a href="#"><i class="fa-brands fa-instagram social"></i></a>

      </div>
      </div>

    </div>
    <div class="sutun-sol-sag">
      <img src="img/9.jpg" alt="" class="img-fluid oval">
      <h4 class="ekipisim">Uğur Güven</h4>
      <p class="ekipp">
        Lorem ipsum bla bla bla bla!
      </p> <div class="ekipikon">
      <a href="#"><i class="fa-brands fa-facebook social"></i></a>
      <a href="#"><i class="fa-brands fa-instagram social"></i></a>
      <
    </div>
    </div>
    <div class="sutun-sol-sag">
      <img src="img/8.jpg" alt="" class="img-fluid oval">
      <h4 class="ekipisim">Hakan Kaynak</h4>
      <p class="ekipp">
        Lorem ipsum bla bla bla bla!
      </p> <div class="ekipikon">
      <a href="#"><i class="fa-brands fa-facebook social"></i></a>
      <a href="#"><i class="fa-brands fa-instagram social "></i></a>


      <
    </div>
    </div>


    </div>
<section id="iletisim">
  <div class="container">
    <h3 id="h3iletisim">İletişim</h3>
    <form action="index.php" method="post">
    <div id="iletisimopak">
      <div id="formgroup">
        <div id="solform">
          <input type="text"
                 name="isim"
          placeholder="Ad Soyad" required
          class="form-control">
          <input type="text"
                 name="tel"
          placeholder="Telefon Numarası" required
          class="form-control">
        </div>
        <div id="sagform">
          <input type="email"
                 name="Email"
                 placeholder="Email adresiniz" required
                 class="form-control">
          <input type="text"
                 name="konu"
                 placeholder="konu başlığı" required
                 class="form-control">
        </div>
        <textarea name="mesaj"
                  id="" cols="30"
                  placeholder="Mesaj Girin"
                  rows="10" required class="form-control"></textarea>
        <input type="submit"
               value="Gönder">
        <div id="adres">
          <h4 id="adresbaslık">Adres:</h4>
          <p class="adresp">Mehmet Akif Ersoy Mah.</p>
          <p class="adresp">Akyıldız Caddesi</p>
          <p class="adresp">Doğu sk. no:18</p>
          <p class="adresp">0212 389 54 56</p>
          <p class="adresp">Email:paylastıkca@gmail.com</p>

        </div>
        <footer>
          <div id="copyright" >2020 Tüm Hakları saklıdır</div>
          <div id="socialfooter">
            <a href="#"><i class="fa-brands fa-facebook social"></i></a>
            <a href="#"><i class="fa-brands fa-instagram social"></i></a>

          </div>
          <a href="#anasayfa"><i class="fa-sharp fa-solid fa-up" id="up"></i></a>
        </footer>
      </div>
    </div>
    </form>
  </div>
</section>

  </section>

  <script src="owl/owl.carousel.min.js"></script>
<script src="owl/script.js"></script>
</body>

</html>

