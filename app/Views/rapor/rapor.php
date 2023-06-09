<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header">Data Rapor</div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    Kelas Siswa
                    <select class="form-select form-select-sm">
                        <option selected>Open this select menu</option>
                        <?php foreach ($kelas as $kel) : ?>
                            <option value="<?= $kel['id_kelas']; ?>"><?= $kel['nama_kelas']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    Tahun Ajaran
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control input_ajaran" placeholder="Tahun Ajaran">
                        <input type="text" class="form-control input_ajaran2" placeholder="Tahun Ajaran" hidden>
                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Pilih Tahun Ajaran</button>
                    </div>
                    <?= $this->include('rapor/modal_tahunajaran'); ?>

                    <button class="btn btn-sm btn-outline-primary float-end">Tampilkan Data</button>
                </div>
            </div>

        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <?= $this->include('rapor/tb_rapor'); ?>
        </div>
    </div>
</div>