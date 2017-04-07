<?php session_start();
include "koneksi.php";
$Nama_Sekolah=$_POST['Nama_Sekolah'];
$NPSN=$_POST['NPSN'];
$BP=$_POST['BP'];
$Status=$_POST['Status'];
$query=mysql_query("insert into sekolah (Nama_Sekolah,NPSN,BP,Status) values('$Nama_Sekolah','$NPSN','$BP','$Status')");
echo "<script>
		alert('Selamat anda berhasil menambahkan data');
		window.location.assign('index.php');
	</script>";
?>