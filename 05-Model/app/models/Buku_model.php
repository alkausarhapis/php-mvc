<?php

class Buku_model {
    // Koneksi pdo
    private $dbh, $stmt;

    public function __construct() {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=mvcdb';

        try {
            $this->dbh = new PDO( $dsn, 'root', '' );
        } catch ( PDOException $e ) {
            die( $e->getMessage() );
        }
    }

    public function getBook() {
        $this->stmt = $this->dbh->prepare( 'SELECT*FROM buku' );
        $this->stmt->execute();
        return $this->stmt->fetchAll( PDO::FETCH_ASSOC );
    }
}