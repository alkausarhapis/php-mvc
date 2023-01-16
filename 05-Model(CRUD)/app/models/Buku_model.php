<?php

class Buku_model {
    private $table = 'buku';
    private $db;

    // Connect ke db
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

    public function tambahBuku( $data ) {
        $query = "INSERT INTO buku VALUES ('', :isbn, :judul, :penulis, :genre, :penerbit)";
        $this->db->query( $query );
        $this->db->bind( 'isbn', $data['isbn'] );
        $this->db->bind( 'judul', $data['judul'] );
        $this->db->bind( 'penulis', $data['penulis'] );
        $this->db->bind( 'genre', $data['genre'] );
        $this->db->bind( 'penerbit', $data['penerbit'] );

        // Untuk menjalankan
        $this->db->execute();

        // Untuk return nilai true atau false
        return $this->db->rowCount();
    }

    public function ubahBuku( $data ) {
        $query = "UPDATE buku SET isbn=:isbn, judul=:judul, penulis=:penulis, genre=:genre, penerbit=:penerbit WHERE id=:id";
        $this->db->query( $query );
        $this->db->bind( 'id', $data['id'] );
        $this->db->bind( 'isbn', $data['isbn'] );
        $this->db->bind( 'judul', $data['judul'] );
        $this->db->bind( 'penulis', $data['penulis'] );
        $this->db->bind( 'genre', $data['genre'] );
        $this->db->bind( 'penerbit', $data['penerbit'] );
        // Untuk menjalankan
        $this->db->execute();

        // Untuk return nilai true atau false
        return $this->db->rowCount();
    }

    public function hapusBuku( $id ) {
        $this->db->query( 'DELETE FROM ' . $this->table . ' WHERE id=:id' );
        $this->db->bind( 'id', $id );

        // Untuk menjalankan
        $this->db->execute();

        // Untuk return nilai true atau false
        return $this->db->rowCount();
    }

}