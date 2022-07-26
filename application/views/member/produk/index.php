<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Produk</h1>
        </div>
        <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Menu Produk</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a href="<?= base_url('index.php/toko/main/' . $id_toko) ?>"
                                        class="nav-link">Beranda</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('produk/index/'. $id_toko) ?>"
                                        class="nav-link">Produk</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Pesanan</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Laporan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="<?php echo site_url('produk/add_produk') ?>"
                                        class="btn btn-primary">Silakan Membuat Produk</a>
                                    <hr>
                                    <h4>Data Produk</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($produk as $item) { ?>
                                            <tr>
                                                <td><?= $item['namaProduk']; ?></td>
                                                <td><?= $item['harga']; ?></td>
                                                <td><?= $item['stok']; ?></td>
                                                <td><a href="<?= base_url('index.php/produk/detail/' . $item['idProduk']) ?>"
                                                        class="btn btn-primary">Detail</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
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