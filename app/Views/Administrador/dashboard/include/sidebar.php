<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?= base_url('assets/img/profileadm.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                <?php echo session('usuario'); ?>
                                    <span class="user-level">ADMINISTRADOR</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/dashboard'); ?>" class="nav-link" aria-expanded="false">
                                <i class="fas fa-h-square"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/citas'); ?>" aria-expanded="false">
                                <i class="fas fa-calendar"></i>
                                <p>Citas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/medicos'); ?>" aria-expanded="false">
                                <i class="fas fa-user-md"></i>
                                <p>Medicos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/especialidades'); ?>" aria-expanded="false">
                                <i class="fas fa-plus-square"></i>
                                <p>Especialidades</p>
                            </a>
                        </li>   
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/pacientes'); ?>" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                <p>Pacientes</p>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
            </div>
        