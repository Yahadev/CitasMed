<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Médicos</h4>
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
                        <a href="#">Agregar</a>
                    </li>
                </ul>
            </div>
            <section class="section">
                <div class="card">
                    <div class="head">
                        <h1>Agregar Médico</h1>
                        <a class="back" href="<?= base_url('admin/medicos'); ?>">Volver</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <?= form_open("admin/medicos/agregar/guardar"); ?>
                            <div class="f-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" name="nombres" class="form-control" required>
                            </div>
                            <div class="f-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" required>
                            </div>
                            <div class="f-group">
                                <label for="identificacion">Identificación</label>
                                <input type="text" name="identificacion" class="form-control" required>
                            </div>
                            <div class="f-group">
                                <label for="especialidad">Especialidad</label>
                                <select name="especialidad" id="especialidad" class="form-control" required>
                                    <option value="">Seleccione una especialidad</option>
                                    <?php foreach ($especialidades as $especialidad) : ?>
                                        <option value="<?= $especialidad['id_es'] ?>"><?= $especialidad['nombre'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="f-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>
                            <div class="f-group">
                                <label for="correo">Correo</label>
                                <input type="email" name="correo" class="form-control" required>
                            </div>
                            <div class="f-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit">Agregar</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </section>
        </div>
    </div>
</div>
