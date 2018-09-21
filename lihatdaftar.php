<?php

#------- memulai page number -------------------------------------------------------------------------------------#
$dataPerPage = 5; 
if(isset($_GET['hal']))
{	
	$noPage = $_GET['hal'];
}else{	
	$noPage = 1;
}
$offset   = ($noPage - 1) * $dataPerPage;
include "koneksi.php";
$ambil_data = mysqli_query($koneksi,"select * from daftar order by id desc limit $offset, $dataPerPage");
$hitung_record = mysqli_query($koneksi,"SELECT COUNT(*) AS jumData FROM daftar");
$data          = mysqli_fetch_array($hitung_record);
$jumData       = $data['jumData'];
$jumPage  = ceil($jumData/$dataPerPage);
# ceil digunakan untuk membulatkan hasil pembagian
#------- akhir page number -------------------------------------------------------------------------------------#

while($hasil_data = mysqli_fetch_array($ambil_data)){
?>
	<div class="row-fluid">
      <div class="span8">
          <h2><?=$hasil_data['judul'];?></h2>
          <p style="text-align:justify;"><?=substr($hasil_data['konten'],0,1000);?></p>
          <p>
          	<a href="#" style="background: #0dd8da;">Tanggal <?=$hasil_data['tanggal'];?></a>
          </p>
      </div>      
    </div>
<?php
}
?>

<!----  menampilkan page number di bawah post ------------>
