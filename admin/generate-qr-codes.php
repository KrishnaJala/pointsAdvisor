<?php include('includes/sidebar.php'); ?>
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-qrcode"></i>&nbsp;Generate QR Codes
                    </div>
                    <div class="card-body">
                        <form id="personal-info" method="post" action="generateQRCode">
                            <div class="form-group row">
                                <label for="input-1" class="col-sm-2 col-form-label">Product List</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="input-1" name="product" required>
                                        <option value=0 disabled selected>-- Select Product --</option>
                                        <?php foreach ($products as $each_product) {
                                            echo "<option value='" . $each_product['pid'] . "'>" . $each_product['product_name'] . " - " . $each_product['quantity'] . " Litres</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-2" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="input-2" name="quantity" required></select>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success" onclick="return validate();">Generate </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--End Row-->
        <?php if (!empty($generated)) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-table"></i>&nbsp;History of Generated QR Codes
                        </div>
                        <div class="card-body">
                            <div class="table-responsive col-md-12">
                                <table id="default-datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Copies Generated</th>
                                        <th>Generated On</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($generated as $each_generated) { ?>
                                        <tr>
                                            <td><?php echo $each_generated['name'] . " - " . $each_generated['quantity']." Litres"; ?></td>
                                            <td><?php echo $each_generated['copies']; ?></td>
                                            <td><?php echo date("jS F Y, h:i:s A", $each_generated['gen_time']); ?></td>
                                            <td><a href="<?php echo base_url().'assets/admin/QRCodes/QR_Codes_List_'. $each_generated['gen_time'].'.xls';?>" download>
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Download Excel <!--<sup>*</sup>--></button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!--<div class="row mt-3 mr-3 pull-right">
                                <small class="align-right">*print QR-Codes both sides of paper</small>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- End Row-->
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
    <?php include('includes/footer.php') ?>
    <script>
        addYearsToField("#input-2");

        //adding year options to forms
        function addYearsToField(elementId) {
            const dates = [];
            dates.push('<option value=0 disabled selected>-- Select Quantity --</option>');
            for (i = 1; i <= 100; i++) {
                dates.push('<option value=' + i + '>' + i + '</option>');
            }
            $(elementId).html(dates);
        }

        function validate() {
            const a = document.getElementById('input-1').value;
            const b = document.getElementById('input-2').value;
            if(a === "0" || b === "0"){
                alert("Please select option");
                return false;
            }else{
                return true;
            }
        }
    </script>
