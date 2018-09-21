<?php
include ("headermaster.php");
?>
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
        <li><a href="beritaok.php">BERITA</a></li>
		<li><a href="prestasi.php" >PRESTASI</a></li>
		<li><a href="kontak.php" >KONTAK</a></li>
    </ul>    	

	<div class="cleaner"></div>
</div> <!-- end of tooplate_menu -->
	<div id="tooplate_content">
		<div style="float:center;width:900px;padding-right:40px;margin-right:20px;border-right:1px solid #b2c9d2;margin-right:0;border-right:none;">

				<form action="insert.php" method="POST">
				<table border='1' width='35%' cellpadding='2'  cellspacing='2' align='center' bgcolor="#FFFFF">
				<caption><h3>Formulir Pendaftaran Mahasiswa Baru<br></h3></caption>
				<tr><td><b>Nama</b></td><td><input type="text" name="nama" size="30" maxlength="50"/></td></tr>
				<tr><td><b>Jenis Kelamin</b></td><td><input type="radio" name="jenis_kelamin" value="pria"/><label for="jenis_kelamin">Pria</label>
				<input type="radio" name="jenis_kelamin" value="wanita"/><label for="jenis_kelamin">Wanita</label>
				</td></tr>
				<tr><td><b>Status</b></td><td>
				<select name="status">
				<option value="Pilih Status Anda">Pilih Status Anda</option>
				<option value="menikah">Menikah</option>
				<option value="belum menikah">Belum Menikah</option>
				</select>
				</td></tr>
				<tr><td><b>Lulusan Sekolah<b/></td><td><input type="text" name="sekolah" size="30" maxlength="50"/></td></tr>
				<tr><td><b>Tahun Ajaran</b></td><td><input type="text" name="tahun_ajaran" size="30" maxlength="50"/></td></tr>
				<tr><td><b>Alamat</b></td><td><textarea name="alamat" cols="30" rows="4"></textarea></td></tr>
				<tr><td><b>Kelurahan</b></td><td><input type="text" name="kelurahan" size="30" maxlength="50"/></td></tr>
				<tr><td><b>Kecamatan</b></td><td><input type="text" name="kecamatan" size="30" maxlength="50"/></td></tr>
				<tr><td><b>Kota</b></td><td><input type="text" name="kota" size="30" maxlength="50"/></td></tr>
				<tr><td><b>Provinsi<b></td><td>
				<select name="provinsi">
				<option value="Pilih Provinsi Anda">Pilih Provinsi Anda</option>
				<option value="Bali">Bali</option>
				<option value="Bangka Belitung">Bangka Belitung</option>
				<option value="Banten">Banten</option>
				<option value="Bengkulu">Bengkulu</option>

				<option value="Gorontalo">Gorontalo</option>
				<option value="Irian Jaya Barat">Irian Jaya Barat</option>
				<option value="Jabotabekdecipsawcib">Jabotabekdecipsawcib</option>
				<option value="Jambi">Jambi</option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
				<option value="Jawa Timur">Jawa Timur</option>
				<option value="Kalimantan Barat">Kalimantan Barat</option>
				<option value="Kalimantan Selatan">Kalimantan Selatan</option>

				<option value="Kalimantan Tengah">Kalimantan Tengah</option>
				<option value="Kalimantan Timur">Kalimantan Timur</option>
				<option value="Kepulauan Riau">Kepulauan Riau</option>
				<option value="Lampung">Lampung</option>
				<option value="Lokasi Lain-lain">Lokasi Lain-lain</option>
				<option value="Maluku">Maluku</option>
				<option value="Maluku Utara">Maluku Utara</option>
				<option value="Nangroe Aceh Darussalam">Nangroe Aceh Darussalam</option>
				<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>

				<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
				<option value="Papua">Papua</option>
				<option value="Riau">Riau</option>
				<option value="Sulawesi Barat">Sulawesi Barat</option>
				<option value="Sulawesi Selatan">Sulawesi Selatan</option>
				<option value="Sulawesi Tengah">Sulawesi Tengah</option>
				<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
				<option value="Sulawesi Utara">Sulawesi Utara</option>
				<option value="Sumatera Barat">Sumatera Barat</option>

				<option value="Sumatera Selatan">Sumatera Selatan</option>
				<option value="Sumatera Utara">Sumatera Utara</option>
				<option value="Yogyakarta">Yogyakarta</option>
				</select></td></tr>
				<tr><td><b>No Telepon</b></td><td><input type="text" name="telepon" size="30" maxlength="50"/></td></tr>
				<tr><td></td><td><input type="submit" name="kirim" value="Daftar!"/>
					<label>
				<input type="reset" name="Reset" id="button" value="Batal">
					</label></td></tr>
				</table>
				<p align="center"><a href="lihatdata.php"><strong>Lihat Data </strong></a></p>
				</form>
	
			
	
	
			
		</div>
		<div class="cleaner"></div>
	</div>
	<div id="tooplate_footer_wrapper">
     <div id="tooplate_footer">
    
        Copyright © 2048 <a href="#">Company Name</a>
    
    </div> <!-- end of tooplate_footer -->
	</div>
<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>