<?php
class TabletController
{
  public function home()
  {
    $conn = new Db();
    $conn = $conn->getInstance();
 
    $sql = "SELECT masp,tensp, giaban  FROM sanpham WHERE maloai = 3 ";
    $result = $conn->query($sql);
    $params = $result->fetch_assoc();
    require_once('views/tablets/index.php');
  }

  
}
?>
