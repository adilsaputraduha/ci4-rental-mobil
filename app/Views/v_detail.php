<?= $this->extend('layout/main')  ?>

<?= $this->section('content')  ?>

<div class="flex-features" id="features">
    <div class="container">
        <div class="flex-split">
            <div class="f-left wow fadeInUp" data-wow-delay="0s">
                <?php foreach ($productdetail as $row) : ?>
                    <div class="left-content">
                        <img class="img-fluid" src="<?= base_url(); ?>/assets/images/cars/<?= $row['mobil_gambar']; ?>" alt="">
                    </div>
            </div>
            <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
                <div class="right-content">
                    <h2><?= $row['merk_nama']; ?></h2>
                    <p>
                        Type : <?= $row['jenis_nama']; ?>
                    </p>
                    <ul>
                        <li><i class="ion-android-checkbox-outline"></i>Plat Number - <?= $row['mobil_no_polisi']; ?></li>
                        <li><i class="ion-android-checkbox-outline"></i>Years - <?= $row['mobil_tahun']; ?></li>
                        <li><i class="ion-android-checkbox-outline"></i>Capacity - <?= $row['mobil_kapasitas']; ?></li>
                        <li><i class="ion-android-checkbox-outline"></i>Price - <?= $row['mobil_harga_sewa']; ?></li>
                    </ul>
                    <a href="<?= base_url('product/checkout/' . $row['mobil_id'])  ?>" class="btn btn-primary btn-action btn-fill">Rental With Driver</a>
                    <a href="/checkout" class="btn btn-primary btn-action btn-fill">Rental Without Driver</a>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('')  ?>