<?php

require_once 'BaseRepository.php';

class UserProfileRepository extends BaseRepository {

    protected $table = 'profil_user';

    // Constructor - Pass 'user_profiles' table name to the parent constructor
    public function __construct() {
        parent::__construct();
    }

    // Insert a new user profile
    public function insert($data) {

        return parent::insert($data);
    }

    // Find a user profile by user ID
    public function findByUserId($id_user) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_user = :id_user");
        $this->db->bind(':id_user', $id_user);
        return $this->db->single();
    }

    // Update the user profile
    public function update($id, $data) {
        return parent::update($id, $data);
    }

    // Delete a user profile by user ID
    public function deleteByUserId($id_user) {
        $this->db->query("DELETE FROM {$this->table} WHERE id_user = :id_user");
        $this->db->bind(':id_user', $id_user);
        return $this->db->execute();
    }
}

?>
