<?php
include 'koneksi.php';
$no         = $_GET['no'];
$prestasi_siswa  = mysqli_query($koneksi, "select * from prestasi_siswa where no='$no'");
$row        = mysqli_fetch_array($prestasi_siswa);
// membuat data semester menjadi dinamis dalam bentuk array
$semester    = array('SEMESTER 1','SEMESTER 2','SEMESTER 3', 'SEMESTER 4', 'SEMESTER 5', 'SEMESTER 6');
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Pengubahan Prestasi Siswa</title>
        <link rel="stylesheet" type="text/css" href="presis.css">
    </head>
    <div class="header"><h2>Form Pengubahan Prestasi Siswa</h2></div>
    <body>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['no'];?>" name="no">
            <table>
                <tr><td>NIS</td><td><input type="text" value="<?php echo $row['nis'];?>" name="nis"></td></tr>
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                <tr><td>KELAS</td><td><input type="text" value="<?php echo $row['kelas'];?>" name="kelas"></td></tr>
                <tr><td>JENIS PRESTASI</td><td>
                        <input type="radio" name="jenis_prestasi" value="Non-Akademik" <?php echo active_radio_button("Non-Akademik", $row['jenis_prestasi'])?>>Non-Akademik
                        <input type="radio" name="jenis_prestasi" value="Akademik" <?php echo active_radio_button("Akademik", $row['jenis_prestasi'])?>>Akademik
                    </td></tr>
                <tr><td>SEMESTER <!-- <?php echo $row['semester'];?> --></td><td>
                        <select name="semester">
                            <?php
                            foreach ($semester as $j){
                                echo "<option value='$j' ";
                                echo $row['semester']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                            ?>
                        </select>
                    </td></tr>
                <tr><td>KETERANGAN</td><td><input type="text" value="<?php echo $row['keterangan'];?>" name="keterangan"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
    <div class="footer">
        <b>Anak gembira, Anak berprestasi, Sekolah bergengsi<br>
        SMA JAYA SELAMANYA</b>
    </div>
</html>