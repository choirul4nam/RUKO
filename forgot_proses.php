<?php
require "koneksi.php";

$pl = @$_POST['pl'];
$pb = @$_POST['pb'];
$up = @$_POST['up'];
$e = @$_POST['e'];


$a =  mysqli_query($db, "SELECT * FROM kasir WHERE email = '$e'");
$b = mysqli_fetch_array($a);
if($pl != $b['passwd']){
    $_SESSION['message'] = "Password lama salah";
    header("Location: lp.php");
}elseif($pl == $pb){
    $_SESSION['message'] = "Password tidak boleh sama seperti lama";
    header("Location: lp.php");
} elseif($pb != $up) {
    $_SESSION['message'] = "Ulangi password tidak sama seperti password baru";
    header("Location: lp.php"); 
} else {
    mysqli_query($db, "UPDATE kasir SET passwd = '$pb' WHERE email='$e'");
    $_SESSION['message'] = "Berhasil";
    header("Location: login.php"); 
}