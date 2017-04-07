<?php
// Make a MySQL Connection
	$link = mysql_connect('localhost', 'root', '');
	if (!$link) 
  	{   die('Could not connect: ' . mysql_error());  }
	
mysql_select_db($link,'snmptn');

$query = " select *from data_siswa"; 	 
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result)){
	echo $row['nisn']. " - ". $row['nama'];
	echo "<br />";
}
?>
