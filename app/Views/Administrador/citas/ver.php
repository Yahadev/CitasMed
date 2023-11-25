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
                        <a href="#">ver</a>
                    </li>
                </ul>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <a href="<?= base_url('admin/citas/agregar'); ?>" class="btn btn-primary">Nueva Cita</a>
                    </div>

                    <div class="card-body">
                        <table id="citas" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Paciente</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Médico</th>
                                    <th>Especialidad</th>
                                    <th>Motivo</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($citas as $cita) : ?>
                                    <tr>
                                        <td><?= $cita['id_citas'] ?></td>
                                        <td><?= $cita['paciente'] ?></td>
                                        <td><?= $cita['fecha'] ?></td>
                                        <td><?= $cita['hora'] ?></td>
                                        <td><?= $cita['medico'] ?></td>
                                        <td><?= $cita['especialidad'] ?></td>
                                        <td><?= $cita['descripcion'] ?></td>
                                        <td><?= $cita['estado'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/citas/editar/' . $cita['id_citas']); ?>">
                                                <img width="25" height="20" class="edit" src="<?= base_url('img/edit.svg'); ?>">
                                            </a>
                                            <a href="<?= base_url('admin/citas/eliminar/' . $cita['id_citas']); ?>">
                                                <img width="25" height="30" class="delete" src="<?= base_url('img/delete.svg'); ?>">
                                            </a>
                                        </td>
                                    </tr>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>