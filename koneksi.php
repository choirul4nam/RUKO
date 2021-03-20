<?php
  $server = "localhost";
  $user = "root";
  $password = "";
  $dbname = "RAKO";

  $db = mysql_connect($server, $user, $password, $dbname);

  if( !$db ){
    die("error: " . mysql_connect_error());
  }
?>