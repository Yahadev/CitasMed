<!DOCTYPE html>
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
    <header class="main_menu home_menu">
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

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Estamos aquí para tu cuidado</h5>
                            <h1>Mejor Atención &
                                Mejor Médico</h1>
                            <p>Estamos comprometidos con tu salud. Nuestros departamentos médicos se especializan en ofrecer servicios de calidad para el diagnóstico, tratamiento y cuidado de tus necesidades de salud. Ya sea una cita de rutina o una consulta especializada, estamos aquí para ti.</p>

                            <a href="#" class="btn_2">Haz una cita</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="assetshome/img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us padding_top">
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
                        <a class="btn_2" href="/nosotros">Conócenos más</a>
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

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Nuestros servicios</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="assetshome/img/icon/pulso.svg" alt=""></span>
                            <h4>Servicio de Cardiología</h4>
                            <p>Nuestro servicio de cardiología ofrece diagnóstico y tratamiento de enfermedades cardíacas, incluyendo pruebas de ECG y ecocardiogramas.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="assetshome/img/icon/feature_2.svg" alt=""></span>
                            <h4>Servicio de Ginecología</h4>
                            <p>Nuestro servicio de ginecología se especializa en la salud de la mujer, incluyendo exámenes de rutina, atención prenatal y más.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_feature_img">
                        <img src="assetshome/img/service.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="assetshome/img/icon/feature_3.svg" alt=""></span>
                            <h4>Servicio de Traumatología</h4>
                            <p>Nuestro servicio de traumatología se especializa en el tratamiento de lesiones y problemas musculoesqueléticos.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="assetshome/img/icon/feature_2.svg" alt=""></span>
                            <h4>Servicio de Dermatología</h4>
                            <p>Nuestro servicio de dermatología se enfoca en el diagnóstico y tratamiento de problemas de la piel, cabello y uñas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

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


    <!--::regervation_part start::-->
    <?php if ($pacienteLogueado) : ?>
        <section class="regervation_part section_padding">
            <div class="container">
                <div class="row align-items-center regervation_content">
                    <div class="col-lg-5 col-md-6">
                        <div class="reservation_img">
                            <img src="assetshome/img/reservation.png" alt="" class="reservation_img_iner">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="regervation_part_iner">
                            <?= form_open("paciente/citas/agregar/guardar"); ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="f-group">
                                        <label for="paciente">Paciente</label>
                                        <select name="paciente" id="paciente" class="form-control" required>
                                            <?php foreach ($pacientes as $paciente) : ?>
                                                <?php if (session('pacienteLogueado')['id_pac'] == $paciente['id_pac']) : ?>
                                                    <option value="<?= $paciente['id_pac'] ?>" selected>
                                                        <?= $paciente['nombres'] . ' ' . $paciente['apellidos'] ?>
                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="f-group">
                                        <label for="medico">Médico</label>
                                        <select name="medico" id="medico" class="form-control no-nice-select" required>
                                            <option value="">Seleccione un médico</option>
                                            <?php foreach ($medicos as $medico) : ?>
                                                <option value="<?= $medico['id_med'] ?>" data-especialidad="<?= $medico['especialidad'] ?>"><?= $medico['nombres'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="f-group">
                                <label for="especialidad">Especialidad</label>
                                <select name="especialidad" id="especialidad" class="form-control" required disabled>
                                    <option value="">Consultorio</option>
                                    <?php foreach ($especialidades as $especialidad) : ?>
                                        <option value="<?= $especialidad['id_es'] ?>"><?= $especialidad['nombre'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <?php
                            // Obtener la hora actual en formato de 24 horas
                            $horaActual = date('H');
                            // Obtener la fecha actual
                            $fechaActual = date('Y-m-d');
                            // Si la hora actual es mayor a las 15:00, sumar un día a la fecha actual
                            if ($horaActual > 15) {
                                $fechaActual = date('Y-m-d', strtotime($fechaActual . ' + 1 day'));
                            }
                            ?>
                            <div class="f-group">
                                <label>Fecha</label>
                                <input type="date" name="fecha" class="form-control" required min="<?= $fechaActual ?>">
                            </div>
                            <div class="f-group">
                                <label>Horario</label>
                                <select name="hora" class="form-control" required>
                                    <?php
                                    // Define el rango de horas permitido (de 8am a 4pm)
                                    $horaInicio = strtotime('08:00');
                                    $horaFin = strtotime('16:00');
                                    $intervalo = 60 * 60; // Intervalo de una hora en segundos
                                    // Muestra las opciones de hora en intervalos de una hora
                                    for ($hora = $horaInicio; $hora <= $horaFin; $hora += $intervalo) {
                                        $horaFormateada = date('H:i', $hora);
                                        echo "<option value=\"$horaFormateada\">$horaFormateada</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="f-group">
                                <label>Descripción</label>
                                <textarea name="descripcion" class="form-control" required></textarea>
                            </div>
                            <div class="f-group">
                                <label for="estado">Estado</label>
                                <select name="estado" id="estado" class="form-control" readonly>
                                    <option value="En espera">En espera</option>
                                </select>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Reservar</button>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else : ?>
        <br>
        <!-- El paciente no está logueado, muestra un mensaje o redirige a la página de inicio de sesión -->
        <a class="btn_2" href="<?php echo base_url('inicio/login'); ?>">Inicie seccion para pedir su cita</a>
        <br>
        <br>
    <?php endif; ?>

    <!--::regervation_part end::-->


    <!-- Inicio del pie de página -->
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
    <!-- Fin del pie de página -->

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
    <?php if (session()->getFlashdata('nocita')) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Ya hay una cita programada para este horario',
                    text: 'Por favor, elige otro horario.',

                });
            });
        </script>
    <?php endif; ?>
    <script>
        // Agrega un listener para el cambio en el campo de médico
        document.getElementById('medico').addEventListener('change', function() {
            // Obtiene el elemento seleccionado
            var selectedMedico = this.options[this.selectedIndex];

            // Obtiene la especialidad del atributo data
            var especialidadId = selectedMedico.getAttribute('data-especialidad');

            // Actualiza el valor del campo de especialidad
            document.getElementById('especialidad').value = especialidadId;

            // Habilita el campo de especialidad antes de enviar el formulario
            document.getElementById('especialidad').removeAttribute('disabled');
        });
    </script>

</body>

</html>