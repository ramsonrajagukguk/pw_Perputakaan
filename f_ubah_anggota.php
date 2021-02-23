<?php
// koneksi ke database
include "koneksi.php";

// ambil variabel yang dikirim dari form
$xnim  = $_POST['nim'];
$xnama = $_POST['nama'];
$xalamat = $_POST['alamat'];
$xgroup = $_POST['group'];
$xjk = $_POST['jk'];
$xagama = $_POST['agama'];
$xtmp_lahir = $_POST['tmp_lahir'];
$xtgllahir = $_POST['tgl_lahir'];
$xanggota = $_POST['anggota'];

$input = ("UPDATE tbl_anggota SET  nama='$xnama', alamat='$xalamat', group='$xgroup' WHERE nim='$xnim'");
$hasil = mysqli_query($konek, $input);

// apabila query untuk menginput data benar
if ($hasil) {

	// lakukan redirect
	header("location:data_anggota.php");
} else {
	echo "Input Data Tamu Gagal";
}
