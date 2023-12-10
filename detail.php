<?php include "header.php"; ?>
<?php
$id = $_GET['id_wisata'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$id_wisata = "";
$nama_wisata = "";
$alamat = "";
$deskripsi = "";
$harga_tiket = "";
$lat = "";
$long = "";
foreach ($obj->results as $item) {
  $id_wisata .= $item->id_wisata;
  $nama_wisata .= $item->nama_wisata;
  $alamat .= $item->alamat;
  $harga_tiket .= $item->harga_tiket;
  $lat .= $item->latitude;
  $long .= $item->longitude;
}

$title = "Detail dan Lokasi : " . $nama_wisata;
//include_once "header.php"; 
?>

<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Detail Informasi Lokasi Dokter Praktik
        </h1>

      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container" style="padding-top: 120px;">
    <div class="row">

      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Informasi Lokasi Dokter Praktik </strong></h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <!-- <th>Item</th> -->
                <th>Detail</th>
              </tr>
              <tr>
                <td>Nama Praktik Dokter</td>
                <td>
                  <h5><?php echo $nama_wisata ?></h5>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>
                  <h5><?php echo $alamat ?></h5>
                </td>
              </tr>
              <tr>
                <td>Buka</td>
                <td>
                  <h5><?php echo $harga_tiket ?></h5>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-5" data-aos="zoom-in">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Lokasi</strong></h4>
          </div>
          <div class="panel-body">
		  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<div id="map" style="width: 100%; height: 380px;"></div>

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
	"<center><img src='img/hapotekhidayah.jpg' width='250px'></center>").addTo(map);
	
	L.marker([-4.348362054660156, 119.8791290029328 ])
	.bindPopup("<h5>Drg. Muhlisa</h5> <br>" +
	"<h5>DOKTER GIGI</h5><br>" +
	"Alamat : Jln. Bila Selatan No.44<br>" +
	"SIP : A/SIP/MPTNT/I/2022<br>" +
	"Buka : Senin s/d Jumat <br>" +
	"Jam : 16:00 s/d 18:00 <br>" +
	"Tuutup : Hari Minggu & Hari Libur <br>" +
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
	"Tuutup : Hari Minggu & Hari Libur <br>" +
	"<img src='img/dr.nirwana.jpg' width='250px'>").addTo(map);
</script>
          </div>
        </div>
      </div>
</section>
<!-- End about-info Area -->
<?php include "footer.php"; ?>