<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sanak Rental - Site Administrator </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('backend/files/assets/images/favicon.ico') ?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/bower_components/bootstrap/css/bootstrap.min.css') ?>">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/bower_components/sweetalert/css/sweetalert.css') ?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/icon/themify-icons/themify-icons.css') ?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/icon/icofont/css/icofont.css') ?>">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/icon/feather/css/feather.css') ?>">
    <!-- datatable css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/pages/data-table/css/buttons.dataTables.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/css/component.css') ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('backend/files/assets/css/jquery.mCustomScrollbar.css') ?>">
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/jquery/js/jquery.min.js') ?>"></script>
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
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="<?= base_url('backend/files/assets/images/logo.png') ?>" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?= base_url('backend/files/assets/images/avatar-4.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?= base_url('backend/files/assets/images/avatar-3.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?= base_url('backend/files/assets/images/avatar-4.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url(); ?>/backend/files/assets/images/<?= user()->image; ?>" class="img-radius" alt="User-Profile-Image">
                                        <span><?= user()->fullname; ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('logout'); ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="<?= base_url('backend/files/assets/images/avatar-3.jpg') ?>" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?= base_url('backend/files/assets/images/avatar-2.jpg') ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?= base_url('backend/files/assets/images/avatar-4.jpg') ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?= base_url('backend/files/assets/images/avatar-3.jpg') ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?= base_url('backend/files/assets/images/avatar-2.jpg') ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="<?= base_url('backend/files/assets/images/avatar-3.jpg') ?>" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="<?= base_url('backend/files/assets/images/avatar-4.jpg') ?>" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <?= $this->rendersection('menu') ?>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <?= $this->rendersection('isi') ?>
                                    </div>
                                </div>
                                <div id="styleSelector">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- datatable -->
    <script src="<?= base_url('backend/files/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('backend/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('backend/files/assets/pages/data-table/js/jszip.min.js') ?>"></script>
    <script src="<?= base_url('backend/files/assets/pages/data-table/js/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('backend/files/assets/pages/data-table/js/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('backend/files/bower_components/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('backend/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('backend/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('backend/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('backend/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/chart.js/js/Chart.js') ?>"></script>
    <!-- sweet alert js -->
    <script type="text/javascript" src="<?= base_url('backend/files/bower_components/sweetalert/js/sweetalert.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/assets/js/modal.js') ?>"></script>
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="<?= base_url('backend/files/assets/js/modalEffects.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/assets/js/classie.js') ?>"></script>
    <!-- amchart js -->
    <script src="<?= base_url('backend/files/assets/pages/widget/amchart/amcharts.js') ?>"></script>
    <script src="<?= base_url('backend/files/assets/pages/widget/amchart/serial.js') ?>"></script>
    <script src="<?= base_url('backend/files/assets/pages/widget/amchart/light.js') ?>"></script>
    <script src="<?= base_url('backend/files/assets/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>

    <!-- <script type="text/javascript" src="<?= base_url('backend/files/assets/js/SmoothScroll.js') ?>"></script> -->
    <script src="<?= base_url('backend/files/assets/js/pcoded.min.js') ?>"></script>
    <!-- custom js -->
    <script src="<?= base_url('backend/files/assets/js/vartical-layout.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/assets/pages/dashboard/custom-dashboard.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('backend/files/assets/js/script.min.js') ?>"></script>
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
    <script>
        $('#datatable').DataTable({
            responsive: true
        });
    </script>
</body>

</html>