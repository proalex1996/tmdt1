<?php
class LapTopController
{
  public function home()
  {
    $conn = new Db();
    $conn = $conn->getInstance();
 
    $sql = "SELECT *  FROM sanpham WHERE maloai = 2 ";
    $result = $conn->query($sql);
    $params = $result->fetch_assoc();
    require_once('views/laptop/index.php');
  }

  
}
?>
