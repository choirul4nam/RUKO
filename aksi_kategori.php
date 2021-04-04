<?php 
require "koneksi.php";
$type = $_REQUEST['type'];
$namakategori = @$_POST['nk'];
// echo $type;
if($type == "tambah"){
    mysqli_query($db, "INSERT INTO kategori (nama_kategori) values ('$namakategori')");
    header("location: index.php");
} elseif($type == 'update'){
    $id = $_POST['id'];
     mysqli_query($db, "UPDATE kategori SET nama_kategori='$namakategori' where id_kategori= $id ");
    header("location: index.php");
} elseif($type == 'hapus'){
    $id = $_GET['id'];
    mysqli_query($db,"DELETE FROM kategori WHERE id_kategori = $id");
    header("location: index.php");
}

