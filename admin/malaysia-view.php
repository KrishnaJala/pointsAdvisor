<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/16/2020
 * Time: 9:23 PM
 */

include_once 'db.php';

$query = $conn->query("SELECT * FROM malaysia_data");
$num = $query->num_rows;
if ($num == 0) {
    $data = array();
} else {
    $data = $query->fetch_all(MYSQLI_ASSOC);
}

?>
<?php include('includes/sidebar.php'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-table"></i>&nbsp;&nbsp;Flights Data
                        <button type="button" style="margin-left: 5px;" onclick="window.location='malaysia-serialize.php'" class="btn btn-primary btn-sm waves-effect waves-light pull-right">Serialize-Dump</button>
                        <button type="button" data-toggle="modal" data-target="#modal-animation-3" class="btn btn-primary btn-sm waves-effect waves-light pull-right">Add Data</button>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($data)){ ?>
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <th>Trip Type</th>
                                    <th>Class</th>
                                    <th>Points</th>
                                    <th style="width: 10% !important;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $eachData) { ?>
                                    <tr>
                                        <td><?php echo $eachData['origin']; ?></td>
                                        <td><?php echo $eachData['destination']; ?></td>
                                        <td><?php echo $eachData['planType']; ?></td>
                                        <td><?php echo $eachData['cabinClass']; ?></td>
                                        <td><?php echo $eachData['miles']; ?></td>
                                        <td style="width: 10% !important;">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light" onclick="make_view('<?php echo $eachData['id'];?>','<?php echo $eachData['origin'];?>','<?php echo $eachData['destination'];?>','<?php echo $eachData['planType'];?>','<?php echo $eachData['cabinClass'];?>','<?php echo $eachData['miles'];?>')">Update</button>
                                            <button type="button" onclick="deleteData('<?php echo $eachData['id']; ?>')" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php } else { ?>
                        <h4>No Data Found !!!</h4>
                    <?php } ?>
                </div>
            </div>
        </div><!-- End Row-->
        <div class="modal fade" id="modal-animation-3">
            <div class="modal-dialog">
                <div class="modal-content animated zoomInUp">
                    <div class="modal-header">
                        <h5 class="modal-title" style="margin-left: 38%;">Add New Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span id="modal-close-id" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="addMalaysia.php" method="post">
                            <div class="form-group custom-form">
                                <label class="inpu">Origin</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="origin" class="form-control input-shadow" autocomplete="off" required placeholder="Enter origin">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Destination</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="destination" class="form-control input-shadow" autocomplete="off" required placeholder="Enter destination">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Plan Type</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="planType" class="form-control input-shadow" autocomplete="off" required placeholder="Enter Plan Type">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Cabin Class</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" name="cabinClass" required placeholder="Enter cabinClass">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Points</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" onkeypress="return isNumber(event);" class="form-control input-shadow" name="miles" required placeholder="Enter points">
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
                        <h5 class="modal-title" style="margin-left: 38%;">Update Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="update-form" action="updateMalaysia.php" method="post">
                            <input type="hidden" id="id" name="id" class="form-control input-shadow" required>
                            <div class="form-group custom-form">
                                <label class="inpu">Origin</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="origin" id="origin" class="form-control input-shadow" autocomplete="off" required placeholder="Enter origin">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Destination</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="destination" id="destination" class="form-control input-shadow" autocomplete="off" required placeholder="Enter destination">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Plan Type</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="planType" id="planType" class="form-control input-shadow" autocomplete="off" required placeholder="Enter Plan Type">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Cabin Class</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" name="cabinClass" id="cabinClass" required placeholder="Enter cabinClass">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="inpu">Points</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" onkeypress="return isNumber(event);" class="form-control input-shadow" name="miles" id="miles" required placeholder="Enter points">
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
    </div>
    <!-- End container-fluid-->
</div><!--End content-wrapper-->
<?php include('includes/footer.php') ?>

<script>
    function deleteData(id) {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to revert back!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.post("deleteMalaysia.php",
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

    function make_view(id,origin,destination,planType,cabinClass,miles) {
        $("form#update-form #id").val(id);
        $("form#update-form #origin").val(origin);
        $("form#update-form #destination").val(destination);
        $("form#update-form #planType").val(planType);
        $("form#update-form #cabinClass").val(cabinClass);
        $("form#update-form #miles").val(miles);
        $(".modal-animation-1").modal();
    }
</script>
