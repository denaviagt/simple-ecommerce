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
                                                <?php $imageURL = !empty($item["foto"])?base_url('assets/fotoprofuk/'.$item["foto"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
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
                            <div>
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <h6>Lakukkan pembayaran pada:</h6>
                                        <p>JTRUST BANK</p>
                                        <p>An. PT Toko Kita</p>
                                        <p>No Rekening. 2133321123</p>

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
<?php } 
else{ ?>
<div class="col-md-12">
    <div class="alert alert-danger">Gagal!!</div>
</div>
<?php } ?>