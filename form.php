<!DOCTYPE html>
<html>
<head>
	<title>Form Login Admin</title>
</head>
<body>
	<form action="login.php" method="post">
	<br>
	<br/>
	<h2> ISI FORMULIR</h2>
		<br>
		<br/>
		</tr>
		<tr>
		
		<tr>
		<br>
		<br/>
		Username : <input type="text" name="username" size="20">
		<br>
		<br>
		Password : <input type="password"  name="password" size="20">
		<br>
		<br>
		<br/>
		<td>Jenis Kelamin*</td>
				<td>
					<input type="radio" name="5" value="Pria">Pria
					<input type="radio" name="5" value="Wanita">Wanita
					<input type="radio" name="5" value="Lainnya">Lainnya
				</td>
		</tr>
		<tr>
		<br>
		<br/>
		<td>Kota Asal</td>
				<td>
					<select name="6">
						<option value="DKI JAKARTA">DKI JAKARTA</option>
						<option value="NTB">NTB</option>
						<option value="DIY YOGYAKARTA">DIY YOGYAKARTA</option>
						<option value="BALI">BALI</option>
					</select>
				</td>

		</tr>
		<tr>
		<br>
		<br/>
		<td>Email*</td>
				<td><input type="text" name="7"></td>
		</tr>
		<tr>
		<br>
		<br/>
		<td>
			Tanda(*) harus anda isi
			</td>
		</tr>
		<tr>
		<br>
		<br/>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>