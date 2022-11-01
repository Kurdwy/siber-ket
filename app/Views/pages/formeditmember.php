<?php echo view('templates/h'); ?>
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
                            <h3 class="card-title">Form Edit Member</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="inputNama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan Nama Lengkap">
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- <div class="form-group"> -->
                                        <label for="inputTglLahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Masukkan Tanggal Lahir">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="inputNIK">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan Nomor Induk Kependudukan">
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                                                <option selected>---Pilih Jenis Kelamin---</option>
                                                <option>Pria</option>
                                                <option>Wanita</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="inputAlamat">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="inputAlamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamatnya dimana ya?">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn" style="background-color: #800000; color: white; transform:translate(550%)">Simpan</button>
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
<?php echo view('templates/f'); ?>