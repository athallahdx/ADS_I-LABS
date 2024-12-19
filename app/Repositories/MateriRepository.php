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
    public function findByPraktikumId($id_praktikum) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_praktikum = :id_praktikum");
        $this->db->bind(':id_praktikum', $id_praktikum);
        return $this->db->resultSet();
    }
}
