<?php 
include('Librari5.php');
$lib = new Library();
if(isset($_GET['id_materi'])){
    $id_materi = $_GET['id_materi']; 
    $data_materi = $lib->get_by_id($id_materi);
}
else
{
    header('Location: LihatData5.php');
}
 
if(isset($_POST['tombol_update'])){
    $id_materi = $_POST['id_materi'];
    $namaMateri = $_POST['namaMateri'];
    $kategori = $_POST['kategori'];
    $jenisPembelajaran = $_POST['jenisPembelajaran']; 
    $status_update = $lib->update($id_materi,$namaMateri,$kategori,$jenisPembelajaran);
    if($status_update)
    {
        header('Location:LihatData5.php');
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
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_materi['kategori']; ?>" name="kategori" class="form-control" id="kategori">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenisPembelajaran" class="col-sm-2 col-form-label">Jenis Pembelajaran</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="jenisPembelajaran" id="jenisPembelajaran"><?php echo $data_materi['jenisPembelajaran']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenisPembelajaran" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
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