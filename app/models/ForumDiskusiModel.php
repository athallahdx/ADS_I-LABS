<?php

class ForumDiskusi {
    private $id_forum;
    private $id_praktikum;
    private $id_user_admin;
    private $topik;
    private $deskripsi;
    private $tanggal_dibuat;

    // Constructor
    public function __construct($id_praktikum, $id_user_admin, $topik, $deskripsi, $tanggal_dibuat = null, $id_forum = null) {
        $this->id_forum = $id_forum;
        $this->id_praktikum = $id_praktikum;
        $this->id_user_admin = $id_user_admin;
        $this->topik = $topik;
        $this->deskripsi = $deskripsi;
        $this->tanggal_dibuat = $tanggal_dibuat;
    }

    // Getter methods
    public function getIdForum() {
        return $this->id_forum;
    }

    public function getIdPraktikum() {
        return $this->id_praktikum;
    }

    public function getIdUserAdmin() {
        return $this->id_user_admin;
    }

    public function getTopik() {
        return $this->topik;
    }

    public function getDeskripsi() {
        return $this->deskripsi;
    }

    public function getTanggalDibuat() {
        return $this->tanggal_dibuat;
    }

    // Setter methods
    public function setIdForum($id_forum) {
        $this->id_forum = $id_forum;
    }

    public function setIdPraktikum($id_praktikum) {
        $this->id_praktikum = $id_praktikum;
    }

    public function setIdUserAdmin($id_user_admin) {
        $this->id_user_admin = $id_user_admin;
    }

    public function setTopik($topik) {
        $this->topik = $topik;
    }

    public function setDeskripsi($deskripsi) {
        $this->deskripsi = $deskripsi;
    }

    public function setTanggalDibuat($tanggal_dibuat) {
        $this->tanggal_dibuat = $tanggal_dibuat;
    }
}
