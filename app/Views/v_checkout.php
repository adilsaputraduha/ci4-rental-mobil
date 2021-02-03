<?= $this->extend('layout/main')  ?>

<?= $this->section('content')  ?>
<?php foreach ($productdetail as $row) : ?>
    <form action="<?= base_url('product/save/' . $row['mobil_id'] . '/' . $row['mobil_id']) ?>" method="POST" id="rental">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="mb-3" style="margin-top:150px;">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Rental</label>
                        <input type="date" name="tgl1" class="form-control date" id="tgl1" autocomplete="off" aria-describedby="emailHelp" placeholder="Enter Your Email">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Kembali</label>
                        <input type="date" name="tgl2" class="form-control date" id="tgl2" placeholder="Enter Your Name" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Lama</label>
                        <input type="text" name="lama" class="form-control lama" id="lama" placeholder="Enter Your Address">
                    </div>
                    <input type="hidden" name="harga" class="harga" id="harga" value="<?= $row['mobil_harga_sewa']; ?>">
                    <input type="hidden" name="total" class="total" id="total">
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <div class="flex-features" id="features">
            <div class="container">
                <div class="flex-split">
                    <div class="f-right">
                        <div class="right-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>
                                Check the data again before pressing the Order button.
                            </p>
                            <ul>
                                <li><i class="ion-android-checkbox-outline"></i>Plat Number - <?= $row['mobil_no_polisi']; ?></li>
                                <li><i class="ion-android-checkbox-outline"></i>Brand - <?= $row['merk_nama']; ?></li>
                                <li><i class="ion-android-checkbox-outline"></i>Type - <?= $row['jenis_nama']; ?></li>
                                <li><i class="ion-android-checkbox-outline"></i>Years - <?= $row['mobil_tahun']; ?></li>
                                <li><i class="ion-android-checkbox-outline"></i>Capacity - <?= $row['mobil_kapasitas']; ?></li>
                                <li><i class="ion-android-checkbox-outline"></i>Price - <?= $row['mobil_harga_sewa']; ?></li>
                                <li><i class="ion-android-checkbox-outline"></i>Quantity - 1</li>
                            </ul>
                            <button class="btn btn-primary btn-action btn-fill">Order</button>
                        </div>
                    </div>
                    <div class="f-left">
                        <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
                            <img class="img-fluid" src="<?= base_url(); ?>/assets/images/cars/<?= $row['mobil_gambar']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php endforeach; ?>

<script>
    $('#lama').on('change', function() {
        var lama = ($('#lama').val());
        var harga = ($('#harga').val());

        var total = harga * lama;
        $('#total').val(total);
    });
</script>
<?= $this->endSection('')  ?>