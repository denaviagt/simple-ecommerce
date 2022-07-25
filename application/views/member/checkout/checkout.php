<div class="main-content">
    <!-- <section class="section"> -->
    <section id="invoice">
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary text-white border-0">
                    <h4 class="text-white">Checkout</h4>
                </div>
                <div class="card-body">
                    <?php if(!empty($error_msg)){ ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                    </div>
                    <?php } ?>
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h6 class="mb-3">Alamat Pengiriman:</h6>
                            <div>
                                <strong><?=$custData->namaKonsumen?></strong>
                            </div>
                            <div><?=$custData->alamat?></div>
                            <div>Email: <?=$custData->email?></div>
                            <div>Telepon: <?=$custData->tlpn?></div>
                        </div>

                    </div>
                    <?php if($this->cart->total_items() > 0){ 
                       ?>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead class="bg-blue-200 text-white">
                                <tr>
                                    <th class="center">#</th>
                                    <th>Image</th>
                                    <th>Nama Produk</th>
                                    <th class="right">Harga</th>
                                    <th class="center">Jumlah </th>
                                    <th class="right">Sub Total </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1?>
                                <?php foreach($cartItems as $item){ ?>
                                <tr>
                                    <td class="center"><?=$i ?></td>
                                    <td class="left strong">
                                        <?php $imageURL = !empty($item["image"])?base_url('assets/fotoproduk/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                                        <img src="<?php echo $imageURL; ?>" width="75" />
                                    </td>
                                    <td class="left"><?php echo $item["name"]; ?></td>
                                    <td class="right"><?php echo 'Rp '.$item["price"]; ?></td>
                                    <td class="center"> <?php echo $item["qty"]; ?>
                                    </td>
                                    <td class="right">
                                        <?php echo 'Rp '.$item["subtotal"]; ?></td>
                                </tr>

                                <?php $i+=1; }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            <h4 class="text-dark">Total</h4>
                                        </td>
                                        <td class="right">
                                            <h4 class="text-dark"><?php echo 'Rp '.$this->cart->total(); ?></h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                    <?php }else{ ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <p>Keranjang kosong!!</p>
                    </li>
                    <?php } ?>
                    <div class="row">
                        <div class="col-6">
                            <a href="<?php echo base_url('/'); ?>" class="btn btn-lg btn-block btn-info">Tambah
                                Pesanan</a>
                        </div>
                        <div class="col-6">
                            <form method="post">
                                <input class="btn btn-success btn-lg btn-block" type="submit" name="placeOrder"
                                    value="Buat Pesanan">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- </section> -->
</div>