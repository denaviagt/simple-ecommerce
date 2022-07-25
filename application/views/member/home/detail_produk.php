<style>

</style>

<div class="pd-wrap">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="heading-section">
                    <h2>Product Details</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="slider" class="">
                            <div class="item">
                                <img width="100%" height="400" style="object-fit: cover;"
                                    src="<?php echo base_url(); ?>assets/fotoproduk/<?= $detail->foto; ?>" />
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="product-dtl">
                            <div class="product-info">
                                <div class="product-name"><?=$detail->namaProduk?></div>

                                <div class="product-price-discount"><span>Rp <?=$detail->harga?></span>
                                </div>
                            </div>
                            <p> <?=$detail->deskripsiProduk?></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="size">Berat</label>
                                    <span><?=$detail->berat?></span>
                                </div>
                                <div class="col-md-6" class="product-count">
                                    <label class="qtyminus" for="color">Stok</label>
                                    <span><?=$detail->stok?></span>
                                </div>
                            </div>
                            <!-- <div class="product-count">
                        <label for="size">Quantity</label>
                        <form action="#" class="display-flex">
                            <div class="qtyminus">-</div>
                            <input type="text" name="quantity" value="1" class="qty">
                            <div class="qtyplus">+</div>
                        </form>
                    </div> -->
                            <a href="<?php echo site_url('home/add_cart_item/' . $detail->idProduk) ?>"
                                class="round-black-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="product-info-tabs">
                    <?php echo $this->session->flashdata('message') ?>
                    <div class="be-comment-block">
                        <h1 class="comments-title">Diskusi (<?=$count_diskusi?>)</h1>
                        <?php foreach ($diskusi as $item) { ?>
                        <div class="be-comment">
                            <div class="be-img-comment">
                                <a href="blog-detail-2.html">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                        class="be-ava-comment">
                                </a>
                            </div>
                            <div class="be-comment-content">

                                <span class="be-comment-name">
                                    <a href="blog-detail-2.html"><?= $item->username?></a>
                                </span>
                                <span class="be-comment-time">
                                    <i class="fa fa-clock-o"></i>
                                    <?= $item->date?>
                                </span>

                                <p class="be-comment-text">
                                    <?= $item->comment?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php echo form_open_multipart('diskusi/store/'.$detail->idProduk); ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-input-ds" required="" name="comment"
                                        placeholder="Your text"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary text-white float-right" type="submit">Submit</button>
                        </div>
                        <?php echo  form_close(); ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>