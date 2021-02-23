<html>
<body onLoad="window.print();">
<link href="aset/css/bootstrap.css" rel="stylesheet" type="text/css">
<?php
include "koneksi.php";



$pinjam			= date("Y-m-d");

$query1="SELECT * FROM  tbl_pinjam where tgl_pinjam='$pinjam' ";

$tampil=mysqli_query($konek,$query1) or die(mysql_error());
$i = 0;
$denda1=500;
	
?>
<h2>Laporan Pengunjung</h2>
<br>
<h5>Peminjaman Hari ini</h5>
	<table style="width: 100%; font-size: 10px"  class="table table-condensed"  border="1px">
		<tr>
			<th>No</th>
      <th >Nama</th>
			<th >Judul Buku</th>
			<th >Tgl. Pinjam</th>
      <th >Tgl. Kembali</th>
      <th >Tgl Dikembalikan</th>
      <th >Denda</th>
      <th >Status</th>
		</tr>
    
 			  <?php
            while($data=mysqli_fetch_array($tampil))        

       {
          $i++; 
        ?>
                  <tbody>
                    <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['kode']; ?></td>
                    <td><?php echo $data['tgl_pinjam']; ?></td>
                    <td><?php echo $data['tgl_kembali']; ?></td>
                    <td><?php echo $data['tgl_dikembalikan']; ?></td>
                    <td><?php echo $data['denda']; ?></td>
                    <td><?php echo $data['status']; ?></td>
          <?php
         }
        
         ?>
                    </tbody>

</table>