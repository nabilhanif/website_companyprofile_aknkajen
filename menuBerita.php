<?php
include "koneksi.php";
$ambil_recent = mysqli_query ($koneksi,"select id,judul,tanggal from berita order by rand() limit 20");

?>
<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">Menu</li>
		<!--
        <li><a href="beritaok.php?link=tambahBerita.php">&rarr; Tambah Berita</a></li>
		-->
        <li><a href="beritaok.php?link=lihatBerita.php">&rarr; Lihat Berita</a></li>
        <li class="nav-header">Baca Juga</li>
        <ul type="square">
        	<?php
				while($hasil_recent= mysqli_fetch_array($ambil_recent)){
        			echo "<li><a href='beritaok.php?link=lihatDetailBerita.php&id=$hasil_recent[id]'>".$hasil_recent['judul']."</a></li>";
				}
			?>
        </ul>
    </ul>
</div>