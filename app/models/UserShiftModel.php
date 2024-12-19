<?php

class UserShift {
    public $id_profil;
    public $id_shift;
    public $semester;

    // Constructor to initialize properties
    public function __construct($id_profil, $id_shift, $semester) {
        $this->id_profil = $id_profil;
        $this->id_shift = $id_shift;
        $this->semester = $semester;
    }

    // Method to get a description of the user shift
    public function getDescription() {
        return "User $this->id_profil is assigned to Shift $this->id_shift for the semester $this->semester.";
    }
}
