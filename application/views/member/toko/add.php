<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Member</h1>
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
                                <li class="nav-item"><a href="<?php echo site_url('memberfe/index') ?>" class="nav-link">Beranda</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Transaksi</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Riwayat Transaksi</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('memberfe/toko') ?>" class="nav-link">Toko</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Ubah Profil</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <form method="POST" action="<?php echo site_url('toko/save'); ?>">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Form Membuat Toko Baru</h4>
                                    </div>
                                    <input type="hidden" class="form-control" id="input statusAktif" name="statusAktif" value="Y">
                                    <input type="hidden" class="form-control" id="input idKonsumen" name="idKonsumen" value='1'>
                                    <div class="card-body">
                                        <div class="alert alert-info">
                                            Silakan isi data dibawah ini untuk membuat toko
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Toko</label>
                                            <input type="text" class="form-control" id="input namaToko" name="namaToko" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" id="input deskripsi" name="deskripsi" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Logo Toko</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="input logo" name="logo" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                            <button class="btn btn-secondary" type="reset">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </section>
</div>