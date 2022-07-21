      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>Manajemen Feedback</h1>
                  <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">Feedback</a></div>
                      <div class="breadcrumb-item">Main</div>
                  </div>
              </div>
              <div class="section-body">
                  <h2 class="section-title">Data Feedback</h2>
                  <div class="row">
                      <div class="col-12 col-md-6 col-lg-12">
                          <div class="card">
                              <div class="card-header">
                              </div>
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-bordered table-md">
                                          <tr>
                                              <th>No</th>
                                              <th>Nama</th>
                                              <th>Email</th>
                                              <th>Subject</th>
                                              <th>Kesan</th>
                                          </tr>
                                          <?php foreach ($kesan as $item) { ?>
                                          <tr>
                                              <td><?php echo $item->id_kesan; ?></td>
                                              <td><?php echo $item->Nama; ?></td>
                                              <td><?php echo $item->Email; ?></td>
                                              <td><?php echo $item->Subject; ?></td>
                                              <td><?php echo $item->Kesan; ?></td>
                                          </tr>
                                          <?php } ?>

                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>