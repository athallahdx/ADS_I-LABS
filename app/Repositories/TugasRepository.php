<?php

class TugasRepository extends BaseRepository {

    protected $table = 'tugas';

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
    public function findByPraktikumId($id_praktikum) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_praktikum = :id_praktikum");
        $this->db->bind(':id_praktikum', $id_praktikum);
        return $this->db->resultSet();
    }
}
