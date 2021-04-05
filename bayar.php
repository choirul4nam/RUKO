<?php
require "koneksi.php";
$t = @$_POST['t'];
$bb = @$_POST['b'];
$k = @$_POST['k'];
$trxid = "";
$a = mysqli_query($db,"SELECT MAX(code) as code FROM transaksi");
$b = mysqli_fetch_array($a);
if ($b['code'] == null){
    $trxid = "TRX0001";
} else {
    $subKal =  intval(substr($b['code'], 3));
    if ($subKal < 9) {
        $angka = "000" . $subKal += 1;
    } else if ($subKal >= 9 && $subKal < 99) {
        $angka = "00" . $subKal += 1;
    } else if ($subKal >= 99 && $subKal < 999) {
        $angka = "0" . $subKal += 1;
    } else {
        $angka = $subKal += 1;
    }
    $trxid = "TRX". $angka;
}


mysqli_query($db, "INSERT INTO transaksi VALUES ('','$trxid','',$t,$bb,$k)");
$c = mysqli_query($db,"SELECT * FROM transaksi WHERE code = '$trxid'");
$d = mysqli_fetch_array($c);
$e = mysqli_query($db,"SELECT * FROM transaksi_dummy");
while($f = mysqli_fetch_array($e)){
    
    mysqli_query($db, "INSERT INTO transaksi_detail VALUE ('',$d[id],$f[id_barang],$f[jumlah],$f[total])");
    
}
mysqli_query($db,"DELETE FROM transaksi_dummy");
header("Location: transaksi.php");