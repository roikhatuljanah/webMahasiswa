<div class="container p-5">
    <a href="<?= base_url('barang'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Barang</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('barang/add'); ?>">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div> 
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input type="text" name="prodi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="web2">Nilai WEB 2</label>
                    <input type="number" name="web2" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="bindo">Nilai Bahasa Indonesia</label>
                    <input type="number" name="bindo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="bing">Nilai Bahasa Inggris</label>
                    <input type="number" name="bing" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pbo">Nilai Pbo</label>
                    <input type="number" name="pbo" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
