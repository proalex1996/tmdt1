<div class="page-heading" id="top">
<div id="toast"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="inner-content">
          <h2>Smart World</h2>
          <span>Thiết bị thông minh</span>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="section" id="product">
  <form method = 'post' action = '?controller=details&action=save' >
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="left-images">
              <img src="assets/images/single-product-01.jpg" alt="">
              <img src="assets/images/single-product-02.jpg" alt="">
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="right-content">
              <h4><?= $params['tensp'] ?></h4>
              <span class="price"><?= number_format($params['giaban']) ?> VND</span>
              <!-- <span>?php echo $params['chitiet'] ?></span> -->
              <div class="quote">
                <i class="fa fa-quote-left"></i>
                <p><?php echo $params['chitiet'] ?></p>
              </div>
              <div class="quantity-content">
                <div class="left-content">
                  <h6>No. of Orders</h6>
                </div>
                <div class="right-content">
                  <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus" onclick="minus1()" id='minus'><input type="number" step="1" min="1" max="" name="quantity" id='quantity' value="1"
                     title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input onclick="plus1()" id='plus' type="button" value="+" class="plus">
                  </div>
                </div>
              </div>
              <div class="total">
                <h4>Total: <?= number_format($params['giaban']) ?> VND</h4>
              </div>
              <input type="hidden" id="custId" name="custId" value="<?= $params['masp'] ?>">
            <div class="total">
              <div class="main-border-button"><input name="submit"  type='submit'   onclick="showToast()" value="Add To Cart"></input></div>
            </div>
            </div>
          </div>
        </div>
      </div>
  </form>
 
</section>
<script>
  function minus1() {
    if (document.getElementById('quantity').value > 0) {
      document.getElementById('quantity').value = document.getElementById('quantity').value - 1
    }
  }

  function plus1() {
    if (document.getElementById('quantity').value < <?= $params['soluong'] ?>) {
      document.getElementById('quantity').value = ++document.getElementById('quantity').value
    }
  }

  function showToast() {
    toast({
      title: "Thành công!",
      message: "Đã thêm vào giỏ hàng",
      type: "success",
      duration: 5000
    });

  }
</script>