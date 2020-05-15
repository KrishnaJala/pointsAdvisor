<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 7/23/2019
 * Time: 12:04 PM
 */ ?>

<?php include('includes/sidebar.php'); ?>
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-support"></i> Support Issues
                    </div>
                    <div class="card-body">
                        <?php if (!empty($support_issues)) { ?>
                            <div class="table-responsive">
                                <table id="default-datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Issue Type</th>
                                        <th>Issue</th>
                                        <th>Issue Raised Date & Time</th>
                                        <th>Image
                                            <small>(if any)</small>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($support_issues as $each_issue) { ?>
                                        <tr>
                                            <td><?php echo $each_issue['s_no']; ?></td>
                                            <td><?php echo $each_issue['name']; ?></td>
                                            <td><?php echo $each_issue['mobile']; ?></td>
                                            <td><?php echo $each_issue['category']; ?></td>
                                            <td><?php echo $each_issue['customer_query']; ?></td>
                                            <td><?php echo date('jS F Y, h:i:s A', $each_issue['timestamp']); ?></td>
                                            <td><img style="cursor: pointer" onclick="preview('<?php echo $each_issue['image']; ?>')" src="<?php echo $each_issue['image']; ?>" width="100" height="100"/></td>
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
        <div id="modal_click" data-toggle="modal" data-target=".modal-animation-1"></div>
        <div class="modal fade modal-animation-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="margin-left: 38%;">Preview</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="margin: 2% !important;">
                      <center><img src="" height="500" class="imagepreview"></center>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
    <?php include('includes/footer.php') ?>
    <script>

        function preview(imgSrc) {
            $('.imagepreview').attr('src', imgSrc);
            $('#modal_click').click();
        }

    </script>