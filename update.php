<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$no 			= $_POST['no'];
$nis            = $_POST['nis'];
$nama           = $_POST['nama'];
$semester       = $_POST['semester'];
$jenis_prestasi = $_POST['jenis_prestasi'];
$keterangan     = $_POST['keterangan'];
$kelas			= $_POST['kelas'];
// query SQL untuk insert data
$query="UPDATE prestasi_siswa SET nis='$nis',nama='$nama', kelas='$kelas', semester='$semester',jenis_prestasi='$jenis_prestasi',keterangan='$keterangan' where no='$no'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>