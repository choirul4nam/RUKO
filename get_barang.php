<?php 
require "koneksi.php";
$namabarang = @$_GET['name'];
$a = mysqli_query($db, "SELECT * FROM barang WHERE nama_barang='$namabarang'");
$b = mysqli_fetch_array($a);

echo json_encode($b);