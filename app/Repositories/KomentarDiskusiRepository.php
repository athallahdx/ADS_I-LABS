<?php


class KomentarDiskusiRepository extends BaseRepository {

    // Define the table name as a constant
    protected $table = 'komentar_diskusi';

    // Constructor does not require a table name anymore
    public function __construct() {
        parent::__construct();
    }

    // Insert a new KomentarDiskusi record
    public function insert($data) {
        return parent::insert($data);
    }

    // Find a KomentarDiskusi by its ID
    public function findById($id_komentar) {
        return parent::findById($id_komentar);
    }

    // Update an existing KomentarDiskusi record
    public function update($id, $data) {
        return parent::update($id, $data);
    }

    // Delete a KomentarDiskusi record
    public function delete($id_komentar) {
        return parent::delete($id_komentar);
    }

    // Find comments by Forum ID
    public function findByForumId($id_forum) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_forum = :id_forum");
        $this->db->bind(':id_forum', $id_forum);
        return $this->db->resultSet();
    }

    // Find comments by User ID
    public function findByUserId($id_user_penulis) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_user_penulis = :id_user_penulis");
        $this->db->bind(':id_user_penulis', $id_user_penulis);
        return $this->db->resultSet();
    }
}
