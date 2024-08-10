<div class="content-body">
        
    </div>
</div>


<!-- Begin Page Content -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
          <?= $this->session->flashdata('message'); ?>

    <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
              <thead>
                    <tr>
                        <td>No</td>
                        <td>No Pembelian</Std>
                        <td>Tanggal</td>
                        <td>Total</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pembelian as $us) : ?>
                        <tr>
                            <td> <?= $i;?></td>
                            <td><?= $us['no_penjualan']; ?></td>
                            <td><?= $us['tanggal']; ?></td>
                            <td><?= $us['total_bayar']; ?></td>
                            <td><?= $us['status']; ?></td>
                             <td>
                               <a href="<?= base_url('Profil/statusbeli/') . $us['no_penjualan']; ?>" class="badge badge-warning">Detail</a>
                            </td>
                        </tr>                       
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                </div>
                </div>
                    </div>
                </div>
            </div>
</div>
</div>