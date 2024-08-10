

<body>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
                  <?= $this->session->flashdata('message'); ?>

            <div class="container-fluid">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title"> Data Hijab</h2>

                                <div class="table-responsive">
                                <div class="col-md-10">
                                    <a href="<?= base_url('Hijab/Tambah') ?>" class="btn btn-info mb-2">Tambah Hijab</a>
                                </div>
                                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                            <td>No</td>
                            <td>Gambar</td>
                            <td>Nama Jilbab</td>
                            <td>Warna</td>
                            <td>Stok</td>
                            <td>Harga</td>
                            <td>Aksi</td>
                            </tr>
                      </thead>
                      <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($hijab as $us) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><img src="<?= base_url('assets/img/hijab/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                    <td><?= $us['nama_hijab']; ?></td>
                                    <td><?= $us['warna']; ?></td>
                                    <td><?= $us['harga']; ?></td>
                                    <td><?= $us['stok']; ?></td>
                                   
                                    
                                    <td>
                                        <a href="<?= base_url('hijab/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                        <a href="<?= base_url('hijab/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tr>
                      </tbody>
                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
