<?php echo view('templates/he'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Karyawan Minimarket</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-4">
                                    <form action="" method="POST">
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="" placeholder="Masukan Keyword Pencarian" name="keyword" autocomplete="off">
                                            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-7"></div>
                                <div class="col-1">
                                    <a href="/formtambahmember" type="submit" class="btn" style="background-color: #800000; color: white">Tambah</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Created_At</th>

                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                $no = 1;

                foreach ($karyawan as $kry) :
                  $dataKaryawan = $kry['nik']
                ?>

                  <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $kry['nik'] ?></td>
                    <td><?= $kry['nama'] ?></td>
                    <td><?= $kry['created_at'] ?></td>
                    
                  </tr>

                <?php

                  $no++;
                endforeach

                ?>
                            </tbody>
                        </table>

                        <!-- /.card-body -->
                    </div>

                    <!-- /.card -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php echo view('templates/f'); ?>