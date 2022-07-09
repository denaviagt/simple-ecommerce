      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Add Ongkos Kirim</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstarp Components</a></div>
              <div class="breadcrumb-item">Form</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Form Add</h2>
            <div class="row">

              <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="<?php echo site_url('ongkoskirim/save'); ?>">
                  <div class="card">
                    <div class="card-header">
                      <h4>Form Tambah Ongkos Kirim</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="inputongkoskirim" class="col-sm-3 col-form-label">Nama Kurir</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="idKurir" name="idKurir">
                            <!-- <option value="" disabled selected>Pilih</option> -->
                            <?php foreach ($idKurir as $kr) { ?>
                              <option value="<?= $kr['idKurir'] ?>">
                                <?= $kr['namaKurir'] ?>
                              </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputongkoskirim" class="col-sm-3 col-form-label">Kota Asal</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="idKotaAsal" name="idKotaAsal">
                            <!-- <option value="" disabled selected>Pilih</option> -->
                            <?php foreach ($idKotaAsal as $kt) { ?>
                              <option value="<?= $kt['idKota'] ?>">
                                <?= $kt['namaKota'] ?>
                              </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputongkoskirim" class="col-sm-3 col-form-label">Kota Tujuan</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="idKotaTujuan" name="idKotaTujuan">
                            <!-- <option value="" disabled selected>Pilih</option> -->
                            <?php foreach ($idKotaTujuan as $ktt) { ?>
                              <option value="<?= $ktt['idKota']  ?>">
                                <?= $ktt['namaKota'] ?>
                              </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputongkoskirim" class="col-sm-3 col-form-label">Biaya</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" id="input biaya" name="biaya" placeholder="biaya" required>
                        </div>
                      </div>

                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </section>
      </div>