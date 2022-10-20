<?= $this->extend('templates/template'); ?>

<!DOCTYPE html>
<html>
    
    <?= $this->section('content'); ?>
    <head>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" type="text/css" href="/Assets/AdminLTE-3.2.0/dist/css/style.css">
    </head>
    
<body>
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>Siber-Ket merupakan sistem yang didesain untuk membantu karyawan dalam mempermudah tugas mereka untuk membuat akun member pelanggan</h3>
                    <p>Dengan Siber-Ket, karyawan dapat menghemat waktu pelayanan pelanggan dalam membuat akun member</p>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="/Assets/AdminLTE-3.2.0/img/siber-ket-gambar-about.png">
            </div>
        </div>
    </div>


</body>

</html>

<?= $this->endSection('content'); ?>