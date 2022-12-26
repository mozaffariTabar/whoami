<?php
  function connect_database() {
    $host = "localhost";
    $db_name = "mozaffari";
    $user_name = "root";
    $password = "";
    // $db_name = "hadimoza_home";
    // $user_name = "hadimoza_home";
    // $password = 'HDdf^4F%$VghdsDF';
    $GLOBALS['con'] = mysqli_connect($host,$user_name,$password,$db_name);
    mysqli_set_charset($GLOBALS['con'],"utf8");
    return mysqli_connect_errno() ? false : true;
  }

  function disconnect_database() {
    mysqli_close($GLOBALS['con']);
  }
?>
