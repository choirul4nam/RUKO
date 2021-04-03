<?php
  $server = "localhost";
  $user = "root";
  $password = "";
  $dbname = "rako";

  $db = mysqli_connect($server, $user, $password, $dbname);

  if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
  }
?>

