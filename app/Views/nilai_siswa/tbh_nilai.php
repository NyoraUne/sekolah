<?php foreach ($siswa as $si) : ?>
    <form action="simpan_nilai/<?= $si['slug']; ?>" method="post">
        <input name="id_kelas_siswa" type="text" value="<?= $si['id_kelas_siswa']; ?>" hidden>
        <div class="container-fluid mt-3 mb-2">
            <div class="card mt-3">
                <div class="card-header"> ID Siswa : <?= $si['id_siswa']; ?></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    Nama Siswa
                                    <div class="input-group input-group-sm mb-2">
                                        <input type="text" class="form-control input_ajaran " value="<?= $si['nama_siswa']; ?>" disabled>
                                    </div>
                                    Kelas Siswa
                                    <div class="input-group input-group-sm mb-2">
                                        <input type="text" class="form-control input_ajaran" value="<?= $si['nama_kelas']; ?>" disabled>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Mapel
                                            <select name="id_mapel" class="form-select form-select-sm">
                                                <option selected value="">Pilih Mapel</option>
                                                <?php foreach ($mapel as $ma) : ?>
                                                    <option value="<?= $ma['id_mapel']; ?>"><?= $ma['nama_mapel']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col">
                                            Nilai
                                            <div class="input-group input-group-sm mb-2">
                                                <input type="text" name="nilai" class="form-control input_ajaran" placeholder="1-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    Status Siswa
                                    <div class="input-group input-group-sm mb-2">
                                        <input type="text" class="form-control input_ajaran" value="<?= $si['status']; ?>" disabled>
                                    </div>
                                    Akun Di Buat
                                    <div class="input-group input-group-sm mb-2">
                                        <input type="text" class="form-control input_ajaran" value="<?= $si['created_at']; ?>" disabled>
                                    </div>
                                    Semester Tahun Ajaran
                                    <div class="input-group input-group-sm mb-2">
                                        <input name="thn_ajaran" type="text" class="form-control input_ajaran4" hidden>
                                        <input type="text" class="form-control input_ajaran3" placeholder="Masukan Kelas">
                                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalthajaran"><i class="fa-solid fa-magnifying-glass"></i></a>
                                        <?= $this->include('nilai_siswa/modal_thnajaran'); ?>

                                    </div>

                                    <div class="float-end">
                                        <button class="btn btn-sm btn-primary">Simpan</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <style>
                                        td {
                                            cursor: pointer;
                                        }
                                    </style>

                                    <table id="tbnilai" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Thn Ajaran</th>
                                                <th>Mapel</th>
                                                <th>Kkm</th>
                                                <th>Nilai</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>2003/2004</td>
                                                <td>MTK</td>
                                                <td>60</td>
                                                <td>79</td>
                                                <td>Lulus</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <script>
                                        $(document).ready(function() {
                                            $('#tbnilai').DataTable();
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </form>