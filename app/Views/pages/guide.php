<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    .judul {
      margin-top: 50px;
      margin-right: 35px;
    }

    .siber-ket {
      margin-left: 5px;
    }
  </style>

</head>

<body>
  <div class="container justify-text-center">
    <div class="row">
      <div class="col-lg-6">
        <p class="fs-2 judul"><strong><br><i>Panduan Penggunaan Siber-Ket:</i></strong></p>
        <p>1. Login menggunakan NIK dan Password</p>
        <p>
            2. Input data customer yang akan menjadi Member
        </p>
        <p> 
            3. Edit data Member
        </p>
        <p>
            4. Hapus data Member
        </p>
        <p>
            5. Simpan data Member
        </p>
        <p>
            6. Sorting data Member per hari, minggu, dan bulan
        </p>
    </div>
      <div class="col-lg-6">
        <img class="fs-2 siber-ket" src="/Assets/AdminLTE-3.2.0/img/Siber-ket-gambar-karyawan.png" alt="Foto hilang" width="750px">
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

<?= $this->endSection(); ?>