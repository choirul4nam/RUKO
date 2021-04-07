<?php 
session_start();
require "koneksi.php";
$email = @$_POST['email'];
$pass = @$_POST['password'];

$a = mysqli_query($db, "SELECT * FROM kasir WHERE email='$email' and passwd='$pass'");
$b = mysqli_fetch_array($a);
if(mysqli_num_rows($a) != 0){
    $_SESSION['user'] = array("iduser"=>$b['id_kasir'],"email"=>$email,"password"=>$pass,"peran"=>$b['peran']);
    if($b['peran'] == 'admin'){
        header("Location: index.php");
    } else {
        header("Location: transaksi.php");
    }
    
} else {
    header("Location: login.php");
}