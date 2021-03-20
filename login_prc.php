<?php 
session_start();
include "koneksi.php";
$email = $_POST['email'];
$pass = $_POST['password'];
$pas = md5($pass);
$query = mysql_query("select * from kasir where email='$email' and password='$pas'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['kasir']=$email;
	echo "<script>
		alert('Welcome Home, $username');
	</script>";
}else{
	header("location:login.php?page_error=1")or die(mysql_error());

}
?>
<meta http-equiv="refresh" content="1;url=index.php"/>