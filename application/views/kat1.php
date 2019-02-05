		<!-- MAIN -->
		<div class="main">
        <link href="<?=base_url()?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/kategori.css">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="imgBox">
                                <img src="<?=base_url()?>assets/img/kaos1.JPG" class="img-responsive" style="height: 400px; width: 100%;">
                            </div>
                            <div class="content">
                                <h3>3 Second</h3>
                                <p>Kode 1 || Harga: 250K</p>
                                <a href="#beli" class="btn btn-default btnD" data-toggle="modal">Beli</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="imgBox">
                                <img src="<?=base_url()?>assets/img/kaos2.JPG" class="img-responsive" style="height: 400px; width: 100%;">
                            </div>
                            <div class="content">
                                <h3>3 Second</h3>
                                <p>Kode 2 || Harga: 250K</p>
                                <a href="#beli" class="btn btn-default btnD" data-toggle="modal">Beli</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="imgBox">
                                <img src="<?=base_url()?>assets/img/kaos3.JPG" class="img-responsive" style=" height: 400px; width: 100%;">
                            </div>
                            <div class="content">
                                <h3>3 Second</h3>
                                <p>Kode 3 || Harga: 250K</p>
                                <a href="#beli" class="btn btn-default btnD" data-toggle="modal">Beli</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="imgBox">
                                <img src="<?=base_url()?>assets/img/kaos4.JPG" class="img-responsive" style="height: 400px; width: 100%;">
                            </div>
                            <div class="content">
                                <h3>3 Second</h3>
                                <p>Kode 4 || Harga: 250K</p>
                                <a href="#beli" class="btn btn-default btnD" data-toggle="modal">Beli</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="imgBox">
                                <img src="<?=base_url()?>assets/img/kaos5.JPG" class="img-responsive" style="height: 400px; width: 100%;">
                            </div>
                            <div class="content">
                                <h3>3 Second</h3>
                                <p>Kode 5|| Harga: 200K</p>
                                <a href="#beli" class="btn btn-default btnD" data-toggle="modal">Beli</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box">
                            <div class="imgBox">
                                <img src="<?=base_url()?>assets/img/kaos6.JPG" class="img-responsive" style=" height: 400px; width: 100%;">
                            </div>
                            <div class="content">
                                <h3>3 Second</h3>
                                <p>Kode 6|| Harga: 200K</p>
                                <a href="#beli" class="btn btn-default btnD" data-toggle="modal">Beli</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>
    <?php if($this->session->flashdata('pesan')!=null): ?>
    <div class="alert alert-danger">
    <?= $this->session->flashdata('pesan');?></div>                
    <?php endif ?>
    <div class="modal fade" id="beli">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Form Pembelian</h4>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url('index.php/Pembelian/simpan_pembelian')?>" method="post">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username"><br>
                    <label for="">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan nama barang sesuai di gambar"><br>
                    <label for="">Banyak Barang</label>
                    <input type="text" name="banyak_barang" class="form-control" placeholder="Masukkan banyak barang yang ingin dibeli"><br>
                    <label for="">Ukuran</label>
                    <input type="text" name="ukuran" class="form-control" placeholder="Masukkan ukuran S/M/L/XL"><br>
                    <label for="">Alamat Pengiriman</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat pengiriman"><br>
                    <label for="">Metode Pembayaran</label>
                    <input type="text" name="pembayaran" class="form-control" placeholder="Masukkan metode pembayaran Transfer/Bayar di tempat"><br>
                    <input type="submit" name="simpan" value="Kirim" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>