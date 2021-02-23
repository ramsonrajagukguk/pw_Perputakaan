<?php
include "koneksi.php";
include "menu.php";

if (isset($_POST['cari'])){
$name= $_POST['cari']; //get the nama value from form
$q = "SELECT * from tbl_anggota where nama like '%$name%' "; //query to get the search result
$tampil=mysqli_query($konek,$q) or die(mysql_error());
}
else{
  echo "Input Data Tamu Gagal";
}

?>

<div>
 <a href="anggot.php"><button class="btn btn-primary"> Tambah Anggota</button></a>
 <a href="lap_anggota.php"><button class="btn btn-primary" onclick="window.open('lap_anggota.php','_blank')"> Cetak Data Anggota</button></a>

<div class="pull-right">
<form action="carianggota.php" method="post">
	<center>
	<input type="text" name="cari" style="width: 300px" placeholder="Masukkan Nama" required>
	<input type="submit" value="Cari" class="btn btn-primary" style="margin-top: -10px">
	</center>
</form>
</div>

</div>
<br>
<table id="example" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                        <th><center>NIM </center></th>
                        <th><center>Nama </center></th>
                        <th><center>Alamat </center></th>
                        <th><center>Group </center></th>
                        <th><center>Jenis Kelamin </center></th>
                        <th><center>Agama </center></th>
                        <th><center>Tempat Lahir </center></th>
                        <th><center>Tanggal Lahir </center></th>
                        <th><center>Jenis Anggota </center></th>                       
                        <th><center>Tools</center></th>
                      </tr>
                  </thead>
                  <?php
            while($data=mysqli_fetch_array($tampil))
         {   
        ?>
                  <tbody>
                    <tr>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['group']; ?></td>
                    <td><?php echo $data['jenkel']; ?></td>
                    <td><?php echo $data['agama']; ?></td>
                    <td><?php echo $data['tempat']; ?></td>
                    <td><?php echo $data['tgl']; ?></td>
                    <td><?php echo $data['jenis']; ?></td>
                    <td style="text-align: center">
			                  <a href="f_edit_anggota.php?edit=<?php echo $data['nim']; ?>"><span class="icon-pencil">&nbsp;&nbsp;</span></a>  
                        <a href="" onclick="return confirm('Anda YAKIN menghapus data?');"><span class="icon-remove">&nbsp;&nbsp;</span></a>
                    </td>
          <?php
         }
         ?>
                    </tbody>


</table>