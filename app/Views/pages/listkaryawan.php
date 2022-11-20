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
                                            <input type="text" class="form-control" value="<?= $keyword ?>" placeholder="Masukan Keyword Pencarian" name="keyword" autocomplete="off">
                                            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-7"></div>
                                <!-- <div class="col-1">
                                    <a href="/formtambahmember" type="submit" class="btn" style="background-color: #800000; color: white">Tambah</a>
                                </div> -->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Tempat lahir</th>
                                    <th scope="col">Tanggal lahir</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Created_At</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1 + (2 * ($currentPage - 1));

                                foreach ($karyawan as $kry) :
                                    $dataKaryawan = $kry['nik']
                                ?>

                                    <tr>
                                        <th scope="row"><?= $no ?></th>
                                        <td><?= $kry['nik'] ?></td>
                                        <td><?= $kry['nama'] ?></td>
                                        <td><?= $kry['tempatLahir'] ?></td>
                                        <td><?= $kry['tanggalLahir'] ?></td>
                                        <td><?= $kry['pin'] ?></td>
                                        <td><?= $kry['nomorTelepon'] ?></td>
                                        <td><?= $kry['created_at'] ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-warning mr-3" href="/formeditkaryawan/<?= $kry['nik'] ?>"> Edit</a>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Delete
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Karyawan</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah yakin ingin menghapus karyawan ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <form action="/listkaryawan/delete/<?= $kry['nik'] ?>" method="post">
                                                                    <input name="_method" value="DELETE" type="hidden">
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </td>

                                    </tr>

                                <?php

                                    $no++;
                                endforeach

                                ?>
                            </tbody>
                        </table>

                        <!-- /.card-body -->
                    </div>

                    <div class="float-right">
                        <!--Tampilkan pagination-->
                        <?= $pager->links('karyawan', 'bootstrap') ?>
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