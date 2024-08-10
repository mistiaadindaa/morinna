<div class="content-body">
       
    </div>
</div>


<!-- Begin Page Content -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card -3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-nd-4"> 
                <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="mr-3"  width="80" height="80" alt="">
            </div>
            <div class="col-nd-8">
                <div class="card-body">
                    <h3 class="card-tittle"><?= $user['nama']; ?></h3>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Anggota sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
            </div>
                </div>
            </div>
        </div>
</div>
</div>
