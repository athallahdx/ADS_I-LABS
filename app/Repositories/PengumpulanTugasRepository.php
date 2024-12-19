<?php


class PengumpulanTugasRepository extends BaseRepository {

    protected $table = 'pengumpulan_tugas';

    // Constructor - Pass the table name to the parent class
    public function __construct() {
        parent::__construct();
    }

    // Insert a new PengumpulanTugas record
    public function insert($data) {
        return parent::insert($data);
    }

    // Find a PengumpulanTugas by its ID
    public function findById($id_pengumpulan) {
        return parent::findById($id_pengumpulan);
    }

    // Update an existing PengumpulanTugas record
    public function update($id, $data) {
        return parent::update($id, $data);
    }

    // Delete a PengumpulanTugas record
    public function delete($id_pengumpulan) {
        return parent::delete($id_pengumpulan);
    }

    // Find records by Tugas ID
    public function findByTugasId($id_tugas) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_tugas = :id_tugas");
        $this->db->bind(':id_tugas', $id_tugas);
        return $this->db->resultSet();
    }

    // Find records by User ID
    public function findByUserId($id_user) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_user = :id_user");
        $this->db->bind(':id_user', $id_user);
        return $this->db->resultSet();
    }

    // Update the nilai (grade) for a submission
    public function updateNilai($id_pengumpulan, $nilai) {
        $this->db->query("UPDATE {$this->table} SET nilai = :nilai WHERE id_pengumpulan = :id_pengumpulan");
        $this->db->bind(':nilai', $nilai);
        $this->db->bind(':id_pengumpulan', $id_pengumpulan);
        return $this->db->execute();
    }
}
