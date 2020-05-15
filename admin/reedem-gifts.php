<?php include('includes/sidebar.php'); ?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Upload Redeem Gifts
            </div>
            <div class="card-body">
              <form id="personal-info">
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Gift Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="fname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Redeem Points</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="fname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Select File</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="input-8" name="file" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="basic-textarea" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                  <textarea rows="2" class="form-control" id="basic-textarea"></textarea>
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-success">SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive col-md-12">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                      <th>Gift Mame</th>
                      <th>Redeem Points</th>
                      <th>Gift Image</th>
                      <th>Product Description</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>Honda CBR 250cc</td>
                      <td>25,000</td>
                      <td><img src="assets/images/avatar2.png" class="Redeem_img" alt="logo icon"></td>
                      <td>Lorem Ipsum dummy text</td>
                      <td>
                          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>&nbsp;&nbsp;&nbsp;
                      	<button type="button" class="btn btn-danger btn-sm waves-effect waves-light confirm-btn-alert">Delete</button>
                      </td>
                    </tr>
                    <tr>
                        <td>Sony 40inch. Full Hd Tv</td>
                        <td>35,000</td>
                        <td><img src="assets/images/avatar3.png" class="Redeem_img" alt="logo icon"></td>
                        <td>Lorem Ipsum dummy text</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light confirm-btn-alert">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Samsung Fridge</td>
                        <td>46,000</td>
                        <td><img src="assets/images/avatar4.png" class="Redeem_img" alt="logo icon"></td>
                        <td>Lorem Ipsum dummy text</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light confirm-btn-alert">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bajaj Microwave</td>
                        <td>87,000</td>
                        <td><img src="assets/images/avatar5.png" class="Redeem_img" alt="logo icon"></td>
                        <td>Lorem Ipsum dummy text</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>&nbsp;&nbsp;&nbsp;
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
    <!-- End container-fluid-->
    </div><!--End content-wrapper-->
<?php include('includes/footer.php') ?>