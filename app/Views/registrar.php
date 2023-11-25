<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="../login/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="icon" href="../assets/img/icon2.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css" integrity="sha256-VJuwjrIWHWsPSEvQV4DiPfnZi7axOaiWwKfXaJnR5tA=" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
</head>

<body>
    <img class="wave" src="../login/img/wave2.png">
    <div class="container">
        <div class="img">

        </div>
        <div class="login-content">
            <form action="<?php echo base_url() . 'guardar'; ?>" method="POST">
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                    <div class="border-bottom w-100 ml-5"></div>
                    <span class="px-2 small text-muted font-weight-bold text-muted">REGISTRAR PACIENTE</span>
                    <div class="border-bottom w-100 mr-5"></div>
                </div>
                <div class="row">
                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="nombres" type="text" name="nombres" placeholder="Nombres" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Apellidos -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="apellidos" type="text" name="apellidos" placeholder="Apellidos" class="form-control bg-white border-left-0 border-md" required>
                    </div>
                </div>

                <!-- Identificación -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-id-card text-muted"></i>
                        </span>
                    </div>
                    <input id="identification" type="text" name="identificacion" placeholder="Identificación" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Teléfono -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-phone-square text-muted"></i>
                        </span>
                    </div>
                    <input id="telefono" type="tel" name="telefono" placeholder="Teléfono" class="form-control bg-white border-md border-left-0 pl-3" required>
                </div>

                <!-- Email -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-envelope text-muted"></i>
                        </span>
                    </div>
                    <input id="correo" type="email" name="correo" placeholder="Email" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Password -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-lock text-muted"></i>
                        </span>
                    </div>
                    <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Confirmación de Contraseña -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-lock text-muted"></i>
                        </span>
                    </div>
                    <input id="cpassword" type="password" name="cpassword" placeholder="Confirmar Password" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Submit Button -->
                <div class="form-group col-lg-12 mx-auto mb-0">
                    <a href="inicio/login">Ya estoy registrado</a>
                    <input type="submit" class="btn btn-primary btn-block py-2" value="REGISTRAR">
                    <div class="text-center w-100">
                    
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../login/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js" integrity="sha256-LkC+rZzbNkEleBllGdKANe5nxH0QnRjn4hbw2lW+Hjo=" crossorigin="anonymous"></script>
</body>

</html>