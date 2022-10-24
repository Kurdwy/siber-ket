<?php echo view('templates/he'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-4">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Registrasi Akun karyawan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class= "card-body">
                <div class="row">
                  <div class="form-group col-12">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group col-12">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleInputPlace" placeholder="Masukkan Tempat Lahir">
                  </div>
                    <div class="col-sm-6">
                        <!-- <div class="form-group"> -->
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleInputPlace" placeholder="Masukkan Tanggal Lahir">
                        </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control">
                          <option selected>---Pilih Jenis Kelamin---</option>
                          <option>Pria</option>
                          <option>Wanita</option>
                        </select>
                      </div>
                    </div>
                  <div class="form-group col-12">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" id="exampleInputPlace" placeholder="Masukkan No. NIK">
                  </div>
                  <div class="form-group col-12">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group col-12">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
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
<?php echo view('templates/f'); ?>

