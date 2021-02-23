<?php
include "koneksi.php";

$nama			= $_POST['xnama'];
$kode			= $_POST['xbuku'];
$tgl_pinjam		= $_POST['xpinjam'];
$tgl_kembali	= $_POST['xkembali'];
$denda			= 0;
$ket			= $_POST['xket'];

$jlhkurang		= 1;


if ($nama == "") {
	echo "<script>alert('Pilih peminjamnya terlebih dahulu');</script>";
	echo "<meta http-equiv='refresh' content='0;f_peminjaman.php'>";
} elseif ($kode == "") {
	echo "<script>alert('Pilih bukunya terlebih dahulu');</script>";
	echo "<meta http-equiv='refresh' content='0;f_peminjaman.php'>";
} else {


	$dt = ("select * from tbl_buku where kode='$kode'");
	$stok = mysqli_query($konek, $dt);
	$j = mysqli_fetch_array($stok);
	$sisa = $j['jumlah'];
	if ($sisa == 0) {
		echo "<script>alert('Stok Buku Habis');</script>";
		echo "<meta http-equiv='refresh' content='0;f_peminjaman.php '>";
	} else {
		$pinjam = ("SELECT COUNT(nim) from tbl_pinjam WHERE nim='$nama' AND kode='$kode' AND status='Pinjam' GROUP BY nim");
		$data = mysqli_query($konek, $pinjam);
		$num = mysqli_num_rows($data);

		if ($num > 0) {
			echo "<script>alert('Peminjam tersebut masih mempunyai peminjaman yang belum dikembalikan');</script>";
			echo "<meta http-equiv='refresh' content='0;f_peminjaman.php '>";
		} else {

			$cekjlh = "SELECT * FROM tbl_pinjam WHERE nim='$nama' ";
			$hjlh = mysqli_query($konek, $cekjlh);
			$count = mysqli_num_rows($hjlh);
			if ($count >= 1) {
				echo "<script>alert('Sudah Meminjam 2 Buku ');</script>";
				echo "<meta http-equiv='refresh' content='0;f_peminjaman.php '>";
			} else {

				$sql = "INSERT INTO tbl_pinjam VALUES (null,'$nama', '$kode', '$tgl_pinjam', '$tgl_kembali','','$denda','Pinjam', '$ket')";
				$hasil = mysqli_query($konek, $sql);

				$result = "UPDATE tbl_buku SET jumlah =jumlah - 1 where kode='$kode'";
				$bk1 = mysqli_query($konek, $result);
			}
			if ($hasil && $bk1) {
				// lakukan redirect
				echo "<script>alert('Transaksi Sukses');</script>";
				//echo "<meta http-equiv='refresh' content='0;f_peminjaman.php'>";
			} else {
				echo "Input Data Peminjaman Buku Gagal";
			}
		}
	}
}
