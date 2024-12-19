<?php

class KomentarDiskusi {
    private $id_komentar;
    private $id_forum;
    private $id_user_penulis;
    private $isi_komentar;
    private $tanggal_dibuat;

    // Constructor
    public function __construct($id_forum, $id_user_penulis, $isi_komentar, $tanggal_dibuat = null, $id_komentar = null) {
        $this->id_komentar = $id_komentar;
        $this->id_forum = $id_forum;
        $this->id_user_penulis = $id_user_penulis;
        $this->isi_komentar = $isi_komentar;
        $this->tanggal_dibuat = $tanggal_dibuat;
    }

    // Getter methods
    public function getIdKomentar() {
        return $this->id_komentar;
    }

    public function getIdForum() {
        return $this->id_forum;
    }

    public function getIdUserPenulis() {
        return $this->id_user_penulis;
    }

    public function getIsiKomentar() {
        return $this->isi_komentar;
    }

    public function getTanggalDibuat() {
        return $this->tanggal_dibuat;
    }

    // Setter methods
    public function setIdKomentar($id_komentar) {
        $this->id_komentar = $id_komentar;
    }

    public function setIdForum($id_forum) {
        $this->id_forum = $id_forum;
    }

    public function setIdUserPenulis($id_user_penulis) {
        $this->id_user_penulis = $id_user_penulis;
    }

    public function setIsiKomentar($isi_komentar) {
        $this->isi_komentar = $isi_komentar;
    }

    public function setTanggalDibuat($tanggal_dibuat) {
        $this->tanggal_dibuat = $tanggal_dibuat;
    }
}
