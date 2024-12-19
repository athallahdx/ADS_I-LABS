<?php

class UserProfile {
    private $id_profil;
    private $id_user;
    private $foto_profil;
    private $nomor_telpon;
    private $semester;

    // Constructor to initialize the UserProfile object
    public function __construct($id_profil = null, $id_user = null, $foto_profil = null, $nomor_telpon = null, $semester = null) {
        $this->id_profil = $id_profil;
        $this->id_user = $id_user;
        $this->foto_profil = $foto_profil;
        $this->nomor_telpon = $nomor_telpon;
        $this->semester = $semester;
    }

    // Getter and Setter Methods

    public function getIdProfil() {
        return $this->id_profil;
    }

    public function setIdProfil($id_profil) {
        $this->id_profil = $id_profil;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function getFotoProfil() {
        return $this->foto_profil;
    }

    public function setFotoProfil($foto_profil) {
        $this->foto_profil = $foto_profil;
    }

    public function getNomorTelpon() {
        return $this->nomor_telpon;
    }

    public function setNomorTelpon($nomor_telpon) {
        $this->nomor_telpon = $nomor_telpon;
    }

    public function getSemester() {
        return $this->semester;
    }

    public function setSemester($semester) {
        $this->semester = $semester;
    }

    // Additional business logic or helper functions if needed

    public function validate() {
        // Example validation: check if required fields are not empty
        if (empty($this->id_user) || empty($this->nomor_telpon)) {
            return false; // Invalid user profile
        }
        return true;
    }
}