<?php include('includes/sidebar.php'); ?>
    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-table"></i>&nbsp;&nbsp;Painters
                            <button type="button" data-toggle="modal" data-target="#modal-animation-3" class="btn btn-primary btn-sm waves-effect waves-light pull-right">Add New Painter</button>
                        </div>
                        <div class="card-body">
                            <?php if(!empty($painters)) {?>
                            <div class="table-responsive">
                                <table id="default-datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>District</th>
                                        <th style="width: 10% !important;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($painters as $each_painter){?>
                                    <tr>
                                        <td><?php echo $each_painter['full_name'];?></td>
                                        <td><?php echo $each_painter['mobile'];?></td>
                                        <td><?php echo $each_painter['district'];?></td>
                                        <td style="width: 10% !important;">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light"
                                                    onclick="make_painter_view('<?php echo $each_painter['full_name'];?>','<?php echo $each_painter['email'];?>','<?php echo $each_painter['mobile'];?>','<?php echo $each_painter['alt_mobile'];?>','<?php echo $each_painter['house'].$each_painter['street'];?>','<?php echo $each_painter['city'];?>','<?php echo $each_painter['district'];?>','<?php echo $each_painter['state'];?>','<?php echo $each_painter['reward_points'];?>');">View</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="button" onclick="deletePainter('<?php echo $each_painter['id']; ?>')" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php }else{?>
                                <h4>No Painters Found !!!</h4>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div><!-- End Row-->
            <div class="modal fade" id="modal-animation-3">
                <div class="modal-dialog">
                    <div class="modal-content animated zoomInUp">
                        <div class="modal-header">
                            <h5 class="modal-title" style="margin-left: 38%;">Add New Painter</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span id="close-modal" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="javascript:addPainter();" id="add-painter-form-id" method="post">
                                <div class="form-group custom-form">
                                    <label class="input-1">Full Name</label>
                                    <div class="position-relative has-icon-right">
                                        <input type="text" class="form-control input-shadow" required name="full_name" placeholder="Enter Full Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group custom-form">
                                    <label class="input-1">Mobile Number</label>
                                    <div class="position-relative has-icon-right">
                                        <input type="text" onkeypress="return isNumber(event);" maxlength="10" minlength="10" class="form-control input-shadow"  required name="mobile_number" placeholder="Enter Phone Number" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group custom-form">
                                    <label class="input-1">Email Id</label>
                                    <div class="position-relative has-icon-right">
                                        <input type="email" class="form-control input-shadow" name="email" placeholder="Enter Email Id" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-left: 40%;"> Submit</button>
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
                            <table style="margin-left: 20% !important;">
                                <tbody>
                                <!-- Dont delete first row it is fot dot spacing purpose -->
                                <tr>
                                    <th style="width: 39% !important;color: black !important;">Name</th>
                                    <td style="width: 2% !important;color: black !important;">sdsdfs</td>
                                    <td style="width: 58% !important;color: black !important;"> Venu</td>
                                </tr>
                                <!-- Dont delete first row it is fot dot spacing purpose -->
                                <tr>
                                    <th style="width: 39% !important;">Name</th>
                                    <td style="width: 2% !important;"> : &nbsp;&nbsp;</td>
                                    <td style="width: 58% !important;" id="name_id"></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td> :</td>
                                    <td id="email_id"></td>
                                </tr>
                                <tr>
                                    <th>Mobile-Number</th>
                                    <td> :</td>
                                    <td id="mobile_id"></td>
                                </tr>
                                <tr>
                                    <th>Alternate</th>
                                    <td> :</td>
                                    <td id="alt_mobile_id"></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td> :</td>
                                    <td id="address_id"></td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td> :</td>
                                    <td id="city_id"></td>
                                </tr>
                                <tr>
                                    <th>District</th>
                                    <td> :</td>
                                    <td id="district_id"></td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td> :</td>
                                    <td id="state_id"></td>
                                </tr>
                                <tr>
                                    <th>Points</th>
                                    <td> :</td>
                                    <td><span class="badge badge-primary" id="points_id"></span></td>
                                </tr>
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
    function deletePainter(id) {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to revert back!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.post("deletePainter",
                    {
                        id: id
                    },
                    function (data) {
                        console.log(data);
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

    function addPainter() {
        var formData = $("#add-painter-form-id").serialize();
        console.log(formData);
        var base_url = '<?php echo base_url(); ?>';
        $.ajax({
            type: 'POST' ,
            url: base_url+'index.php/admin/insertPainter',
            data: formData,
            beforeSend: function(){
                $('#ajax-loader').show();
            },
            complete: function(){
                $('#ajax-loader').hide();
            },
            success: function(data) {
                console.log(data);
                var obj = JSON.parse(data);
                console.log(obj);
                if (obj.status) {
                    $("#close-modal").click();
                    swal(obj.message, {
                        icon: "success",
                    }).then((okay) => {
                        if (okay)
                            location.reload();
                    });
                } else {
                    swal(obj.message);
                }
            }
        });
    }

    function make_painter_view(full_name,email,mobile,alt_mobile,house,city,district,state,reward_points) {
        $("#name_id").html(full_name);
        $("#email_id").html(email);
        $("#mobile_id").html(mobile);
        $("#alt_mobile_id").html(alt_mobile);
        $("#address_id").html(house);
        $("#city_id").html(city);
        $("#district_id").html(district);
        $("#state_id").html(state);
        $("#points_id").html(reward_points);
        $(".modal-animation-1").modal();
    }
</script>
