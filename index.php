<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan AMIK MEDICOM</title>
</head>

<link href="aset/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="aset/css/css.css" rel="stylesheet" type="text/css">

<body style="background: #7BA9DE">  
    <div class="container well" style="width: 960px">

        <img src="aset/LOGO MEDICOM.png" style="width: 70px; height: 90px; display: inline; margin: -5px 0 50px 0">
        <h3 style="margin: -120px 0 20px 90px; font-family: Georgia; font-size: 25px">Perpustakaan Perpustakaan AMIK MEDICOM</h3> <br>
        <small style="font-family: Times New Roman; font-size: 17px; margin: -40px 0 0 90px; display: inline; position: absolute">Alamat : Jl. Darat No 74 Medan</small>
    
    
    <div class="navbar">
	    <div class="navbar-inner">
            <ul class="nav">
                <li><a href="index.php" class="depan">Beranda</a></li>
                <li><a href="data_anggota.php" class="depan">Anggota</a></li>
                <li><a href="" class="depan">Katalog Buku</a></li>
                <li><a href="f_peminjaman.php" class="depan">Peminjaman</a></li>
                <li><a href="l_kembali.php" class="depan">Pengembalian</a></li>
                <li><a href="lap_peminjaman.php" class="depan">Laporan</a></li>
            </ul>
	    </div>	  
    </div>
    <div class="slideshow-container" align="center">

<div class="mySlides fade">
  
  <img src="aset/img/buku2.jpg" style="width:20%" >
  <div class="text">Java Nol</div>
</div>

<div class="mySlides fade">
  <img src="aset/img/buku3.jpg" style="width:20%" >
  <div class="text">Visual Basic</div>
</div>

<div class="mySlides fade">
  <img src="aset/img/buku4.jpg" style="width:20%" >
  <div class="text">Visual Basic</div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>  
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
    <?php
    include "transaksibuku.php";
    ?>
    </div>
       
    </div>
  
  <?
  include "footer.php";
  ?>  

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>