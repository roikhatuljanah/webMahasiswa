<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
    <div class="card-body">
        <h5 class="h5">Recent Posts</h5>
        <hr>
        <div class="list-group list-group-flush">
            <div class="media mb-3">
                <div class="media-body">
                    <h6 class="mt-0 mb-1 h6">Komunitas Codeigniter Indonesia Mengadakan Meetup</h6>
                    <small class="text-secondary">23 Sep 2020 · baca 2 menit</small>
                </div>
                <a href=""><img class="rounded ml-3" src="https://mitigasi-rob.000webhostapp.com/off1.png" width="60" height="60"></a href>
            </div>
            <div class="media mb-3">
                <div class="media-body">
                    <h6 class="mt-0 mb-1 h6">9 Fitur Terbaru Codeigniter 4</h6>
                    <small class="text-secondary">23 Sep 2020 · baca 2 menit</small>
                </div>
                <img class="rounded ml-3" src="https://mitigasi-rob.000webhostapp.com/off2.png" width="60" height="60">
            </div>
            <div class="media mb-2">
                <div class="media-body">
                    <h6 class="mt-0 mb-1 h6">Tutorial Codeigniter Terlengkap Bahasa Indonesia</h6>
                    <small class="text-secondary">23 Sep 2020 · baca 2 menit</small>
                </div>
                <img class="rounded ml-3" src="https://mitigasi-rob.000webhostapp.com/off3.png" width="60" height="60">
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>