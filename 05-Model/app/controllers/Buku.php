<?php

class Buku extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->model( 'Buku_model' )->getBook(); //instansiasi model
        $this->view( 'templates/header', $data );
        $this->view( 'buku/index', $data );
        $this->view( 'templates/footer' );
    }

    public function detail( $id ) {
        $data['judul'] = 'Detail Buku';
        $data['buku'] = $this->model( 'Buku_model' )->getBookById( $id );
        $this->view( 'templates/header', $data );
        $this->view( 'buku/detail', $data );
        $this->view( 'templates/footer' );
    }

    public function tambah() {
        if ( $this->model( 'Buku_model' )->tambahBuku( $_POST ) > 0 ) {
            header( 'Location: ' . BASEURL . '/buku' );
            exit;
        }
    }
}