<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1>Hasil</h1>
		<?php  
			$nama = $_POST['nama'];
			$tinggi = $_POST['tinggi'];
			$berat = $_POST['berat'];
			$jk = $_POST['jk'];
		?>
		<form>
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?= $nama?></td>
				</tr>
				<tr>
					<td>Tinggi Badan</td>
					<td>:</td>
					<td><?= $tinggi?></td>
				</tr>
				<tr>
					<td>Berat badan</td>
					<td>:</td>
					<td><?= $berat?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?= $jk?></td>
				</tr>
			</table>
		</form>
		<?php  
		$input = new berat();
		$input->bmi($tinggi, $berat, $jk);
		?>
	</center>
</body>
</html>

<?php  
class berat{
	public function bmi($tinggi, $berat, $jk){
		$a = $berat/($tinggi*$tinggi/10000);
		echo "bmi : ".number_format($a);
		if ($jk=="laki-laki") {
			if ($a<17) {
				echo "<br> Kategori = Under Weight/Kurus";
			}elseif ($a>=17 && $a<=23) {
				echo "<br> Kategori = Normal Weight/Normal";
			}elseif ($a>23 && $a<=27) {
				echo "<br> Kategori = Over Weight/Kegemukan";
			}elseif ($a>27) {
				echo "<br> Kategori = Obesitas";
			}
		} elseif ($jk=="perempuan") {
			if ($a<18) {
				echo "<br> Kategori = Under Weight/Kurus";
			}elseif ($a>=18 && $a<=25) {
				echo "<br> Kategori = Normal Weight/
				Normal";
			}elseif ($a>25 && $a<=27) {
				echo "<br> Kategori = Over Weight/Kegemukan";
			}elseif ($a>27) {
				echo "<br> Kategori = Obesitas";
			}
		}
	}
}
?>