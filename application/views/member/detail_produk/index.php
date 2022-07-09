<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Halaman Detail Produk</h1>
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
                                <li class="nav-item"><a href="" class="nav-link">Beranda</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('produk') ?>" class="nav-link">Produk</a></li>
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
                                    <h4>Halaman Detail Produk</h4>
                                </div>
                                <input type="hidden" class="form-control" id="input statusAktif" name="statusAktif" value="Y">
                                <input type="hidden" class="form-control" id="input idKonsumen" name="idKonsumen" value='1'>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        Berikut Ini Adalah Halaman Detail Produk
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control" id="input namaToko" name="namaToko" placeholder="<?= $detail->namaProduk ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" class="form-control" id="input namaToko" name="namaToko" placeholder="<?= $detail->harga ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input type="text" class="form-control" id="input namaToko" name="namaToko" placeholder="<?= $detail->stok ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Berat</label>
                                        <input type="text" class="form-control" id="input namaToko" name="namaToko" placeholder="<?= $detail->berat ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" class="form-control" id="input namaToko" name="namaToko" placeholder="<?= $detail->deskripsiProduk ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <br>
                                        <img src="<?php echo base_url(); ?>assets/fotoproduk/<?= $detail->foto; ?>" width="500" height="300">
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