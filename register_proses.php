<?php
require "koneksi.php";


$username = @$_POST['username'];
$email = @$_POST['email'];
$password = @$_POST['password'];
$peran = @$_POST['peran'];

mysqli_query($db, "INSERT INTO kasir (email,username,passwd,peran) values ('$email','$username', '$password','$peran') ");
header("Location: login.php");