<?php
include ("headermaster.php");
?>
 <div id="tooplate_menu">
                
	<ul>
        <li><a href="index.php" >BERANDA</a></li>
		<li><a href="profil.php" >PROFIL</a></li>
        <li><a href="#">PENDAFTARAN</a>
			<ul style="position:absolute;left:481px;top:190px;width:150px;">
				<li><a href="infodaftar.php">Info Pendaftaran</a></li>
				<li><a href="daftaronline.php">Pendaftaran Online</a></li>
			</ul>
		</li>
		<li><a href="gallery.php">FASILITAS</a></li>
        <li><a href="beritaok.php" >BERITA</a></li>
		<li><a href="prestasi.php">PRESTASI</a></li>
		<li><a href="kontak.php" class="current">KONTAK</a></li>
    </ul>    	    	

	<div class="cleaner"></div>
</div> <!-- end of tooplate_menu -->
    
<div id="tooplate_content">

	<h2>Kontak Kami</h2>

    <p>Informasi lebih lanjut hubungi kontak dibawah ini</p>
                
   	<div class="cleaner_h40"></div>
                
    <div class="col_w460">
       	<div id="contact_form">
		
        	<h4>Form Kontak</h4>
			<form method="post" name="contact" action="#">
	
				<label for="author">Nama:</label> <input type="text" id="author" name="author" class="required input_field" placeholder="nama user" />
				<div class="cleaner_h10"></div>
							
				<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" placeholder="example: nabilhanif0@gmail.com" />
				<div class="cleaner_h10"></div>
							
				<label for="judul">Judul:</label> <input type="text" class="validate-subject required input_field" name="subject" id="judul" placeholder="masukkan judul"/>				               
				<div class="cleaner_h10"></div>
							
				<label for="text">Pesan:</label> <textarea id="text" name="text" rows="0" cols="0" class="required">pesan saya adalah....</textarea>
				<div class="cleaner_h10"></div>  
							              
				<input type="submit" value="kirim" id="submit" name="submit" class="submit_btn float_l" />
							
				<input type="reset" value="ulang" id="reset" name="reset" class="submit_btn float_r" />
	
			</form>

        </div>
   	</div>
                
 	<div class="col_w460 last_col">
	    <h4></h4>
        <h6>KONTAK</h6>
        <b>Akademi Komunitas Negeri Kajen</b><br />
        Jl. Bahureksa Kajen,</br>
		Pekalongan, Jawa Tengah, Indonesia</br> 
		51161<br />
        Phone: +62 285 381400<br /><br />
		
	</div>
                    
		<div id="map-canvas"><br />
                   
			<iframe src="contohmap.html" width="410" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
	
		</div>

    <div class="cleaner"></div>
</div>
            		
    <div class="cleaner"></div> 
	
    <div class="cleaner"></div>

<div id="tooplate_footer_wrapper">
     <div id="tooplate_footer">
     
        Copyright © 2048 <a href="#">Company Name</a>
    
    </div> <!-- end of tooplate_footer -->
</div> 
<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>