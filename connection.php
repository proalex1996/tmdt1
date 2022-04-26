<?php
class Db {
  private static $instance = NULL;

  // private function __construct() {}

  // private function __clone() {}

  public static function getInstance() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "thb1";
    if (!isset(self::$instance)) {
      self::$instance = mysqli_connect($servername, $username, $password, $db);
    }

    if (mysqli_connect_errno()) {
      die("Connection failed: " . mysqli_connect_error()); 
    }

    return self::$instance;
  }
}
//   class Db {
//     private static $instance = NULL;

//     private function __construct() {}

//     private function __clone() {}

//     public static function getInstance() {
//       if (!isset(self::$instance)) {
//         $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
//         self::$instance = new PDO('mysql:host=localhost;dbname=thb1', 'root', '', $pdo_options);
//       }
//       return self::$instance;
//     }
//   }
//   $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

?>