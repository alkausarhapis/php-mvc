<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$data['buku']['judul'];?></h5>
            <h6 class="card-subtitle mb-3 text-muted">ISBN : <?=$data['buku']['isbn'];?></h6>
            <li class="list-group-item">Genre : <?=$data['buku']['genre'];?></li>
            <li class="list-group-item">Penulis : <?=$data['buku']['penulis'];?></li>
            <li class="list-group-item mb-3">Penerbit : <?=$data['buku']['penerbit'];?></li>
            <a href="<?=BASEURL;?>/buku" class="badge text-bg-primary p-2 text-decoration-none">Kembali</a>
        </div>
    </div>

</div>