<?php
include 'koneksi.php';
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
        <title>Form Penambahan Prestasi Siswa</title>
        <link rel="stylesheet" type="text/css" href="presis.css">
    </head>
    <div class="header"><h2>Form Penambahan Prestasi Siswa</h2></div>
    <body>
        <form method="post" action="insert.php">
            <table>
                <tr><td>NIS</td><td><input type="text" value="00001" name="nis"></td></tr>
                <tr><td>NAMA</td><td><input type="text" value="Painem" name="nama"></td></tr>
                <tr><td>KELAS</td><td><input type="text" value="X IPS 2" name="kelas"></td></tr>
                <tr><td>JENIS PRESTASI</td><td>
                        <input type="radio" name="jenis_prestasi" value="Non-Akademik" >Non-Akademik
                        <input type="radio" name="jenis_prestasi" value="Akademik" >Akademik
                </td></tr>
                <tr><td>SEMESTER</td><td>
                        <select name="semester">
                            <?php
                            foreach ($semester as $j){
                                echo "<option value='$j' ";
                                echo 'semester'==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                            ?>
                        </select>
                    </td></tr>
                <tr><td>KETERANGAN</td><td><input type="text" value="Juara 3 Lomba Menggambar se-kecamatan" name="keterangan"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">TAMBAH DATA</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
    <div class="footer">
        <b>Anak gembira, Anak berprestasi, Sekolah bergengsi<br>
        SMA JAYA SELAMANYA</b>
    </div>
</html>
<!-- It works Alhamdulillah -->