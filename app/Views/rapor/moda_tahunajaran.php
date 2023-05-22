<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="tbth" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Semester</th>
                            <th>Tahun Ajaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $noth = 1; ?>
                        <?php foreach ($thn_ajaran as $th) : ?>
                            <tr>
                                <td><?= $noth; ?></td>
                                <td><?= $th['semester']; ?></td>
                                <td><?= $th['thn_ajaran']; ?></td>
                            </tr>
                            <?php $noth++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Semester</th>
                            <th>Tahun Ajaran</th>
                        </tr>
                    </tfoot>
                </table>
                <script>
                    $(document).ready(function() {
                        $('#tbth').DataTable();
                    });
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>