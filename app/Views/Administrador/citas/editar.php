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
                        <a href="#">Actualizar</a>
                    </li>
                </ul>
            </div>
            <?= form_open("admin/citas/editar/guardar/{$cita['id_citas']}"); ?>
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
                    <h1>Actualizar cita</h1>
                    <a class="back" href="<?= base_url('admin/citas'); ?>">Volver</a>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="f-group">
                            <label for="paciente">Paciente</label>
                            <select name="paciente" id="paciente" class="form-control <?= validate("paciente") ? 'is-invalid' : ''; ?>" required>
                                <?php foreach ($pacientes as $paciente) : ?>
                                    <option value="<?= $paciente['id_pac'] ?>"><?= $paciente['nombres'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid"><?= validate("paciente"); ?></div>
                        </div>
                        <div class="f-group">
                            <label>Fecha</label>
                            <input class="<?= validate("fecha") ? 'is-invalid' : ''; ?>" type="date" name="fecha" placeholder="Fecha de la cita" value="<?= validate("fecha") ? old('fecha') : $cita['fecha']; ?>" required>
                            <div class="invalid"><?= validate("fecha"); ?></div>
                        </div>
                        <div class="f-group">
                            <label>Hora</label>
                            <input class="<?= validate("hora") ? 'is-invalid' : ''; ?>" type="time" name="hora" placeholder="Hora de la cita" value="<?= validate("hora") ? old('hora') : $cita['hora']; ?>" required>
                            <div class="invalid"><?= validate("hora"); ?></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="f-group">
                            <label for="medico">Médico</label>
                            <select name="medico" id="medico" class="form-control <?= validate("medico") ? 'is-invalid' : ''; ?>" required>
                                <?php foreach ($medicos as $medico) : ?>
                                    <option value="<?= $medico['id_med'] ?>"><?= $medico['nombres'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid"><?= validate("medico"); ?></div>
                        </div>
                        <div class="f-group">
                            <label for="especialidad">Especialidad</label>
                            <select name="especialidad" id="especialidad" class="form-control <?= validate("especialidad") ? 'is-invalid' : ''; ?>" required>
                                <?php foreach ($especialidades as $especialidad) : ?>
                                    <option value="<?= $especialidad['id_es'] ?>"><?= $especialidad['nombre'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid"><?= validate("especialidad"); ?></div>
                        </div>
                        <div class="f-group">
                            <label>Descripción</label>
                            <textarea class="<?= validate("descripcion") ? 'is-invalid' : null; ?>" name="descripcion" placeholder="Descripción" required><?= validate("descripcion") ? old('descripcion') : $cita['descripcion']; ?></textarea>
                            <div class="invalid"><?= validate("descripcion"); ?></div>
                        </div>
                        <div class="f-group">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="form-control <?= validate("estado") ? 'is-invalid' : ''; ?>" required>
                                <option value="En espera'" <?= $cita['estado'] === 'En espera' ? 'selected' : '' ?>>En espera'</option>
                                <option value="Confirmada" <?= $cita['estado'] === 'Confirmada' ? 'selected' : '' ?>>Confirmada</option>
                                <option value="Atendida" <?= $cita['estado'] === 'Atendida' ? 'selected' : '' ?>>Atendida</option>
                                <option value="Cancelada" <?= $cita['estado'] === 'Cancelada' ? 'selected' : '' ?>>Cancelada</option>
                            </select>
                            <div class="invalid"><?= validate("estado"); ?></div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit">Guardar</button>
                </div>
            </div>
        </div>
    </div>

