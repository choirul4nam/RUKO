<?php
require "koneksi.php";
session_start();
if (!isset($_SESSION['message'])){
    session_unset(@$_SESSION['message']);
}
$iduser = $_SESSION['user']['iduser'];
$pl = @$_POST['pl'];
$pb = @$_POST['pb'];
$up = @$_POST['up'];

$a =  mysqli_query($db, "SELECT * FROM kasir WHERE id_kasir = ".$iduser);
$b = mysqli_fetch_array($a);
if($pl != $b['passwd']){
    $_SESSION['message'] = "Password lama salah";
    header("Location: fp.php");
}elseif($pl == $pb){
    $_SESSION['message'] = "Password tidak boleh sama seperti lama";
    header("Location: fp.php");
} elseif($pb != $up) {
    $_SESSION['message'] = "Ulangi password tidak sama seperti password baru";
    header("Location: fp.php"); 
} else {
    mysqli_query($db, "UPDATE kasir SET passwd = '$pb' WHERE id_kasir=".$iduser);
    $_SESSION['message'] = "Berhasil";
    header("Location: fp.php"); 
}