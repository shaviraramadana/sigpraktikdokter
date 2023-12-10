<?php include "header.php"; ?>

<!-- start banner Area -->
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 banner-left">
        <h6 class="text-white">SISTEM INFORMASI GEOGRAFIS LOKASI DOKTER PRAKTIK</h6>
        <h1 class="text-white">KECAMATAN LALABATA KABUPATEN SOPPENG</h1>
        <p class="text-white">
          Sistem informasi ini merupakan aplikasi pemetaan geografis lokasi Dokter Praktik di Kecamatan Lalabata Kabupaten Soppeng. Aplikasi ini memuat informasi dan lokasi dari Lokasi Dokter Praktik di Kecamatan Lalabata Kabupaten Soppeng.
        </p>
        <a href="#peta_wisata" class="primary-btn text-uppercase">Lihat Detail</a>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
      </div>

    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->


<main id="main">




  <!-- Start about-info Area -->
  <section class="price-area section-gap">

    <section id="peta_wisata" class="about-info-area section-gap">
      <div class="container">

        <div class="title text-center">
          <h1 class="mb-10">Peta Lokasi Wisata</h1>
          <br>
        </div>

        <div class="row align-items-center">

		<div id="map" style="width: 100%; height: 100vh;"></div>
		
		<script>
		const map = L.map('map').setView([-4.349255605438267, 119.88560968181012], 14);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
         
	L.marker([-4.350578426423816, 119.89756915269943])
	.bindPopup("<h5>dr.A.YULKARDINANSYAH, Sp, B</h5> <br>" +
	"<h5>DOKTER SPESALIS BEDAH</h5><br>" +
	"Alamat : JVXX+P2 Lemba, Kabupaten Soppeng, Sulawesi Selatan <br>" +
	"Telepon : 08114170417 <br>" +
	"Buka : Senin s/d Jumat <br>" +
	"Jam : 16:00 s/d 18:00 <br>" +
	"<center><img src='img/dr.a.yulkardinansyah.jpg' width='250px'></center>").addTo(map);
	
	L.marker([-4.350686277462035, 119.89760340419811])
	.bindPopup("<h5>dr.SUFRIANI SYAM,M.Kes,Sp. THT-KL</h5> <br>" +
	"<h5>DOKTER SPESALIS BEDAH</h5><br>" +
	"Alamat : Jln. Malaka Raya Kel. Lemba, Kec. Lalabata Kab.Soppeng <br>" +
	"Buka : Senin s/d Jumat <br>" +
	"Jam : 16:00 s/d 20:00 <br>" +
	"<center><img src='img/dr.sufrianisyam.jpg' width='250px'></center>").addTo(map);
	
	L.marker([-4.349797876617759, 119.89868962876017])
	.bindPopup("<h5>SPESIALIS KEDOKTERAN JIWA (PSIKIATER)</h5> <br>" +
	"<h5>APOTEK AK FARMA 2</h5>" +
	"Alamat : Jln. Malaka Raya Kel. Lemba, Kec. Lalabata Kab.Soppeng <br>" +
	"<h5>dr.Hj. Sitti Mudirusnlah, M.Kes, Sp.KJ </h5>" +
	"SIP : 105/SIP/DP/MPTNT/XIII/2022<br>" +
	"Buka : Selasa s/d Kamis <br>" +
	"Jam : 18:00 s/d 20:00 <br>" +
	
	"<br><h5>dr.Ahmad Andi Sameggu, Sp.KJ </h5>" +
	"SIP : 51/SIP/DP/MPTNT/VIII/2022<br>" +
	"Buka : Senin s/d Rabu <br>" +
	"Jam : 16:00 s/d 20:00 <br>" +
	"<center><img src='img/apotekakfarma2.jpg' width='250px'></center>").addTo(map);
	
	L.marker([-4.349373971128008, 119.89779315914808])
	.bindPopup("<h5>H APOTEK HIDAYAH</h5> <br>" +
	"Alamat : Jln. Malaka Raya No.15 Kel. Lapajung, Kec. Lalabata Kab.Soppeng <br>" +
	"Telepon : 081243202080<br> <br>" +
	
	"dr.Hj. Anita Amir, Sp. N <br>" +
	"DOKTER SPESIALIS NEUROLOGI/SARAF <br>" +
	
	"dr.Aminah, Sp.M, M.Kes <br>" +
	"DOKTER SPESIALIS MATA <br>" +
	
	"dr. Andi armina, Sp,.JP <br>" +
	"DOKTER SPESIALIS JANTUNG & PEMBULUH DARAH <br>" +
	
	"dr. Nurul Fadliah Fahrul, S. Ked <br>" +
	"DOKTER UMUM <br>" +
	
	"dr. MUSAKKIR AMIS, S.Ked <br>" +
	"DOKTER UMUM <br>" +
	"<center><img src='img/Hapotekhidayah.jpg' width='250px'></center>").addTo(map);
	
	L.marker([-4.348362054660156, 119.8791290029328])
	.bindPopup("<h5>Drg. Muhlisa</h5> <br>" +
	"<h5>DOKTER GIGI</h5><br>" +
	"Alamat : Jln. Bila Selatan No.44<br>" +
	"SIP : A/SIP/MPTNT/I/2022<br>" +
	"Buka : Senin s/d Jumat <br>" +
	"Jam : 16:00 s/d 18:00 <br>" +
	"Tutup : Hari Minggu & Hari Libur <br>" +
	"<center><img src='img/dr.muhlisa.jpg' width='250px'></center>").addTo(map);
	
	L.marker([-4.349395253144822, 119.88039033291113])
	.bindPopup("<h5>dr. Nirwana AS</h5> <br>" +
	"<h5>DOKTER GIGI</h5><br>" +
	"Alamat : Jln. Buccello No.90nBila Selatan, Watansoppeng<br>" +
	"SiP : Nomor:66/SIP/KPT/XI/2016<br>" +
	"Kontak Person : 08114616118<br>" +
	"Kontak Admin : 085335366161 <br>" +
	"Buka : Sore-Malam <br>" +
	"Jam : 17:00 s/d 22:00 <br>" +
	"Tutup : Hari Minggu & Hari Libur <br>" +
	"<img src='img/dr.nirwana.jpg' width='250px'>").addTo(map);
		 
		 </script>
        </div>
		
      </div>
	  
    </section>
    <!-- End about-info Area -->


    <!-- Start price Area -->

    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Jangkauan Peta</h1>
            <p>Aplikasi pemetaan geografis Lokasi Dokter Praktik di Kecamatan Lalabata Kabupaten Soppeng ini memuat informasi dan lokasi dari Dokter Praktik.
            </p>
          </div>
        </div>
      </div>

      <!-- End other-issue Area -->

    </div>
    </div> <!-- ======= Counts Section ======= -->
    <section id="counts">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-10">Jumlah Lokasi Dokter Praktik</h1>
          <br>
        </div>
        <div class="row d-flex justify-content-center">


          <?php
          include_once "countsma.php";
          $obj = json_decode($data);
          $sman = "";
          foreach ($obj->results as $item) {
            $sman .= $item->sma;
          }
          ?>

          <div class="text-center">
            <h1><span data-toggle="counter-up"><?php echo $sman; ?></span></h1>
            <br>
          </div>
          <?php
          include_once "countsmk.php";
          $obj2 = json_decode($data);
          $smkn = "";
          foreach ($obj2->results as $item2) {
            $smkn .= $item2->smk;
          }
          ?>


        </div>

      </div>
    </section><!-- End Counts Section -->
    </div>
  </section>
  <!-- End testimonial Area -->


  <?php include "footer.php"; ?>