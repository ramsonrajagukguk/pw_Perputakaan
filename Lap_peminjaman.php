<?php
include "koneksi.php";
include "menu.php";

$pinjam			= date("Y-m-d");
$query1="SELECT * FROM  tbl_pinjam where tgl_pinjam='$pinjam'";

$tampil=mysqli_query($konek,$query1) or die(mysql_error());
$i = 0;
//$denda1=500;
	
?>
<h3>Laporan Peminjaman Buku</h3>
<div>
<button class="btn btn-primary" type="button" onclick="window.open('print_transaksi.php', '_blank')">Cetak Hari Ini</button> 
<button class="btn btn-primary" type="button" onclick="window.open('lap_pinjambulan.php', '_blank')")>Cetak Bulan Ini</button> 
</div>
<br>
<h5>Peminjaman Hari ini</h5>
	<table style="width: 100%; font-size: 10px"  class="table table-condensed">
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

<?php
$i = 0;
$pinjam	= date("Y-m-d");
$bulan="SELECT * FROM  tbl_pinjam WHERE MID(tgl_pinjam, 6, 2) = MONTH(NOW())";
$tampil=mysqli_query($konek,$bulan) or die(mysql_error());
?>

<h5>Peminjaman Bulan Ini</h5>
	<table style="width: 100%; font-size: 10px"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="25%">Nama Peminjam</th>
			<th width="35%">Judul Buku</th>
			<th width="10%">Tanggal Pinjam</th>
			<th width="10%">Tanggal Kembali</th>
      <th width="10%">Tgl Dikembalikan</th>
			<th width="10%">Denda</th>
			<th width="5%">Status</th>
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