<?php
include "koneksi.php";

$id_mhs = $_POST['id_mhs'];
$id_prodi = $_POST['id_prodi'];
$nama = $_POST['nama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mahasiswa VALUES('$id_mhs','$id_prodi','$nama','$alamat')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi tambah data mahasiswa berhasi";
}
echo "<br><a href= 'data_mhs.php'>show data</a><br>";

?>