<?php
  require_once('db.php');
  if (isset($_POST)) {
    connect_database();
    $result = mysqli_query($GLOBALS['con'], 'CALL sp_loadProducts()');
    $temp = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($temp,$row);
        }
    }
    disconnect_database();
    echo (json_encode($temp));
  }
?>