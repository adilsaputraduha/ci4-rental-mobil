<?= $this->extend('layout/main')  ?>

<?= $this->section('content')  ?>

<div class="hero-section app-hero">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">Adminty Bootstrap 4 Admin Template</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        First ever Bootstrap 4 admin template with Flat UI Interface. <br class="hidden-xs"> Its best choice for your any complex project.
                    </p>
                    <a class="btn btn-primary btn-action" data-wow-delay="0.2s" href="#">Live Preview</a>
                    <a class="btn btn-primary btn-action" data-wow-delay="0.2s" href="#">Buy Now</a>
                </div>
                <div class="col-md-12">
                    <div class="hero-image">
                        <img class="img-fluid" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pricing-section no-color text-center" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="pricing-intro">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">Pricing Table</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Loream ipsum dummy text loream ipsum dummy text loream ipsum dummy text <br class="hidden-xs"> loream ipsum dummy text. Get the right plan that suits you.
                    </p>
                </div>
                <div class="row">
                    <?php $data = 0;
                    foreach ($product as $row) : ?>

                        <div class="col-sm-6 mb-5">
                            <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon">
                                    <img src="assets\logos\cart2.png" alt="Icon">
                                </div>
                                <div class="pricing-details">
                                    <h2><?= $row['merk_nama']; ?></h2>
                                    <span><?= "Rp " . number_format($row['mobil_harga_sewa']); ?></span>
                                    <p>
                                        <?= $row['jenis_nama']; ?>
                                    </p>
                                    <ul>
                                        <li>First basic feature </li>
                                    </ul>
                                    <a href="<?= base_url('product/detail/' . $row['mobil_id']) ?>" class="btn btn-primary btn-action btn-fill">Order</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('')  ?>