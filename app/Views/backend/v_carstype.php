<?= $this->extend('backend/layout/main')  ?>
<?= $this->extend('backend/layout/menu')  ?>

<?= $this->section('isi')  ?>

<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="icofont icofont-car"></i>
            </div>
            <div class="d-inline-block">
                <h5>Cars Type Data</h5>
                <span>Page for available cars type.</span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="/layout"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Master</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/carstype">Cars Type</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php if (!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-danger icons-alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled"></i>
        </button>
        <strong> Danger! Please check the form again. </strong>
        <?php echo session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success icons-alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled"></i>
        </button>
        <strong> Success! </strong>
        <br>
        <?php echo session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-mat btn-inverse col-2" data-toggle="modal" data-target="#addModal"><i class="icofont icofont-plus alt-3"></i>Add Data</button>
                    <a href="/carstype/exportPdf" class="btn btn-mat btn-primary col-2 pdf" target="_blank"><i class="icofont icofont-print alt-3"></i>Print Report</a>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="datatable" width="100%" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th>Name</th>
                                    <th>Create At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($type as $row) : $no++ ?>
                                    <tr>
                                        <td> <?= $no; ?></td>
                                        <td> <?= $row['jenis_nama']; ?></td>
                                        <td> <?= $row['jenis_create']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="#" class="btn-mini btn-primary btn-update" data-id="<?= $row['jenis_id']; ?>" data-nama="<?= $row['jenis_nama']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                                            <a href="#" class="btn-mini btn-danger btn-delete" data-id="<?= $row['jenis_id']; ?>"><i class="icofont icofont-ui-delete"></i></a>
                                            <a href="#" class="btn-mini btn-warning btn-detail" data-id="<?= $row['jenis_id']; ?>"><i class="icofont icofont-search-alt-1"></i></a>
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

<!-- Modal add data -->

<form method="POST" action="carstype/save" enctype="">
    <?= csrf_field(); ?>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Add Car Type Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label>Name *</label>
                        <input type="text" class="form-control" placeholder="Type Name" id="name" name="name" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- End modal add data -->

<!-- Modal update data -->

<form method="POST" action="carstype/update" enctype="">
    <?= csrf_field(); ?>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Update Car Type Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label>Name *</label>
                        <input type="text" class="form-control name" placeholder="Type Name" name="name">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-default btn-sm waves-effect " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light ">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- End modal edit data -->

<!-- Modal delete data -->

<form method="POST" action="carstype/delete" enctype="">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Confirm Delete Car Type Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <div class="col-md-12 col-lg-12">
                            <label for="userName-2" class="block">Are you sure the data is deleted?</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-default btn-sm waves-effect " data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light ">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- End modal delete data -->

<!-- Modal detail data -->

<form method="POST" action="carstype/delete" enctype="">
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Detail Type Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- End modal detail data -->

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