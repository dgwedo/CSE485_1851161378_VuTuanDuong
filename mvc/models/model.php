<?php
require('db.php');
class Model
{
  static function openConnect()
  {
    $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
    echo "ket noi thanh cong";
    if (!$connection) {
      die("Có lỗi xảy ra, không thể kết nối tới CSDL. Lỗi: " . mysqli_connect_error());
    }

    return $connection;
  }

  static function closeConnect($connection)
  {
    mysqli_close($connection);
  }
}
