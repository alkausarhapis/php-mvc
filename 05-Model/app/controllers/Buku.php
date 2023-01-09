<?php

class Buku extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->model( 'Buku_model' )->getBook();
        $this->view( 'templates/header', $data );
        $this->view( 'buku/index', $data );
        $this->view( 'templates/footer' );
    }
}