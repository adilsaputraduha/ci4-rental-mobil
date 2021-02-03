<?= $this->extend('backend/layout/main')  ?>

<?= $this->section('menu')  ?>

<div class="pcoded-navigatio-lavel">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="active">
        <a href="<?php echo site_url('layout'); ?>">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
        </a>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
            <span class="pcoded-mtext">Master</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="<?= site_url('carstype'); ?>">
                    <span class="pcoded-mtext">Cars Type</span>
                </a>
            </li>
            <li class="">
                <a href="<?= site_url('carsbrand'); ?>">
                    <span class="pcoded-mtext">Cars Brand</span>
                </a>
            </li>
            <li class=" ">
                <a href="<?= site_url('carsdetail'); ?>">
                    <span class="pcoded-mtext">Cars Detail</span>
                </a>
            </li>
            <!-- <li class=" ">
                                            <a href="<?php echo site_url('backend/product/product-feature'); ?>">
                                                <span class="pcoded-mtext">Product Feature</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?php echo site_url('backend/product/product-specification'); ?>">
                                                <span class="pcoded-mtext">Product Specifications</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?php echo site_url('backend/product/product-gallery'); ?>">
                                                <span class="pcoded-mtext">Product Gallery</span>
                                            </a>
                                        </li> -->
        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
            <span class="pcoded-mtext">Person</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="<?= site_url('customer'); ?>">
                    <span class="pcoded-mtext">Customer</span>
                </a>
            </li>
            <li class="">
                <a href="<?= site_url('driver'); ?>">
                    <span class="pcoded-mtext">Driver</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="<?= site_url('rental'); ?>">
            <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
            <span class="pcoded-mtext">Rental</span>
        </a>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
            <span class="pcoded-mtext">Articles</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="">
                <a href="<?php echo site_url('backend/article/news'); ?>">
                    <span class="pcoded-mtext">News</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo site_url('backend/article/event'); ?>">
                    <span class="pcoded-mtext">Event</span>
                </a>
            </li>
            <li class=" ">
                <a href="<?php echo site_url('backend/article/promo'); ?>">
                    <span class="pcoded-mtext">Promo</span>
                </a>
            </li>
            <li class=" ">
                <a href="<?php echo site_url('backend/article/career'); ?>">
                    <span class="pcoded-mtext">Career</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<div class="pcoded-navigatio-lavel">Settings</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="<?php echo site_url('backend/setting/user'); ?>">
            <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
            <span class="pcoded-mtext">Users Setting</span>
        </a>
    </li>
    <li class="">
        <a href="<?php echo site_url('backend/setting/slider'); ?>">
            <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
            <span class="pcoded-mtext">Slider Setting</span>
        </a>
    </li>
    <li class="">
        <a href="<?php echo site_url('backend/setting/pop-up'); ?>">
            <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
            <span class="pcoded-mtext">Pop Up Setting</span>
        </a>
    </li>
    <li class="">
        <a href="<?php echo site_url('backend/setting/info'); ?>">
            <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
            <span class="pcoded-mtext">Info Setting</span>
        </a>
    </li>

    <?php if (in_groups('super-admin')) : ?>

        <li class="">
            <a href="<?php echo site_url('manageuser'); ?>">
                <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                <span class="pcoded-mtext">Manage User</span>
            </a>
        </li>

    <?php endif; ?>

</ul>

<?= $this->endSection(' ')  ?>