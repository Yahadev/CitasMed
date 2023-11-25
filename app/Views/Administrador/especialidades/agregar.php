<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Especialidades</h4> <!-- Cambia el título a "Especialidades" -->
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
                        <h1>Agregar Especialidad</h1> <!-- Cambia el título a "Agregar Especialidad" -->
                        <a class="back" href="<?= base_url('admin/especialidades'); ?>">Volver</a> <!-- Cambia la URL de retorno a "admin/especialidades" -->
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <?= form_open("admin/especialidades/agregar/guardar"); ?> <!-- Cambia la URL de acción al controlador de especialidades -->
                            <div class="f-group">
                                <label for="nombre">Nombre</label> <!-- Cambia el campo a "Nombre" -->
                                <input type="text" name="nombre" class="form-control" required> <!-- Cambia el nombre del campo a "nombre" -->
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
