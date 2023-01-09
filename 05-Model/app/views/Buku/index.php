<div class="container mt-5">
    <h1>Daftar Buku</h1>

    <table class="table table-striped text-center mt-5">
        <thead class="bg-primary ">
            <tr>
                <th class="text-light">ISBN</th>
                <th class="text-light">Judul</th>
                <th class="text-light">Penulis</th>
                <th class="text-light">Genre</th>
                <th class="text-light">Penerbit</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ( $data['buku'] as $buku ): ?>
            <tr>
                <td class="fw-3"><?=$buku['isbn'];?></td>
                <td class="fw-3"><?=$buku['judul'];?></td>
                <td class="fw-3"><?=$buku['penulis'];?></td>
                <td class="fw-3"><?=$buku['genre'];?></td>
                <td class="fw-3"><?=$buku['penerbit'];?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>