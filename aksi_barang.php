<?php 
require "koneksi.php";
$type = $_REQUEST['type'];
$namabarang = @$_POST['nb'];
$deskripi = @$_POST['deskripsi'];
$harga = @$_POST['harga'];
$stok = @$_POST['stock'];
$kategori = @$_POST['kategori'];

// echo $type;
if($type == "tambah"){
    mysqli_query($db, "INSERT INTO barang (nama_barang,deskripsi,harga,stok,id_kategori) VALUES ('$namabarang','$deskripi','$harga','$stok','$kategori')");
    header("location: index.php");
} elseif($type == 'update'){
    $id = $_POST['id'];
    mysqli_query($db, "UPDATE barang SET nama_barang ='$namabarang', deskripsi='$deskripi', harga='$harga', stok='$stok', id_kategori='$kategori' WHERE id_barang = $id");
    header("location: index.php");
} elseif($type == 'hapus'){
    $id = $_GET['id'];
    mysqli_query($db,"DELETE FROM barang WHERE id_barang = $id");
    header("location: index.php");
}

