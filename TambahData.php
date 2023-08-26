<?php 
include('Librari.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $namaMateri = $_POST['namaMateri'];
    $Kategori = $_POST['Kategori'];
    $JenisPembelajaran = $_POST['JenisPembelajaran'];
 
    $add_status = $lib->add_data($namaMateri, $Kategori, $JenisPembelajaran);
    if($add_status){
    header('Location: LihatData.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body> 
         <?php 
            include 'Includes/Headerr.php'; 
        ?><br><br> 

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Materi</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="namaMateri" class="col-sm-2 col-form-label">Nama Materi</label>
                    <div class="col-sm-10">
                    <input type="text" name="namaMateri" class="form-control" id="namaMateri">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                    <input type="text" name="Kategori" class="form-control" id="Kategori">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="JenisPembelajaran" class="col-sm-2 col-form-label">Jenis Pembelajaran</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="JenisPembelajaran" id="JenisPembelajaran"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="JenisPembelajaran" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div><br><br><br><br><br>

      <?php 
        include 'Includes/Footer.php'; 
      ?>

    </body>
</html>