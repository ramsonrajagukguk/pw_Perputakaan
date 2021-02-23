<?php

include "koneksi.php";
$id=$_GET['id'];

//$pecah			= explode("-",$tgl_pinjam);
//$next_7_hari	= mktime(0,0,0,$pecah[1],$pecah[0]+7,$pecah[2]);
//$hari_next		= date("Y-m-d", $next_7_hari);

$pinjam			= date("Y-m-d");
$tuju_hari		= mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali		= date("Y-m-d", $tuju_hari);  




$tambahari="UPDATE tbl_pinjam SET  tgl_kembali='$kembali' WHERE id='$id'";
$next=mysqli_query($konek,$tambahari) or die ("Gagal update".mysql_error());


if ($next){ 
	// lakukan redirect
	header("location:l_kembali.php");
}
else{
echo "Input Data Tamu Gagal";
}


?>