<?php
class DetailController
{
  public function home()
  {
    $conn = new Db();
    $conn = $conn->getInstance();
    $sql = "SELECT *  FROM sanpham WHERE masp = " . $_GET['productID'] . "";
    $result = $conn->query($sql);
    $params = $result->fetch_assoc();
    require_once('views/details/index.php');
  }
  public function save()
  {
    
    $conn = new Db();
    $conn = $conn->getInstance();
    $sql = "INSERT INTO temp(id,sl) VALUE(" . $_POST['custId'] . "," . $_POST['quantity'] . ")";
    $result = $conn->query($sql);
    header("Location:".$_SERVER['HTTP_REFERER']);
  }
}
