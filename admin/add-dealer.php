<?php include('includes/sidebar.php'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&nbsp;&nbsp;Dealers
                        <button type="button" data-toggle="modal" data-target="#modal-animation-3" class="btn btn-primary btn-sm waves-effect waves-light pull-right">Add New Dealer</button>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($dealers)){ ?>
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Contact Person</th>
                                    <th style="width: 10% !important;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($dealers as $each_dealer) { ?>
                                    <tr>
                                        <td><?php print_r($each_dealer['name']); ?></td>
                                        <td><?php print_r($each_dealer['mobile']); ?></td>
                                        <td><?php print_r($each_dealer['contact_person']); ?></td>
                                        <td style="width: 10% !important;">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light"
                                                    onclick="make_view('<?php echo $each_dealer['name'];?>','<?php echo $each_dealer['contact_person'];?>','<?php echo $each_dealer['mobile'];?>','<?php echo $each_dealer['phone'];?>','<?php echo $each_dealer['city'];?>','<?php echo $each_dealer['district'];?>','<?php echo $each_dealer['state'];?>','<?php echo $each_dealer['email'];?>','<?php echo $each_dealer['pincode'];?>');">View</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="button" onclick="deleteDealer('<?php print_r($each_dealer['dealer_id']); ?>')" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php } else { ?>
                        <h4>No Dealers Found !!!</h4>
                    <?php } ?>
                </div>
            </div>
        </div><!-- End Row-->
        <div class="modal fade" id="modal-animation-3">
            <div class="modal-dialog">
                <div class="modal-content animated zoomInUp">
                    <div class="modal-header">
                        <h5 class="modal-title" style="margin-left: 38%;">Add New Dealer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span id="modal-close-id" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:addDealer();" id="add-dealer-form-id" method="post">
                            <div class="form-group custom-form">
                                <label class="inpu">Shop Name</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="shop_name" class="form-control input-shadow" autocomplete="off" required placeholder="Enter Shop name">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Contact Person Name</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="contact_person" class="form-control input-shadow" autocomplete="off" required placeholder="Enter contact person name">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Phone Number</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" minlength="10" maxlength="10" onkeypress="return isNumber(event);" name="mobile_number" class="form-control input-shadow" autocomplete="off" required placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">District</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" name="district" required placeholder="Enter District">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">City</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" name="city" required placeholder="Enter city">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">State</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" name="state" required placeholder="Enter state">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="input">Pincode</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" minlength="6" maxlength="6" onkeypress="return isNumber(event);" required class="form-control input-shadow" name="pincode" placeholder="Enter pincode">
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
        <div class="modal fade modal-animation-1">
            <div class="modal-dialog">
                <div class="modal-content animated flipInX">
                    <div class="modal-header">
                        <h5 class="modal-title" style="margin-left: 38%;">View Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="margin-bottom: 2% !important;">
                        <table style="margin-left: 20% !important;" id="view_table">
                            <tbody>
                            <tr>
                                <th style="width: 39% !important;">Shop name</th>
                                <td style="width: 2% !important;"> : &nbsp;&nbsp;</td>
                                <td style="width: 58% !important;" id="shop_name_id"> </td>
                            </tr>
                            <tr>
                                <th>Contact-Person</th>
                                <td> :</td>
                                <td id="contact_person_id"></td>
                            </tr>
                            <tr>
                                <th>Mobile-Number</th>
                                <td> :</td>
                                <td id="mobile_id"></td>
                            </tr>
                            <tr>
                                <th>Phone-Number</th>
                                <td> :</td>
                                <td id="phone_id"> </td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td> :</td>
                                <td id="city_id"> </td>
                            </tr>
                            <tr>
                                <th>District</th>
                                <td> :</td>
                                <td id="district_id"> </td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td> :</td>
                                <td id="state_id"></td>
                            </tr>
                            <tr>
                                <th>Pincode</th>
                                <td> :</td>
                                <td id="pincode_id"></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td> :</td>
                                <td id="email_id"> </td>
<!--                            <td id="email"> <span class="badge badge-primary"> Delivered </span></td>-->
                            </tr>
                            <!-- Don't delete first row it is fot dot spacing purpose -->
                            <tr>
                                <th style="width: 39% !important;color: black !important;">Name-dummy</th>
                                <td style="width: 2% !important;color: black !important;">dot-dummy</td>
                                <td style="width: 58% !important;color: black !important;">name-dummy</td>
                            </tr>
                            <!-- Don't delete first row it is fot dot spacing purpose -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End container-fluid-->
</div><!--End content-wrapper-->
<?php include('includes/footer.php') ?>

<script>
    function deleteDealer(id) {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to revert back!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.post("deleteDealer",
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
                                else
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

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }

    function addDealer() {
        var formData = $("#add-dealer-form-id").serialize();
        var base_url = '<?php echo base_url(); ?>';
        $.ajax({
            type: 'POST' ,
            url: base_url+'index.php/admin/insertDealer',
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
                    $("#modal-close-id").click();
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

    function make_view(name,contact_person,mobile,phone,city,district,state,email, pincode) {
        $("#shop_name_id").html(name);
        $("#contact_person_id").html(contact_person);
        $("#mobile_id").html(mobile);
        $("#phone_id").html(phone);
        $("#city_id").html(city);
        $("#district_id").html(district);
        $("#state_id").html(state);
        $("#email_id").html(email);
        $("#pincode_id").html(pincode);
        $(".modal-animation-1").modal();
    }
</script>

