<?php

class PraktikumRepository extends BaseRepository {

    protected $table = 'user_shift';
    protected $table1 = 'praktikum';
    protected $table2 = 'shift';

    // Constructor - Pass the table name to the parent class
    public function __construct() {
        parent::__construct();
    }

    // Insert a new User-Shift relationship
    // Modify this to accept an array of data instead of UserShift object
    public function insert($data) {
        // Make sure that the data array contains id_profil, id_shift, and semester
        return parent::insert($data);
    }
    
    // Update an existing User-Shift relationship
    public function update($id, $data) {
        // $id is expected to be an associative array like ['id_profil' => 1, 'id_shift' => 2]
        if (!isset($id['id_profil']) || !isset($id['id_shift'])) {
            throw new InvalidArgumentException("Both 'id_profil' and 'id_shift' must be provided.");
        }
    
        $setClause = [];
        foreach ($data as $key => $value) {
            $setClause[] = "{$key} = :{$key}";
        }
    
        $setClauseString = implode(', ', $setClause);
        $sql = "UPDATE {$this->table} SET {$setClauseString} WHERE id_profil = :id_profil AND id_shift = :id_shift";
    
        $this->db->query($sql);
    
        foreach ($data as $key => $value) {
            $this->db->bind(":{$key}", $value);
        }
        $this->db->bind(':id_profil', $id['id_profil']);
        $this->db->bind(':id_shift', $id['id_shift']);
    
        return $this->db->execute();
    }
    

    // Delete a User-Shift relationship
    // Modify this to accept one parameter like in the base class
    public function delete($id) {
        $this->db->query("DELETE FROM {$this->table} WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    // Find comments by User ID
    public function findByUserId($id_user) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_profil = :id_profil");
        $this->db->bind(':id_profil', $id_user);
        return $this->db->resultSet();
    }

    // Find comments by Shift ID
    public function findByShiftId($id_shift) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_shift = :id_shift");
        $this->db->bind(':id_shift', $id_shift);
        return $this->db->resultSet();
    }

    public function selectShiftPraktikumByUserId($id_profil){
        $query = "
        SELECT p.*, s.* 
        FROM {$this->table1} AS p
        INNER JOIN {$this->table2} AS s ON p.id_praktikum = s.id_praktikum
        WHERE s.id_shift IN (
            SELECT us.id_shift
            FROM {$this->table} AS us
            WHERE us.id_profil = :id_profil)";
        $this->db->query($query);
        $this->db->bind(':id_profil', $id_profil);
        return $this->db->resultSet();  
    }

    public function selectShiftPraktikumByUserIdAndSemester($id, $semester) {
        $query = "
            SELECT p.*, s.* 
            FROM {$this->table1} AS p
            INNER JOIN {$this->table2} AS s ON p.id_praktikum = s.id_praktikum
            WHERE s.id_shift IN (
                SELECT us.id_shift
                FROM {$this->table} AS us
                WHERE us.id_profil = :id AND us.semester = :semester
            )
        ";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->bind(':semester', $semester);
        return $this->db->resultSet(); // Fetches multiple rows with both praktikum and shift data.
    }

    public function selectPraktikumDetails($id_profil, $id_praktikum) {
        $query = "SELECT 
                    p.nama_praktikum,
                    p.dosen_pengampu,
                    s.nama_shift,
                    s.hari,
                    s.waktu_mulai,
                    s.waktu_selesai,
                    s.ruangan,
                    p.deskripsi_praktikum,
                    ap.id_profil, 
                    u.fullname 
                FROM 
                    user_shift us
                JOIN 
                    shift s ON us.id_shift = s.id_shift
                JOIN 
                    praktikum p ON s.id_praktikum = p.id_praktikum
                JOIN 
                    asistensi_praktikum ap ON s.id_shift = ap.id_shift
                JOIN 
                    profil_user pu ON ap.id_profil = pu.id_profil 
                JOIN 
                    user u ON pu.id_user = u.id_user
                WHERE 
                    us.id_profil = :id_profil
                    AND p.id_praktikum = :id_praktikum;
                ";
        
        $this->db->query($query);
        $this->db->bind(':id_profil', $id_profil);
        $this->db->bind(':id_praktikum', $id_praktikum);

        return $this->db->single(); // Fetches a single row with praktikum details
    }

    public function selectMateriTugasPengumpulan($id_profil, $id_praktikum) {
        $query = "SELECT 
                    m.id_materi,
                    m.judul AS judul_materi,
                    m.deskripsi_materi,
                    m.file_materi,
                    m.tanggal_upload_materi,

                    t.id_tugas,
                    t.judul_tugas,
                    t.deskripsi_tugas,
                    t.file_tugas,
                    t.tanggal_upload_tugas,
                    t.deadline_tugas,

                    pt.id_pengumpulan,
                    pt.file_pengumpulan,
                    pt.status_pengumpulan,
                    pt.waktu_pengumpulan,
                    pt.nilai
                FROM 
                    materi m
                LEFT JOIN 
                    tugas t ON m.id_praktikum = t.id_praktikum
                LEFT JOIN 
                    pengumpulan_tugas pt ON t.id_tugas = pt.id_tugas AND pt.id_profil = :id_profil
                WHERE 
                    m.id_praktikum = :id_praktikum
                ORDER BY 
                    COALESCE(m.tanggal_upload_materi, t.tanggal_upload_tugas) ASC";

        $this->db->query($query);
        $this->db->bind(':id_profil', $id_profil);
        $this->db->bind(':id_praktikum', $id_praktikum);
        return $this->db->resultSet(); // Fetches multiple rows with materi, tugas, and pengumpulan data.
    }

    public function selectPresensiByUser($id_profil) {
        $query = "SELECT 
                    upr.id_presensi,
                    upr.status_presensi,
                    pr.tanggal_presensi,
                    sh.nama_shift,
                    sh.hari,
                    sh.waktu_mulai,
                    sh.waktu_selesai,
                    pk.nama_praktikum
                FROM 
                    user_presensi upr
                JOIN 
                    presensi pr ON upr.id_presensi = pr.id_presensi
                JOIN 
                    shift sh ON pr.id_shift = sh.id_shift
                JOIN 
                    praktikum pk ON sh.id_praktikum = pk.id_praktikum
                WHERE 
                    upr.id_profil = :id_profil
                ORDER BY 
                    pr.tanggal_presensi DESC;";
    
        $this->db->query($query);
        $this->db->bind(':id_profil', $id_profil);
    
        return $this->db->resultSet(); 
    }
    
    public function updatePresensi($id_profil, $id_presensi, $status) {
        $query = "UPDATE user_presensi 
                  SET status_presensi = :status, 
                      waktu_presensi = NOW()
                  WHERE id_profil = :id_profil 
                  AND id_presensi = :id_presensi";
        
        $this->db->query($query);
        $this->db->bind(':status', $status);
        $this->db->bind(':id_profil', $id_profil);
        $this->db->bind(':id_presensi', $id_presensi);
        
        return $this->db->execute();
    }

    public function selectAdminDetail($id_profil){
        $query = "Select
                    apr.*,
                    sh.*,
                    pr.*
                  FROM asistensi_praktikum apr
                    JOIN
                    shift sh ON apr.id_shift = sh.id_shift
                    JOIN
                    praktikum pr ON sh.id_praktikum = pr.id_praktikum
                  WHERE
                    apr.id_profil=:id_profil";
        $this->db->query($query);
        $this->db->bind(':id_profil', $id_profil);
        return $this->db->resultSet();
    }
    
    
    
}
