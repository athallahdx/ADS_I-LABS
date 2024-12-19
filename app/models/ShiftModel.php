<?php

class Shift {
    private $id_shift;
    private $id_praktikum;

    private $nama_shift;

    private $hari;
    private $waktu_mulai;
    private $waktu_selesai;

    // Constructor
    public function __construct($id_praktikum, $nama_shift, $hari, $waktu_mulai, $waktu_selesai, $id_shift = null) {
        $this->id_shift = $id_shift;
        $this->id_praktikum = $id_praktikum;
        $this->nama_shift = $nama_shift;
        $this->hari = $hari;
        $this->waktu_mulai = $waktu_mulai;
        $this->waktu_selesai = $waktu_selesai;
    }

    // Getter methods
    public function getIdShift() {
        return $this->id_shift;
    }

    public function getIdPraktikum() {
        return $this->id_praktikum;
    }

    public function getNamaShift() {
        return $this->nama_shift;
    }

    public function getHari() {
        return $this->hari;
    }

    public function getWaktuMulai() {
        return $this->waktu_mulai;
    }

    public function getWaktuSelesai() {
        return $this->waktu_selesai;
    }

    // Setter methods
    public function setIdShift($id_shift) {
        $this->id_shift = $id_shift;
    }

    public function setIdPraktikum($id_praktikum) {
        $this->id_praktikum = $id_praktikum;
    }

    public function setNamaShift($nama_shift) {
        $this->nama_shift = $nama_shift;
    }

    public function setHari($hari) {
        $this->hari = $hari;
    }

    public function setWaktuMulai($waktu_mulai) {
        $this->waktu_mulai = $waktu_mulai;
    }

    public function setWaktuSelesai($waktu_selesai) {
        $this->waktu_selesai = $waktu_selesai;
    }
}
