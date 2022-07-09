<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">


                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo site_url('home/act_reg'); ?>">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="first_name">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="input namaKonsumen" name="namaKonsumen" autofocus required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="last_name">Email</label>
                                    <input type="email" class="form-control" id="input email" name="email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="text" class="form-control" id="input username" name="username" required>
                                <div class="invalid-feedback">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="password" class="d-block">Password</label>
                                    <input type="password" class="form-control" id="input password" name="password" required>
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="password2" class="d-block">Password Confirmation</label>
                                    <input id="password2" type="password" class="form-control" name="password_confirm" required>
                                </div>
                            </div>

                            <div class="form-divider">
                                Your Home
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="email">Alamat</label>
                                    <input type="text" class="form-control" id="input alamat" name="alamat" required>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kota</label>
                                    <select class="form-control selectric" id="idKota" name="idKota">
                                        <?php foreach ($idKota as $idKota) { ?>
                                            <option value="<?= $idKota['idKota'] ?>">
                                                <?= $idKota['namaKota'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>No Telpon</label>
                                    <input type="text" class="form-control" id="input tlpn" name="tlpn" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>