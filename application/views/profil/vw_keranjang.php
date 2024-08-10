<div class="content-body">
        
    </div>
</div>

<div class="card-body">
     
<!-- Begin Page Content -->


    <h1 class="h2 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="card border-left-primary shadow h-50 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <img src="<?= base_url('assets/img/hijab/') . $hijab['gambar']; ?>" style="width:200px" class="img-thumbnail">

                        </div>
                        <div class="col mr-1">
                            <div class="card-body">
                                   
                               
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $hijab['id']; ?>">
                                <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                <input type="hidden" name="stok" value="<?= $hijab['stok'] ?>">
                     
                                  <br>
                        <div class="col mr-1111">
                            <div class="card-body">
                                <div class="form-group flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        <label for="nama_hijab">Nama hijab</label>
									</div>
                                    
                                    <div class="size-204 respon6-next">
                                        <input name="nama_hijab" type="text" value="<?= $hijab['nama_hijab']; ?>" readonly class="form-control" id="nama_hijab">
										
									</div>   
                                </div>
                                <div class="form-group flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        <label for="warna">Warna</label>
									</div>                             
                                    <div class="size-204 respon6-next">
                                         <input name="warna" value="<?= $hijab['warna']; ?>" type="text" readonly class="form-control" id="warna">									
									</div>   
                                </div>
                                <div class="form-group flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        <label for="harga">Harga</label>
									</div>                             
                                    <div class="size-204 respon6-next">
                                        <input name="harga" value="<?= $hijab['harga']; ?>" type="text" readonly class="form-control"id="harga">								
									</div>   
                                </div>
                                <div class="form-group flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        <label for="stok">Stok</label>
									</div>                             
                                    <div class="size-204 respon6-next">
                                        <input name="stok" value="<?= $hijab['stok']; ?>" type="text" readonly class="form-control"id="stok">							
									</div>   
                                </div>
                                <div class="form-group flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        <label for="Keterangan">Keterangan</label>
									</div>                             
                                    <div class="size-204 respon6-next">
                                        <input name="keterangan" value="<?= $hijab['keterangan']; ?>" type="text" readonly class="form-control" id="keterangan">					
									</div>   
                                </div>
                                <div class="form-group flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        <label for="jumlah">Jumlah</label>
									</div>                             
                                    <div class="size-204 respon6-next">
                                         <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'><?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>					
									</div>   
                                </div>
                                <div class="form-group flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        <label for="total">Total Harga</label>
									</div>                             
                                    <div class="size-204 respon6-next">
                                       <input type="text" name="total" id="total" readonly class="form-control">
									</div>   
                                </div>
                                <div class="form-group flex-w flex-r-m p-b-10">
										<button type="submit" id="tambah" name="tambah" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>
</div>