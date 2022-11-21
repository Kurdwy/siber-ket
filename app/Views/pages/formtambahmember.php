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
                            <h3 class="card-title">Form Tambah Member</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/formtambahmember/store" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="namaLengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan Nama Lengkap">
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- <div class="form-group"> -->
                                        <label for="tanggalLahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan Nomor Induk Kependudukan">
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
                                    <div class="form-group col-6">
                                        <label for="tempatLahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamatnya dimana ya?">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn" style="background-color: #800000; color: white; transform:translate(550%)"><i class="fa fa-paper-plane mr-1" aria-hidden="true"></i>Tambah</button>
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