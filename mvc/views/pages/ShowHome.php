<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix" style="position: relative; height: 1835.94px;">

        <!-- Single Catagory -->
        <?php while ($row = mysqli_fetch_array($data["Products"])) {
            if($row["trend"] == 1){
        ?>
            <div class="single-products-catagory clearfix" style="position: absolute; left: 0%; top: 0px;">
                <a href="./Detail&id=<?php echo $row["id"] ?> ">
                    <img src="<?php echo $row["image"] ?>" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p><?php echo $row["name"] ?></p>
                        <p>Giá thành: <?php echo number_format($row["price"], 0, '.', '.') ?>VND</p>
                        <h4><?php echo $row["description"] ?></h4>
                    </div>
                </a>
            </div>
        <?php }} ?>
    </div>
</div>