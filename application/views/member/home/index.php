<!-- Main Content -->
<div class="main-content">
    <section class="section">

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="<?= base_url() ?>assets/admin/assets/img/news/banner1.jpeg"
                                        alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="<?= base_url() ?>assets/admin/assets/img/news/banner2.jpeg"
                                        alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Produk Terbaru</h2>


            <div class="row">
                <?php foreach ($produk_terbaru as $val) { ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <a href="<?=base_url() ?>index.php/memberfe/detail_produk/<?= $val->idProduk?>">
                        <article class="article rounded">
                            <div class="article-header">
                                <div class="article-image"
                                    data-background="<?php echo base_url(); ?>assets/fotoproduk/<?= $val->foto; ?>"
                                    style="background-image: url(<?php echo base_url(); ?>assets/fotoproduk/<?= $val->foto; ?>);">
                                </div>
                                <div class="article-title">

                                    <h2><a href="#"><?php echo $val->namaProduk; ?></a></h2>
                                </div>
                            </div>

                            <div class="article-details text-center">

                                <p>Rp <?php echo $val->harga; ?> </p>
                                <div class="article-cta">
                                    <a href="<?php echo site_url('home/add_cart_item/' . $val->idProduk) ?>"
                                        class="btn btn-primary">Add to cart</a>
                                </div>
                            </div>

                        </article>
                    </a>

                </div>
                <?php } ?>
            </div>

        </div>
    </section>
</div>