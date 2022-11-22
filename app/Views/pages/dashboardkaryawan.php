<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


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
            <li class="breadcrumb-item active">Home</li>
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
                <div class="col-2 float-left">
                  <a href="/formtambahmember" type="button" class="btn" style="background-color: #800000; color: white"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Tambah</a>
                </div>
                <div class="col-4"></div>
                <div class="col-6 float-left">
                  <form action="" method="POST">
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?= $keyword ?>" placeholder="Masukan Keyword Pencarian" name="keyword" autocomplete="off">
                      <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                  </form>
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
                    <td>
                      <div class="d-flex">
                        <a class="btn btn-warning mr-3" href="/formeditmember/edit/<?= $mbr['nik'] ?>"> <i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</a>
                        <a href="/cetakkartu/<?= $mbr['nik'] ?>" type="button" class="btn btn-warning"><i class="fa fa-print"></i></a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fa fa-trash-alt mr-1" aria-hidden="true"></i>Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Member</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apakah yakin ingin menghapus member ?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form action="/dashboardkaryawan/delete/<?= $mbr['nik'] ?>" method="post">
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