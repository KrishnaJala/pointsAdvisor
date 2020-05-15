<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 7/23/2019
 * Time: 12:04 PM
 */
include('includes/sidebar.php'); ?>
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Frequently Asked Questions
                        <button type="button" data-toggle="modal" data-target="#modal-animation-3"
                                class="btn btn-primary btn-sm waves-effect waves-light pull-right">Add FAQ
                        </button>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($faqs)) { ?>
                            <div class="table-responsive">
                                <table id="default-datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th style="width: 10% !important;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($faqs as $each_faq) { ?>
                                        <tr>
                                            <td><?php echo $each_faq['s_no']; ?></td>
                                            <td><?php echo $each_faq['question']; ?></td>
                                            <td><?php echo $each_faq['answer']; ?></td>
                                            <td>
                                                <!--                                             <button type="button" class="btn btn-success btn-sm waves-effect waves-light delete-btn-alert">Accept</button>&nbsp;&nbsp;&nbsp;&nbsp;-->
                                                <button type="button"
                                                        onclick="deleteFaq('<?php echo $each_faq['id']; ?>')"
                                                        class="btn btn-danger btn-sm waves-effect waves-light">Delete
                                                </button>
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
        <div class="modal fade" id="modal-animation-3">
            <div class="modal-dialog">
                <div class="modal-content animated flipInX">
                    <div class="modal-header">
                        <h5 class="modal-title" style="margin-left: 38%;">Add Question and Answer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="margin-bottom: 2% !important;">
                        <form action="add_faq" method="post">
                            <div class="col-md-12 form-group custom-form">
                                <label for="title_id">Question</label>
                                <input type="text" class="form-control" id="title_id" name="question" maxlength="100"
                                       placeholder="max 100 characters">
                            </div>
                            <div class="col-md-12 form-group custom-form">
                                <label for="message_id">Answer</label>
                                <textarea rows="4" class="form-control" name="answer" id="message_id" maxlength="240"
                                          placeholder="max 240 characters"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light"
                                        style="margin-left: 40%;"> Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
    <?php include('includes/footer.php') ?>
    <script>
        function deleteFaq(id) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to revert back!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.post("deleteFAQ",
                        {
                            id: id
                        },
                        function (data) {
                        if(data) {
                            swal("Success! You deleted successfully!", {
                                icon: "success",
                            }).then((okay) => {
                                if (okay)
                                    location.reload();
                            });
                        }else{
                            swal("Something went wrong!");
                        }
                        });
                } else {
                    swal("You cancelled the operation!");
                }
            });
        }
    </script>