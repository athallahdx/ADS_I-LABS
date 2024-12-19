<?php

class Tugas {
    private $id_tugas;
    private $id_praktikum;
    private $judul_tugas;
    private $deskripsi_tugas;
    private $deadline_tugas;

    // Constructor
    public function __construct($id_praktikum, $judul_tugas, $deskripsi_tugas, $deadline_tugas, $id_tugas = null) {
        $this->id_tugas = $id_tugas;
        $this->id_praktikum = $id_praktikum;
        $this->judul_tugas = $judul_tugas;
        $this->deskripsi_tugas = $deskripsi_tugas;
        $this->deadline_tugas = $deadline_tugas;
    }

    // Getter methods
    public function getIdTugas() {
        return $this->id_tugas;
    }

    public function getIdPraktikum() {
        return $this->id_praktikum;
    }

    public function getJudulTugas() {
        return $this->judul_tugas;
    }

    public function getDeskripsiTugas() {
        return $this->deskripsi_tugas;
    }

    public function getDeadlineTugas() {
        return $this->deadline_tugas;
    }

    // Setter methods
    public function setIdTugas($id_tugas) {
        $this->id_tugas = $id_tugas;
    }

    public function setIdPraktikum($id_praktikum) {
        $this->id_praktikum = $id_praktikum;
    }

    public function setJudulTugas($judul_tugas) {
        $this->judul_tugas = $judul_tugas;
    }

    public function setDeskripsiTugas($deskripsi_tugas) {
        $this->deskripsi_tugas = $deskripsi_tugas;
    }

    public function setDeadlineTugas($deadline_tugas) {
        $this->deadline_tugas = $deadline_tugas;
    }
}
