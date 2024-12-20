<?php

class UserProfileRepository extends BaseRepository {

    protected $table = 'profil_user';
    protected $table1 = 'user';

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

    public function getUserProfileData($id_user){
        $this->db->query("SELECT * FROM {$this->table} WHERE id_user = :id_user");
        $this->db->bind(':id_user', $id_user);
        return $this->db->single();
    }

    public function updateUser($id_user, $fullname, $username){
        $query = "
            UPDATE {$this->table1}
            SET fullname = :fullname, username = :username
            WHERE id_user = :id_user";
        
        $this->db->query($query);
        $this->db->bind(':id_user', $id_user);
        $this->db->bind(':fullname', $fullname);
        $this->db->bind(':username', $username);
        return $this->db->execute();
    }

    public function updateUserProfile($id_profil, $nohp){
        $query = "
            UPDATE {$this->table}
            SET nomor_telpon = :nomor_telpon
            WHERE id_profil = :id_profil";
        
        $this->db->query($query);
        $this->db->bind(':id_profil', $id_profil);
        $this->db->bind(':nomor_telpon', $nohp);
        return $this->db->execute();
    }

    public function updateUserImage($id_profil, $file){
        $query = "
            UPDATE {$this->table}
            SET foto_profil = :foto_profil
            WHERE id_profil = :id_profil";
        
        $this->db->query($query);
        $this->db->bind(':id_profil', $id_profil);
        $this->db->bind(':foto_profil', $file);
        return $this->db->execute();
    }
}

?>
