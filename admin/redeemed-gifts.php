<?php include('includes/sidebar.php'); ?>
    <div class="clearfix"></div>
    <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Redeemed Gifts
                    </div>
                    <div class="card-body">
                        <?php if(!empty($redeemed_gifts)){?>
                            <div class="table-responsive">
                                <table id="default-datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Gift Name</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($redeemed_gifts as $each_gift) {?>
                                        <tr>
                                            <td><?php echo $each_gift['name'];?></td>
                                            <td><?php echo $each_gift['gift_name'];?></td>
                                            <td><?php echo $each_gift['status'];?></td>
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
        <div class="modal fade modal-animation-2">
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
                                <td style="width: 58% !important;color: black !important;"> Venu  </td>
                            </tr>
                            <!-- Dont delete first row it is fot dot spacing purpose -->
                            <tr>
                                <th style="width: 39% !important;">Name</th>
                                <td style="width: 2% !important;"> : &nbsp;&nbsp;</td>
                                <td style="width: 58% !important;"> Venu  </td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td> : </td>
                                <td>9874563210</td>
                            </tr>
                            <tr>
                                <th>Alternate Phone</th>
                                <td> : </td>
                                <td>9874563210</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td> : </td>
                                <td>1995-05-04</td>
                            </tr>
                            <tr>
                                <th>Anniversary</th>
                                <td> : </td>
                                <td>2018-06-21</td>
                            </tr>
                            <tr>
                                <th>Experience</th>
                                <td> : </td>
                                <td> 2 Years </td>
                            </tr>
                            <tr>
                                <th>Email Id</th>
                                <td> : </td>
                                <td>venu@appcare.co.in</td>
                            </tr>
                            <tr>
                                <th>Reward Points</th>
                                <td> : </td>
                                <td>27,000</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td> : </td>
                                <td>28/3, Saraswathi Nagar, Lothukunta, Alwal, Secundrabad-500018</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td> : </td>
                                <td><span class="badge badge-primary">Delivered</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
<?php include('includes/footer.php') ?>