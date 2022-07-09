      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Add kota</h1>
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
                <form method="POST" action="<?php echo site_url('member/save'); ?>">
                  <div class="card">
                    <div class="card-header">
                      <h4>Form Tambah Member</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="inputmember" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="input username" name="username" placeholder="Username" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputmember" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="input password" name="password" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputmember" class="col-sm-3 col-form-label">Nama Konsumen</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="input namaKonsumen" name="namaKonsumen" placeholder="namaKonsumen" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputmember" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="input alamat" name="alamat" placeholder="Alamat" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputmember" class="col-sm-3 col-form-label">Kota</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="idKota" name="idKota">
                            <option value="" disabled selected>Pilih</option>
                            <?php foreach ($idKota as $idKota) { ?>
                              <option value="<?= $idKota['idKota'] ?>">
                                <?= $idKota['namaKota'] ?>
                              </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputmember" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="input email" name="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputmember" class="col-sm-3 col-form-label">No Telpon</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="input tlpn" name="tlpn" placeholder="081++" required>
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <label for="inputmember" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                          <select name="status" id="status" class="form-control">
                            <option value="" disabled selected>Pilih</option>
                            <option value='Y'>Active</option>
                            <option value='N'>Not Active</option>
                          </select>
                        </div>
                      </div> -->
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