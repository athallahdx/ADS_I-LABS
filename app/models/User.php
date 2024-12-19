<?php

namespace App\Models;

class User {
    private $id_user;
    private $username;
    private $fullname;
    private $nim;
    private $prodi;
    private $email;
    private $password;
    private $role;
    private $status;

    // Constructor to initialize the User object
    public function __construct($id_user = null, $username = null, $fullname = null, $nim = null, 
                                $prodi = null, $email = null, $password = null, $role = null, $status = null) {
        $this->id_user = $id_user;
        $this->username = $username;
        $this->fullname = $fullname;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->status = $status;
    }

    // Getter and Setter Methods for all properties
    public function getIdUser() { return $this->id_user; }
    public function setIdUser($id_user) { $this->id_user = $id_user; }
    public function getUsername() { return $this->username; }
    public function setUsername($username) { $this->username = $username; }
    public function getFullname() { return $this->fullname; }
    public function setFullname($fullname) { $this->fullname = $fullname; }
    public function getNim() { return $this->nim; }
    public function setNim($nim) { $this->nim = $nim; }
    public function getProdi() { return $this->prodi; }
    public function setProdi($prodi) { $this->prodi = $prodi; }
    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }
    public function getPassword() { return $this->password; }
    public function setPassword($password) { $this->password = $password; }
    public function getRole() { return $this->role; }
    public function setRole($role) { $this->role = $role; }
    public function getStatus() { return $this->status; }
    public function setStatus($status) { $this->status = $status; }

    // Validation method
    public function validate() {
        if (empty($this->username) || empty($this->email) || empty($this->password)) {
            return false; 
        }
        return true;
    }
}
