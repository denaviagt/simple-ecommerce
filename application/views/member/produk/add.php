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
                                <li class="nav-item"><a href="" class="nav-link">Beranda</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('produk') ?>" class="nav-link">Produk</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Pesanan</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Laporan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <?php echo form_open_multipart('produk/save'); ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Membuat Produk Baru</h4>
                                </div>
                                <input type="hidden" class="form-control" id="input idToko" name="idToko" value='2'>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        Silakan isi data dibawah ini untuk membuat toko
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select class="form-control" id="idKat" name="idKat">
                                            <!-- <option value="" disabled selected>Pilih</option> -->
                                            <?php foreach ($kategori as $kr) { ?>
                                                <option value="<?= $kr['idKat'] ?>">
                                                    <?= $kr['namakat'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control" id="input namaProduk" name="namaProduk" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Produk</label>
                                        <input type="file" class="form-control" id="input foto" name="foto" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input type="text" class="form-control" id="input harga" name="harga" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Stok Produk</label>
                                        <input type="text" class="form-control" id="input stok" name="stok" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Berat Produk</label>
                                        <input type="text" class="form-control" id="input berat" name="berat" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Produk</label>
                                        <textarea class="form-control" id="input deskripsiProduk" name="deskripsiProduk" required></textarea>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                        <button class="btn btn-secondary" type="reset">Reset</button>
                                    </div>
                                    <?php echo  form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>