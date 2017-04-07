<?php session_start();
include "koneksi.php";
$numoffrow=$_GET['id'];
$query = "SELECT * FROM sekolah WHERE Id =".$numoffrow; //get the data that will be updated
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
?>
<form action="updatedata.php" method="post">
		id : <input type="text" name="id" value="<?php echo $data['id'];?>">
		<br>
		<br>
		Nama_Sekolah : <input type="text" name="Nama_Sekolah" size="40">
		<br>
		<br>
		NPSN : <input type="text"  name="NPSN" size="40">
		<br>
		<br>
		BP : <input type="text"  name="BP" size="40">
		<br>
		<br>
		Status : <input type="text"  name="Status" size="40">
		<br>
		<br>
		<input type="submit" name="update" value="Ubah Data">
</form>