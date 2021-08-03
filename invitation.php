<?php 
$conn = mysqli_connect('localhost', 'ujuunisi_indomedia', 'indomedia#123', 'ujuunisi_indomedia');

$ucapan = mysqli_query($conn, "SELECT *FROM ucapan");

// inisialisasi waktu
date_default_timezone_set('Asia/Jakarta');

function hari_ini()
{
    $hari = date("D");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }

    return "<b>" . $hari_ini . "</b>";
}

$waktu = hari_ini() . ", " . date('d/m/Y') . "<br>" . date("H:i:s");

if (isset($_POST['kirim'])) {
    $komentar = strip_tags($_POST['komentar']);
    $nama = strip_tags($_POST['nama']);

    $query = "INSERT INTO ucapan VALUES('','$nama','$komentar','$waktu')";
    $result = mysqli_query($conn, $query);
    echo "<script>alert('Ucapan anda terkirim'); document.location.href = 'invitation.php'</script>";

    return mysqli_affected_rows($conn);
}


if (isset($_POST['konfirmasi'])) {
    $nama = strip_tags($_POST['nama']);
    $nomor_whatsapp = strip_tags($_POST['nomor_whatsapp']);
    $jml_orang = strip_tags($_POST['jml_orang']);
    $ket_hadir = strip_tags($_POST['ket_hadir']);


    $query = "INSERT INTO buku_tamu VALUES('','$nama','$nomor_whatsapp','$jml_orang','$ket_hadir')";
    $result = mysqli_query($conn, $query);
    echo "<script>alert('Terimakasih telah mengkonfirmasi kehadiran'); document.location.href = 'index.php'</script>";

    return mysqli_affected_rows($conn);
}



 ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/invitation.css">
    </head>
    <body>
        <section class="hero">
            <div class="header">
                <p data-aos="zoom-in">We are getting married</p>
                <p data-aos="zoom-in-up" data-aos-delay="1200" data-os-duration="1500"> Resa & Resky</p>
            </div>
            <div class="footer">
                <p data-aos="zoom-in" data-aos-delay="800" data-aos-offset="0">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang." <br><br>
                    QS. Ar-Rum Ayat 21</p>
            </div>
        </section>

        <section class="info">
            <h1 class="header" data-aos="fade-up">The Wedding Of</h1>
            <div class="profile-container">
                <div class="profile-container__man">
                    <img src="/batch/profile1.png" alt="" data-aos="zoom-in-up">
                    <p class="profile-container__man__name" data-aos="zoom-in">Resa Irwansyah Agus</p>
                </div>
                <p class="profile-container__and" data-aos="zoom-in">&</p>
                <div class="profile-container__woman">
                    <img src="/batch/profile2.png" alt="" data-aos="zoom-in-up">
                    <p class="profile-container__woman__name" data-aos="zoom-in">Resky Sevianty</p>
                </div>
            </div>
            <div class="countdown" data-aos="fade-up">
                <h1>Invite You</h1>
                <p>To Celebrate Our Marriage</p>
                <p>Save The Date</p>
                <div class="countdown-container">
                    <div class="countdown-container__days">
                        00
                    </div>
                    <div class="dash">:</div>
                    <div class="countdown-container__hours">
                        00
                    </div>
                    <div class="dash">:</div>
                    <div class="countdown-container__minutes">
                        00 
                    </div>
                    <div class="dash">:</div>
                    <div class="countdown-container__seconds">
                        00 
                    </div>
                    
                </div>
            </div>
            <h1 class="akad-header">Akad</h1>
            <div class="akad-container">
                <div class="akad-container__date" data-aos="fade-up-right">
                    <img src="/batch/calendar-interface-symbol-tool.png" alt="">
                    <p>2 Juni 2021</p>
                    <p>09 : 00 WITA - Selesai</p>
                </div>
                <div class="akad-container__location" data-aos="fade-up-left" data-aos-delay="700">
                    <img src="/batch/maps-and-flags.png" alt="">
                    <p>Jl. Sultan Hasanuddin</p>
                    <p>Depan SD 2 Sinjai</p>
                </div>
            </div> 
            <h1 class="resepsi-header">Resepsi</h1>
            <div class="resepsi-container">
                <div class="resepsi-container__date" data-aos="fade-up-right">
                    <img src="/batch/calendar-interface-symbol-tool.png" alt="">
                    <p>8 Juni 2021</p>
                    <p>11 : 00 WITA - Selesai</p>
                </div>
                <div class="resepsi-container__location" data-aos="fade-up-left" data-aos-delay="700">
                    <img src="/batch/maps-and-flags.png" alt="">
                    <p>Jl. Bhayangkara</p>
                    <p>(Toko Alam Jaya) Kabupaten Sinjai</p>
                </div>
            </div>    
            <h1 class="gallery__header">Gallery</h1>
        </section>

        <section class="gallery">
            <div class="gallery-1">
                <img class="gallery-1__img" src="img/prewed (4).jpeg" alt="" data-aos="fade-right" data-aos-offset="200" data-aos-delay="100">
                <div class="gallery-1__surah-container">
                    <h1>QS. An Nahl ayat 72</h1>
                    <p>"Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik."</p>
                </div>
            </div>
            <div class="gallery-2">
                <img class="gallery-2__img" src="/img/prewed (2).jpeg" alt="" data-aos="fade-left" data-aos-offset="200" data-aos-delay="100">
                <div class="gallery-2__surah-container">
                    <h1>QS. Adz-Dzariyat ayat 49</h1>
                    <p>"Dan segala sesuatu Kami ciptakan berpasang-pasangan supaya kamu mengingat kebesaran Allah."</p>
                </div>
            </div>
            <div class="gallery-3">
                <img class="gallery-3__img" src="/img/prewed (3).jpeg" alt="" data-aos="fade-right" data-aos-offset="200" data-aos-delay="100">
                <div class="gallery-3__surah-container">
                    <h1>QS. Fatir Ayat 11</h1>
                    <p>"Dan Allah menciptakan kamu dari tanah kemudian dari air mani, kemudian Dia menjadikan kamu berpasang-pasangan (laki-laki dan perempuan). Tidak ada seorang perempuan pun yang mengandung dan melahirkan melainkan dengan sepengetahuan-Nya. Dan tidak dipanjangkan umur seseorang dan tidak pula dikurangi umurnya, melainkan (sudah ditetapkan) dalam Kitab (Lauh Mahfuzh). Sesungguhnya yang demikian itu mudah bagi Allah."</p>
                </div>
            </div>
        </section>

        <section class="location">
            <h1 class="location-header">Location</h1>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5105.132063245103!2d120.2482616478517!3d-5.120326203835608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbc25df15a9be53%3A0x113926ca77bee051!2sToko%20Alam%20Jaya!5e0!3m2!1sen!2sid!4v1621873713949!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <a class="view-btn" href="https://maps.app.goo.gl/Z26BgCLDdXgruyp77" target="_blank">
                <img src="/batch/outline_location_white.png" alt="">
                <p>Lihat Lokasi</p>
            </a>
        </section>

        <section class="prokes">
            <h1>Protokol Kesehatan</h1>
            <p>Tanpa mengungari rasa hormat, berhubung situasi saat ini dilaksanakan ditengah Pandemik Covid-19, kami memohon maaf karena acara akan diselenggarakan sesuai aturan dan himbauan pemerintah.</p>
            <div class="guide-box" data-aos="zoom-in" data-aos-offset="200"></div>
        </section>

        <section class="wish-box">
                
         <!-- start tampilkan ucapan & doa -->
                    <?php foreach ($ucapan as $us) : ?>
                        <><img src="assets/img/profile-user.png" width="30" alt=""> <?= $us["nama"]; ?>
                            <span style="font-size:.6em">
                                <?php $cut = explode('<br>', $us['waktu']);
                                echo $cut[0] . ' | ' . $cut[1] ?> WIB
                            </span>
                        </h5>
                        <p class="ps-4"><?= $us["komentar"]; ?></p>
                        <hr>
                    <?php endforeach; ?>
                </div>
                <!-- end tampilkan ucapan & doa -->

        </section>

        <section class="reservation">
            <h1 class="header">Buku Tamu</h1>
            <p>Konfirmasi Kehadiran serta doa dan ucapan kepada kedua mempelai</p> <br>
            <form action="" method="post">
                <input type="text" name="nama" class="name"placeholder="Nama Kamu"> <br>
                <select name="jml_orang" class="person">
                    <option value="1 Orang">1 orang</option>
                    <option value="2 Orang">2 orang</option>
                </select>
                <input type="text" name="nomor_whatsapp" class="phone-number" placeholder="Nomor WhatsApp">
            </form>
            <form action="" method="post">
                <div class="checkbox-container">
                    <input type="checkbox" name="choice1" value="Pasti, saya akan datang" name="ket_hadir">
                    <label for="choice1"> Pasti, saya akan datang</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="choice2" value="Saya masih ragu" name="ket_hadir" >
                    <label for="choice2"> Saya masih ragu</label>
                </div>                
                <div class="checkbox-container">
                    <input type="checkbox" name="choice3" value="Mohon maaf, saya tidak bisa datang" name="ket_hadir">
                    <label for="choice3"> Mohon maaf, saya tidak bisa datang</label>  
                </div> 
                <input type="submit" name="konfirmasi" value="Kirim Reservasi">
                
              </form>  
        </section>

        <section class="wish">
            <p>Berikanlah doa beserta ucapan kepada kedua mempelai</p>
            <form action="" method="POST">
                <input type="text" name="nama" class="name" placeholder="Nama Kamu" required>
                <textarea class="wish" name="komentar" rows="10" placeholder="Pesan" required></textarea>
                <input type="submit" name="kirim" value="Kirim Ucapan">
            </form>
        </section>

        <div class="footer"> <a href="https://instagram.com/moreindomedia" target="_blank"></a> Powered by indomedia</div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="/js/script.js"></script>
        <script src="/js/animation.js"></script>
        <script src="/js/countdown.js"></script>
    </body>
</html> 