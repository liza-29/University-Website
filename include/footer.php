        </div>
        </div>
        </section>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.buttons.min.js"></script>
        <script src="js/jszip.min.js"></script>
        <script src="js/pdfmake.min.js"></script>
        <script src="js/vfs_fonts.js"></script>
        <script src="js/buttons.html5.min.js"></script>
        <script src="js/buttons.print.min.js"></script>
        <script src="js/printThis.js"></script>
        <script>
                $(document).ready(function() {
                        $('#datatable').DataTable({
                                dom: 'Bfrtip',
                                buttons: [
                                        'copy', 'csv', 'excel', 'pdf', 'print'
                                ]
                        });

                        $("#printBtn").click(function() {
                                $("#printArea").printThis();
                        });
                });
        </script>


        </body>

        </html>