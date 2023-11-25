<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Mis datos</h4>
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
                        <a href="#">Ver</a>
                    </li>
                </ul>
            </div>
            <section class="section">
                <div class="card">

                    <div class="card-body">
                        <table id="citas" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Identificación</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pacientes as $paciente) : ?>
                                    <?php if (!empty($pacienteLogueado) && $paciente['id_pac'] === $pacienteLogueado['id_pac']) : ?>
                                        <tr>
                                            <td><?= $paciente['id_pac'] ?></td>
                                            <td><?= $paciente['nombres'] ?></td>
                                            <td><?= $paciente['apellidos'] ?></td>
                                            <td><?= $paciente['identificacion'] ?></td>
                                            <td><?= $paciente['telefono'] ?></td>
                                            <td><?= $paciente['correo'] ?></td>
                                            <td>
                                                <a href="<?= base_url('paciente/pacientes/editar/' . $paciente['id_pac']); ?>">
                                                    <img width="25" height="20" class="edit" src="<?= base_url('img/edit.svg'); ?>">
                                                </a>

                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
    