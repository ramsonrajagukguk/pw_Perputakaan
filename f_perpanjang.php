<?php
include "koneksi.php";
include "menu.php";
$hariini		= date("Y-m-d");  

$id=$_GET['id'];

$sql=("select * from tbl_pinjam Where id='$id'");  
$data = mysqli_query($konek,$sql);
$edit = mysqli_fetch_array($data);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>:Kembali</title>
    </head>
    <body>
        <center>
            <h2>Manajemen Perpanjang Pinjam Buku</h2>
            <form action="proses_kembali.php?id=<?php echo $edit['id'] ?>" method="POST">	
            <input type="hidden" name="pinjam" value="<?php echo $pinjam; ?>">
            <input type="hidden" name="kembali" value="<?php echo $kembali; ?>">

                <table width=50% class="table-data">
                <tr><td class="pinggir-data">NIM</td>
                <td class="pinggir-data"> <input class="span4" type="text" name="nama" value="<?php echo $edit['nim'] ?>" readonly><br>
            
                        </td>
                    </tr>
                    
                    <tr>
                    <tr><td class="pinggir-data">Kode Buku</td>
                    <td class="pinggir-data"> <input class="span4" type="text" name="nama" value="<?php echo $edit['kode'] ?>" readonly><br>
                        </td>
                    </tr>
                    <tr><td class="pinggir-data">Tanggal Pinjam</td><td class="pinggir-data"> <input class="span4" type="text" name="xpinjam" value="<?php echo $edit['tgl_pinjam'] ?>" readonly><br>
                    <tr><td class="pinggir-data">Tanggal Kembali</td><td class="pinggir-data"> <input class="span4" type="text" name="xkembali" value="<?php echo $edit['tgl_kembali'] ?>" readonly><br></tr>
                    <tr><td class="pinggir-data">Tanggal Dikembali</td><td class="pinggir-data"> <input class="span4" type="text" name="xdikembali" value="<?php echo $hariini ?>" readonly><br></tr>
                    <tr><td class="pinggir-data">Denda Buku</td><td class="pinggir-data"> <input class="span4" type="text" name="xdenda" value="<?php echo $denda ?>" readonly><br></tr>
                   

                    <tr><td colspan="2" align="center" class="head-data">	
                    <button type="submit" value="save" class="btn btn-primary">Kembali</button>
                   
                    </td></tr>
                    <input type="hidden" value="<?php echo $edit['id'] ?>">
                    </table>
            </form>
        </center>
    </body>
</html>