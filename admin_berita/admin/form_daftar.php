<?php
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['save']))
{    
    
    $getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from daftar"));
    
    if(!empty($_FILES['foto']['tmp_name']))
    { 
        $ext=strtolower(substr($_FILES['foto']['name'],-3));
        if($ext=='gif')
            $ext=".gif";
        else
            $ext=".png";
        move_uploaded_file($_FILES['foto']['tmp_name'], "../img/" . basename(($getId[0]+1).$ext));
    }
    
    mysqli_query($con,"insert into daftar values('','".date('Y-m-d')."','".($getId[0]+1).$ext."','$judul','$konten')");
    
      echo "
    <script>
    location.assign('index.php?page=daftar&ps=true1');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    if(!empty($_FILES['foto']['tmp_name']))
    { 
        unlink("../img/$gambar");
        $ext=strtolower(substr($_FILES['foto']['name'],-3));
        if($ext=='gif')
            $ext=".gif";
        else
            $ext=".png";
        move_uploaded_file($_FILES['foto']['tmp_name'], "../img/" . basename(($_GET['id']).$ext));
        
        mysqli_query($con,"update daftar set judul='$judul',gambar='".$_GET['id'].$ext."',konten='$konten' where id='".$_GET['id']."'");
    }
    else
        mysqli_query($con,"update daftar set judul='$judul',konten='$konten' where id='".$_GET['id']."'");
    
    echo "
    <script>
    location.assign('index.php?page=daftar&ps=true2');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
elseif(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terimpan</div>";

if(isset($_GET['id']))
$data=mysqli_fetch_row(mysqli_query($con,"select * from daftar where id='".$_GET['id']."'"));

?>
    <style>
        #image-holder {
            margin-top: 8px;
        }
        
        #image-holder img {
            border: 8px solid #DDD;
            max-width:100%;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Input Info Pendaftaran</h3>
                </div>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="<?php echo isset($_GET['id'])?$_GET['id']:''; ?>">
                   <input type="hidden" name="gambar" value="<?php echo isset($data[2])?$data[2]:''; ?>">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="dua" class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dua" value="<?php echo isset($_GET['id'])?$data[1]:date('d-m-Y'); ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Judul Info</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Judul" name="judul" id="tiga" value="<?php echo isset($data[3])?$data[3]:''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Isi Info</label>
                            <div class="col-sm-10">
                                <textarea class="form-control konten" placeholder="Isi Berita" name="konten"><?php echo isset($data[4])?$data[4]:''; ?></textarea>
                            </div>
                        </div>
                        
                        <!--input image awal-->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="Save" name="<?php echo isset($_GET['id'])?'update':'save'; ?>">
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->