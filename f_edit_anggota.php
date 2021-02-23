<?php
include "koneksi.php";

include "menu.php";

$edit = $_GET['edit'];


$sql = ("select * from tbl_anggota Where nim='$edit'");
$query = mysqli_query($konek, $sql);
$data = mysqli_fetch_array($query);

?>

<fieldset>
	<legend>Data Mahasiswa</legend>

	<form action="f_ubah_anggota.php?edit=<?php echo $data['nim'] ?>" method="POST">


		<table>
			<label style="width: 150px; float: left">NIM</label><input class="span4" type="text" name="nim" placeholder="Nomor Induk Mahasiswa" value="<?php echo $data['nim'] ?>" readonly><br>
			<label style="width: 150px; float: left">Nama</label><input class="span8" type="text" name="nama" placeholder="Nama" value="<?php echo $data['nama'] ?>" required><br>
			<label style="width: 150px; float: left">Alamat</label><input class="span8" type="text" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat'] ?>" required><br>
			<label style="width: 150px; float: left">Group</label>
			<select name="group" type="text">
				<option> <?php echo $data['group'] ?></option>
				<option value="">MI-18</option>
				<option value="TK-18">TK-18</option>
				<option value="KA-18">KA-18</option>
			</select>
			<br>
			<label style="width: 150px; float: left">Jenis Kelamin</label>
			<select name="jk">
				<option> <?php echo $data['jenkel'] ?> </option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
			<br>

			<label style="width: 150px; float: left">Agama</label>
			<select name="agama">
				<option> <?php echo $data['agama'] ?></option>
				<option value="Islam"> Islam</option>
				<option value="Kristen">Kristen</option>
				<option value="Khatolik">Khatolik</option>
				<option value="Hindu">Hindu</option>
				<option value="Budha">Budha</option>
			</select>
			<br>
			<label style="width: 150px; float: left">Tempat Tanggal Lahir</label><input class="span3" type="text" name="tmp_lahir" placeholder="Tempat Lahir" value="<?php echo $data['tempat'] ?>" required>,
			<br>
			<label style="width: 150px; float: left">Tanggal Lahir</label><input class="span3" type="date" name="tgl_lahir" placeholder="Tempat Lahir" value="<?php echo $data['tgl'] ?>" required>,
			<br>
			<label style="width: 150px; float: left">Jenis Anggota</label>
			<select name="anggota">
				<option value=""><?php echo $data['jenis'] ?></option>
				"<option value="Dosen">Dosen</option>
				<option value="Mahasiswa">Mahasiswa</option>
				<option value="Pengawai">Pengawai</option>
			</select>
			<br>

			<button type="submit" value="" class="btn btn-success">Update</button>
			<tr>
				<td></td>
				<td><input type="hidden" value="<?php echo $edit['nim'] ?>"></td>
			</tr>

	</form>
	</table>
	</body>

	</html>