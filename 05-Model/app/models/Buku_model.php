<?php

class Buku_model {
    private $table = 'buku';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getBook() {
        $this->db->query( 'SELECT*FROM ' . $this->table );
        return $this->db->resultSet();
    }

    public function getBookById( $id ) {
        $this->db->query( 'SELECT*FROM ' . $this->table . ' WHERE id=:id' );
        $this->db->bind( 'id', $id );
        return $this->db->single();
    }
}