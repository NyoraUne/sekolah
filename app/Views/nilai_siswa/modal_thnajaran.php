<style>
    /* .dataTables_length {
        display: none;
    } */
    .selected {
        background-color: #add8e6;
    }
</style>
<!-- Modal -->
<div class="modal fade" id="modalthajaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Tahun Ajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="thajaran" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Semester</th>
                            <th>Tahun Ajaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($thn_ajaran as $th) : ?>
                            <tr>
                                <td><?= $th['id_thn_ajaran']; ?></td>
                                <td><?= $th['semester']; ?></td>
                                <td><?= $th['thn_ajaran']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    $(document).ready(function() {
                        $('#thajaran').DataTable();
                    });
                </script>
                <script>
                    var table = document.getElementById("thajaran");
                    var rows = table.getElementsByTagName("tr");

                    for (var i = 0; i < rows.length; i++) {
                        rows[i].onclick = function() {
                            // Reset warna pada semua baris
                            for (var j = 0; j < rows.length; j++) {
                                rows[j].classList.remove("selected");
                            }

                            // Tambahkan warna pada baris yang dipilih
                            this.classList.add("selected");

                            // Ambil data dari kolom pertama pada baris yang dipilih
                            var id = this.cells[0].innerHTML;
                            var semestar = this.cells[1].innerHTML;
                            var thn = this.cells[2].innerHTML;

                            // Set data ke input
                            var input = document.getElementsByClassName("input_ajaran")[0];
                            var input2 = document.getElementsByClassName("input_ajaran2")[0];
                            var input = document.getElementsByClassName("input_ajaran3")[0];
                            var input2 = document.getElementsByClassName("input_ajaran4")[0];
                            input2.value = id;
                            input.value = semestar + " - " + thn;
                        };
                    }
                </script>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>