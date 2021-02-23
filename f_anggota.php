		<form action="simpan_anggota.php" method="POST">

			<fieldset>
				<legend>Form</legend>

				<label style="width: 150px; float: left">NIM</label><input class="span4" type="text" name="nim" placeholder="Nomor Induk Mahasiswa" value="" required><br>
				<label style="width: 150px; float: left">Nama</label><input class="span8" type="text" name="nama" placeholder="Nama" value="" required><br>
				<label style="width: 150px; float: left">Alamat</label><input class="span8" type="text" name="alamat" placeholder="Alamat" value="" required><br>
				<label style="width: 150px; float: left">Group</label>
				<select name="group">
					<option value="">[Group]</option>
					<option value="MI-18">MI-18</option>
					<option value="TK-18">TK-18</option>
					<option value="KA-18">KA-18</option>


				</select>
				<br>
				<label style="width: 150px; float: left">Jenis Kelamin</label>
				<select name="jk">
					<option value="">[Jns Kel]</option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
				<br>
				<label style="width: 150px; float: left">Agama</label>
				<select name="agama">
					<option value="">[Agama]</option>
					<option value="Islam"> Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Khatolik">Khatolik</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>

				</select>
				<br>
				<label style="width: 150px; float: left">Tempat Tanggal Lahir</label><input class="span3" type="text" name="tmp_lahir" placeholder="Tempat Lahir" value="" required>
				<br>
				<label style="width: 150px; float: left">Tanggal Lahir</label>
				<select style="width: 90px; name=" hari">
					<option value="">--Hari--</option>
					<?php for ($hari = 1; $hari <= 31; $hari++) { ?>
						<option value="<?php echo $hari; ?> ">
							<?php echo $hari; ?>
						</option>
					<?php } ?>
				</select>
				<select style="width: 90px; name=" bulan">
					<option value="">--Bulan--</option>
					<?php for ($bulan = 1; $bulan <= 12; $bulan++) { ?>
						<option value="<?php echo $bulan; ?> ">
							<?php echo $bulan; ?>
						</option>
					<?php } ?>
				</select>

				<select style="width: 90px; name=" tahun">
					<option value="">--Tahun--</option>
					<?php for ($tahun = date('Y'); $tahun >= 1980; $tahun--) { ?>
						<option value="<?php echo $tahun; ?> ">
							<?php echo $tahun; ?>
						</option>
					<?php } ?>
				</select>

				<br>
				<label style="width: 150px; float: left">Jenis Anggota</label>
				<select name="anggota">
					<option value="">[Jenis Anggota]</option>
					"<option value="Dosen">Dosen</option>
					<option value="Mahasiswa">Mahasiswa</option>
					<option value="Pengawai">Pengawai</option>
				</select>
				<br>
				<div class="col-md-7">
					<button type="submit" value="save" class="btn btn-primary">Save</button>
				</div>
			</fieldset>
		</form>