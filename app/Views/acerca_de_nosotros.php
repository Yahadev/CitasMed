<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>medical</title>
    <link rel="icon" href="<?php echo base_url('assets/img/icon2.ico'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/css/bootstrap.min.css'); ?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/css/animate.css'); ?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/css/owl.carousel.min.css'); ?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/css/themify-icons.css'); ?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/css/flaticon.css'); ?>">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/css/magnific-popup.css'); ?>">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/css/nice-select.css'); ?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/css/slick.css'); ?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/css/style.css'); ?>">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url('assetshome/img/logo.png'); ?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/nosotros">Acerca de nosotros</a>
                                </li>
                                
                                <li class="nav-item">
                                    <?php echo session('usuario'); ?>
                                </li>
                            </ul>
                        </div>


                        <?php if ($pacienteLogueado) : ?>
                            <a class="btn_2 d-none d-lg-block" href="/paciente/dashboard">Panel</a>
                        <?php else : ?>
                            <a class="btn_2 d-none d-lg-block" href="<?= base_url('inicio/login'); ?>">INICIAR SESIÓN</a>
                        <?php endif; ?>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Nosotros</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- about us part start-->
    <section class="about_us single_about_padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="assetshome/img/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>Acerca de nosotros</h2>
                        <p>Somos una clínica médica dedicada a brindar atención médica de calidad a nuestros pacientes. Nuestro equipo de médicos altamente capacitados está comprometido a cuidar de tu salud y bienestar. Nos esforzamos por ofrecer diagnósticos precisos, tratamientos efectivos y cuidados personalizados para satisfacer tus necesidades de salud.</p>

                        <div class="banner_item">
                            <div class="single_item">
                                <img src="assetshome/img/icon/banner_1.svg" alt="">
                                <h5>Emergencia</h5>
                            </div>
                            <div class="single_item">
                                <img src="assetshome/img/icon/banner_2.svg" alt="">
                                <h5>Cita</h5>
                            </div>
                            <div class="single_item">
                                <img src="assetshome/img/icon/banner_3.svg" alt="">
                                <h5>Calificado</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Nuestro Departamento</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="assetshome/img/icon/pulso.svg" alt=""></span>
                                            <h4>Departamento de Cardiología</h4>
                                            <p>Nuestro Departamento de Cardiología ofrece diagnóstico y tratamiento de enfermedades cardíacas, incluyendo pruebas de ECG y ecocardiogramas.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="assetshome/img/icon/feature_2.svg" alt=""></span>
                                            <h4>Departamento de Ginecología</h4>
                                            <p>Nuestro Departamento de Ginecología se especializa en la salud de la mujer, incluyendo exámenes de rutina, atención prenatal y más.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="assetshome/img/icon/feature_3.svg" alt=""></span>
                                            <h4>Departamento de Traumatología</h4>
                                            <p>Nuestro Departamento de Traumatología se especializa en el tratamiento de lesiones y problemas musculoesqueléticos.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="assetshome/img/icon/feature_2.svg" alt=""></span>
                                            <h4>Departamento de Dermatología</h4>
                                            <p>Nuestro Departamento de Dermatología se enfoca en el diagnóstico y tratamiento de problemas de la piel, cabello y uñas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div enrejas doblecalibra class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"> <img src="assetshome/img/logo.png" alt="#"> </a>
                        <p> Estamos comprometidos con tu salud. </p>
                        <div class="social_logo">
                            <a href="https://www.facebook.com/?locale=es_LA"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Enlaces Rápidos</h4>
                        <ul>
                            <li><a href="/nosotros">Acerca de nosotros</a></li>
                            <li><a href="/">Pagina principal</a></li>
                            <li><a href="/inicio/login">Iniciar sesion</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Contacto</h4>
                        <ul>
                            <li><a href="#">Direccion:
                                    Quibdo, Choco.
                                    Cesar Conto, cra 6#10-30</a></li>
                            <li><a href="#">Telefono: 6710697</a></li>
                            <li><a href="#">Horario: 8am a 4pm </a></li>
                            <li><a href="#">Correo: citas@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12">
                        Derechos de autor &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Todos los derechos reservados | Esta plantilla está hecha con <i class="ti-heart" aria-hidden="true"></i>
                    </p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="assetshome/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url('assetshome/js/popper.min.js'); ?>"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url('assetshome/js/bootstrap.min.js'); ?>"></script>
    <!-- owl carousel js -->
    <script src="<?php echo base_url('assetshome/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assetshome/js/jquery.nice-select.min.js'); ?>"></script>
    <!-- contact js -->
    <script src="<?php echo base_url('assetshome/js/jquery.ajaxchimp.min.js'); ?>"></script>
    <script src="<?php echo base_url('assetshome/js/jquery.form.js'); ?>"></script>
    <script src="<?php echo base_url('assetshome/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assetshome/js/mail-script.js'); ?>"></script>

    <!-- custom js -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="<?php echo base_url('assetshome/js/custom.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>