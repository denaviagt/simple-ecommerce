<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Keranjang Belanja</h1>
        </div>
        <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Menu Member</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a href="<?php echo site_url('memberfe') ?>"
                                        class="nav-link">Beranda</a></li>
                                <li class="nav-item"><a href="<?= site_url('home/cart')?>"
                                        class="nav-link">Keranjang</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Transaksi</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Riwayat Transaksi</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('toko') ?>" class="nav-link">Toko</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Ubah Profil</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <?php if (empty($this->cart->contents())) { ?>
                                <div class="card-body">
                                    <h4 style="margin-bottom: 0px; text-align: center;">Keranjang belanja masih kosong!
                                        Silakan
                                        <a href="<?php echo site_url('home'); ?>" style="font-weight: 700;">belanja</a>
                                        barang-barang kami.
                                    </h4>
                                </div>
                                <?php
                        } else {
                        ?>
                                <div class="card-header">
                                    <h4>Data Keranjang Belanja</h4>
                                </div>
                                <div class="card-body">

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
                                                    <img src="<?php echo base_url(ltrim($this->cart->product_options($item['rowid'])['image'], './')); ?>"
                                                        alt="<?php echo $item['name']; ?>"
                                                        style="border: 1px solid; max-width: 150px; max-height: 150px;">
                                                    <?php
                                                    } else
                                                        echo 'Tidak ada foto';
                                                    ?>
                                                </td>
                                                <td><?php echo 'Rp' . number_format($item['price'], NULL, NULL, "."); ?>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm"
                                                        name="cart[<?php echo $item['id']; ?>][qty]"
                                                        value="<?php echo $item['qty']; ?>">
                                                </td>
                                                <td><?php echo "Rp" . number_format($item['subtotal'], NULL, NULL, "."); ?>
                                                </td>
                                                <td style="padding-right: 25px;"><a href="javascript:void(0)"
                                                        onclick="javascript:location.href='<?php echo site_url('home/delete_cart_item/' . $item['rowid']); ?>'"
                                                        class="btn btn-danger">Hapus</a></td>
                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                            <tr>
                                                <td colspan="4">&nbsp;</td>
                                                <td style="padding-left: 25px; vertical-align: middle;">Total</td>
                                                <td style="vertical-align: middle;">
                                                    <?php echo "Rp" . number_format($total, NULL, NULL, "."); ?></td>

                                            </tr>

                                        </table>
                                    </div>
                                    <div class="float-right">

                                        <a href="javascript:void(0)"
                                            onclick="javascript:location.href='<?php echo site_url('checkout'); ?>'"
                                            class="btn btn-success">Checkout</a></td>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>