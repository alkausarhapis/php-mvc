<?php

class About {
    public function index( $nama = 'admin', $pekerjaan = 'pengangguran' ) {
        echo "Halo $nama, saya adalah $pekerjaan";
    }

    public function page() {
        echo "Controller about method page";
    }
}