<?php 
require "koneksi.php";
$type = $_REQUEST['type'];
$email = @$_POST['e'];
$username = @$_POST['un'];
$password = @$_POST['pw'];
$peran = @$_POST['pr'];
// echo $type;
if($type == "tambah"){
    mysqli_query($db, "INSERT INTO kasir (email,username,passwd,peran) values ('$email','$username', '$password','$peran') ");
    header("location: kasir.php");
} elseif($type == 'update'){
    $id = $_POST['id'];
     mysqli_query($db, "UPDATE kasir set email='$email', username='$username', passwd='$password', peran='$peran' where id_kasir=$id");
    header("location: kasir.php");
} elseif($type == 'hapus'){
    $id = $_GET['id'];
    mysqli_query($db,"DELETE FROM kasir where id_kasir=$id ");
    header("location: kasir.php");
}

