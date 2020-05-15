<?php include('includes/sidebar.php'); ?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <i class="zmdi zmdi-settings"></i> Settings
            </div>
            <div class="card-body">
              <form id="personal-info">
                <div class="form-group row">
                  <label for="input-1" class="col-sm-4 col-form-label">Dealer Excel Upload</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="input-1" name="fname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-8" class="col-sm-4 col-form-label">Dealers City/Pincode Excel list Upload</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="input-8" name="file" required>
                  </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success"> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    <!-- End container-fluid-->
    </div><!--End content-wrapper-->
<?php include('includes/footer.php') ?>