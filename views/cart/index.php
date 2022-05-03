<?php

if ($params != null) {
?>

  <div class=" container-fluid my-5 ">
    <div class="row justify-content-center ">
      <div class="col-xl-10">
        <div class="card shadow-lg ">
          <div class="row p-2 mt-3 justify-content-between mx-sm-2">

            <div class="col">
              <div class="row justify-content-start ">
                <div class="col">
                  <img class="irc_mi img-fluid cursor-pointer " src="assets/images/logo.png">
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-around">
            <div class="col-md-5">
              <div class="card border-0">
                <div class="card-header pb-0">
                  <h2 class="card-title space ">Checkout</h2>
                </div>
                <div class="card-body">
                  <div class="row ">
                    <div class="col">
                      <p class="text-muted mb-2">Chi tiết thanh toán</p>
                      <hr class="mt-0">
                    </div>
                  </div>
                  <form method="post" action="?controller=cart&action=save">
                    <div class="form-group">
                      <label for="NAME" class="small text-muted mb-1">Họ và tên</label>
                      <input type="text" class="form-control form-control-sm" name="ten" id="ten" aria-describedby="helpId" placeholder="Họ và Tên" required>
                    </div>
                    <div class="form-group">
                      <label for="daichi" class="small text-muted mb-1">Địa Chỉ</label>
                      <input type="text" class="form-control form-control-sm" name="diachi" id="diachi" aria-describedby="helpId" placeholder="Địa Chỉ" required>
                    </div>
                    <div class="form-group">
                      <label for="std" class="small text-muted mb-1">Số Điện Thoại</label>
                      <input type="number" maxlength="10" class="form-control form-control-sm" name="std" id="std" aria-describedby="helpId" placeholder="Số điện thoại" required>
                    </div>

                    <div class="row mb-md-5">
                      <div class="col">
                        <button type="submit" name="muahang" id="muahang" class="btn  btn-lg btn-block ">Mua hàng</button>
                      </div>
                    </div>

                </div>
              </div>
            </div>






            <div class="col-md-5">
              <div class="card border-0 ">
                <div class="card-header card-2">
                  <p class="card-text text-muted mt-md-4  mb-2 space">Đơn hàng của bạn</p>
                  <hr class="my-2">
                </div>
                <div class="card-body pt-0">
                  <div class="row  justify-content-between">
                    <div class="col-auto col-md-7">
                      <div class="media flex-column flex-sm-row">
                        <img class=" img-fluid" src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                        <div class="media-body  my-auto">
                          <div class="row ">
                            <div class="col-auto">
                              <p class="mb-0"><b><?= $params['tensp'] ?></b></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=" pl-0 flex-sm-col col-auto  my-auto">
                      <p class="boxed-1"><?= $params['sl'] ?></p>
                    </div>
                    <div class=" pl-0 flex-sm-col col-auto  my-auto ">
                      <p><b><?= number_format($params['giaban'] * $params['sl']) ?> VND</b></p>
                    </div>
                  </div>
                  <hr class="my-2">
                  <input type="hidden" id="masp" name="masp" value="<?= $params['masp'] ?>">
                  <input type="hidden" id="masp" name='tien' value="<?= $params['giaban'] * $params['sl'] + 30000 ?>">
                  <div class="row ">
                    <div class="col">
                      <div class="row justify-content-between">
                        <div class="col-4">
                          <p class="mb-1"><b>Đơn giá</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                          <p class="mb-1"><b><?= number_format($params['giaban'] * $params['sl']) ?> VND</b></p>
                        </div>
                      </div>
                      <div class="row justify-content-between">
                        <div class="col">
                          <p class="mb-1"><b>Phí giao hàng</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                          <p class="mb-1"><b>30.000 VND</b></p>
                        </div>
                      </div>
                      <div class="row justify-content-between">
                        <div class="col-4">
                          <p><b>Tổng cộng</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                          <p class="mb-1"><b><?= $total = number_format($params['giaban'] * $params['sl'] + 30000) ?> VND</b></p>
                        </div>
                      </div>
                      <hr class="my-0">
                    </div>
                  </div>

                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function alert() {
      if (document.getElementById('ten') == '' || document.getElementById('diachi') == '' || document.getElementById('std') == '') {
        alert('vui lòng điền đầy đủ thông tin');
      }
    }
  </script>
<?php } else {





?>
  <div class="container-fluid ">
    <div class="row">

      <div class="col-md-12">

        <div class="card">
          </div>
          <div class="card-body cart">
            <div class="col-sm-12 empty-cart-cls text-center">
              <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
              <h3><strong>Giỏ hàng trống</strong></h3>
              <h4></h4>
              <a href="?controller=home&action=home" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Tiếp tục mua hàng</a>


            </div>
          </div>
        </div>


      </div>

    </div>

  </div><?php } ?>