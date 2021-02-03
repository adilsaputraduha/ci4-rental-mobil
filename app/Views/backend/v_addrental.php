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

                <div class="card-block">
                    <h4 class="sub-title">Input Data Rental</h4>
                    <form action="/rental/save" method="POST" id="transaksi">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Rental</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl1">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-2 col-form-label">Id Penyewa</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-button">
                                    <input type="text" class="form-control idp" readonly name="idpenyewa" placeholder="Enter Id Penyewa">
                                    <span class="input-group-addon btn btn-primary" id="basic-addon10" data-toggle="modal" data-target="#customer">
                                        <span class="">Search</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Penyewa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control penyewa" readonly placeholder="Nama Penyewa">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-2 col-form-label">Id Mobil</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-button">
                                    <input type="text" class="form-control idm" readonly name="idmobil" placeholder="Enter Id Mobil">
                                    <input type="hidden" class="harga" id="harga" name="harga">
                                    <span class="input-group-addon btn btn-primary" id="basic-addon10" data-toggle="modal" data-target="#mobil">
                                        <span class="">Search</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Merk Mobil</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control merk" readonly placeholder="Merk Mobil">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Lama Sewa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lama" name="lama" placeholder="Enter Lama Sewa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="total" readonly name="total" placeholder="Total">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="customer" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Data Penyewa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="datatable" width="100%" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($customer as $row) : $no++ ?>
                            <tr>
                                <td> <?= $no; ?></td>
                                <td> <?= $row['penyewa_nama']; ?></td>
                                <td> <?= $row['penyewa_email']; ?></td>
                                <td> <?= $row['penyewa_alamat']; ?></td>
                                <td> <?= $row['penyewa_no_telp']; ?></td>
                                <td style="text-align: center;">
                                    <a href="#" class="btn-mini btn-primary btn-pilih2" data-id="<?= $row['penyewa_id']; ?>" data-nama="<?= $row['penyewa_nama']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mobil" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Data Mobil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                        foreach ($productdetail as $row) : $no++ ?>
                            <tr>
                                <td> <?= $no; ?></td>
                                <td> <?= $row['mobil_no_polisi']; ?></td>
                                <td> <?= $row['merk_nama']; ?></td>
                                <td> <?= $row['jenis_nama']; ?></td>
                                <td> <?= $row['mobil_tahun']; ?></td>
                                <td> <?= $row['mobil_harga_sewa']; ?></td>
                                <td> <?= $row['mobil_kapasitas']; ?></td>
                                <td style="text-align: center;">
                                    <a href="#" class="btn-mini btn-primary btn-pilih" data-id="<?= $row['mobil_id']; ?>" data-merk="<?= $row['merk_nama']; ?>" data-harga="<?= $row['mobil_harga_sewa']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $('#lama').on('change', function() {
        var harga = $('#harga').val();
        var lama = $('#lama').val();

        var total = harga * lama;
        $('#total').val(total);
    });

    $('.btn-pilih').on('click', function() {
        const id = $(this).data('id');
        const merk = $(this).data('merk');
        const harga = $(this).data('harga');

        $('.idm').val(id);
        $('.merk').val(merk);
        $('.harga').val(harga);
        $('#mobil').modal('hide');
    });

    $('.btn-pilih2').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');

        $('.idp').val(id);
        $('.penyewa').val(nama);
        $('#customer').modal('hide');
    });
</script>

<?= $this->endSection(' ')  ?>