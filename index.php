<!DOCTYPE html>
<html>
<head>
	<title>E-RAPOR PRESTASI SISWA</title>
	<link rel="stylesheet" type="text/css" href="presis.css">
</head>
<body>
	<div class="header"><h2>List Prestasi Siswa</h2></div>

	<table border="1">
		<tr><th>NAMA</th><th>NIS</th><th>KELAS</th><th>SEMESTER PENDAPATAN PRESTASI</th><th>JENIS PRESTASI</th><th>KETERANGAN</th><th>ACTION</th></tr>
		<?php
		include 'koneksi.php';
		$prestasi_siswa = mysqli_query($koneksi, "SELECT * from prestasi_siswa order by nama");
		$no = 1;
			//<td>" . $row['no'] . "</td>
		foreach ($prestasi_siswa as $row)
		{
			$jenis_prestasi = $row['jenis_prestasi'] == 'Akademik' ? 'Akademik' : 'Non-Akademik';
			echo "<tr>
			<td>" . $row['nama'] . "</td>
			<td>" . $row['nis'] . "</td>
			<td>" . $row['kelas'] . "</td>
			<td>" . $row['semester'] ."</td>
			<td>" . $row['jenis_prestasi'] ."</td>
			<td>" . $row['keterangan'] ."</td>
			<td><a href='form-edit.php?no=$row[no]'>Ubah</a>
				<a href='delete.php?no=$row[no]'>Hapus</a>
			</td>
				</tr>";
		}
		?>
	</table>
	<!-- <a href="form-insert.php">Tambah Prestasi Siswa</a><br><br> -->
	<br>
	<a href="form-insert.php"><button type="button">Tambah Prestasi Siswa</button></a><br><br> <!-- this one works -->
	<div class="footer">
		<b>Anak gembira, Anak berprestasi, Sekolah bergengsi<br>
		SMA JAYA SELAMANYA</b>
	</div>
</body>
</html>