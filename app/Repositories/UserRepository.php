<?php

class UserRepository extends BaseRepository {
    
    protected $table = 'user';

    // Constructor - Pass 'users' table name to the parent constructor
    public function __construct() {
        parent::__construct();
    }

    // You can add any user-specific methods here if needed
    public function insert($data) {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
    
        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})";
        $this->db->query($sql);
    
        foreach ($data as $key => $value) {
            $this->db->bind(":{$key}", $value);
        }
        
        return $this->db->execute(); // This should return true or false
    }
    

    // Find user by email (custom method)
    public function findByEmail($email) {
        $this->db->query("SELECT * FROM {$this->table} WHERE email = :email");
        $this->db->bind(':email', $email);
        return $this->db->single() ?: false; // Return false if no user found
    }
    
    

    // Find user by username (custom method)
    public function findByUsername($username) {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username");
        $this->db->bind(':username', $username);
        $result = $this->db->single(); // This should return an array or null

        return $result ? $result : null; // Ensure it returns null if no user is found
    }

    // Update the user's password (custom method)
    public function updatePassword($id, $newPassword) {
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
        $this->db->query("UPDATE {$this->table} SET password = :password WHERE id_user = :id");
        $this->db->bind(':password', $hashedPassword);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    

    // Example of custom method to get users by role
    public function findByRole($role) {
        $this->db->query("SELECT * FROM {$this->table} WHERE role = :role");
        $this->db->bind(':role', $role);
        return $this->db->resultSet();
    }

    // Example of custom method to deactivate a user
    public function deactivateUser($id) {
        $this->db->query("UPDATE {$this->table} SET status = 'inactive' WHERE id_user = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

}