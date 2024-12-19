<?php

class ForumDiskusiRepository extends BaseRepository {

    protected $table = 'komentar_diskusi';

    // Constructor - Pass the table name to the parent class
    public function __construct() {
        parent::__construct();
    }

    // Insert a new ForumDiskusi record
    public function insert($data) {
        return parent::insert($data);
    }

    // Find a ForumDiskusi by its ID
    public function findById($id_forum) {
        return parent::findById($id_forum);
    }

    // Update an existing ForumDiskusi record
    public function update($id, $data) {
        return parent::update($id, $data);
    }

    // Delete a ForumDiskusi record
    public function delete($id_forum) {
        return parent::delete($id_forum);
    }

    // Find discussions by Praktikum ID
    public function findByPraktikumId($id_praktikum) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_praktikum = :id_praktikum");
        $this->db->bind(':id_praktikum', $id_praktikum);
        return $this->db->resultSet();
    }

    // Find discussions created by a specific admin user
    public function findByAdminId($id_user_admin) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_user_admin = :id_user_admin");
        $this->db->bind(':id_user_admin', $id_user_admin);
        return $this->db->resultSet();
    }
}
