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
                            <h3 class="card-title">Edit Profile Karyawan</h3>
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
                                        <label for="nik">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="" placeholder="Edit Nomor Telepon" name="">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="pin">Alamat</label>
                                        <input type="text" class="form-control" id="" placeholder="Edit Alamat" name="">
                                    </div>
                                    <!-- <div class="form-group col-12">
                    <label for="confirmPin">Confirm PIN</label>
                    <input type="password" class="form-control" id="confirmPin" placeholder="Confirm PIN">
                  </div> -->
                                </div>
                                <div>
                                    <button type="submit" class="btn" style="background-color: #800000; color: white"><i class="fa fa-paper-plane mr-1" aria-hidden="true"></i>Submit</button>
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