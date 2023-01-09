<div class="container mt-5">
    <h1>Daftar Buku</h1>

    <div class="row">
        <div class="col-5">
            <ul class="list-group mt-5">
                <?php foreach ( $data['buku'] as $buku ): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?=$buku['judul'];?>
                    <a href="<?=BASEURL;?>/buku/detail/<?=$buku['id'];?>"
                        class="badge text-bg-primary text-decoration-none p-2">DETAIL</a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>