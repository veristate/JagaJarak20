<?php
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url, true);
?>

<header class="page-header gradient">
    <div class="container pt-3">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6" style="padding-top: 50px; padding-bottom: 20px;">
                <div class="card" style="background-color:rgba(0, 0, 0, 0); border: none;">
                    <h1 class="text-uppercase fw-bold" style="color: #FFF; font-size: 60px;">Ayo</h1>
                    <h1 class="text-uppercase fw-bold" style="color: #F4E04D; font-size: 72px;">Pakai Masker</h1>
                    <p style="color: white;">Pakai Masker, Cuci Tangan Pakai Sabun, Jaga Jarak dan Hindari Kerumunan.
                        Selalu Jaga Kesehatan, Jangan Sampai Tertular dan Jaga Keluarga Kita.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src=<?= base_url('—Pngtree—family wearing medical mask during_5341723.png') ?> alt="" style="width: 100%;">
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1" d="M0,64L80,96C160,128,320,192,480,197.3C640,203,800,149,960,117.3C1120,85,1280,75,1360,69.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
</header>

<section class="informasi" style="padding: 20px 0; margin-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= base_url('—Pngtree—covid 19 vector with transparent_5502470.png') ?>" alt="" style="width: 50%;">
            </div>
            <div class="col-md-6">
                <h3>Apa itu?</h3>
                <h2 class="fw-bold">COVID-19</h2>
                <p>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan.
                    Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan,
                    mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS).
                    Coronavirus jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan Cina, pada Desember 2019,
                    kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 (COVID-19).</p>
            </div>
        </div>
    </div>
</section>

<section class="statistik" style="margin: 100px 0; padding: 20px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="card text-white" style="background: rgb(0, 97, 242); border: none;">
                    <div class="card-body">
                        <h1 class="card-body fw-bold text-center"><?= $data[0]['positif']; ?></h1>
                        <h5 class="card-title fw-bold text-center">Terkonfirmasi</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white" style="background: rgb(0, 97, 242); border: none;">
                    <div class="card-body">
                        <h1 class="card-body fw-bold text-center"><?= $data[0]['dirawat']; ?></h1>
                        <h5 class="card-title fw-bold text-center">Dirawat</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white" style="background: rgb(0, 97, 242); border: none;">
                    <div class="card-body">
                        <h1 class="card-body fw-bold text-center"><?= $data[0]['sembuh']; ?></h1>
                        <h5 class="card-title fw-bold text-center">Sembuh</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white" style="background: rgb(0, 97, 242); border: none;">
                    <div class="card-body">
                        <h1 class="card-body fw-bold text-center"><?= $data[0]['meninggal']; ?></h1>
                        <h5 class="card-title fw-bold text-center">Meninggal</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pencegahan" style="margin: 100px 0; padding: 20px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="fw-bold">Pencegahan Infeksi Coronavirus</h3>
            <h5 style="padding-bottom: 60px;">Berikut upaya yang bisa dilakukan: </h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="row justify-content-center gx-5 gy-4">
                        <img src=<?= base_url('/png/040-hand wash.png') ?> alt="" style="width: 40%;">
                        <p class="text-center">Sering-seringlah mencuci tangan dengan sabun dan air selama 20 detik hingga bersih.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row justify-content-center gx-5 gy-4">
                        <img src=<?= base_url('/png/021-avoid.png') ?> alt="" style="width: 40%;">
                        <p class="text-center">Hindari menyentuh wajah, hidung, atau mulut saat tangan dalam keadaan kotor atau belum dicuci.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row justify-content-center gx-5 gy-4">
                        <img src=<?= base_url('/png/041-hospital bed.png') ?> alt="" style="width: 40%;">
                        <p class="text-center">Hindari kontak langsung atau berdekatan dengan orang yang sakit.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row justify-content-center gx-5 gy-4">
                        <img src=<?= base_url('/png/001-hand.png') ?> alt="" style="width: 40%;">
                        <p class="text-center">Hindari menyentuh hewan atau unggas liar. </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row justify-content-center gx-5 gy-4">
                        <img src=<?= base_url('/png/049-clean.png') ?> alt="" style="width: 40%;">
                        <p class="text-center">Membersihkan dan mensterilkan permukaan benda yang sering digunakan.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row justify-content-center gx-5 gy-4">
                        <img src=<?= base_url('/png/024-cough.png') ?> alt="" style="width: 40%;">
                        <p class="text-center">Tutup hidung dan mulut ketika bersin atau batuk dengan tisu. Kemudian, buanglah tisu dan cuci tangan hingga bersih.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row justify-content-center gx-5 gy-4">
                        <img src=<?= base_url('/png/013-stayhome.png') ?> alt="" style="width: 40%;">
                        <p class="text-center">Jangan keluar rumah dalam keadaan sakit.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row justify-content-center gx-5 gy-4">
                        <img src=<?= base_url('/png/038-antivirus.png') ?> alt="" style="width: 40%;">
                        <p class="text-center">Kenakan masker dan segera berobat ke fasilitas kesehatan ketika mengalami gejala penyakit saluran napas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gejala" style="margin: 100px 0; padding: 20px 0;">
    <div class="container">
        <div class="row">
            <h3 class="fw-bold">Gejala Infeksi Coronavirus</h3>
            <h5 style="padding-bottom: 60px;">Berikut beberapa gejala virus corona yang terbilang ringan: </h5>
            <div class="row">
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/041-sneezing.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Hidung beringus</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/042-dizzy.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Sakit Kepala</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/004-difficulty breathing.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Batuk</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/023-sore throat.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Sakit tenggorokan</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/002-fever.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Demam</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center gy-4">
                        <img src=<?= base_url('/png/050-weakness.png') ?> alt="" style="width: 60%;">
                        <p class="text-center">Merasa tidak enak badan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>