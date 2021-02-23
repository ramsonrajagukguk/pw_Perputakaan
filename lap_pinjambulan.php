
<link href="aset/css/css.css" rel="stylesheet" type="text/css">
<?php
include "koneksi.php";
$i = 0;
$pinjam	= date("Y-m-d");
$bulan="SELECT * FROM  tbl_pinjam WHERE MID(tgl_pinjam, 6, 2) = MONTH(NOW())";
$tampil=mysqli_query($konek,$bulan) or die(mysql_error());
?>

<h3 align='center'>Perpustakkan AMIK MEDICOM</h3>
<h5 align='center'>Peminjaman Bulan Ini</h5>
<table class="c">
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
  <script>
		window.print();
	</script>