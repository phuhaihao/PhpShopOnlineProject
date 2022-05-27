<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Thanh Toán</h2>
                </div>

                <div class="cart-table clearfix">
                    <table class="table table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_array($data["Categories"])){ ?>
                            <tr>
                                <td class="cart_product_img">
                                    <a href="#"><img src=<?php echo $row["image"] ?> alt="Product"></a>
                                </td>
                                <td class="cart_product_desc">
                                    <h5><?php echo $row["name"] ?></h5>
                                </td>
                                <td class="price">
                                    <span><?php echo  number_format($row["price"], 0, '','.') ?>VND</span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <p>Qty</p>
                                        <div class="quantity">
                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                    <?php } ?>
                    </tbody>


                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Tổng cộng</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span>$140.00</span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span> <span>$140.00</span></li>
                    </ul>
                    <div class="cart-btn mt-100">
                        <a href="cart.html" class="btn amado-btn w-100">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>