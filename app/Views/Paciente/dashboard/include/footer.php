<footer class="footer">
    <div class="container-fluid">

        <div class="copyright ml-auto">
            2023, Yaha Hernandez
        </div>
    </div>
</footer>
</div>

</div>
<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery      UI -->
<script src="<?= base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>


<script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>

<!-- Incluye jQuery desde el CDN de Google -->


<!-- jQuery Scrollbar -->
<script src="<?= base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>

<!-- Chart JS -->
<script src="<?= base_url('assets/js/plugin/chart.js/chart.min.js') ?>"></script>



<!-- jQuery Sparkline -->
<script src="<?= base_url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugin/chart-circle/circles.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugin/datatables/datatables.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugin/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') ?>"></script>
<script src="<?= base_url('assets/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>
<script src="<?= base_url('assets/js/atlantis.min.js') ?>"></script>

<!-- Coloca tu JavaScript justo antes de cerrar la etiqueta </body> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<!-- JavaScript de DataTables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<!-- Agrega el enlace CDN de DataTables Responsive -->
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Inicializa DataTables -->
<script>
    $("#citas").DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando_START_a_END_de_TOTAL_Entradas",
            "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
            "infoFiltered": "(Filtrado de MAX total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar_MENU_Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        "order": [
            [2, "desc"]
        ],
        responsive: true,
    });
</script>

<script>
    <?php if (session("success")) : ?>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Success',
            text: '<?= session("success"); ?>',
            showConfirmButton: false,
            timer: 1500
        })
    <?php endif; ?>
</script>

</body>

</html>