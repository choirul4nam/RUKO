<?php 
require "koneksi.php";
$idbrang = @$_POST['idbrang'];
$namabarang = @$_POST['nb'];
$jumlah = @$_POST['j'];
$total = @$_POST['t'];
$a = mysqli_query($db, "SELECT * FROM transaksi_dummy WHERE id_barang=$idbrang");
if(mysqli_num_rows($a) == 0){
    echo 'aku disini';
    mysqli_query($db, "INSERT INTO transaksi_dummy VALUES ($idbrang,'$namabarang',$jumlah,$total)");
} else {
    
    $b = mysqli_fetch_array($a);
    $jj = intval($b['jumlah']) + 1;
    $totall = intval($b['total']) + intval($total);

    mysqli_query($db,"UPDATE transaksi_dummy SET jumlah= $jj,total = $totall WHERE id_barang=$idbrang");
}
header("Location: transaksi.php");