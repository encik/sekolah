<?php session_start();
include "koneksi.php";
$numoffrow=$_POST['id'];
$Nama_Sekolahbaru=$_POST['Nama_Sekolah'];
$NPSNbaru=$_POST['NPSN'];
$BPbaru=$_POST['BP'];
$Statusbaru=$_POST['Status'];
$query = "UPDATE sekolah SET Nama_Sekolah = '$Nama_Sekolahbaru' , NPSN = '$NPSNbaru' , BP = '$BPbaru' , Status = '$Statusbaru' WHERE id = '$numoffrow'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
	echo "<script>
		alert('Selamat anda berhasil update data');
		window.location.assign('index.php');
	</script>";
}
?>
