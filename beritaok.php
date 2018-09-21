<html>
	<head>
	<?php include ("headermaster.php");
?>

		<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    	<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"> 
		
    	
    	<script type="text/javascript">
    		function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }
    	</script>
	</head>
	<body>
	 <div id="tooplate_menu">
                
    <ul>
        <li><a href="index.php">BERANDA</a></li>
		<li><a href="profil.php">PROFIL</a></li>
        <li><a href="pendaftaran.php">PENDAFTARAN</a>
			<ul style="position:absolute;left:481px;top:190px;width:150px;">
				<li><a href="html.html">Biaya Pendaftaran</a></li>
				<li><a href="css.html">Info Pendaftaran</a></li>
				<li><a href="javascript.html">Pendaftaran Online</a></li>
			</ul>
		</li>
        <li><a href="beritaok.php"class="current">BERITA</a></li>
		<li><a href="prestasi.php">PRESTASI</a></li>
		<li><a href="kontak.php">KONTAK</a></li>
    </ul>     	

	<div class="cleaner"></div>
</div> <!-- end of templatetooplate_menu -->
    

	<!--
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand" href="index.php">Berita AKN Kajen</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a class="brand" style="margin-left:85px;">Menjadi Pilihan Cerdas!</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
-->
	    <div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<?php include("menuBerita.php");?>
                </div><!--/span-->
                <div class="span9">
                	<!--letak konten-->
                    <?php
						if(empty($_GET['link']))
                    		include "lihatBerita.php";
						else
							include($_GET['link']);						
					?>
				</div><!--/span-->
			</div><!--/row-->
			<hr>
			<footer>
			<p>Akn Kajen (2017) &copy; POLBAN</p>
			</footer>
	    </div><!--/.fluid-container-->
	    <script src="./js/latest.js"></script>
	    <script src="./js/bootstrap.min.js"></script>
	</body>
</html>