<?php

class PraktikumRepository extends BaseRepository {

    protected $table = 'praktikum';

    // Constructor - Pass the table name to the parent class
    public function __construct() {
        parent::__construct();
    }

    // Insert a new Praktikum record
    public function insert($data) {
        return parent::insert($data);
    }

    // Find a Praktikum by its ID
    public function findById($id_praktikum) {
        return parent::findById($id_praktikum);
    }

    // Update an existing Praktikum record
    public function update($id, $data) {
        return parent::update($id, $data);
    }

    // Delete a Praktikum record
    public function delete($id_praktikum) {
        return parent::delete($id_praktikum);
    }

    // Find Praktikum by Semester
    public function findBySemester($semester) {
        $this->db->query("SELECT * FROM {$this->table} WHERE semester = :semester");
        $this->db->bind(':semester', $semester);
        return $this->db->resultSet();
    }

    // Find Praktikum by Dosen Pengampu
    public function findByDosenPengampu($dosen_pengampu) {
        $this->db->query("SELECT * FROM {$this->table} WHERE dosen_pengampu = :dosen_pengampu");
        $this->db->bind(':dosen_pengampu', $dosen_pengampu);
        return $this->db->resultSet();
    }
}
