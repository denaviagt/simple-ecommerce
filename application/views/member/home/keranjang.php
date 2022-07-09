<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Halaman Keranjang</h1>
        </div>
        <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <hr>
                                    <h4>Data Produk</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Produk</th>
                                            <th>Gambar</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>Sub Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php
                                        $total = 0;
                                        $i = 1;
                                        $cart = $this->cart->contents();
                                        foreach ($cart as $val) {
                                            $total = $total + $val['subtotal'];

                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++; ?>
                                                </td>

                                                <td><?php echo $val['name']; ?></td>
                                                <td><?php echo $val['gambar']; ?></td>
                                                <td><?php echo number_format($val['price']); ?></td>
                                                <td><input type="number" min="1" value="<?php echo $val['qty']; ?>"></td>
                                                <td><?php echo number_format($val['price'] * $val['qty']); ?></td>

                                                <td>
                                                    <a href="<?php echo site_url('memberfe/hapus_cart/' . $val['rowid']); ?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                        <tr>
                                            <th>Total</th>
                                            <th><?php echo $total ?></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th><a href="<?php echo site_url('memberfe / selesai_belanja'); ?>" class="btn btn-success">Selesai Belanja</a></th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>