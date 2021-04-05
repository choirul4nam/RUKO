<?php
require "koneksi.php";
$idbarang = @$_REQUEST['idbarang'];
$type = @$_REQUEST['type'];
$j = @$_POST['j'];


if($type == 'hapus'){
    mysqli_query($db, "DELETE FROM transaksi_dummy WHERE id_barang = $idbarang");
} elseif($type == 'ubah'){
    $a = mysqli_query($db, "SELECT * FROM barang WHERE id_barang = $idbarang");
    $b = mysqli_fetch_array($a);
    
    $totall = intval($j) * intval($b['harga']);

    mysqli_query($db,"UPDATE transaksi_dummy SET jumlah= $j,total = $totall WHERE id_barang=$idbarang");
}

header("Location: transaksi.php");