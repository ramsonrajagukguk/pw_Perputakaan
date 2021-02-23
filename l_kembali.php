
<?php
include "koneksi.php";
include "menu.php";
$query1="SELECT * FROM  tbl_pinjam tbl_pinjam where status='Pinjam'";

$tampil=mysqli_query($konek,$query1) or die(mysql_error());
$i = 0;
$denda1=500;
	
?>

<h3>Pengembalian Buku</h3>

<table width="100%"  class="table table-condensed">
		<tr>
			<th>No</th>
      <th width="20%">Nama</th>
			<th width="20%">Judul Buku</th>
			<th width="10%">Tgl. Pinjam</th>
      <th width="10%">Tgl. Kembali</th>
      <th width="10%">Terlambat</th>
			<th width="10%">Status</th>
			<th width="37%">Control</th>
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
                    <td>
                                  <?php



                        $tgl_dateline=$data['tgl_kembali'];
                        $tgl_kembali=date('Y-m-d');
                        $lambat=strtotime($tgl_kembali) - strtotime($tgl_dateline);
                        $lambat = $lambat /86400;

                        $denda=$lambat*$denda1;
                        if ($lambat>0) {
                          echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
                        
                        }
                        else {echo "-";
                          $lambat = 0;
                          $denda = 0;
                         
                        }
                      ?>





                    </td>
                    <td><?php echo $data['status']; ?></td>
                    <td style="text-align: center">
			                  <a href="f_kembali.php?id=<?php echo $data['id'];?>&denda=<? echo $denda ?>">Kembali</a> || <a href="perpanjang.php?id=<?php echo $data['id']; ?>">Perpanjang</a>
                    </td>
                    <input type="hidden" value="<?php echo $data['id'] ?>"></<input>
                   
          <?php
         }
         
         ?>
                    </tbody>

</table>