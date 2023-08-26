<?php 
include('Librari.php');
$lib = new Library();
if(isset($_GET['id_materi'])){
    $id_materi = $_GET['id_materi']; 
    $data_materi = $lib->get_by_id($id_materi);
}
else
{
    header('Location: LihatData8.php');
}
 
if(isset($_POST['tombol_update'])){
    $id_materi = $_POST['id_materi'];
    $namaMateri = $_POST['namaMateri'];
    $Kategori = $_POST['Kategori'];
    $JenisPembelajaran = $_POST['JenisPembelajaran']; 
    $status_update = $lib->update($id_materi,$namaMateri,$Kategori,$JenisPembelajaran);
    if($status_update)
    {
        header('Location:LihatData8.php');
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
            include 'Includes/Headerrr.php'; 
        ?><br> 

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Update Data Materi</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="id_materi" value="<?php echo $data_materi['id_materi']; ?>"/>
                <div class="form-group row">
                    <label for="namaMateri" class="col-sm-2 col-form-label">Nama Materi</label>
                    <div class="col-sm-10">
                    <input type="text" name="namaMateri" class="form-control" id="namaMateri" value="<?php echo $data_materi['namaMateri']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_materi['Kategori']; ?>" name="Kategori" class="form-control" id="Kategori">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="JenisPembelajaran" class="col-sm-2 col-form-label">Jenis Pembelajaran</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="JenisPembelajaran" id="JenisPembelajaran"><?php echo $data_materi['JenisPembelajaran']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="JenisPembelajaran" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div><br><br><br>  

       <?php 
        include 'Includes/Footer.php'; 
      ?>

    </body>
</html>