<?php 
require "koneksi.php";
$type = $_REQUEST['type'];
$namabarang = @$_POST['nb'];
$deskripi = @$_POST['deskripsi'];
$harga = @$_POST['harga'];
$kategori = @$_POST['kategori'];

// echo $type;
if($type == "tambah"){
    mysqli_query($db, "INSERT INTO barang (nama_barang,deskripsi,harga,id_kategori) VALUES ('$namabarang','$deskripi','$harga','$kategori')");
    header("location: barang.php");
} elseif($type == 'update'){
    $id = $_POST['id'];
    mysqli_query($db, "UPDATE barang SET nama_barang ='$namabarang', deskripsi='$deskripi', harga='$harga',  id_kategori='$kategori' WHERE id_barang = $id");
    header("location: barang.php");
} elseif($type == 'hapus'){
    $id = $_GET['id'];
    mysqli_query($db,"DELETE FROM barang WHERE id_barang = $id");
    header("location: barang.php");
}

