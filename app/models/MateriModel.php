<?php

class Materi {
    private $id_materi;
    private $id_praktikum;
    private $judul;
    private $deskripsi_materi;
    private $file_materi;
    private $tanggal_upload_materi;

    // Constructor
    public function __construct($id_praktikum, $judul, $deskripsi_materi, $file_materi, $tanggal_upload_materi, $id_materi = null) {
        $this->id_materi = $id_materi;
        $this->id_praktikum = $id_praktikum;
        $this->judul = $judul;
        $this->deskripsi_materi = $deskripsi_materi;
        $this->file_materi = $file_materi;
        $this->tanggal_upload_materi = $tanggal_upload_materi;
    }

    // Getter methods
    public function getIdMateri() {
        return $this->id_materi;
    }

    public function getIdPraktikum() {
        return $this->id_praktikum;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getDeskripsiMateri() {
        return $this->deskripsi_materi;
    }

    public function getFileMateri() {
        return $this->file_materi;
    }

    public function getTanggalUploadMateri() {
        return $this->tanggal_upload_materi;
    }

    // Setter methods
    public function setIdMateri($id_materi) {
        $this->id_materi = $id_materi;
    }

    public function setIdPraktikum($id_praktikum) {
        $this->id_praktikum = $id_praktikum;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function setDeskripsiMateri($deskripsi_materi) {
        $this->deskripsi_materi = $deskripsi_materi;
    }

    public function setFileMateri($file_materi) {
        $this->file_materi = $file_materi;
    }

    public function setTanggalUploadMateri($tanggal_upload_materi) {
        $this->tanggal_upload_materi = $tanggal_upload_materi;
    }
}
