<div class="main">
    <div class="main-content">
    <h1 class=>Barang</h1>
                                <!-- </div>
                        </div>
                        <div class="body">
                        <div class="row"> -->
                        <!-- <a style="margin: 35px;margin-left: 1px;" href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a> -->
                            <table class="table table-hover table-striped">
                            <tr>
                                <th>NO</th><th>USERNAME</th><th>NAMA BARANG</th><th>BANYAK BARANG</th><th>UKURAN</th><th>ALAMAT</th><th>METODE PEMBAYARAN</th>
                            </tr>
                            <?php
                            $no=0;
                                foreach ($data_pembelian as $dt_pem) {
                                    $no++;
                                    echo '<tr>
                                         <td>'.$no.'</td>
                                         <td>'.$dt_pem->username.'</td>
                                         <td>'.$dt_pem->nama_barang.'</td>
                                         <td>'.$dt_pem->banyak_barang.'</td>
                                         <td>'.$dt_pem->ukuran.'</td>
                                         <td>'.$dt_pem->alamat.'</td>
                                         <td>'.$dt_pem->pembayaran.'</td>
                                         </tr>';
                                }
                            ?>
                            </table>
                            <?php if($this->session->flashdata('pesan')!=null): ?>
    <div class="alert alert-danger">
    <?= $this->session->flashdata('pesan');?></div>                
    <?php endif ?>
    <div class="modal fade" id="tambah">
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
                    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan banyak barang yang ingin dibeli"><br>
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
    </div>
</div>