<table id="tb_nilai" class="display tb_nilai" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Semester / Thn Ajaran</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($nilai as $nil) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $nil['nama_siswa']; ?></td>
                <td><?= $nil['nama_kelas']; ?></td>
                <td><?= $nil['semester']; ?> - <?= $nil['thn_ajaran']; ?></td>

                <td><?= $nil['status']; ?></td>
                <td>
                    <button class="btn btn-outline-info btn-sm">See Full Raport</button>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>

    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('.tb_nilai').DataTable();
    });
</script>