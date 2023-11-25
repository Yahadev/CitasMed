<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Pacientes</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Editar</a>
                    </li>
                </ul>
            </div>
            <?= form_open("admin/pacientes/editar/guardar/{$paciente['id_pac']}"); ?>
            <?php
            function validate(string $key)
            {
                $errors = session('errors');

                if ($errors && isset($errors[$key])) {
                    return $errors[$key];
                }

                return null;
            }
            ?>
            <div class="card">
                <div class="head">
                    <h1>Editar paciente</h1>
                    <a class="back" href="<?= base_url('admin/pacientes'); ?>">Volver</a>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="f-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" name="nombres" class="form-control <?= validate("nombres") ? 'is-invalid' : ''; ?>" value="<?= validate("nombres") ? old('nombres') : $paciente['nombres']; ?>" required>
                            <div class="invalid"><?= validate("nombres"); ?></div>
                        </div>
                        <div class="f-group">
                            <label for "apellidos">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control <?= validate("apellidos") ? 'is-invalid' : ''; ?>" value="<?= validate("apellidos") ? old('apellidos') : $paciente['apellidos']; ?>" required>
                            <div class="invalid"><?= validate("apellidos"); ?></div>
                        </div>
                        <div class="f-group">
                            <label for="identificacion">Identificación</label>
                            <input type="text" name="identificacion" class="form-control <?= validate("identificacion") ? 'is-invalid' : ''; ?>" value="<?= validate("identificacion") ? old('identificacion') : $paciente['identificacion']; ?>" required>
                            <div class="invalid"><?= validate("identificacion"); ?></div>
                        </div>
                        <div class="f-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" name="telefono" class="form-control <?= validate("telefono") ? 'is-invalid' : ''; ?>" value="<?= validate("telefono") ? old('telefono') : $paciente['telefono']; ?>" required>
                            <div class="invalid"><?= validate("telefono"); ?></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="f-group">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" class="form-control <?= validate("correo") ? 'is-invalid' : ''; ?>" value="<?= validate("correo") ? old('correo') : $paciente['correo']; ?>" required>
                            <div class="invalid"><?= validate("correo"); ?></div>
                        </div>
                        <div class="f-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" class="form-control <?= validate("password") ? 'is-invalid' : ''; ?>" required>
                            <div class="invalid"><?= validate("password"); ?></div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit">Guardar</button>
                </div>
            </div>
    
    
