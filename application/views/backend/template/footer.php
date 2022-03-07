            </div>
            <footer class="main-footer">
                <div class="float-right d-none d-sm-inline">
                    God Bless!
                </div>
                <strong>Copyright &copy; INFORKOM GPIB KASIH KARUNIA BADUNG - BALI 2022</a>.</strong> All rights reserved.
            </footer>
        </div>
    </body>
    <script>
        var base_url = '<?php echo base_url() ?>';
    </script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/toastr/toastr.min.js"></script>
    <script src="<?= base_url() ?>assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#table_presbiter').DataTable({});
            $('#table_kmj').DataTable({});
            $('#table_pelkat').DataTable({});
            $('#table_komisi').DataTable({});
            $('#table_pages').DataTable({});
            $('#table_banner').DataTable({});
            $('#table_heroes').DataTable({});
            $('#table-logs').DataTable({
                
            });
            $('#table_export').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'csv'
                ]
            });
        });
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            <?php if ($this->session->flashdata('flash') == 'success') { ?>
                var title = '<?php echo $this->session->flashdata('message') ?>';
                Toast.fire({
                    icon: 'success',
                    title: title
                })
            <?php } else if ($this->session->flashdata('flash') == 'error') { ?>
                var title = '<?php echo $this->session->flashdata('message') ?>';
                Toast.fire({
                    icon: 'error',
                    title: title
                })
            <?php } ?>
        });
    </script>

</html>