<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Membership Siber-ket</h1>
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
                <div class="col-1">
                  <a href="/formtambahmember" type="button" class="btn" style="background-color: #800000; color: white">Tambah</a>
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
                  <th scope="col">Alamat</th>
                  <th scope="col">Created_At</th>

                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php

                $no = 1 + (4 * ($currentPage - 1));

                foreach ($member as $mbr) :
                  $dataNik = $mbr['nik']
                ?>

                  <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $mbr['nik'] ?></td>
                    <td><?= $mbr['namaLengkap'] ?></td>
                    <td><?= $mbr['tempatLahir'] ?></td>
                    <td><?= $mbr['tanggalLahir'] ?></td>
                    <td><?= $mbr['jenisKelamin'] ?></td>
                    <td><?= $mbr['alamat'] ?></td>
                    <td><?= $mbr['created_at'] ?></td>
                    <td>
                      <div class="d-flex">
                        <a class="btn btn-warning mr-3" href="/formeditmember/<?= $mbr['nik'] ?>"> Edit</a>
                        <a class="btn btn-danger btn-sm btn-delete " data-bs-toggle="modal" data-bs-target="exampleModalLabel" data-id="<?= $mbr['nik'] ?>">Delete</a>
                        <!-- <form action="/dashboardkaryawan/delete/<?= $mbr['nik'] ?>" method="post">
                          <input name="_method" value="DELETE" type="hidden">
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form> -->
                        <form action="/dashboardkaryawan/delete/<?= $mbr['nik'] ?>" method="post">
                          <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                  <h4>Are you sure want to delete this product?</h4>

                                </div>
                                <div class="modal-footer">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                  <button type="submit" class="btn btn-primary">Yes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
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
            <?= $pager->links('member', 'bootstrap') ?>
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