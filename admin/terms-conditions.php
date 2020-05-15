<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 8/6/2019
 * Time: 12:22 PM
 */?>
<?php include('includes/sidebar.php'); ?>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-list-alt"></i>&nbsp;&nbsp;Terms and Conditions
                        <button type="button" data-toggle="modal" data-target="#modal-animation-3" class="btn btn-primary btn-sm waves-effect waves-light pull-right">Add Terms and Conditions</button>
                    </div>
                    <div class="card-body">
                        <iframe id="terms-frame" style="background-color: white" src="<?php echo base_url();?>terms_and_conditions.html" width="100%" height="450">
                            <p>Your browser does not support i-frames.</p>
                        </iframe>
                        <br>
                        <div class="col-md-12">
                            <center><button type="button" onclick="addTerms()" class="btn btn-success btn-sm waves-effect waves-light">Submit *</button></center>
                        </div>
                        <div class="col-md-12">
                            <small style="float: right">*Once submitted, you will not be able to revert back!</small>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End Row-->
        <!--START OF ADD NEW PRODUCT-->
        <div class="modal fade" id="modal-animation-3">
            <div class="modal-dialog">
                <div class="modal-content animated">
                    <div class="modal-header">
                        <h5 class="modal-title" style="margin-left: 25%;">Add New Terms & Conditions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span id="terms-modal-close-id" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:addTermsIFrame();" id="add-terms-form-id" method="post">
                            <div class="form-group custom-form">
                                <label class="input-1">Heading</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" id="heading" autocomplete="off" class="form-control input-shadow" placeholder="Enter Heading">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="input-1">Term Points</label>
                                <div class="position-relative has-icon-right">
                                    <textarea id="terms" required autocomplete="off" class="form-control input-shadow" placeholder="Enter Points"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-left: 40%;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF ADD NEW PRODUCT-->
    </div><!--End content-wrapper-->
    <?php include('includes/footer.php') ?>
    <script>
        function addTermsIFrame(){
            var heading = $("#add-terms-form-id").find("#heading").val();
            var points = $("#add-terms-form-id").find("#terms").val();
            var htmlData = $("#terms-frame").contents().find("#terms_id_append").append("<h3>"+heading+"</h3><p>"+points+"</p>");
            console.log(htmlData);
            $("#add-terms-form-id").find("#heading").val('');
            $("#add-terms-form-id").find("#terms").val('');
            $("#terms-modal-close-id").click();
        }

        function addTerms() {
            var withOutHtmlTags = $("#terms-frame").contents().find("html").html();
            console.log(withOutHtmlTags);
            var base_url = '<?php echo base_url(); ?>';
            $.ajax({
                type: 'POST' ,
                data: {'html':withOutHtmlTags},
                url: base_url+'index.php/admin/appendTerms',
                beforeSend: function(){
                    $('#ajax-loader').show();
                },
                complete: function(){
                    $('#ajax-loader').hide();
                },
                success: function(data) {
                    var obj = JSON.parse(data);
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
