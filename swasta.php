<?php
include "koneksi.php";?>
<?php
	$query = "SELECT *FROM sekolah WHERE Status='Swasta'";
	$sql = mysql_query($query, $koneksi);
	$jml_baris = mysql_num_rows($sql);
	
?>
<br>
<br/>
<h1 align="center"> DATA SEKOLAH SWASTA </h1>
<br>
<br/>
<!-- daftar pesan -->
<table border=1 cellspacing=0 width="80%">
	<tr>
		<td>id</td>
		<td>Nama_Sekolah</td>
		<td>NPSN</td>
		<td>BP</td>
		<td>Status</td>
	</tr>
	<?php if($jml_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
	
	<tr>
		<?php while($data = mysql_fetch_object($sql)): ?>
		<td><?php echo $data->id;?></td>
		<td><?php echo $data->Nama_Sekolah;?></td>
		<td><?php echo $data->NPSN;?></td>
		<td><?php echo $data->BP;?></td>
		<td><?php echo $data->Status;?></td>

	</tr>
		<?php endwhile;?>
		<?php endif; ?>
</table>
<br/>