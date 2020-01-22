<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="OOP.php" method="POST">
	<center><h1>Menghitung Berat Badan</h1></center>
	<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Tinggi Badan</td>
		<td>:</td>
		<td><input type="numer" name="tinggi" required></td>
	</tr>
	<tr>
		<td>Berat Badan</td>
		<td>:</td>
		<td><input type="number" name="berat" required></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><select name="jk">
			<option value="laki-laki">Laki-laki</option>
			<option value="perempuanr">Perempuan</option> 
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit"></td>
	</tr>
	</table>
	</form>
</body>
</html>