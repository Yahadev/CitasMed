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
                        <a href="#">Ver</a>
                    </li>
                </ul>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('admin/especialidades/agregar'); ?>" class="btn btn-primary">Nueva Especialidad</a>
                    </div>
                    <div class="card-body">
                        <table id="citas" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($especialidades as $especialidad) : ?>
                                    <tr>
                                        <td><?= $especialidad['id_es'] ?></td>
                                        <td><?= $especialidad['nombre'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/especialidades/editar/' . $especialidad['id_es']); ?>">
                                                <img width="25" height="20" class="edit" src="<?= base_url('img/edit.svg'); ?>">
                                            </a>
                                            <a href="<?= base_url('admin/especialidades/eliminar/' . $especialidad['id_es']); ?>">
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
        
   
