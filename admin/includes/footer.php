<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!-- Bootstrap core JavaScript-->
<script src="./source/js/jquery.min.js"></script>
<script src="./source/js/popper.min.js"></script>
<script src="./source/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="./source/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="./source/js/sidebar-menu.js"></script>

<!-- Custom scripts -->
<script src="./source/js/app-script.js"></script>
<!--Sweet Alerts -->
<script src="./source/plugins/alerts-boxes/js/sweetalert.min.js"></script>
<script src="./source/plugins/alerts-boxes/js/sweet-alert-script.js"></script>

<!--Data Tables js-->
<script src="./source/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="./source/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="./source/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="./source/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="./source/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="./source/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="./source/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="./source/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="./source/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="./source/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

<script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();
       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );
</script>
<script>
     $(document).ready(function() {
      // Default data table
       $('#default-datatable').DataTable();
      } );
</script>
<script>
    function changePassword(){
        var formData = $("#change-password-form-id").serialize();

        $.ajax({
            type: 'POST' ,
            url: base_url+'index.php/admin/changePassword',
            data: formData,
            beforeSend: function(){
                $('#ajax-loader').show();
            },
            complete: function(){
                $('#ajax-loader').hide();
            },
            success: function(data) {
                var obj = JSON.parse(data);
                if (obj.status) {
                    $("#change-password-close-modal-id").click();
                    swal(obj.message, {
                        icon: "success",
                    }).then((okay) => {
                        if (okay)
                            location.reload();
                        else
                            location.reload();
                    });
                } else {
                    swal(obj.message);
                }
            }
        });
    }
</script>
