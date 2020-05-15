<?php include('includes/sidebar.php'); ?>
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-list"></i> Orders
                    </div>
                    <div class="card-body">
                        <?php if (!empty($orders)) { ?>
                            <div class="table-responsive">
                                <table id="default-datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Painter Name</th>
                                        <th>Gift Name</th>
                                        <th>Painter Mobile</th>
                                        <th>Date of order</th>
                                        <th style="width: 10% !important;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($orders as $each_order) { ?>
                                        <tr>
                                            <td><?php echo $each_order['name']; ?></td>
                                            <td><?php echo $each_order['gift_name']; ?></td>
                                            <td><?php echo $each_order['mobile']; ?></td>
                                            <td><?php echo date('Y-m-d h:i:s A', $each_order['ordered']); ?></td>
                                            <td style="width: 10% !important;">
                                                <button type="button" onclick="acceptOrder('<?php echo $each_order['id']; ?>')" class="btn btn-success btn-sm waves-effect waves-light">Accept</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <button type="button" onclick="deleteOrder('<?php echo $each_order['id']; ?>')" class="btn btn-danger btn-sm waves-effect waves-light">Reject</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
    <?php include('includes/footer.php') ?>
    <script>
        function acceptOrder(id) {
            swal({
                title: "Are you sure?",
                text: "Once you Accept, it will be approved!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willAccept) => {
                if (willAccept) {
                    serverCall(id, 'acceptOrder');
                } else {
                    swal("You cancelled the operation!");
                }
            });
        }

        function deleteOrder(id) {
            swal({
                title: "Are you sure?",
                text: "Once rejected, you will not be able to revert back!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    serverCall(id, 'rejectOrder');
                } else {
                    swal("You cancelled the operation!");
                }
            });
        }

        function serverCall(id, s) {
            var base_url = '<?php echo base_url(); ?>';
            $.ajax({
                type: 'POST',
                url: base_url + 'index.php/admin/' + s,
                data: {'id': id},
                beforeSend: function(){
                    $('#ajax-loader').show();
                },
                complete: function(){
                    $('#ajax-loader').hide();
                },
                success: function (data) {
                    console.log(data);
                    var obj = JSON.parse(data);
                    console.log(obj);
                    if (obj.status) {
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
        