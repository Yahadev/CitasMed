<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Paciente Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon2.ico" type="image/x-icon" />
    <!-- Agrega el enlace CDN de la hoja de estilos CSS de DataTables Responsive -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
    <!-- Fonts and icons -->
    <script src="<?= base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>

    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url('assets/css/fonts.min.css') ?>']

            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/atlantis.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/demo.css') ?>">

</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="/paciente/dashboard" class="logo">
                    <img src="<?= base_url('assets/img/logo.svg') ?>" alt="navbar brand" class="navbar-brand">

                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    

                    <div class="collapse" id="search-nav">

                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link btn btn-info" href="/">Home</a>
                    </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        New user registered
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Rahmad commented on Admin
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="<?= base_url('assets/img/profile2.jpg') ?>" alt="Img Profile">

                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Reza send messages to you
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="<?= base_url('assets/img/profile3.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="<?= base_url('assets/img/profile3.jpg') ?>" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <?php echo session('usuario'); ?>
                                                <p class="text-muted"><?php echo session('correo'); ?></p> <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Mis datos</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/cerrar-sesion">Cerrar sesion</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>