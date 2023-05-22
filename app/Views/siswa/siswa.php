<div class="container-fluid mt-2 mb-2 ml-2 mr-2">
    <div class="card mb-3">
        <div class="card-header">Input Data Siswa</div>
        <div class="card-body">
            <!-- Start -->
            <?= $this->include('siswa/tbh_siswa'); ?>

            <!-- end -->
        </div>
    </div>

    <div class="card">
        <div class="card-header">Table Siswa</div>
        <div class="card-body">
            <!-- table -->
            <?= $this->include('siswa/tb_siswa'); ?>
            <!-- end table -->
        </div>
    </div>
</div>