<?php include('includes/sidebar.php'); ?>
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-paint-brush"></i>&nbsp;&nbsp;Stock Management
                <button type="button" data-toggle="modal" data-target="#modal-animation-3" class="btn btn-primary btn-sm waves-effect waves-light pull-right">Add Product</button>
            </div>
            <div class="card-body">
              <!--<form id="personal-info">
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Gift Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="fname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Quantity</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="input-1" name="fname" required>
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-success">SAVE</button>
                </div>
              </form>-->
                <div class="table-responsive col-md-12">
                    <table id="default-datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Points</th>
                            <th>Cash Token</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products as $each_product) { ?>
                            <tr>
                                <td><?php echo $each_product['product_name'] . " - " . $each_product['quantity']." Litres"; ?></td>
                                <td><?php echo $each_product['points']; ?></td>
                                <td><?php echo $each_product['cash_token']; ?></td>
                                <td>
                                    <button type="button" onclick="make_edit('<?php echo $each_product['id'];?>','<?php echo $each_product['product_name'] . " - " . $each_product['quantity']." Litres"; ?>','<?php echo $each_product['points']; ?>','<?php echo $each_product['cash_token']; ?>')" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>&nbsp;&nbsp;&nbsp;
                                    <button type="button" onclick="deleteProduct('<?php echo $each_product['id'];?>')" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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
                        <h5 class="modal-title" style="margin-left: 38%;">Add New Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span id="product-modal-close-id" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:addProduct();" id="add-stock-form-id" method="post">
                            <div class="form-group custom-form">
                                <label class="input-1">Product Name</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="p_name" required autocomplete="off" class="form-control input-shadow" placeholder="Enter Product Name">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="input-1">Quantity</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="quantity" required autocomplete="off" onkeypress="return isNumber(event);" class="form-control input-shadow" placeholder="Enter Quantity in litres">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="input-1">Points</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="points" onkeypress="return isNumber(event);" required autocomplete="off" class="form-control input-shadow" placeholder="Enter Reward Points">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="input-1">Cash Token</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" name="cash_token" onkeypress="return isNumber(event);" required autocomplete="off" class="form-control input-shadow" placeholder="Enter Cash Token Price">
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
        <!--END OF ADD NEW PRODUCT-->
        <!-- START EDIT PRODUCT -->
        <div class="modal fade" id="modal-animation-1">
            <div class="modal-dialog">
                <div class="modal-content animated">
                    <div class="modal-header">
                        <h5 class="modal-title" style="margin-left: 38%;">Edit Product Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span id="product-modal-edit-close-id" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:updateProduct();" id="update-stock-form-id" method="post">
                            <input type="hidden" id="pid" name="id">
                            <div class="form-group custom-form">
                                <label class="input-1">Product Name</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" required readonly id="complete_product_id">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="input-1">Points</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" onkeypress="return isNumber(event);" title="Product Points" id="points_id" required autocomplete="off" name="update_points" class="form-control input-shadow">
                                </div>
                            </div>
                            <div class="form-group custom-form">
                                <label class="input-1">Cash Token</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control input-shadow" required autocomplete="off" title="Product Cash Token" onkeypress="return isNumber(event);" id="cash_token_id" name="update_cash_token">
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
        <!--END OF EDIT PRODUCT-->
    </div><!--End content-wrapper-->
<?php include('includes/footer.php') ?>
      <script>
          function deleteProduct(id) {
              swal({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to revert back!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              }).then((willDelete) => {
                  if (willDelete) {
                      $.post("deleteProduct",
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

          function addProduct() {
              var formData = $("#add-stock-form-id").serialize();
              var base_url = '<?php echo base_url(); ?>';
              $.ajax({
                  type: 'POST' ,
                  url: base_url+'index.php/admin/insertStock',
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
                          $("#product-modal-close-id").click();
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
          function make_edit(id, product_name, points, cash_token) {
           $("#pid").val(id);
           $("#complete_product_id").val(product_name);
           $("#points_id").val(points);
           $("#cash_token_id").val(cash_token);
           $("#modal-animation-1").modal();
          }

          function updateProduct() {
              var formData = $("#update-stock-form-id").serialize();
              var base_url = '<?php echo base_url(); ?>';
              $.ajax({
                  type: 'POST' ,
                  url: base_url+'index.php/admin/updateStock',
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
                          $("#product-modal-edit-close-id").click();
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
