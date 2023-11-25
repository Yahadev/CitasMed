<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Citas</h4>
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
                        <h1>Agregar cita</h1>
                        <a class="back" href="<?= base_url('admin/citas'); ?>">Volver</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <?= form_open("admin/citas/agregar/guardar"); ?>
                            <div class="f-group">
                                <label for="paciente">Paciente</label>
                                <select name="paciente" id="paciente" class="form-control" required>
                                    <option value="">Seleccione un paciente</option>
                                    <?php foreach ($pacientes as $paciente) : ?>
                                        <option value="<?= $paciente['id_pac'] ?>"><?= $paciente['nombres'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="f-group">
                                <label>Fecha</label>
                                <input type="date" name="fecha" class="form-control" required>
                            </div>
                            <div class="f-group">
                                <label>Hora</label>
                                <input type="time" name="hora" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="f-group">
                                <label for="medico">Médico</label>
                                <select name="medico" id="medico" class="form-control" required>
                                    <option value="">Seleccione un médico</option>
                                    <?php foreach ($medicos as $medico) : ?>
                                        <option value="<?= $medico['id_med'] ?>"><?= $medico['nombres'] ?></option>
                                    <?php endforeach; ?>
                                </select>
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
                            <div class="f-group">
                                <label>Descripción</label>
                                <textarea name="descripcion" class="form-control" required></textarea>
                            </div>
                            <div class="f-group">
                                <label for="estado">Estado</label>
                                <select name="estado" id="estado" class="form-control" required>
                                    <option value="En espera">En espera</option>
                                    <option value="Confirmada">Confirmada</option>
                                    <option value="Atendida">Atendida</option>
                                    <option value="Cancelada">Cancelada</option>
                                </select>
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