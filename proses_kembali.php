<?php
include "koneksi.php";

$id	=$_GET['id'];
$denda=$_POST['xdenda'];
$dikembalikan=$_POST['xdikembali'];
$kode=$_POST['xkode'];
$ket="Terima Kasih ";


$query1="UPDATE tbl_pinjam SET  status='Kembali', tgl_dikembalikan='$dikembalikan', denda='$denda',ket='$ket' WHERE id='$id'";
//$query1="DELETE FROM tbl_pinjam  WHERE id='$id'";
$hasil=mysqli_query($konek,$query1) or die ("Gagal update".mysql_error());
//$uj=mysqli_query("UPDATE tbl_buku SET jumlah_buku=(jumlah_buku+1) WHERE judul='$judul'")or die ("Gagal update".mysql_error());

$result ="UPDATE tbl_buku SET jumlah =jumlah + 1 where kode='$kode'";
$bk1 = mysqli_query($konek, $result);

if ($hasil){ 
	// lakukan redirect
	header("location:l_kembali.php");
}
else{
echo "Input Data Tamu Gagal";
}
