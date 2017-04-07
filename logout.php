<?php 
session_start();
session_destroy();
echo "<script>
	alert('Selamat, anda berhasil logout');
	window.location.assign('form.php');
</script>";
?>