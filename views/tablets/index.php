<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Máy tính bảng</h2>
                    <span>Tận hưởng không gian làm việc</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Latest Products</h2>
                    <span>Check out all of our products.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
           <?php foreach($params as $param) {
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()){
               ?>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="?controller=details&action=home&productID=<?php echo $row['masp']?>"><i class="fa fa-eye"></i></a></li>
                                    <!-- <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li> -->
                                </ul>
                            </div>
                            <img src="assets/images/product/<?php echo $row['hinhanh'] ?>" alt="" height="234px">
                        </div>
                        <div class="down-content">
                            <h4> <?=  $row['tensp'] ?></h4>
                            <span>
                            <?= number_format( $row['giaban'])?> VND
                            </span>
                            <!-- <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <?php }}} ?>
           
            <!-- <div class="col-lg-12">
                <div class="pagination">
                    <ul>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">></a>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</section>
</div>
