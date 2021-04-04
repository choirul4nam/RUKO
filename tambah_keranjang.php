<?php 
session_start();
if(isset($_SESSION['barang'])){
    $_SESSION['barang'].=','.$_GET['idbarang'];
} else {
    $_SESSION['barang']=$_GET['idbarang'];
}

// session_destroy();
// $_SESSION['barang'] = $_GET['idbarang'];

header("location: transaksi.php");