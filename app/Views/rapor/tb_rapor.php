<table id="tbsiswa" class="table display table-sm" style="width:100%">
    <thead>
        <tr class="bg-dark text-white">
            <th>No</th>
            <th>Name</th>
            <th>Kelas</th>
            <th>Status</th>
            <th style="text-align: right;">Detail</th>

        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($nilai as $nil) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $nil->nama_siswa; ?></td>
                <td><?= $nil->nama_kelas; ?></td>
                <td><?= $nil->status; ?></td>
                <td style="text-align: right;">
                    <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalrapor<?= $nil->id_nilai; ?>">See Full Raport</button>
                </td>
            </tr>

    </tbody>

</table>
<!-- modal isi start -->
<div class="modal fade" id="modalrapor<?= $nil->id_nilai; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <img style="height: 89px; width: 89px;" src="<?= base_url('src/') ?>img/empety.jpg" class="card-img-top">
                                </div>
                                <div class="col">
                                    <H3 class="text-center">Sekolah Tinggi IT Jaya Perkasa</H3>
                                    <p class="text-center">Jalan Guntung Manggis RT 20 RW 20 Kecamatan Landasan 70721 Telp. 0862737373727</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <h6>Laporan Hasil Belajar Peserta Didik</h6>
                                        <h6>Pada <?= $nil->semester; ?> Tahun Ajaran <?= $nil->thn_ajaran; ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Nama <br>
                                    No Telp <br>
                                    Kelas <br>
                                </div>
                                <div class="col">
                                    : <?= $nil->nama_siswa; ?><br>
                                    : <?= $nil->telp_siswa; ?><br>
                                    : <?= $nil->nama_kelas; ?><br>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <table id="tbnilai" class="table display table-sm" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="width: 20px;">No</th>
                                            <th>Mata Pelajaran</th>
                                            <th>KKM</th>
                                            <th>Nilai</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $o = 1; ?>
                                        <?php foreach ($mapel as $ma) : ?>
                                            <tr>
                                                <td><?= $o; ?></td>
                                                <td><?= $ma['nama_mapel']; ?></td>
                                                <td><?= $ma['mapel_kkm']; ?></td>
                                                <td>
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </td>
                                                <td>Lulus</td>
                                            </tr>
                                            <?php $o++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<!-- modal isi end -->
<?php endforeach; ?>
<script>
    $(document).ready(function() {
        $('#tbsiswa').DataTable();
    });
    $(document).ready(function() {
        $('#tbnilai').DataTable();
    });
</script>