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
            <h4>Halaman Edit Data Jilbab</h4>
          </div>
                <div class="card">
                  <?= $this->session->flashdata('message'); ?>
                    <table class="table">
                        
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $hijab['id']; ?>">
                        <div class="form-group">
                            <label for="nama_hijab">Nama Hijab</label>
                            <input type="text" name="nama_hijab" value="<?= $hijab['nama_hijab']; ?>" class="form-control" id="nama_hijab" placeholder="Nama Jilbab">
                            <?= form_error('nama_hijab', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <input type="text" name="warna" value="<?= $hijab['warna']; ?>" class="form-control" id="warna" placeholder="warna">
                            <?= form_error('warna', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="<?= $hijab['harga']; ?>" class="form-control" id="harga" placeholder="Harga">
                            <?= form_error('harga', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" value="<?= $hijab['stok']; ?>" class="form-control" id="stok" placeholder="Stok">
                            <?= form_error('stok', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" value="<?= $hijab['keterangan']; ?>" class="form-control" id="keterangan" placeholder="Keterangan">
                            <?= form_error('keterangan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/img/hijab/') . $hijab['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                        </div>
                        <a href="<?= base_url('Hijab') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Jilbab</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>