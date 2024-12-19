<?php

class PengumpulanTugas {
    private $id_pengumpulan;
    private $id_tugas;
    private $id_user;
    private $file_tugas;
    private $waktu_pengumpulan;
    private $nilai;

    // Constructor
    public function __construct($id_tugas, $id_user, $file_tugas, $waktu_pengumpulan = null, $nilai = null, $id_pengumpulan = null) {
        $this->id_pengumpulan = $id_pengumpulan;
        $this->id_tugas = $id_tugas;
        $this->id_user = $id_user;
        $this->file_tugas = $file_tugas;
        $this->waktu_pengumpulan = $waktu_pengumpulan;
        $this->nilai = $nilai;
    }

    // Getter methods
    public function getIdPengumpulan() {
        return $this->id_pengumpulan;
    }

    public function getIdTugas() {
        return $this->id_tugas;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function getFileTugas() {
        return $this->file_tugas;
    }

    public function getWaktuPengumpulan() {
        return $this->waktu_pengumpulan;
    }

    public function getNilai() {
        return $this->nilai;
    }

    // Setter methods
    public function setIdPengumpulan($id_pengumpulan) {
        $this->id_pengumpulan = $id_pengumpulan;
    }

    public function setIdTugas($id_tugas) {
        $this->id_tugas = $id_tugas;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function setFileTugas($file_tugas) {
        $this->file_tugas = $file_tugas;
    }

    public function setWaktuPengumpulan($waktu_pengumpulan) {
        $this->waktu_pengumpulan = $waktu_pengumpulan;
    }

    public function setNilai($nilai) {
        $this->nilai = $nilai;
    }
}
