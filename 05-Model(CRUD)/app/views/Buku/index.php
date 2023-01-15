<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <h1>Daftar Buku</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3 me-5" data-bs-toggle="modal" data-bs-target="#formModal">
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
                        <a href="<?=BASEURL;?>/buku/detail/<?=$buku['id'];?>"
                            class="badge text-bg-primary text-decoration-none p-2">DETAIL</a>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Input Buku</h1>
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