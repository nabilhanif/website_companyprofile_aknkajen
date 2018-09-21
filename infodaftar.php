<head>
<?php
include ("headermaster.php");
?> 
</head>
<div id="tooplate_menu">
                
    <ul>
        <li><a href="index.php" >BERANDA</a></li>
		<li><a href="profil.php" >PROFIL</a></li>
        <li><a href="#" class="current">PENDAFTARAN</a>
			<ul style="position:absolute;left:481px;top:190px;width:150px;">
				<li><a href="infodaftar.php">Info Pendaftaran</a></li>
				<li><a href="daftaronline.php">Pendaftaran Online</a></li>
			</ul>
		</li>
		<li><a href="gallery.php" >FASILITAS</a></li>
        <li><a href="beritaok.php" >BERITA</a></li>
		<li><a href="prestasi.php" >PRESTASI</a></li>
		<li><a href="kontak.php" >KONTAK</a></li>
    </ul>    	

	<div class="cleaner"></div>
</div> <!-- end of tooplate_menu -->

<div id="tooplate_content">
<?php
include "koneksi.php";
$ambil_data = mysqli_query($koneksi,"select * from daftar");
$koneksi = mysqli_query($koneksi,"SELECT COUNT(*) AS jumData FROM daftar");
?>
	<div class="col_w460 last_col">
			
    	<?php include("lihatdaftar.php")?>

	</div>
	<div class="cleaner"></div>

	<div id="tooplate_footer_wrapper">
     <div id="tooplate_footer">
    
        Copyright © 2048 <a href="#">Company Name</a>
    
    </div> <!-- end of tooplate_footer -->
</div>

<!--   Free Website Template by t o o p l a t e . c o m   -->
</html>