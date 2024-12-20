<?php

class MateriRepository extends BaseRepository {

    protected $table = 'materi';

    // Constructor - Pass the table name to the parent class
    public function __construct() {
        parent::__construct();
    }

    // Insert a new Materi record
    public function insert($data) {
        return parent::insert($data);
    }

    // Find a Materi by its ID
    public function findById($id_materi) {
        return parent::findById($id_materi);
    }

    // Update an existing Materi record
    public function update($id, $data) {
        return parent::update($id, $data);
    }

    // Delete a Materi record
    public function delete($id_materi) {
        return parent::delete($id_materi);
    }

    // Find materi records by Praktikum ID
    public function selectByPraktikumId($id_praktikum) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_praktikum = :id_praktikum");
        $this->db->bind(':id_praktikum', $id_praktikum);
        return $this->db->resultSet();
    }

    public function countMateriByPraktikumIds($praktikumIds) {
        // Prepare a comma-separated list of IDs for the IN clause
        $idPlaceholders = implode(',', array_fill(0, count($praktikumIds), '?'));
    
        $query = "SELECT COUNT(*) as total_materi FROM {$this->table} WHERE id_praktikum IN ($idPlaceholders)";
        $this->db->query($query);
    
        // Bind the parameters dynamically
        foreach ($praktikumIds as $index => $id) {
            $this->db->bind($index + 1, $id); // Parameter index starts at 1
        }
    
        $result = $this->db->single();
        return $result['total_materi'] ?? 0;
    }

    public function selectMateriByProfilId($id_profil) {
        $query = "
            SELECT 
                p.id_praktikum, 
                p.nama_praktikum, 
                m.id_materi, 
                m.judul, 
                m.deskripsi_materi, 
                m.file_materi, 
                m.tanggal_upload_materi
            FROM materi m
            JOIN praktikum p ON p.id_praktikum = m.id_praktikum
            JOIN shift s ON s.id_praktikum = p.id_praktikum
            JOIN user_shift us ON us.id_shift = s.id_shift
            WHERE us.id_profil = :id_profil
            ORDER BY p.id_praktikum, m.tanggal_upload_materi
        ";
        
        $this->db->query($query);
        $this->db->bind(':id_profil', $id_profil);
    
        return $this->db->resultSet(); // Fetches all rows
    }

    public function insertMateri($data){
        $query = 
            "INSERT INTO {$this->table} 
            (id_praktikum, judul, deskripsi_materi, file_materi, tanggal_upload_materi) 
            VALUES (:id_praktikum, :judul, :deskripsi_materi, :file_materi, NOW())";

        $this->db->query($query);
        $this->db->bind(':id_praktikum', $data['id_praktikum']);
        $this->db->bind(':judul', $data['judul']);
        $this->db->bind(':deskripsi_materi', $data['deskripsi_materi']);
        $this->db->bind(':file_materi', $data['file']);
        $this->db->execute();
    }

    public function selectMateriByPraktikumId($id_praktikum) {
        $query = "SELECT * FROM {$this->table} WHERE id_praktikum = :id_praktikum";
        $this->db->query($query);
        $this->db->bind(':id_praktikum', $id_praktikum);
        return $this->db->resultSet();
    }
    
    
}
