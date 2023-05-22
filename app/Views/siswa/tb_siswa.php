            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Detail</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($siswa as $sis) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $sis['nama_siswa']; ?></td>
                            <td><?= $sis['alamat_siswa']; ?></td>
                            <td><?= $sis['telp_siswa']; ?></td>
                            <td><button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modal<?= $sis['id_siswa']; ?>">See Detail</button>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        <!-- modal start -->
                        <div class="modal fade" id="modal<?= $sis['id_siswa']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">ID_Siswa : <?= $sis['id_siswa']; ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- isi modal start -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        Nama Siswa
                                                        <div class="input-group input-group-sm mb-2">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                                            <input value="<?= $sis['nama_siswa']; ?>" name="nama_siswa" id="nama_siswa" type="text" class="form-control" placeholder="Nama">
                                                        </div>
                                                        Alamat Siswa
                                                        <div class="input-group input-group-sm mb-2">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                                            <input value="<?= $sis['alamat_siswa']; ?>" name="nama_siswa" id="nama_siswa" type="text" class="form-control" placeholder="Nama">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        No Telephone Siswa
                                                        <div class="input-group input-group-sm mb-2">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                                            <input value="<?= $sis['telp_siswa']; ?>" name="nama_siswa" id="nama_siswa" type="text" class="form-control" placeholder="Nama">
                                                        </div>
                                                        Tanggal Di buat
                                                        <div class="input-group input-group-sm mb-2">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                                            <input value="<?= $sis['created_at']; ?>" name="nama_siswa" id="nama_siswa" type="text" class="form-control" placeholder="Nama">
                                                        </div>
                                                        Aksi <br>
                                                        <button type="button" class="btn btn-sm btn-primary">Simpan</button>
                                                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- isi modal end -->
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal end -->
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Detail</th>
                    </tr>

                </tfoot>
            </table>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>

            <!-- modal -->