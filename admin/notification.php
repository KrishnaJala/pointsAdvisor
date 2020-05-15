<?php include('includes/sidebar.php'); ?>
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <i class="fa fa-bell"></i>&nbsp;Notification History
                <button type="button" data-toggle="modal" data-target="#modal-animation-3" class="btn btn-primary btn-sm waves-effect waves-light pull-right">Send Notification</button>
            </div>
            <div class="card-body">
                <?php if(!empty($notifications)){?>
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sent To</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($notifications as $each_notification){?>
                    <tr>
                        <td><?php if($each_notification['type']=="all"){echo "Dealers & Painters";}else if($each_notification['type']=="dealer"){echo "Dealers";}else{echo "Painters";}?></td>
                        <td><?php echo $each_notification['title'];?></td>
                        <td><?php echo $each_notification['message'];?></td>
                        <td><?php echo date("jS F Y, h:i:s A",$each_notification['timestamp']);?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            <?php }?>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
        <div class="modal fade" id="modal-animation-3">
            <div class="modal-dialog">
                <div class="modal-content animated zoomInUp">
                  <div class="modal-header">
                    <h5 class="modal-title" style="margin-left: 38%;"> <i class="fa fa-bell"></i> Send Notification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="sendNotification" method="post">
                        <div class="col-md-12">
                          <div class="form-group custom-form">
                            <label for="select_id">Select Type</label>
                              <select id="select_id" name="type" class="form-control">
                                <option value="all">All</option>
                                <option value="dealer">Dealers</option>
                                <option value="painter">Painters</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-12 form-group custom-form">
                          <label for="title_id">Title</label>
                          <input type="text" class="form-control" id="title_id" name="title"  maxlength="100" placeholder="max 100 characters">
                        </div>
                        <div class="col-md-12 form-group custom-form">
                          <label for="message_id">Message</label>
                          <textarea rows="4" class="form-control" name="message" id="message_id" maxlength="240" placeholder="max 240 characters"></textarea>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" style="margin-left: 40%;"> Submit </button>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    <!-- End container-fluid-->
    </div><!--End content-wrapper-->
<?php include('includes/footer.php') ?>