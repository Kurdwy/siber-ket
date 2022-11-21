<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-4">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-danger">
            <div class="card-header" style="background-color: #800000; color: white">
              <h3 class="card-title">Registrasi Akun karyawan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/regis/store" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-12">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" name="nama">
                  </div>
                  <div class="form-group col-12">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatLahir" placeholder="Masukkan Tempat Lahir" name="tempatLahir">
                  </div>
                  <div class="col-sm-6">
                    <!-- <div class="form-group"> -->
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggalLahir" placeholder="Masukkan Tanggal Lahir" name="tanggalLahir">
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="jenisKelamin">Jenis Kelamin</label>
                      <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                        <option selected>---Pilih Jenis Kelamin---</option>
                        <option>Pria</option>
                        <option>Wanita</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-12">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Masukkan No. NIK" name="nik">
                  </div>
                  <div class="form-group col-12">
                    <label for="pin">PIN</label>
                    <input type="password" class="form-control" id="pin" placeholder="PIN" name="pin">
                  </div>
                  <div class="form-group col-6">
                    <label for="nomorTelepon">Nomor Telepon</label>
                    <input type="text" class="form-control" id="nomorTelepon" placeholder="Nomor Telepon" name="nomorTelepon">
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn" style="background-color: #800000; color: white">Submit</button>
                </div>
              </div>
          </div>
        </div>
      </div>

      <!-- /.card-body -->


      </form>
    </div>
</div>
</div>
</div>
</div>