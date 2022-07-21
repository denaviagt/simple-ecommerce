<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Halaman Feedback Toko Kita</h1>
        </div>
        <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo $this->session->flashdata('message') ?>
                    <?php echo form_open_multipart('feedback/kirim'); ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Mengirim Feedback Ke Tokokita</h4>
                                </div>
                                <input type="hidden" class="form-control" id="input idToko" name="idToko" value='2'>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Pelanggan</label>
                                        <input type="text" class="form-control" id="input nama" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="input email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control" id="input subject" name="subject"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kesan dan Pesan</label>
                                        <input type="text" class="form-control" id="input kesan" name="kesan" required>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
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