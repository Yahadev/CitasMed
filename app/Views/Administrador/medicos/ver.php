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
                        <a href="#">ver</a>
                    </li>
                </ul>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('admin/medicos/agregar'); ?>" class="btn btn-primary">Agregar Medico</a>
                    </div>
                    <div class="card-body">
                        <table id="citas" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Identificación</th>
                                    <th>Especialidad</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($medicos as $medico) : ?>
                                    <tr>
                                        <td><?= $medico['id_med'] ?></td>
                                        <td><?= $medico['nombres'] ?></td>
                                        <td><?= $medico['apellidos'] ?></td>
                                        <td><?= $medico['identificacion'] ?></td>
                                        <td><?= $medico['especialidad'] ?></td>
                                        <td><?= $medico['telefono'] ?></td>
                                        <td><?= $medico['correo'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/medicos/editar/' . $medico['id_med']); ?>">
                                                <img width="25" height="20" class="edit" src="<?= base_url('img/edit.svg'); ?>">
                                            </a>
                                            <a href="<?= base_url('admin/medicos/eliminar/' . $medico['id_med']); ?>">
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