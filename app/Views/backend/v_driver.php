<?= $this->extend('backend/layout/main')  ?>
<?= $this->extend('backend/layout/menu')  ?>

<?= $this->section('isi')  ?>

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Driver Data</h4>
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
                    <li class="breadcrumb-item"><a href="#!">Driver</a>
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
                    <button class="btn btn-mat btn-inverse col-2" data-toggle="modal" data-target="#addModal">Add Data</button>
                    <a href="#" class="btn btn-mat btn-primary col-2">Print Report</a>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="datatable" width="100%" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($driver as $row) : $no++ ?>
                                    <tr>
                                        <td> <?= $no; ?></td>
                                        <td> <?= $row['driver_nama']; ?></td>
                                        <td> <?= $row['driver_jenis_kelamin']; ?></td>
                                        <td> <?= $row['driver_alamat']; ?></td>
                                        <td> <?= $row['driver_nohp']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="#" class="btn-mini btn-primary btn-update" data-id="<?= $row['driver_id']; ?>" data-nama="<?= $row['driver_nama']; ?>" data-jenkel="<?= $row['driver_jenis_kelamin']; ?>" data-alamat="<?= $row['driver_alamat']; ?>" data-notelp="<?= $row['driver_nohp']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                                            <a href="#" class="btn-mini btn-danger btn-delete" data-id="<?= $row['driver_id']; ?>"><i class="icofont icofont-ui-delete"></i></a>
                                            <a href="#" class="btn-mini btn-warning btn-detail" data-id="<?= $row['driver_id']; ?>"><i class="icofont icofont-search-alt-1"></i></a>
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

<form method="POST" action="driver/save" enctype="">
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Add Driver Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mb-2">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter Driver Name" name="nama" required autocomplete="off">
                    </div>
                    <div class="col-md-8 mb-2">
                        <label>Gender</label>
                        <select name="jenkel" id="jenkel" class="form-control" placeholder="Enter Driver Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Enter Driver Address" name="alamat" required autocomplete="off">
                    </div>
                    <div class="col-md-8 mb-2">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter Driver Phone Number" name="nohp" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- End modal add data -->

<!-- Modal update data -->

<form method="POST" action="driver/update" enctype="">
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Update Driver Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mb-2">
                        <label>Name</label>
                        <input type="text" class="form-control nama" placeholder="Enter Driver Name" name="nama" required autocomplete="off">
                    </div>
                    <div class="col-md-8 mb-2">
                        <label>Gender</label>
                        <select name="jenkel" id="jenkel" class="form-control jenkel" placeholder="Enter Driver Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Address</label>
                        <input type="text" class="form-control alamat" placeholder="Enter Driver Address" name="alamat" required autocomplete="off">
                    </div>
                    <div class="col-md-8 mb-2">
                        <label>Phone Number</label>
                        <input type="text" class="form-control nohp" placeholder="Enter Driver Phone Number" name="nohp" required autocomplete="off">
                    </div>
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

<!-- End modal edit data -->

<!-- Modal delete data -->

<form method="POST" action="driver/delete" enctype="">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Confirm Delete Driver Data</h6>
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
        const jenkel = $(this).data('jenkel');
        const alamat = $(this).data('alamat');
        const nohp = $(this).data('notelp');

        $('.id').val(id);
        $('.nama').val(nama);
        $('.jenkel').val(jenkel);
        $('.alamat').val(alamat);
        $('.nohp').val(nohp);

        $('#updateModal').modal('show');
    });

    $('.btn-detail').on('click', function() {
        $('#detailModal').modal('show');
    });
</script>

<?= $this->endSection(' ')  ?>