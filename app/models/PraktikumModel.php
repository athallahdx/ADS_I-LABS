<?php

class Praktikum {
    private $id_praktikum;
    private $nama_praktikum;
    private $deskripsi_praktikum;
    private $semester;
    private $dosen_pengampu;

    // Constructor
    public function __construct($nama_praktikum, $deskripsi_praktikum, $semester, $dosen_pengampu, $id_praktikum = null) {
        $this->id_praktikum = $id_praktikum;
        $this->nama_praktikum = $nama_praktikum;
        $this->deskripsi_praktikum = $deskripsi_praktikum;
        $this->semester = $semester;
        $this->dosen_pengampu = $dosen_pengampu;
    }

    // Getter methods
    public function getIdPraktikum() {
        return $this->id_praktikum;
    }

    public function getNamaPraktikum() {
        return $this->nama_praktikum;
    }

    public function getDeskripsiPraktikum() {
        return $this->deskripsi_praktikum;
    }

    public function getSemester() {
        return $this->semester;
    }

    public function getDosenPengampu() {
        return $this->dosen_pengampu;
    }

    // Setter methods
    public function setIdPraktikum($id_praktikum) {
        $this->id_praktikum = $id_praktikum;
    }

    public function setNamaPraktikum($nama_praktikum) {
        $this->nama_praktikum = $nama_praktikum;
    }

    public function setDeskripsiPraktikum($deskripsi_praktikum) {
        $this->deskripsi_praktikum = $deskripsi_praktikum;
    }

    public function setSemester($semester) {
        $this->semester = $semester;
    }

    public function setDosenPengampu($dosen_pengampu) {
        $this->dosen_pengampu = $dosen_pengampu;
    }
}
