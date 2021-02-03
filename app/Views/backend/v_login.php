<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Site Administrator </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('backend/files/assets/images/favicon.ico') ?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/bower_components/bootstrap/css/bootstrap.min.css') ?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/icon/themify-icons/themify-icons.css') ?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/icon/icofont/css/icofont.css') ?>">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/icon/feather/css/feather.css') ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/css/style.css') ?>">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form action="<?= route_to('login') ?>" method="post" class="md-float-material form-material">
                        <?= csrf_field() ?>
                        <div class="text-center">
                            <img src="<?php echo base_url() . 'assets/backend/assets/images/inilogo.png' ?>" alt="">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>


                                <div class="form-group form-primary">
                                    <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" required placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                    <span class="form-bar"></span>
                                </div>

                                <div class="form-group form-primary">
                                    <input type="password" name="password" id="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" required placeholder="Password">
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                    <span class="form-bar"></span>
                                </div>

                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <?php if ($config->allowRemembering) : ?>
                                            <div class="checkbox-fade fade-in-primary">
                                                <label>
                                                    <input type="checkbox" name="remember" value="" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label>
                                            </div>
                                        <?php endif; ?>

                                        <div class="forgot-phone text-right f-right">
                                            <a href="auth-reset-password.htm" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>

                                    </div>
                                </div>
                                <p class="text-inverse text-left">Don't have an account?<a href="auth-sign-up-social.htm"> <b class="f-w-600">Contact Admin</b></a></p>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->

        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/jquery/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/jquery-ui/js/jquery-ui.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/popper.js/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') ?>"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/modernizr/js/modernizr.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/modernizr/js/css-scrollbars.js') ?>"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/i18next/js/i18next.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/jquery-i18next/js/jquery-i18next.min.js') ?>"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?= base_url('backend/files/assets/js/script.js') ?>"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>