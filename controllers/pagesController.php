<?php
  class PagesController {
    public function home() {
      $first_name = 'Trần';
      $last_name  = 'Tính';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>


