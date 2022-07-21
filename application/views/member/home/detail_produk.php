<style>
.pd-wrap {
    padding: 150px 0;
    font-family: 'Poppins', sans-serif;
}

.heading-section {
    text-align: center;
    margin-bottom: 20px;
}

.sub-heading {
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    display: block;
    font-weight: 600;
    color: #2e9ca1;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.heading-section h2 {
    font-size: 32px;
    font-weight: 500;
    padding-top: 10px;
    padding-bottom: 15px;
    font-family: 'Poppins', sans-serif;
}

.user-img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    position: relative;
    min-width: 80px;
    background-size: 100%;
}

.carousel-testimonial .item {
    padding: 30px 10px;
}

.quote {
    position: absolute;
    top: -23px;
    color: #2e9da1;
    font-size: 27px;
}

.name {
    margin-bottom: 0;
    line-height: 14px;
    font-size: 17px;
    font-weight: 500;
}

.position {
    color: #adadad;
    font-size: 14px;
}

.product-thumb .item img {
    height: 100px;
}

.product-name {
    font-size: 22px;
    font-weight: 500;
    line-height: 22px;
    margin-bottom: 4px;
}

.product-price-discount {
    font-size: 22px;
    font-weight: 400;
    padding: 10px 0;
    clear: both;
}

.product-price-discount span.line-through {
    text-decoration: line-through;
    margin-left: 10px;
    font-size: 14px;
    vertical-align: middle;
    color: #a5a5a5;
}

.display-flex {
    display: flex;
}

.align-center {
    align-items: center;
}

.product-info {
    width: 100%;
}

.reviews-counter {
    font-size: 13px;
}

.reviews-counter span {
    vertical-align: -2px;
}

.product-dtl p {
    font-size: 14px;
    line-height: 24px;
    color: #7a7a7a;
}

.product-dtl .form-control {
    font-size: 15px;
}

.product-dtl label {
    line-height: 16px;
    font-size: 15px;
}

.form-control:focus {
    outline: none;
    box-shadow: none;
}

.product-count {
    margin-top: 15px;
}

.product-count .qtyminus,
.product-count .qtyplus {
    width: 34px;
    height: 34px;
    background: #212529;
    text-align: center;
    font-size: 19px;
    line-height: 36px;
    color: #fff;
    cursor: pointer;
}

.product-count .qtyminus {
    border-radius: 3px 0 0 3px;
}

.product-count .qtyplus {
    border-radius: 0 3px 3px 0;
}

.product-count .qty {
    width: 60px;
    text-align: center;
}

.round-black-btn {
    border-radius: 4px;
    background: #212529;
    color: #fff;
    padding: 7px 45px;
    display: inline-block;
    margin-top: 20px;
    border: solid 2px #212529;
    transition: all 0.5s ease-in-out 0s;
}

.round-black-btn:hover,
.round-black-btn:focus {
    background: transparent;
    color: #212529;
    text-decoration: none;
}

.product-info-tabs {
    margin-top: 25px;
}

.product-info-tabs .nav-tabs {
    border-bottom: 2px solid #d8d8d8;
}

.product-info-tabs .nav-tabs .nav-item {
    margin-bottom: 0;
}

.product-info-tabs .nav-tabs .nav-link {
    border: none;
    border-bottom: 2px solid transparent;
    color: #323232;
}

.product-info-tabs .nav-tabs .nav-item .nav-link:hover {
    border: none;
}

.product-info-tabs .nav-tabs .nav-item.show .nav-link,
.product-info-tabs .nav-tabs .nav-link.active,
.product-info-tabs .nav-tabs .nav-link.active:hover {
    border: none;
    border-bottom: 2px solid #d8d8d8;
    font-weight: bold;
}

.product-info-tabs .tab-content .tab-pane {
    padding: 30px 20px;
    font-size: 15px;
    line-height: 24px;
    color: #7a7a7a;
}

.review-form .form-group {
    clear: both;
}

.mb-20 {
    margin-bottom: 20px;
}

.review-form .rate {
    float: none;
    display: inline-block;
}

.review-heading {
    font-size: 24px;
    font-weight: 600;
    line-height: 24px;
    margin-bottom: 6px;
    text-transform: uppercase;
    color: #000;
}

.review-form .form-control {
    font-size: 14px;
}

.review-form input.form-control {
    height: 40px;
}

.review-form textarea.form-control {
    resize: none;
}

.review-form .round-black-btn {
    text-transform: uppercase;
    cursor: pointer;
}
</style>

<div class="pd-wrap">
    <div class="container">
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
                    <a href="#" class="round-black-btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="product-info-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!-- <li class="nav-item">
                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                        aria-controls="description" aria-selected="true">Description</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
                        aria-controls="review" aria-selected="false">Reviews (0)</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!-- <div class="tab-pane fade show active" id="description" role="tabpanel"
                    aria-labelledby="description-tab">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                    error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                </div> -->
                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="review-heading">REVIEWS</div>
                    <p class="mb-20">There are no reviews yet.</p>
                    <form class="review-form">
                        <div class="form-group">
                            <label>Your rating</label>
                            <div class="reviews-counter">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Your message</label>
                            <textarea class="form-control" rows="10"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="" class="form-control" placeholder="Name*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="" class="form-control" placeholder="Email Id*">
                                </div>
                            </div>
                        </div>
                        <button class="round-black-btn">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>