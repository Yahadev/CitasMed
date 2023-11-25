<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Especialidades</h4>
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
            <?= form_open("admin/especialidades/editar/guardar/{$especialidad['id_es']}"); ?>
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
                    <h1>Editar especialidad</h1>
                    <a class="back" href="<?= base_url('admin/especialidades'); ?>">Volver</a>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="f-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control <?= validate("nombre") ? 'is-invalid' : ''; ?>" value="<?= validate("nombre") ? old('nombre') : $especialidad['nombre']; ?>" required>
                            <div class="invalid"><?= validate("nombre"); ?></div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
