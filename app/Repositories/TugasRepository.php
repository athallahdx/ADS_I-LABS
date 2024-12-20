<?php

class TugasRepository extends BaseRepository {

    protected $table = 'tugas';
    protected $table1 = 'pengumpulan_tugas';

    // Constructor - Pass the table name to the parent class
    public function __construct() {
        parent::__construct();
    }

    // Insert a new Tugas record
    public function insert($data) {
        return parent::insert($data);
    }

    // Find a Tugas by its ID
    public function findById($id_tugas) {
        return parent::findById($id_tugas);
    }

    // Update an existing Tugas record
    public function update($id, $data) {
        return parent::update($id, $data);
    }

    // Delete a Tugas record
    public function delete($id_tugas) {
        return parent::delete($id_tugas);
    }

    // Find tugas records by Praktikum ID
    public function selectByPraktikumId($id_praktikum) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_praktikum = :id_praktikum");
        $this->db->bind(':id_praktikum', $id_praktikum);
        return $this->db->resultSet();
    }

    public function countTugasByPraktikumIds($praktikumIds) {
        // Prepare a comma-separated list of IDs for the IN clause
        $idPlaceholders = implode(',', array_fill(0, count($praktikumIds), '?'));
    
        $query = "SELECT COUNT(*) as total_tugas FROM {$this->table} WHERE id_praktikum IN ($idPlaceholders)";
        $this->db->query($query);
    
        // Bind the parameters dynamically
        foreach ($praktikumIds as $index => $id) {
            $this->db->bind($index + 1, $id); // Parameter index starts at 1
        }
    
        $result = $this->db->single();
        return $result['total_tugas'] ?? 0;
    }

    public function getTugasByUserProfil($id_profil) {
        $query = "
            SELECT t.id_tugas, t.judul_tugas, t.deadline_tugas, p.nama_praktikum, pt.status_pengumpulan
            FROM tugas t
            JOIN praktikum p ON t.id_praktikum = p.id_praktikum
            LEFT JOIN pengumpulan_tugas pt ON pt.id_tugas = t.id_tugas AND pt.id_profil = :id_profil
            JOIN shift s ON s.id_praktikum = t.id_praktikum
            JOIN user_shift us ON us.id_shift = s.id_shift AND us.id_profil = :id_profil
            WHERE p.semester = us.semester
            ORDER BY t.deadline_tugas ASC

        ";

        $this->db->query($query);
        $this->db->bind(':id_profil', $id_profil);
        return $this->db->resultSet();
    }

    public function selectTugasByPraktikum($userProfilId) {
        $sql = "
            SELECT 
                p.nama_praktikum, 
                t.id_tugas, 
                t.judul_tugas, 
                t.deskripsi_tugas, 
                t.file_tugas,
                t.deadline_tugas, 
                pt.id_pengumpulan,
                pt.file_pengumpulan,
                pt.waktu_pengumpulan,
                pt.status_pengumpulan
            FROM praktikum p
            JOIN tugas t ON t.id_praktikum = p.id_praktikum
            LEFT JOIN pengumpulan_tugas pt ON pt.id_tugas = t.id_tugas AND pt.id_profil = :userProfilId
            WHERE p.id_praktikum IN (
                SELECT s.id_praktikum 
                FROM user_shift us
                JOIN shift s ON us.id_shift = s.id_shift
                WHERE us.id_profil = :userProfilId
            )
            ORDER BY p.nama_praktikum, t.deadline_tugas ASC
        ";

        $this->db->query($sql);
        $this->db->bind(':userProfilId', $userProfilId);
        return $this->db->resultSet();
    }

    public function selectFileForTugas($id_pengumpulan) {
        $query = "SELECT * FROM {$this->table1} WHERE id_pengumpulan = :id_pengumpulan";
        $this->db->query($query);
        $this->db->bind(':id_pengumpulan', $id_pengumpulan);
        return $this->db->single();
    }

    public function insertFileForTugas($id_file, $taskId, $fileName) {
        $query = "UPDATE {$this->table1}
                  SET file_pengumpulan = :fileName, 
                      status_pengumpulan = 'SELESAI', 
                      waktu_pengumpulan = NOW()
                  WHERE id_tugas = :taskId AND id_profil = :id_file";
    
        $this->db->query($query);
        $this->db->bind(':taskId', $taskId);
        $this->db->bind(':id_file', $id_file);
        $this->db->bind(':fileName', $fileName);
        
        return $this->db->execute();
    }

    public function insertTugas($data){
        $query = 
           "INSERT INTO {$this->table} 
            (id_praktikum, judul_tugas, deskripsi_tugas, file_tugas, tanggal_upload_tugas, deadline_tugas) 
            VALUES (:id_praktikum, :judul, :deskripsi_tugas, :file_tugas, NOW(), :deadline_tugas)";

        $this->db->query($query);
        $this->db->bind(':id_praktikum', $data['id_praktikum']);
        $this->db->bind(':judul', $data['judul']);
        $this->db->bind(':deskripsi_tugas', $data['deskripsi_tugas']);
        $this->db->bind(':file_tugas', $data['file']);
        $this->db->bind(':deadline_tugas', $data['deadline']);
        $this->db->execute();
   }

   public function selectTugasByPraktikumId($id_praktikum){
        $query = "SELECT * FROM {$this->table} WHERE id_praktikum = :id_praktikum";
        $this->db->query($query);
        $this->db->bind(':id_praktikum', $id_praktikum);
        return $this->db->resultSet();
   }
    
    
    
}
