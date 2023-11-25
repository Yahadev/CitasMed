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
                        <a href="#">Ver</a>
                    </li>
                </ul>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('admin/pacientes/agregar'); ?>" class="btn btn-primary">Agregar Paciente</a>
                    </div>
                    <div class="card-body">
                        <table id="pacientes" class="table table-striped">
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
                                    <tr>
                                        <td><?= $paciente['id_pac'] ?></td>
                                        <td><?= $paciente['nombres'] ?></td>
                                        <td><?= $paciente['apellidos'] ?></td>
                                        <td><?= $paciente['identificacion'] ?></td>
                                        <td><?= $paciente['telefono'] ?></td>
                                        <td><?= $paciente['correo'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/pacientes/editar/' . $paciente['id_pac']); ?>">
                                                <img width="25" height="20" class="edit" src="<?= base_url('img/edit.svg'); ?>">
                                            </a>
                                            <a href="<?= base_url('admin/pacientes/eliminar/' . $paciente['id_pac']); ?>">
                                                <img width="25" height="30" class="delete" src="<?= base_url('img/delete.svg'); ?>">
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>