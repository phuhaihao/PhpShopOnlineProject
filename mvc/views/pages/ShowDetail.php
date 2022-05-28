<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-7">
                <?php while ($row = mysqli_fetch_array($data["Products"])) {
                ?>
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(<?php echo $row["image"] ?>);">
                                </li>
                                <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(<?php echo $row["miniimg1"] ?>);" class="active">
                                </li>
                                <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(<?php echo $row["miniimg3"] ?>);">
                                </li>
                                <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(<?php echo $row["miniimg4"] ?>);">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <a class="gallery_img" href="img/product-img/pro-big-1.jpg">
                                        <img class="d-block w-100" src="<?php echo $row["image"] ?>" alt="First slide">
                                    </a>
                                </div>
                                <div class="carousel-item active">
                                    <a class="gallery_img" href="img/product-img/pro-big-2.jpg">
                                        <img class="d-block w-100" src="<?php echo $row["miniimg1"] ?>" alt="Second slide">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="gallery_img" href="img/product-img/pro-big-3.jpg">
                                        <img class="d-block w-100" src="<?php echo $row["miniimg3"] ?>" alt="Third slide">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="gallery_img" href="img/product-img/pro-big-4.jpg">
                                        <img class="d-block w-100" src="<?php echo $row["miniimg4"] ?>" alt="Fourth slide">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price"><?php echo number_format($row["price"], 0, '', '.') ?> VND</p>
                        <a href="product-details.html">
                            <h6><?php echo $row["name"] ?></h6>
                        </a>
                        <!-- Ratings & Review -->
                        <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                                <a href="#">Write A Review</a>
                            </div>
                        </div>
                        <!-- Avaiable -->
                        <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                    </div>

                    <div class="short_overview my-5">
                        <p><?php echo $row["description"] ?></p>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" method="post">
                        <div class="cart-btn d-flex mb-50">
                            <p>Qty</p>
                            <div class="quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                    </form>

                </div>

            <?php } ?>
            </div>
        </div>
    </div>
</div>