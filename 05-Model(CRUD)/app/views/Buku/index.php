<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <h1>Daftar Buku</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3 me-5" data-bs-toggle="modal"
                data-bs-target="#modalTambah">
                Tambah Buku
            </button>

            <div class="my-3">
                <?php Flasher::flash();?>
            </div>

            <ul class="list-group mt-2">
                <?php foreach ( $data['buku'] as $buku ): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?=$buku['judul'];?>
                    <div>
                        <a href="<?=BASEURL;?>/buku/hapus/<?=$buku['id'];?>"
                            class="badge text-bg-danger text-decoration-none p-2"
                            onclick="return confirm('Yang benerr?')">HAPUS</a>
                        <a href="<?=BASEURL;?>/buku/ubah" class="badge text-bg-success text-decoration-none p-2"
                            data-bs-toggle="modal" data-bs-target="#modalUbah<?=$buku['id'];?>">UBAH</a>
                        <a href="<?=BASEURL;?>/buku/detail/<?=$buku['id'];?>"
                            class="badge text-bg-primary text-decoration-none p-2">DETAIL</a>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Input Data Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?=BASEURL;?>/buku/tambah" method="post">
                    <div class="form-group">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="number" class="form-control" id="isbn" name="isbn" required>
                    </div>

                    <div class="form-group">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>

                    <div class="form-group">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" required>
                    </div>

                    <div class="form-group">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" required>
                    </div>

                    <div class="form-group">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <select class="form-select" name="penerbit" id="penerbit">
                            <option value="Penerbit Erlangga">Penerbit Erlangga</option>
                            <option value="Yudhistira">Yudhistira</option>
                            <option value="Ktsp">Ktsp</option>
                            <option value="Penerbit Haru">Penerbit Haru</option>
                            <option value="Penerbit Gramedia">Penerbit Gramedia</option>
                        </select>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal ubah -->
<?php foreach ( $data['buku'] as $buku ): ?>
<div class="modal fade" id="modalUbah<?=$buku['id'];?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Ubah Data Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?=BASEURL;?>/buku/ubah/" method="post">
                    <input type="hidden" name="id" value="<?=$buku["id"];?>">
                    <div class="form-group">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="number" class="form-control" id="isbn" name="isbn" value="<?=$buku['isbn'];?>"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?=$buku['judul'];?>"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis"
                            value="<?=$buku['penulis'];?>" required>
                    </div>

                    <div class=" form-group">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" value="<?=$buku['genre'];?>"
                            required>
                    </div>

                    <div class=" form-group">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <select class="form-select" name="penerbit" id="penerbit">
                            <option value="<?=$buku['penerbit'];?>"><?=$buku['penerbit'] . ' (Selected)';?></option>
                            <option value="Penerbit Erlangga">Penerbit Erlangga</option>
                            <option value="Yudhistira">Yudhistira</option>
                            <option value="Ktsp">Ktsp</option>
                            <option value="Penerbit Haru">Penerbit Haru</option>
                            <option value="Penerbit Gramedia">Penerbit Gramedia</option>
                        </select>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>