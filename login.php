<?php
    session_start();
    if($_SESSION['kasir']){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Kasir</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form onsubmit="event.preventDefault()" class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> 
                    <input type="text" name="email" placeholder="Email"> 
                    <input type="password" name="passwd" placeholder="Password"> 
                    <a class="forgot text-muted" href="register.php">belum punya akun? daftar</a> 
                    <input type="submit" name="" value="Login" href="#">
                    <div class="col-md-12">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>