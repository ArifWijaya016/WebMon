<?php
$servername = "localhost";
$username = "admin";
$password = "root";
$dbname = "server";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM irigasi WHERE nama = 'Lahan 1'  ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
  echo "0 results";
}
$conn->close();
?>
<?php include "body/header.php" ?>
<style>
  .info-modal:hover {
    background-image:url("./assets/info.png");
    background-repeat:no-repeat;
 background-position: right;
 background-size:10%;
    font-size:large;
    background-color:rgba(173, 161, 161, 0.62);
    /* transform: scale(1); */
    color: whitesmoke;
  }
  .info-modal{
      transition:0.6s;
     font-size: large;}

  .info-icon {
    position: static;
    margin-left: 2%;
  }
.content-modal{
  justify-content: center;
 
  
  }
</style>
<div id="layoutSidenav_content">
  <main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
      <div class="container-xl px-4">
        <div class="page-header-content pt-4">
          <div class="row align-items-center justify-content-between">
            <div class="col-auto mt-4">
              <h1 class="page-header-title">
                <div class="page-header-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard Pemantauan Realtime
              </h1>
              <div class="page-header-subtitle">Pemantauan Sensor Secara Realtime</div>
            </div>
          </div>
        </div>
    </header>
    <!-- Main page content-->
    <!-- Section 1 -->
    <div class="container-xl px-4 mt-n10">
      <div class="rows">
        <div class="card card-collapsable">
          <a class="card-header" href="#collapseCardExample" data-bs-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="collapseCardExample">Realtime Monitoring Irigasi
            <div class="card-collapsable-arrow">
              <i class="fas fa-chevron-down"></i>
            </div>
          </a>
          <div class="collapse show" id="collapseCardExample">
            <br>
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-teal text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 lager">Kelembaban</div>
                          <div class="text-lg fw-bold" id="kelembaban"></span> &percnt;</span></div>
                        </div>
                        <i class="fas fa-water fa-2xl"></i>
                      </div>
                    </div>
                    <button type="button" class="btn btn-teal info-modal" data-bs-toggle="modal"
                      data-bs-target="#hum">
                      Informasi
                    </button>
                    <div class="modal fade" id="hum" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">KELEMBABAN</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
                           Bar ini berisi nilai baca yang dihasilkan oleh sensor kelembababan yang mendeteksi
            kelembababan tanah. Kelembaban tanahnya sendiri diberi nilai menggunakan notasi persentase 0-100%, nilai
            tersebut digunakan untuk menotasikan tingkat kelembababan pada tanah.Tingkat kelembaban pada sistem ini
            dibagi
            menjadi 2 kondisi yaitu, 0%-40% "Kering", 41% > 60% "basah".
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Kadar air tanah atau kelembaban tanah untuk tanaman berkisar 60 – 80%.
            Keadaan
            tersebut akan merangsang pertumbuhan untuk tanaman yang masih muda karena asimilasi CO2 menjadi
            lebih
            baik melalui stomata yang membuka lebih banyak (Afifah et al., 2020). </p>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-warning text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 lager">Nitrogen</div>
                          <div class="text-lg fw-bold" id="sensor_n"></span> &percnt;</span></div>
                        </div>
                        <i class="fas fa-flask fa-2xl"></i>
                      </div>
                    </div>
                    <!-- sec -->
                     <button type="button" class="btn btn-warning info-modal" data-bs-toggle="modal"
                      data-bs-target="#nitro">
                      Informasi
                    </button>
                    <div class="modal fade" id="nitro" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Nitrogen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
                  Indikator bar ini menampilkan berapa nilai kadar Nitrogen yang ada pada tanah yang diukur
            menggunakan sensor NPK RS485.Pembacaan nilai kadar ini dilakukan sekali baca sehingga apabila sewaktu-waktu
            ada perubahan kondisi setelah pemberian pupuk/nutrisi kita dapat melihat perubahan kadar Nitrogen tersebut
            dengan cara menekan button reset yang terdapat pada sisi box. Nilai kadar Nitrogen pada tanah sendiri
            umumnya
            berkisar antara 0-255ppm, yang mana nilai tersebut dapat dibagi menjadi beberapa kriteria. Kriteria tersebut
            diindikasikan dengan perubahan warna, warna yang sama digunakan untuk menunjukkan kategori tingkat tanah
            dalam kondisi rendah, sedang, tinggi. Penggolongan nilai range tersebut adalah 0-50ppm Rendah, 51- 130ppm
            sedang, dan
            131-ppm Tinggi
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Nitrogen bagi tanaman berperan dalam proses penyerapan cahaya melalui pembentukan
          klorofil (Suminarti, 2011). Nitrogen diperlukan tanaman untuk pembentukan dan pertumbuhan bagian vegetatif
          tanaman seperti akar, batang dan daun. Selain itu, nitrogen berperan dalam sintesi klorofil (Harjoko, 2005).
          Fungsi Nitrogen yang selengkapnya bagi tanaman adalah sebagai berikut: untuk meningkatkan pertumbuhan tanaman,
          dapat menyehatkan pertumbuhan daun, meningkatkan kadar protein dalam tubuh tanaman, meningkatkan kualitas
          tanaman
          penghasil daun, meningkatkan perkembangan mikroorganisme dalam tanah (Kartasapoetra dan Sutedja, 2000).
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-purple text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 large">Phospor</div>
                          <div class="text-lg fw-bold" id="sensor_p"></span> &percnt;</span></div>
                        </div>
                        <i class="fas fa-flask fa-2xl"></i>
                      </div>
                    </div>
                       <button type="button" class="btn btn-purple info-modal" data-bs-toggle="modal"
                      data-bs-target="#phos">
                      Informasi
                    </button>
                    <div class="modal fade" id="phos" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Phospor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
               Indikator bar ini menampilkan berapa nilai kadar Phospor yang ada pada tanah yang diukur
            menggunakan sensor NPK RS485.Pembacaan nilai kadar ini dilakukan sekali baca sehingga apabila sewaktu-waktu
            ada perubahan kondisi setelah pemberian pupuk/nutrisi kita dapat melihat perubahan kadar Phospor tersebut
            dengan cara menekan button reset yang terdapat pada sisi box. Nilai kadar Phospor pada tanah sendiri umumnya
            berkisar antara 0-255ppm, yang mana nilai tersebut dapat dibagi menjadi beberapa kriteria. Kriteria tersebut
            diindikasikan dengan perubahan warna, warna yang sama digunakan untuk menunjukkan kategori tingkat tanah
            dalam kondisi rendah, sedang, tinggi. Penggolongan nilai range tersebut adalah 0-50ppm Rendah, 51- 130ppm
            sedang, dan
            131-ppm Tinggi
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Fungsi penting unsur P pada tanaman yaitu berperan dalam proses fotosintesis, respirasi,
        transfer dan penyimpanan energi, pembelahan dan pembesaran sel serta proses-proses di dalam tanaman lainnya.
        Unsur P sangat penting dalam pembentukan biji, membantu mempercepat perkembangan akar dan perkecambahan,
        dapat meningkatkan efisiensi penggunaan air, meningkatkan daya tahan terhadap penyakit yang akhirnya
        meningkatkan
        kualitas hasil panen (Irwanto, 2014), mempercepat pembungaan serta pemasakan buah dan biji
        (Walid dan Susylowati, 2016)
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--  -->
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-orange text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 small">Kalium</div>
                          <div class="text-lg fw-bold" id="sensor_k"></span> &percnt;</span></div>
                        </div>
                        <i class="fas fa-flask fa-2xl"></i>
                      </div>
                    </div>
                      <button type="button" class="btn btn-orange info-modal" data-bs-toggle="modal"
                      data-bs-target="#kal">
                      Informasi
                    </button>
                    <div class="modal fade" id="kal" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Kalium</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
            Indikator bar ini menampilkan berapa nilai kadar Kalium yang ada pada tanah yang diukur
            menggunakan sensor NPK RS485.Pembacaan nilai kadar ini dilakukan sekali baca sehingga apabila sewaktu-waktu
            ada perubahan kondisi setelah pemberian pupuk/nutrisi kita dapat melihat perubahan kadar Kalium tersebut
            dengan cara menekan button reset yang terdapat pada sisi box. Nilai kadar Kalium pada tanah sendiri umumnya
            berkisar antara 0-255ppm, yang mana nilai tersebut dapat dibagi menjadi beberapa kriteria. Kriteria tersebut
            diindikasikan dengan perubahan warna, warna yang sama digunakan untuk menunjukkan kategori tingkat tanah
            dalam kondisi rendah, sedang, tinggi. Penggolongan nilai range tersebut adalah 0-50ppm Rendah, 51- 130ppm
            sedang, dan 131-ppm Tinggi
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Kalium memegang peranan penting didalam metabolisme tanaman (Farhad et al., 2010),
            membantu pembentukan protein, karbohidrat, aktivitas enzim, regulasi osmotik, efisiensi penggunaan air,
            translokasi fotosintat (McKenzie, 2001), merangsang perkembangan akar dan meningkatkan ukuran buah
            (Marsono dan Sigit, 2001). Pemberian Kalium dapat meningkatkan terbentuknya senyawa lignin yang lebih tebal,
            sehingga dinding sel menjadi lebih kuat yang pada akkhirnya dinding sel menjadi lebih kuat dan dapat
            melindungi
            tanaman dari gangguan patogen (Fageria et al., 2009)
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-primary text-white h-90">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 lager">pH</div>
                          <div class="text-lg fw-bold" id="sensor_ph"></span> &percnt;</span></div>
                        </div>
                        <i class="fas fa-prescription-bottle fa-2xl"></i>
                      </div>
                    </div>
                          <button type="button" class="btn btn-blue info-modal" data-bs-toggle="modal"
                      data-bs-target="#ph">
                      Informasi
                    </button>
                    <div class="modal fade" id="ph" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">pH</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
              Indikator ini menunjukkan hasil baca dari sensor pH dalam mengukur tingkat pH tanah.
            PH tanah dapat dinotasikan mulai dari 0-14, dimana 0-4,5 Sangat Masam, 5,5-6,5 Agak Masam,
            6,6-7,5 Netral, 7,6-8,5 Agak alkalis, > 8,5 Alkalis
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Tingkat kemasaman tanah (pH) yang sesuai untuk budidaya tomat ialah berkisar
            5,0-7,0.
            Akar tanaman tomat rentan terhadap kekurangan oksigen. Oleh karena itu, tanaman tomat tidak boleh
            tergenangi
            oleh air. Dalam pembudidayaan tanaman tomat, sebaiknya dipilih lokasi yang topografi tanahnya datar,
            sehingga
            tidak perlu dibuat teras-teras dan tanggul (Leovini, 2012).
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2 -->

          </div>

        </div>
        <br>
        
        <div class="card card-collapsable">
          <a class="card-header" href="#collapseCardExample" data-bs-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="collapseCardExample">Realtime Monitoring Biodigester
            <div class="card-collapsable-arrow">
              <i class="fas fa-chevron-down"></i>
            </div>
          </a>
          <div class="collapse show" id="collapseCardExample">
            <br>
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-teal text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 lager">Tekanan Tangki</div>
                          <div class="text-lg fw-bold" id="tekanan_tangki"></span> Bar</span></div>
                        </div>
                        <i class="fas fa-tachometer-alt fa-2xl"></i>
                      </div>
                    </div>
                    <button type="button" class="btn btn-teal info-modal" data-bs-toggle="modal"
                      data-bs-target="#tt">
                      Informasi
                    </button>
                    <div class="modal fade" id="tt" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tekanan Tangki</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
                           Item ini menjelaskan keadaan tekanan yang ada pada tangki penimbun kotoran yang akan dimanfaatkan gas nya,
                           Apabila tangki dalam keadaan bertekanan tinggi maka akan ada warning berupa lampu strobe yang menyala pada sistem.
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Tes tekanan tangki. </p>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-warning text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 lager">Tekanan Tabung</div>
                          <div class="text-lg fw-bold" id="tekanan_tabung"></span> Bar</span></div>
                        </div>
                        <i class="fas fa-fire-extinguisher fa-2xl"></i>
                      </div>
                    </div>
                    <!-- sec -->
                     <button type="button" class="btn btn-warning info-modal" data-bs-toggle="modal"
                      data-bs-target="#tb">
                      Informasi
                    </button>
                    <div class="modal fade" id="tb" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tekanan Tabung</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
                  Indikator ini menunjukkan tingkat tekanan gas yang ada pada tabung yang menyimpan hasil fermentasi kotoran sapi yang 
                  menghasilkan gas,yang mana gas ini kemudian akan digunakan melalui selang yang disambungkan dengan regulator,sehingga gas
                  yang keluar dapat diatur tingkat keluarannya.
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">tessss tekanan tabung
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-cyan text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 lager">Temperature</div>
                          <div class="text-lg fw-bold" id="temperature"></span> °C</span></div>
                        </div>
                        <i class="fas fa-thermometer-half fa-2xl"></i>
                      </div>
                    </div>
                    <!-- sec -->
                     <button type="button" class="btn btn-cyan info-modal" data-bs-toggle="modal"
                      data-bs-target="#ta">
                      Informasi
                    </button>
                    <div class="modal fade" id="ta" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Temperature</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
                  Penjelasan temperature
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Jurnal Temperature
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<!-- TEMP -->
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-blue text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 lager">Ph</div>
                          <div class="text-lg fw-bold" id="ph_bio"></span></span></div>
                        </div>
                        <i class="fas fa-prescription-bottle fa-2xl"></i>
                      </div>
                    </div>
                    <!-- sec -->
                     <button type="button" class="btn btn-blue info-modal" data-bs-toggle="modal"
                      data-bs-target="#ph1">
                      Informasi
                    </button>
                    <div class="modal fade" id="ph1" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Ph</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
                  Penjelasan ph indikator bio
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Jurnal PH BIO
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--  -->
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-orange text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 small">Karbon Dioksida</div>
                          <div class="text-lg fw-bold" id="karbon_dioksida"></span> PPM</span></div>
                        </div>
                        <i class="fas fa-flask fa-2xl"></i>
                      </div>
                    </div>
                      <button type="button" class="btn btn-orange info-modal" data-bs-toggle="modal"
                      data-bs-target="#co2">
                      Informasi
                    </button>
                    <div class="modal fade" id="co2" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Karbon Dioksida</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
                            CO2 adalah
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Jurnal CO2 BIO
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                 <!--  -->
                 <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-green text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 small">Metana</div>
                          <div class="text-lg fw-bold" id="karbon_monoksida"></span> PPM</span></div>
                        </div>
                        <i class="fas fa-flask fa-2xl"></i>
                      </div>
                    </div>
                      <button type="button" class="btn btn-green info-modal" data-bs-toggle="modal"
                      data-bs-target="#met">
                      Informasi
                    </button>
                    <div class="modal fade" id="met" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Metana</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
                            Indikator Metana adalah
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Jurnal CO2 BIO
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


               
        <br>

        <div class="card card-collapsable">
          <a class="card-header" href="#collapseCardExample" data-bs-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="collapseCardExample">Realtime Monitoring Hidroponik
            <div class="card-collapsable-arrow">
              <i class="fas fa-chevron-down"></i>
            </div>
          </a>
          <div class="collapse show" id="collapseCardExample">
            <br>
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-teal text-white h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 lager">TDS</div>
                          <div class="text-lg fw-bold" id="tds"></span> PPM</span></div>
                        </div>
                        <i class="fas fa-bong fa-2xl"></i>
                      </div>
                    </div>
                    <button type="button" class="btn btn-teal info-modal" data-bs-toggle="modal"
                      data-bs-target="#tds1">
                      Informasi
                    </button>
                    <div class="modal fade" id="tds1" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">KELEMBABAN</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
                          TDS adalah
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">
            TDS
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
                
                <div class="col-lg-3 col-xl-3 mb-3">
                  <div class="card bg-primary text-white h-90">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                          <div class="text-white-75 lager">Temperature</div>
                          <div class="text-lg fw-bold" id="temp_hidro"></span> °C</span></div>
                        </div>
                        <i class="fas fa-thermometer-half fa-2xl"></i>
                      </div>
                    </div>
                          <button type="button" class="btn btn-blue info-modal" data-bs-toggle="modal"
                      data-bs-target="#temp_hidro1">
                      Informasi
                    </button>
                    <div class="modal fade" id="temp_hidro1" data-bs-backdrop="static" data-bs-keyboard="false"
                      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">pH</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p class="content-modal">
              Indikator ini menunjukkan hasil baca dari sensor pH dalam mengukur tingkat pH tanah.
            PH tanah dapat dinotasikan mulai dari 0-14, dimana 0-4,5 Sangat Masam, 5,5-6,5 Agak Masam,
            6,6-7,5 Netral, 7,6-8,5 Agak alkalis, > 8,5 Alkalis
                            </p>
                            <hr>
                            <p class="head-artikel">Penjelasan</p>
                            <p class="content-modal">Tingkat kemasaman tanah (pH) yang sesuai untuk budidaya tomat ialah berkisar
            5,0-7,0.
            Akar tanaman tomat rentan terhadap kekurangan oksigen. Oleh karena itu, tanaman tomat tidak boleh
            tergenangi
            oleh air. Dalam pembudidayaan tanaman tomat, sebaiknya dipilih lokasi yang topografi tanahnya datar,
            sehingga
            tidak perlu dibuat teras-teras dan tanggul (Leovini, 2012).
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2 -->

          </div>

        </div>
        <br>
  </main>

  <?php include "body/footer.php" ?>
</div>
</div>

<!-- Javascript  -->
<script>
  $(document).ready(function () {
    setInterval(function () {
      $.ajax({
        url: "dataupdate.php", 
        dataType: "json",
        success: function (result) {
          // Update data pada halaman
          $("#kelembaban").text(result.sensor_kelembaban + " %");
          $("#sensor_n").text(result.sensor_n + " ");
          $("#sensor_p").text(result.sensor_p + " ");
          $("#sensor_k").text(result.sensor_k + " ");
          $("#sensor_ph").text(result.sensor_ph + " ");
          $("#tekanan_tangki").text(result.tekanan_tangki + " Bar");
          $("#tekanan_tabung").text(result.tekanan_tabung+ " Bar");
          $("#temperature").text(result.temperature + " °C");
          $("#ph_bio").text(result.ph_bio + " ");
          $("#karbon_dioksida").text(result.karbon_dioksida + " ppm");
          $("#karbon_monoksida").text(result.karbon_monoksida + " ppm");
          $("#tds").text(result.tds + " ppm");
          $("#temp_hidro").text(result.temp_hidro + " °C");
        }
      });
    }, 100); // Mengupdate data setiap 5 detik
  });
</script>
</body>
</html>
