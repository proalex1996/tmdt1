
<?php
class CartController
{
    
  public function home()
  {
   $productID = 0;
  

    $conn = new Db();
    
    $conn = $conn->getInstance();
    $sql = "SELECT *  FROM sanpham,temp WHERE masp =  temp.id";
    
    $result = $conn->query($sql);
    $params = $result->fetch_assoc();
    // if ($result->num_rows > 0) {
    //   while($row = $result->fetch_assoc()) {
    //    echo "ten: " . $row["tensp"]. " - gia: " . $row["giaban"]. "<br>";die;
    //   }
    // } else {
    //  echo "0 results";die;
    // }
    //$productModel = new Products($params['masp'],$params['tensp'],$params['giaban']);
    //echo $productModel::$id;exit;
    require_once('views/cart/index.php');
  }

  public function save()
  {
   $productID = 0;
  
    $ten = $_POST['ten'];
    $diachi = $_POST['diachi'];
    $std = $_POST['std'];
    $masp = $_POST['masp'];
    $tien = $_POST['tien'];
    $conn = new Db();
    
    $conn = $conn->getInstance();
    $sql = "INSERT INTO dh(id,tenkh,diachi,std,masp,tien) VALUES ('', '$ten','$diachi','$std','$masp','$tien')";
    $result = $conn->query($sql);
    $sql1 = "DELETE FROM `temp` WHERE id = '$masp'";
    $result1 = $conn->query($sql1);
    header("Location:".$_SERVER['HTTP_REFERER']);
  }

  
}
?>