<?php

abstract class BaseRepository {
    protected $db;
    protected $table;

    public function __construct() {
        $this->db = new Database();
    }

    // Fetch all records
    public function getAll() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    // Find a record by ID
    public function findById($id) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    // Insert a new record
    public function insert($data) {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));

        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})";
        $this->db->query($sql);

        foreach ($data as $key => $value) {
            $this->db->bind(":{$key}", $value);
        }

        return $this->db->execute();
    }

    // Update an existing record by ID
    public function update($id, $data) {
        $setClause = [];
        foreach ($data as $key => $value) {
            $setClause[] = "{$key} = :{$key}";
        }

        $setClauseString = implode(', ', $setClause);
        $sql = "UPDATE {$this->table} SET {$setClauseString} WHERE id = :id";

        $this->db->query($sql);

        foreach ($data as $key => $value) {
            $this->db->bind(":{$key}", $value);
        }
        $this->db->bind(':id', $id);

        return $this->db->execute();
    }

    // Delete a record by ID
    public function delete($id) {
        $this->db->query("DELETE FROM {$this->table} WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    // Count total rows
    public function count() {
        $this->db->query("SELECT COUNT(*) FROM {$this->table}");
        return $this->db->singleColumn();
    }
}
