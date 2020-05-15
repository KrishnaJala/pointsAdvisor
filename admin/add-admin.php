<?php include('includes/sidebar.php'); ?>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Admin
                <button type="button" data-toggle="modal" data-target="#modal-animation-3" class="btn btn-primary btn-sm waves-effect waves-light pull-right">Add Admin</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email Id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Venu Kishore</td>
                        <td>8096980656</td>
                        <td>venu@appcare.co.in</td>
                        <td>
                        	<button type="button" class="btn btn-danger btn-sm waves-effect waves-light confirm-btn-alert">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Naresh</td>
                        <td>8184818458</td>
                        <td>naresh@appcare.co.in</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light confirm-btn-alert">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>krishna</td>
                        <td>9844561656</td>
                        <td>krishna@appcare.co.in</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light confirm-btn-alert">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sunil Kumar</td>
                        <td>9052880800</td>
                        <td>sunil@appcare.co.in</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light confirm-btn-alert">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
        <div class="modal fade" id="modal-animation-3">
            <div class="modal-dialog">
                <div class="modal-content animated zoomInUp">
                  <div class="modal-header">
                    <h5 class="modal-title" style="margin-left: 38%;">Fill Admin Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group custom-form">
                            <label class="input-1">User Name</label>
                            <div class="position-relative has-icon-right">
                                <input type="text" class="form-control input-shadow" placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="form-group custom-form">
                            <label class="input-1">Password</label>
                            <div class="position-relative has-icon-right">
                                <input type="password" class="form-control input-shadow" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="form-group custom-form">
                            <label class="input-1">Phone Number</label>
                            <div class="position-relative has-icon-right">
                                <input type="text" class="form-control input-shadow" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="form-group custom-form">
                            <label class="input-1">Email Id</label>
                            <div class="position-relative has-icon-right">
                                <input type="email" class="form-control input-shadow" placeholder="Enter Email Id">
                            </div>
                        </div>
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-left: 40%;"> Submit </button>
                        </div>
                    </form>
                  </div>
                    
                </div>
            </div>
        </div>
<?php include('includes/footer.php') ?>