<?php 
include('Librari6.php');
$lib = new Library();
$data_materi = $lib->show();
 
if(isset($_GET['hapusMateri']))
{
    $id_materi = $_GET['hapusMateri'];
    $status_hapus = $lib->delete($id_materi);
    if($status_hapus)
    {
        header('Location: LihatData6.php');
    }
}
?>
<html> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <head>
        <title></title> 
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body> 
       <?php 
            include 'Includes/Headerr.php'; 
        ?><br><br> 

<section class="courses bg-secondary">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h2>Courses</h2>
      </div>
    </div> 

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Materi</h3>
            </div>
            <div class="card-body">
                <a href="TambahData5.php" class="btn btn-success">Tambah</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Nama Materi</th>
                        <th>Kategori</th>
                        <th>Jenis Pembelajaran</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_materi as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['namaMateri']."</td>";
                        echo "<td>".$row['kategori']."</td>";
                        echo "<td>".$row['jenisPembelajaran']."</td>";
                        echo "<td><a class='btn btn-info' href='EditMateri6.php?id_materi=".$row['id_materi']."'>Update</a>
                        <a class='btn btn-danger' href='LihatData6.php?hapusMateri=".$row['id_materi']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div> 
</div>
</section><br><br> 

    <?php 
        include 'Includes/Footer.php'; 
      ?> 

    </body>
</html>