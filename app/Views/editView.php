<div class="container p-5">
    <a href="<?= base_url('barang'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Barang: <?= $barang['nim'];?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('barang/update'); ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" value="<?= $barang['nama']; ?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input type="text" value="<?= $barang['prodi']; ?>" name="prodi" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="web2">Nilai WEB</label>
                    <input type="number" value="<?= $barang['web2']; ?>" name="web2" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="bindo">Nilai Bahasa Indonesia</label>
                    <input type="number" value="<?= $barang['bindo']; ?>" name="bindo" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="bing">Nilai Bahasa Inggris</label>
                    <input type="number" value="<?= $barang['bing']; ?>" name="bing" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="pbo">Nilai Pbo</label>
                    <input type="number" value="<?= $barang['pbo']; ?>" name="pbo" required class="form-control">
                </div>
                <input type="hidden" value="<?= $barang['nim']; ?>" name="nim">
                <button class="btn btn-success">Edit Data</button>
            </form>
        </div>
    </div>
</div>
