<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Mis citas</h4>
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
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($citas as $cita) : ?>
                                    <?php if ($cita['id_pac'] == $pacienteLogueado['id_pac']) : ?>
                                        <tr>
                                            <td><?= $cita['id_citas'] ?></td>
                                            <td><?= $cita['paciente'] ?></td>
                                            <td><?= $cita['fecha'] ?></td>
                                            <td><?= $cita['hora'] ?></td>
                                            <td><?= $cita['medico'] ?></td>
                                            <td><?= $cita['especialidad'] ?></td>
                                            <td><?= $cita['descripcion'] ?></td>
                                            <td><?= $cita['estado'] ?></td>
                                            
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

