<table id="tb_nilai" class="display tb_nilai" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
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
                <td><?= $nil['status']; ?></td>
                <td>
                    <a href="/Nilai/<?= $nil['slug']; ?>" class="btn btn-outline-info btn-sm">Input Nilai</a>
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