<?php 
include('Librari3.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $namaMateri = $_POST['namaMateri'];
    $kategori = $_POST['kategori'];
    $jenisPembelajaran = $_POST['jenisPembelajaran'];
 
    $add_status = $lib->add_data($namaMateri, $kategori, $jenisPembelajaran);
    if($add_status){
    header('Location: LihatData3.php');
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
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                    <input type="text" name="kategori" class="form-control" id="kategori">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenisPembelajaran" class="col-sm-2 col-form-label">Jenis Pembelajaran</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="jenisPembelajaran" id="jenisPembelajaran"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenisPembelajaran" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div><br><br> 

    <?php 
        include 'Includes/Footer.php'; 
      ?> 


    </body>
</html>