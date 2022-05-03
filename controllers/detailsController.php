<?php
class DetailController
{
  public function home()
  {
    $conn = new Db();
    $conn = $conn->getInstance();
 
    $sql = "SELECT masp,tensp, giaban  FROM sanpham WHERE maloai = 1 ";
    $result = $conn->query($sql);
    $params = $result->fetch_assoc();
    // if ($result->num_rows > 0) {
    //   while($row = $result->fetch_assoc()) {
    //    echo "ten: " . $row["tensp"]. " - gia: " . $row["giaban"]. "<br>";
    //   }
    // } else {
    //  echo "0 results";
    // }
    //$productModel = new Products($params['masp'],$params['tensp'],$params['giaban']);
    //echo $productModel::$id;exit;
    require_once('views/details/index.php');
  }

  
}
?>
