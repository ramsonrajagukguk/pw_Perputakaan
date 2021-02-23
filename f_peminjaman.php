<?php

include "koneksi.php";
include "menu.php";
$pinjam            = date("Y-m-d");
$tuju_hari        = mktime(0, 0, 0, date("n"), date("j") + 7, date("Y"));
$kembali        = date("Y-m-d", $tuju_hari);

$ket = "Jaga Buku Ini Dengan Baik...";
$id = $_GET['id']
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>:Peminjaman</title>
</head>

<body>
    <center>
        <h2>Manajemen Peminjaman</h2>
        <form action="simpan_peminjaman.php" method="POST">
            <input type="hidden" name="pinjam" value="<?php echo $pinjam; ?>">
            <input type="hidden" name="kembali" value="<?php echo $kembali; ?>">

            <table width=50% class="table-data">
                <tr>
                    <td class="pinggir-data">Nama</td>
                    <td class="pinggir-data">
                        <?php
                        $anggota = ("select * from tbl_anggota order by nim ");
                        $data = mysqli_query($konek, $anggota);
                        ?>
                        <select name="xnama">
                            <option value="" selected>-- Pilih Nama Peminjamnya--</option>
                            <?php while ($tampung = mysqli_fetch_array($data)) { ?>
                                <option value="<?php echo $tampung['nama']; ?>"><?php echo $tampung['nama'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                <tr>
                    <td class="pinggir-data">Judul Buku</td>
                    <td class="pinggir-data">
                        <?php
                        $buku = ("select * from tbl_buku order by kode ");
                        $data = mysqli_query($konek, $buku);
                        ?>
                        <select name="xbuku">
                            <option value="" selected>-- Pilih Buku --</option>
                            <?php while ($tampung = mysqli_fetch_array($data)) { ?>
                                <option value="<?php echo $tampung['kode']; ?>"><?php echo $tampung['nama_buku'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="pinggir-data">Tanggal Pinjam</td>
                    <td class="pinggir-data"><input class="span3" type="text" name="xpinjam" value="<? echo $pinjam ?>" readonly></td>
                </tr>
                <tr>
                    <td class="pinggir-data">Tanggal Kembali</td>
                    <td class="pinggir-data"><input class="span3" type="text" name="xkembali" value="<?php echo $kembali; ?>" readonly></td>
                </tr>
                <tr>
                    <td class="pinggir-data">Keterangan</td>
                    <td class="pinggir-data"><input type="text" name="xket" value="<?php echo $ket ?>" size="40"></td>
                </tr>

                <tr>
                    <td colspan="2" align="center" class="head-data">
                        <button type="submit" value="save" class="btn btn-success">Simpan</button>
                        <button type="reset" value="save" class="btn btn-primary">Batal</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
    <?php
    include "l_transaksi.php";
    ?>
</body>

</html>