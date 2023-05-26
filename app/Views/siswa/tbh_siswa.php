            <form action="Siswa/tambah_siswa" method="post">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col">
                        Nama Siswa
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input name="nama_siswa" id="nama_siswa" type="text" class="form-control" placeholder="Nama">
                        </div>
                        Alamat Siswa
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-map-location-dot"></i></span>
                            <input name="alamat_siswa" id="alamat_siswa" type="text" class="form-control" placeholder="Alamat">
                        </div>

                    </div>
                    <div class="col">
                        No Telp
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-square-phone"></i></span>
                            <input name="telp_siswa" id="telp_siswa" type="text" class="form-control" placeholder="No Telephone">
                        </div>
                        Kelas Siswa
                        <select name="kelas_siswa" id="kelas_siswa" class="form-select form-select-sm mb-3">
                            <option selected>Pilih Kelas Untuk Siswa</option>
                            <?php foreach ($kelas as $k) : ?>
                                <option value="<?= $k['id_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
                            <?php endforeach ?>
                        </select>
                        <button type="reset" class="btn btn-primary btn-sm">Reset</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>

            </form>