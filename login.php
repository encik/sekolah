<?php 
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
$query=mysql_query("select *from admin where username='$username' and password='$password' ");
$cek=mysql_num_rows($query);
if ($cek) {
	# code...
	$_SESSION['username']=$username;
	echo "<script>
		alert('Selamat anda berhasil login');
		window.location.assign('index.php');
	</script>";
	?>
	<?php
}
else{
	?>Anda gagal login, silahkan <a href="form.php">halaman login<a><?php
	echo mysql_error();
}
