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
                                <li class="nav-item"><a href="<?php echo site_url('memberfe') ?>" class="nav-link">Beranda</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Transaksi</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Riwayat Transaksi</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('toko') ?>" class="nav-link">Toko</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Ubah Profil</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="<?php echo site_url('toko/add_toko') ?>" class="btn btn-primary">Silakan Membuat Toko</a>
                                    <hr>
                                    <h4>Data Toko</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Toko</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Logo</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($toko as $item) { ?>
                                                <tr>
                                                    <td><?= $item['namaToko']; ?></td>
                                                    <td><?= $item['deskripsi']; ?></td>
                                                    <td><?= $item['logo']; ?></td>
                                                    <td><?php
                                                        if ($item['statusAktif'] == "Y") {
                                                            echo "<span class='badge badge-success'>AKTIF</span>";
                                                        } else {
                                                            echo "<span class='badge badge-danger'>TIDAK AKTIF</span>";
                                                        } ?></td>
                                                    <td><a href="<?= base_url('index.php/toko/main/' . $item['idToko']) ?>" class="btn btn-primary">Detail</a>
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