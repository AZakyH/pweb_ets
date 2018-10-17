<?php
include 'koneksi.php';
// menyimpan data kedalam variabel

$nama           = $_POST['nama'];
$nis            = $_POST['nis'];
$kelas        	= $_POST['kelas'];
$semester		= $_POST['semester'];
$jenis_prestasi = $_POST['jenis_prestasi'];
$keterangan     = $_POST['keterangan'];

// query SQL untuk insert data

$sql = "INSERT INTO prestasi_siswa (nama, nis, kelas, semester, jenis_prestasi, keterangan)
VALUES ('$nama', '$nis', '$kelas', '$semester', '$jenis_prestasi', '$keterangan')";

if ($koneksi->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
// mengalihkan ke halaman index.php
header("location:index.php");
?>
<!-- It works Alhamdulillah -->