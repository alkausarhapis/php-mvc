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
            Flasher::setFlash( 'Berhasil', 'Ditambahkan', 'success' );
            header( 'Location: ' . BASEURL . '/buku' );
            exit;
        } else {
            Flasher::setFlash( 'Gagal', 'Ditambahkan', 'danger' );
            header( 'Location: ' . BASEURL . '/buku' );
            exit;
        }
    }

    public function hapus( $id ) {
        if ( $this->model( 'Buku_model' )->hapusBuku( $id ) > 0 ) {
            Flasher::setFlash( 'Berhasil', 'Dihapus', 'warning' );
            header( 'Location: ' . BASEURL . '/buku' );
            exit;
        } else {
            Flasher::setFlash( 'Gagal', 'Dihapus', 'danger' );
            header( 'Location: ' . BASEURL . '/buku' );
            exit;
        }
    }

    public function ubah() {
        if ( $this->model( 'Buku_model' )->ubahBuku( $_POST ) > 0 ) {
            Flasher::setFlash( 'Berhasil', 'Diubah', 'warning' );
            header( 'Location: ' . BASEURL . '/buku' );
            exit;
        } else {
            Flasher::setFlash( 'Gagal', 'Dihapus', 'danger' );
            header( 'Location: ' . BASEURL . '/buku' );
            exit;
        }
    }

}