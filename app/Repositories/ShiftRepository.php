<?php

class ShiftRepository extends BaseRepository {
    protected $table = 'shift';

    // Constructor - initializes the database connection
    public function __construct() {
        parent::__construct();
    }

    // Insert a new Shift record
    public function insert($data) {
        if ($data instanceof Shift) {
            $data = [
                'id_praktikum' => $data->getIdPraktikum(),
                'nama_shift' => $data->getNamaShift(),
                'hari' => $data->getHari(),
                'waktu_mulai' => $data->getWaktuMulai(),
                'waktu_selesai' => $data->getWaktuSelesai()
            ];
        }
        return parent::insert($data);
    }

    // Update an existing Shift record by ID
    public function update($id, $data) {
        if ($data instanceof Shift) {
            $data = [
                'id_praktikum' => $data->getIdPraktikum(),
                'nama_shift' => $data->getNamaShift(),
                'hari' => $data->getHari(),
                'waktu_mulai' => $data->getWaktuMulai(),
                'waktu_selesai' => $data->getWaktuSelesai()
            ];
        }
        return parent::update($id, $data);
    }

    // Find a Shift record by its ID
    public function findById($id) {
        return parent::findById($id);
    }

    // Delete a Shift record by its ID
    public function delete($id) {
        return parent::delete($id);
    }

    // Fetch all shifts
    public function getAllShifts() {
        return parent::getAll();
    }

    // Find Shifts by Praktikum ID
    public function findByPraktikumId($id_praktikum) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_praktikum = :id_praktikum");
        $this->db->bind(':id_praktikum', $id_praktikum);
        return $this->db->resultSet();
    }

    // Find Shifts by Day
    public function findByDay($hari) {
        $this->db->query("SELECT * FROM {$this->table} WHERE hari = :hari");
        $this->db->bind(':hari', $hari);
        return $this->db->resultSet();
    }
}
