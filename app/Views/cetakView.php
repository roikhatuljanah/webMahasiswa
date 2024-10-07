<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container pt-5">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Barang</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Web2</th>
                            <th>Bindo</th>
                            <th>Bing</th>
                            <th>PBO</th>
                            <th>Jumlah Nilai</th>
                            <th>Rata-Rata</th>
                            <th>Keterangan</th>
                            <th>Predikat</th>
                            <th>Yudisium</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $totalJumlahNilai = 0;
                        $totalRataRata = 0;

                        foreach ($getBarang as $isi) {
                            $totalNilai = $isi['web2'] + $isi['bindo'] + $isi['bing'] + $isi['pbo'];
                            $rataRata = $totalNilai / 4;
                            $totalJumlahNilai += $totalNilai; // Menambahkan nilai ke total
                            $totalRataRata += $rataRata; // Menambahkan nilai ke total Rata-Rata

                            $keterangan = ($rataRata < 65) ? 'Mengulang' : 'Berhasil';

                            if ($rataRata > 80 && $rataRata < 100) {
                                $predikat = 'A';
                                $yudisium = 'Sangat Memuaskan';
                            } elseif ($rataRata > 70 && $rataRata < 80) {
                                $predikat = 'B';
                                $yudisium = 'Memuaskan';
                            } elseif ($rataRata > 60 && $rataRata < 70) {
                                $predikat = 'C';
                                $yudisium = 'Cukup Memuaskan';
                            } elseif ($rataRata > 50 && $rataRata < 60) {
                                $predikat = 'D';
                                $yudisium = 'Kurang Memuaskan';
                            } else {
                                $predikat = 'E';
                                $yudisium = 'Mengulang';
                            }
                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nim']; ?></td>
                                <td><?= $isi['nama']; ?></td>
                                <td><?= $isi['prodi']; ?></td>
                                <td><?= $isi['web2']; ?></td>
                                <td><?= $isi['bindo']; ?></td>
                                <td><?= $isi['bing']; ?></td>
                                <td><?= $isi['pbo']; ?></td>
                                <td><?= number_format($totalNilai); ?></td>
                                <td><?= number_format($rataRata); ?></td>
                                <td><?= $keterangan; ?></td>
                                <td><?= $predikat; ?></td>
                                <td><?= $yudisium; ?></td>
                            </tr>
                            <?php
                            $no++;
                        } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="8">Subtotal</th>
                            <td><?= number_format($totalJumlahNilai); ?></td>
                            <td><?= number_format($totalRataRata); ?></td>
                            <th colspan="3"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
window.print();
</script>
<?= $this->endSection() ?>