<body>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Hijab</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
          <?= $this->session->flashdata('message'); ?>

    <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title"> Data Penjualan</h2>
                        <div class="dropdown inline">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <i class="fa fa-download"></i>Export
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="<?= base_url('Penjualan/export') ?>" >PDF</a></li>
                                <li><a href="<?= base_url('Penjualan/excel') ?>">Excel</a></li>
                            </ul>
                            </div> 
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
              <thead>
                        <td>No</td>
                        <td>No Penjualan</td>
                        <td>Tanggal</td>
                        <td>Pelanggan</td>
                        <td>Total</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($penjualan as $us) : ?>
                        <tr>
                            <td> <?= $i; ?>.</td>
                            <td><?= $us['no_penjualan']; ?></td>
                            <td><?= $us['tanggal']; ?></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['total_bayar']; ?></td>
                            <td><?= $us['status']; ?></td>
                            <td>
                                <a href="<?= base_url('Penjualan/detail/') . $us['no_penjualan']; ?>" class="badge badge-warning">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

