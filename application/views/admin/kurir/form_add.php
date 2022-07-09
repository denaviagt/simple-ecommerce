      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Add Kurir</h1>
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
                <form method="POST" action="<?php echo site_url('kurir/save'); ?>">
                  <div class="card">
                    <div class="card-header">
                      <h4>Form Tambah Kurir</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="inputkurir" class="col-sm-3 col-form-label">Nama Kurir</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="input kurir" name="namaKurir" placeholder="Nama Kurir" required>
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