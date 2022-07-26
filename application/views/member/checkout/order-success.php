<?php if(!empty($order)){ ?>
<div class="main-content">
    <section class="section">
        <div class="container px-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-1">
                                    <a href="#" class="has-icon" style="color: inherit; visibility: hidden">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </div>
                                <div class="col-11 px-0">
                                    <h4 style="margin-bottom: 0px;">STATUS PESANAN</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="alert alert-success">Pesanan berhasil dibuat. Silahkan Selesaikan pemabayaran.</div>
                <?php echo $this->session->flashdata('message') ?>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <div class=" col-lg-12 ord-addr-info">
                                <h5>Detail Order</h5>

                                <p><b>Tanggal Order:</b> <?php echo $order['tglOrder']; ?></p>
                                <p><b>Nama Pembeli:</b> <?php echo $order['namaKonsumen']; ?></p>
                                <p><b>Email:</b> <?php echo $order['email']; ?></p>
                                <p><b>Phone:</b> <?php echo $order['tlpn']; ?></p>

                            </div>

                            <!-- Order items -->
                            <div class="row col-lg-12">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                if(!empty($order['items'])){  
                                    $total = 0;
                                    foreach($order['items'] as $item){ ?>
                                        <tr>
                                            <td>
                                                <?php $imageURL = !empty($item["foto"])?base_url('assets/fotoproduk/'.$item["foto"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                                                <img src="<?php echo $imageURL; ?>" width="75" />
                                            </td>
                                            <td><?php echo $item["namaProduk"]; ?></td>
                                            <td><?php echo 'Rp'.$item["harga"]; ?></td>
                                            <td><?php echo $item["jumlah"]; ?></td>
                                            <td><?php echo 'Rp '.$item["harga"]; ?></td>
                                        </tr>

                                        <?php $total += $item["harga"]; } 
                                 } ?>

                                        <tr>
                                            <td colspan="3"></td>
                                            <td>Total</td>
                                            <td>Rp <?=$total?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-5 ">
                                <div class="card bg-info">
                                    <div class="card-body text-center">
                                        <h5>Lakukkan pembayaran pada:</h5>
                                        <h6>JTRUST BANK</h6>
                                        <h6>An. PT Toko Kita</h6>
                                        <h6>Virtual Account. 232122222222311</h6>
                                        <h6>Kode Bayar : 00<?=$order['idOrder']?></h6>
                                        <?php if ($order['statusOrder'] == 'Belum Bayar') {?>
                                        <button class="btn btn-secondary btn-lg btn-block" data-toggle="modal"
                                            data-target="#konfirModal">Konfirmasi Pembayaran</button>
                                        <?php } else { ?>
                                        <div class="p-2 mt-2 bg-success rounded-lg">Pembayaran
                                            Terkonfirmasi</div>

                                        <?php }  ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="konfirModal" tabindex="-1" aria-labelledby="konfirModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="konfirModalLabel">Konfirmasi Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php echo form_open_multipart('checkout/payment/'.$order['idOrder']); ?>
            <div class="modal-body">
                <input type="file" class="form-control-file" id="payment" name="payment">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php echo  form_close(); ?>

        </div>
    </div>
</div>
<?php } 
else{ ?>
<div class="col-md-12">
    <div class="alert alert-danger">Gagal!!</div>
</div>
<?php } ?>