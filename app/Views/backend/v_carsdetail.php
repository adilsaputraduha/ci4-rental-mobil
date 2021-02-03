<?= $this->extend('backend/layout/main')  ?>
<?= $this->extend('backend/layout/menu')  ?>

<?= $this->section('isi')  ?>

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Cars Detail Data</h4>
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
                    <li class="breadcrumb-item"><a href="#!">Cars Detail</a>
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
                    <a href="/carsdetail/exportPdf" class="btn btn-mat btn-primary col-2 pdf" target="_blank">Print Report</a>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="datatable" width="100%" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Plat Number</th>
                                    <th>Brand</th>
                                    <th>Type</th>
                                    <th>Years</th>
                                    <th>Price</th>
                                    <th>Capacity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($detail as $row) : $no++ ?>
                                    <tr>
                                        <td> <?= $no; ?></td>
                                        <td> <?= $row['mobil_no_polisi']; ?></td>
                                        <td> <?= $row['merk_nama']; ?></td>
                                        <td> <?= $row['jenis_nama']; ?></td>
                                        <td> <?= $row['mobil_tahun']; ?></td>
                                        <td> <?= $row['mobil_harga_sewa']; ?></td>
                                        <td> <?= $row['mobil_kapasitas']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="#" class="btn-mini btn-primary btn-update" data-id="<?= $row['mobil_id']; ?>" data-nopolisi="<?= $row['mobil_no_polisi']; ?>" data-merk="<?= $row['mobil_id_merk']; ?>" data-jenis="<?= $row['mobil_id_jenis']; ?>" data-tahun="<?= $row['mobil_tahun']; ?>" data-harga="<?= $row['mobil_harga_sewa']; ?>" data-kapasitas="<?= $row['mobil_kapasitas']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                                            <a href="#" class="btn-mini btn-danger btn-delete" data-id="<?= $row['mobil_id']; ?>"><i class="icofont icofont-ui-delete"></i></a>
                                            <a href="#" class="btn-mini btn-warning btn-detail" data-id="<?= $row['mobil_id']; ?>"><i class="icofont icofont-search-alt-1"></i></a>
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

<form method="POST" action="carsdetail/save" enctype="">
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Add Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Plat Number *</label>
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <input id="userName-2" name="platnumber" type="text" class="required form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Brand *</label>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <select name="brand" class="select2 form-control custom-select">
                                <?php foreach ($merk as $row) : ?>
                                    <option value="<?= $row['merk_id']; ?>"><?= $row['merk_nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Type *</label>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <select name="type" class="select2 form-control custom-select">
                                <?php foreach ($type as $row) : ?>
                                    <option value="<?= $row['jenis_id']; ?>"><?= $row['jenis_nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Years *</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <input id="userName-2" name="years" type="text" class="required form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Price / Day*</label>
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <input id="userName-2" name="price" type="text" class="required form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Capacity *</label>
                        </div>
                        <div class="col-md-8 col-lg-5">
                            <input id="userName-2" name="capacity" type="text" class="required form-control">
                        </div>
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

<form method="POST" action="carsdetail/edit" enctype="">
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Update Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Plat Number *</label>
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <input id="userName-2" name="platnumber" type="text" class="required form-control platnumber">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Brand *</label>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <select name="brand" class="select2 form-control custom-select brand">
                                <?php foreach ($merk as $row) : ?>
                                    <option value="<?= $row['merk_id']; ?>"><?= $row['merk_nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Type *</label>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <select name="type" class="select2 form-control custom-select type">
                                <?php foreach ($type as $row) : ?>
                                    <option value="<?= $row['jenis_id']; ?>"><?= $row['jenis_nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Years *</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <input id="userName-2" name="years" type="text" class="required form-control years">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Price / Day*</label>
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <input id="userName-2" name="price" type="text" class="required form-control price">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Capacity *</label>
                        </div>
                        <div class="col-md-8 col-lg-5">
                            <input id="userName-2" name="capacity" type="text" class="required form-control capacity">
                        </div>
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

<form method="POST" action="carsdetail/delete" enctype="">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Delete Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <div class="col-md-4 col-lg-2">
                            <label for="userName-2" class="block">Are you sure the data is deleted?</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Yes</button>
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
        const nopolisi = $(this).data('nopolisi');
        const merk = $(this).data('merk');
        const jenis = $(this).data('jenis');
        const tahun = $(this).data('tahun');
        const harga = $(this).data('harga');
        const kapasitas = $(this).data('kapasitas');

        $('.id').val(id);
        $('.platnumber').val(nopolisi);
        $('.brand').val(merk);
        $('.type').val(jenis);
        $('.years').val(tahun);
        $('.price').val(harga);
        $('.capacity').val(kapasitas);
        $('#updateModal').modal('show');
    });

    $('.btn-detail').on('click', function() {
        $('#detailModal').modal('show');
    });
</script>

<?= $this->endSection(' ')  ?>