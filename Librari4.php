<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "tugasakhirpwd";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($namaMateri, $kategori, $jenisPembelajaran)
    {
        $data = $this->db->prepare('INSERT INTO ipa (namaMateri,kategori,jenisPembelajaran) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $namaMateri);
        $data->bindParam(2, $kategori);
        $data->bindParam(3, $jenisPembelajaran);
 
        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM ipa");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function get_by_id($id_materi){
        $query = $this->db->prepare("SELECT * FROM ipa where id_materi=?");
        $query->bindParam(1, $id_materi);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($id_materi,$namaMateri,$kategori,$jenisPembelajaran){
        $query = $this->db->prepare('UPDATE ipa set namaMateri=?,kategori=?,jenisPembelajaran=? where id_materi=?');
        
        $query->bindParam(1, $namaMateri);
        $query->bindParam(2, $kategori);
        $query->bindParam(3, $jenisPembelajaran);
        $query->bindParam(4, $id_materi);
 
        $query->execute();
        return $query->rowCount();
    }

    public function delete($id_materi)
    {
        $query = $this->db->prepare("DELETE FROM ipa where id_materi=?");
 
        $query->bindParam(1, $id_materi);
 
        $query->execute();
        return $query->rowCount();
    }
 
}
?>