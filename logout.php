<?php
include "koneksi.php";
session_start();
session_destroy();
mysqli_query($db,"DELETE FROM transaksi_dummy");
header("location:login.php");

?>