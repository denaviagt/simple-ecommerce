      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>Manajemen member</h1>
                  <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">member</a></div>
                      <div class="breadcrumb-item">Main</div>
                  </div>
              </div>
              <div class="section-body">
                  <h2 class="section-title">Data member</h2>
                  <div class="row">
                      <div class="col-12 col-md-12">
                          <div class="card">
                              <div class="card-header">
                                  <!-- <h4>Data member</h4> -->
                                  <a href="<?php echo site_url('member/add') ?>" class="btn btn-primary">
                                      Tambah Member </a>
                              </div>
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-bordered table-md">
                                          <tr>
                                              <th>Username</th>
                                              <th>Alamat</th>
                                              <th>Email</th>
                                              <th>Telpom</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                          </tr>
                                          <?php foreach ($member as $item) { ?>
                                              <tr>
                                                  <td><?= $item['username']; ?></td>
                                                  <td><?= $item['alamat']; ?></td>
                                                  <td><?= $item['email']; ?></td>
                                                  <td><?= $item['tlpn']; ?></td>
                                                  <td><?php
                                                        if ($item['statusAktif'] == "Y") {
                                                            echo "<span class='badge badge-success'>AKTIF</span>";
                                                        } else {
                                                            echo "<span class='badge badge-danger'>TIDAK AKTIF</span>";
                                                        } ?></td>
                                                  <td><a href="<?= base_url('member/getid/' . $item['idKonsumen']) ?>" class="btn btn-warning">Edit</a>
                                                      <a href="<?= base_url('member/delete/' . $item['idKonsumen']) ?>" class="btn btn-danger">Hapus</a>
                                                  </td>
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