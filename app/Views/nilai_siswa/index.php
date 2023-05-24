<div class="container-fluid mt-3 mb-3">
    <div class="card">
        <div class="card-header">Input Nilai Siswa</div>
        <div class="card-body">
            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    Kelas
                                    <select class="form-select form-select-sm">
                                        <option selected>Kelas Siswa</option>
                                        <?php foreach ($kelas as $ke) : ?>
                                            <option value="3"><?= $ke['nama_kelas']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    Status
                                    <select class="form-select form-select-sm">
                                        <option selected>Status Siswa</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Non Aktif</option>
                                        <option value="3">Tampilkan Semua</option>
                                    </select>
                                </div>


                                <div class="col">
                                    Semester Tahun Ajaran
                                    <div class="input-group input-group-sm mb-2">
                                        <input type="text" class="form-control" placeholder="Masukan Kelas">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalthajaran"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        <?= $this->include('nilai_siswa/modal_thnajaran'); ?>

                                    </div>
                                    <br>
                                    <button class="btn btn-sm btn-primary float-end">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <?= $this->include('nilai_siswa/tb_nilai'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>