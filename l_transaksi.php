
<?php
include "koneksi.php";
$query1="SELECT * FROM  tbl_pinjam where status='Pinjam'";

$tampil=mysqli_query($konek,$query1) or die(mysql_error());
//$i = 0;
//$denda1=500;
	
?>

<br>
<table width="100%"  border=1 class="table table-condensed">
		<tr>
			<th>No</th>
      <th >Nama</th>
			<th >Judul Buku</th>
			<th >Tgl. Pinjam</th>
      <th >Tgl. Kembali</th>
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
                   
                    <td><?php echo $data['status']; ?></td>
          <?php
         }
         
         ?>
                    </tbody>

</table>