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
                                    <h4 style="margin-bottom: 0px;">Keranjang Belanja</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <?php if (empty($this->cart->contents())) { ?>
                            <div class="card-body">
                                <h4 style="margin-bottom: 0px; text-align: center;">Keranjang belanja masih kosong! Silakan <a href="<?php echo site_url('home'); ?>" style="font-weight: 700;">belanja</a> barang-barang kami.</h4>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="card-header">
                                <h4>Data Keranjang Belanja</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-md">
                                    <tr class="bg-whitesmoke">
                                        <th style="padding-left: 25px;">No.</th>
                                        <th>Nama Produk</th>
                                        <th>Gambar</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Subtotal</th>
                                        <th style="padding-right: 25px;">Aksi</th>
                                    </tr>
                                    <?php
                                    $i = 1;
                                    $total = 0;
                                    foreach ($this->cart->contents() as $item) {
                                        $total += $item['subtotal'];
                                        echo form_hidden($i . '[rowid]', $item['rowid']);
                                    ?>
                                        <tr <?php if ($i % 2 == 0) {
                                                echo 'class="bg-whitesmoke"';
                                            } ?>>
                                            <td style="padding-left: 25px;"><?php echo $i; ?></td>
                                            <td><?php echo $item['name']; ?></td>
                                            <td>
                                                <?php if (!empty($this->cart->product_options($item['rowid'])['image'])) { ?>
                                                    <img src="<?php echo base_url(ltrim($this->cart->product_options($item['rowid'])['image'], './')); ?>" alt="<?php echo $item['name']; ?>" style="border: 1px solid; max-width: 150px; max-height: 150px;">
                                                <?php
                                                } else
                                                    echo 'Tidak ada foto';
                                                ?>
                                            </td>
                                            <td><?php echo 'Rp' . number_format($item['price'], NULL, NULL, "."); ?></td>
                                            <td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id']; ?>][qty]" value="<?php echo $item['qty']; ?>"></td>
                                            <td><?php echo "Rp" . number_format($item['subtotal'], NULL, NULL, "."); ?></td>
                                            <td style="padding-right: 25px;"><a href="javascript:void(0)" onclick="javascript:location.href='<?php echo site_url('home/delete_cart_item/' . $item['rowid']); ?>'" class="btn btn-danger">Hapus</a></td>
                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                    <tr>
                                        <td style="padding-left: 25px; vertical-align: middle;">Total</td>
                                        <td style="vertical-align: middle;"><?php echo "Rp" . number_format($total, NULL, NULL, "."); ?></td>
                                        <td colspan="4">&nbsp;</td>
                                        <td style="padding-right: 25px;"><a href="javascript:void(0)" onclick="javascript:location.href='<?php echo site_url('home/done_shopping'); ?>'" class="btn btn-success">Selesai Belanja</a></td>
                                    </tr>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
