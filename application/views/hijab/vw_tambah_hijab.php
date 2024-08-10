<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
            <div class="container-fluid">
                    <div class="col-12">
                        
                            <div class="card-body">
        <section class="section">
          <div class="section-header"><?php echo $judul; ?></h1>
            <h4>Halaman Tambah Data Jilbab</h4>
          </div>
                <div class="card">
                  <?= $this->session->flashdata('message'); ?>
                    <table class="table">

            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <div class="custom-file">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                        </div>
                        
                    <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama_hijab" value="<?= set_value('nama_hijab'); ?>" class="form-control" id="nama_hijab" placeholder="Nama Jilbab">
                    <?= form_error('nama_hijab', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Warna">Warna</label>
                        <input type="text" name="warna" value="<?= set_value('warna'); ?>" class="form-control" id="warna" placeholder="warna">
                        <?= form_error('warna', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" value="<?= set_value('harga'); ?>" class="form-control" id="harga" placeholder="Harga">
                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" value="<?= set_value('stok'); ?>" class="form-control" id="stok" placeholder="Stok">
                        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" value="<?= set_value('keterangan'); ?>" class="form-control" id="keterangan" placeholder="Keterangan">
                        <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    </div>
                    <a href="<?= base_url('hijab') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Jilbab</button>
                </form>
            </div>
        </div>
    </div>
</div>
