<?= $this->extend('backend/layout/main')  ?>
<?= $this->extend('backend/layout/menu')  ?>

<?= $this->section('isi')  ?>

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Rental Data</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Master</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Rental</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header">
                    <a href="/rental/add" class="btn btn-mat btn-inverse col-2">Add Data</a>
                    <!-- <button class="btn btn-mat btn-inverse col-2">Add Data</button> -->
                    <a href="#" class="btn btn-mat btn-primary col-2">Print Report</a>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="datatable" width="100%" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th>Tgl Sewa</th>
                                    <th>Penyewa</th>
                                    <th>Mobil</th>
                                    <th>Lama</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($sewa as $row) : $no++ ?>
                                    <tr>
                                        <td> <?= $no; ?></td>
                                        <td> <?= $row['sewa_tgl']; ?></td>
                                        <td> <?= $row['penyewa_nama']; ?></td>
                                        <td> <?= $row['merk_nama']; ?></td>
                                        <td> <?= $row['sewa_lama']; ?></td>
                                        <td> <?= $row['sewa_total']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="#" class="btn-mini btn-danger btn-delete" data-id="<?= $row['sewa_no_nota']; ?>"><i class="icofont icofont-ui-delete"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.btn-delete').on('click', function() {
        const id = $(this).data('id');
        $('.id').val(id);
        $('#deleteModal').modal('show');
    });

    $('.btn-update').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        $('.id').val(id);
        $('.name').val(nama);
        $('#updateModal').modal('show');
    });

    $('.btn-detail').on('click', function() {
        $('#detailModal').modal('show');
    });
</script>

<?= $this->endSection(' ')  ?>