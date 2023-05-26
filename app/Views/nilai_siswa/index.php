<div class="container-fluid mt-3 mb-3">
    <div class="card">
        <div class="card-header">Input Nilai Siswa</div>
        <div class="card-body">
            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="Nilai" method="post">
                                <div class="row">
                                    <div class="col">
                                        Kelas
                                        <select name="kelas" class="form-select form-select-sm">
                                            <option selected value="">Kelas Siswa</option>
                                            <?php foreach ($kelas as $ke) : ?>
                                                <option value="<?= $ke['id_kelas']; ?>"><?= $ke['nama_kelas']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        Status
                                        <select name="status" class="form-select form-select-sm">
                                            <option selected value="">Status Siswa</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non Aktif">Non Aktif</option>
                                            <option value="">Tampilkan Semua</option>
                                        </select>
                                    </div>


                                    <div class="col">
                                        Semester Tahun Ajaran
                                        <div class="input-group input-group-sm mb-2">
                                            <input name="thn_ajaran" type="text" class="form-control input_ajaran2" hidden>
                                            <input type="text" class="form-control input_ajaran" placeholder="Masukan Kelas">
                                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalthajaran"><i class="fa-solid fa-magnifying-glass"></i></a>
                                            <?= $this->include('nilai_siswa/modal_thnajaran'); ?>

                                        </div>
                                        <br>
                                        <div class="float-end">
                                            <button class="btn btn-sm btn-primary  ml-2" type="reset">Reset</button>
                                            <button class="btn btn-sm btn-primary ">Tampilkan</button>
                                        </div>
                                    </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- Card Input Nilai -->

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