<?php

class PraktikumRepository extends BaseRepository {

    protected $table = 'user_shift';
    protected $table1 = 'praktikum';
    protected $table2 = 'shift';

    // Constructor - Pass the table name to the parent class
    public function __construct() {
        parent::__construct();
    }

    // Insert a new User-Shift relationship
    // Modify this to accept an array of data instead of UserShift object
    public function insert($data) {
        // Make sure that the data array contains id_profil, id_shift, and semester
        return parent::insert($data);
    }
    
    // Update an existing User-Shift relationship
    public function update($id, $data) {
        // $id is expected to be an associative array like ['id_profil' => 1, 'id_shift' => 2]
        if (!isset($id['id_profil']) || !isset($id['id_shift'])) {
            throw new InvalidArgumentException("Both 'id_profil' and 'id_shift' must be provided.");
        }
    
        $setClause = [];
        foreach ($data as $key => $value) {
            $setClause[] = "{$key} = :{$key}";
        }
    
        $setClauseString = implode(', ', $setClause);
        $sql = "UPDATE {$this->table} SET {$setClauseString} WHERE id_profil = :id_profil AND id_shift = :id_shift";
    
        $this->db->query($sql);
    
        foreach ($data as $key => $value) {
            $this->db->bind(":{$key}", $value);
        }
        $this->db->bind(':id_profil', $id['id_profil']);
        $this->db->bind(':id_shift', $id['id_shift']);
    
        return $this->db->execute();
    }
    

    // Delete a User-Shift relationship
    // Modify this to accept one parameter like in the base class
    public function delete($id) {
        $this->db->query("DELETE FROM {$this->table} WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    // Find comments by User ID
    public function findByUserId($id_user) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_profil = :id_profil");
        $this->db->bind(':id_profil', $id_user);
        return $this->db->resultSet();
    }

    // Find comments by Shift ID
    public function findByShiftId($id_shift) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_shift = :id_shift");
        $this->db->bind(':id_shift', $id_shift);
        return $this->db->resultSet();
    }

    public function selectShiftPraktikumByUserIdAndSemester($id, $semester) {
        $query = "
            SELECT p.*, s.* 
            FROM {$this->table1} AS p
            INNER JOIN {$this->table2} AS s ON p.id_praktikum = s.id_praktikum
            WHERE s.id_shift IN (
                SELECT us.id_shift
                FROM {$this->table} AS us
                WHERE us.id_profil = :id AND us.semester = :semester
            )
        ";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->bind(':semester', $semester);
        return $this->db->resultSet(); // Fetches multiple rows with both praktikum and shift data.
    }
    
    
}
