<?php
include "koneksi.php";

$xnim = $_POST['nim'];
$xnama = $_POST['nama'];
$xalamat = $_POST['alamat'];
$xgroup = $_POST['group'];
$xjk = $_POST['jk'];
$xagama = $_POST['agama'];
$xtmp_lahir = $_POST['tmp_lahir'];
$xhari = $_POST['hari'];
$xbulan = $_POST['bulan'];
$xtahun = '$xhari/$xbulan/$xtahun';
$xtgllahir = $_POST['tgl_lahir'];
$xanggota = $_POST['anggota'];

$input = "INSERT INTO tbl_anggota VALUES ('$xnim','$xnama','$xalamat','$xgroup','$xjk','$xagama','$xtmp_lahir','$xtgllahir','$xanggota')";
$hasil = mysqli_query($konek, $input);

if ($hasil) {
	// lakukan redirect

	header("location:index.php");
} else {
	echo "Input Data Tamu Gagal";
}
