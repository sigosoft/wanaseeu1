<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/js/popper.min.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/js/metisMenu.min.js"></script>
        <script src="<?=base_url()?>assets/js/waves.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script>

        <!-- Required datatable js -->
        <script src="<?=base_url()?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?=base_url()?>plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables/jszip.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables/pdfmake.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables/vfs_fonts.js"></script>
        <script src="<?=base_url()?>plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables/buttons.print.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?=base_url()?>plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="<?=base_url()?>assets/js/jquery.core.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>