<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../login/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="icon" href="../assets/img/icon2.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css" integrity="sha256-VJuwjrIWHWsPSEvQV4DiPfnZi7axOaiWwKfXaJnR5tA=" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="../login/img/wave2.png">
    <div class="container">
        <div class="img">
            
        </div>
        <div class="login-content">
            <hr>

            <form action="<?php echo base_url() . 'inicio/login'; ?>" method="POST">
                <img src="../login/img/avatar.svg">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Correo</h5>
                        <input type="text" class="input" name="correo" id="correo" required>

                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password" id="password" required>
                    </div>
                </div>
                <a href="/registrar">Registrarse</a>
                <a href="/">Regresar</a>
                <?php if (session()->getFlashdata('nologin')) : ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Credenciales incorrectas',
                                text: 'Verifica tus datos.',

                            });
                        });
                    </script>
                <?php endif; ?>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../login/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js" integrity="sha256-LkC+rZzbNkEleBllGdKANe5nxH0QnRjn4hbw2lW+Hjo=" crossorigin="anonymous"></script>
</body>

</html>