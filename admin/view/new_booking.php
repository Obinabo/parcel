<?php
require_once("../../app/config.php");
$title="Booking log";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-book mr-2"></i> <span class="font-weight-semibold">Booking logs</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
            </div>
          </div>

          <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
            </div>
          </div>
        </div>
      </div>
      <!-- /page header -->

  <div class="content">
    <div class="row">
    <div class="col-lg-12">
      <div class="alert bg-info text-white alert-styled-left alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
         Ability to update won't be allowed until shipping fee is paid
        </div>
      </div>        
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <table class="table datatable-show-all">
            <thead>
              <tr>
                  <th>#</th>                                                                       
                  <th>Tracking ID</th>                                                                       
                  <th>Origin</th>                                                                       
                  <th>Destination</th>                                                                       
                  <th>Fee</th>                                                                       
                  <th>Created</th>   
                  <th>Status</th>   
                  <th>Paid</th>
                  <th class="text-center">Action</th>   
              </tr>
            </thead>
            <tbody>  
              <?php
              $data=mysqli_query($dbc, "SELECT * FROM bookings ORDER BY bookings.date DESC");
              while($result=mysqli_fetch_array($data)){
                $user=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM users WHERE id = '".$result['user_id']."'"));
              ?>
              <tr>
                <td><?php echo $index++;?>.</td>
                <td><?php echo $result['track_no'];?></td>
                <td><?php echo $result['o_country'].', '.$result['o_state'];?></td>
                <td><?php echo $result['d_country'].', '.$result['d_state'];?></td>
                <td><?php if($result['ship_fee']==0){echo '<span class="badge badge-success">Not set</span>';}else{echo number_format($result['ship_fee']).$scan2['currency'];}?></td>
                <td><?php echo date("Y/m/d h:i:A", strtotime($result['date'])); ?></td>
                <td><span class="badge badge-info"><?php echo $result['comment'];?></span></td>
                <td><?php if($result['paid']==0){echo '<span class="badge badge-danger">No</span>';}else{echo '<span class="badge badge-success">Yes</span>';}?></td>
                <td class="text-center">
                  <div class="list-icons">
                    <div class="dropdown">
                      <a href="#" class="list-icons-item" data-toggle="dropdown">
                        <i class="icon-menu9"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right bg-slate-800">
                        <?php if($result['ship_fee']==0 && $result['status']!=2 && $result['status']!=1){?>
                          <a data-toggle="modal" data-target="#<?php echo $result['id'];?>approve" class="dropdown-item"><i class="icon-check mr-2"></i>Approve</a>
                        <?php }if($result['paid']==0){?>
                          <a href="../app/user?id=cancelshipping?stat=<?php echo $result['id'];?>" class="dropdown-item"><i class="icon-cancel-circle2 mr-2"></i>Cancel booking</a>
                        <?php }elseif($result['paid']==1){?>
                          <a data-toggle="modal" data-target="#<?php echo $result['id'];?>update" class="dropdown-item"><i class="icon-pencil5 mr-2"></i>Update status</a>
                        <?php }?>
                        <a data-toggle="modal" data-target="#<?php echo $result['id'];?>details" class="dropdown-item"><i class="icon-paste2 mr-2"></i>Details</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <div id="<?php echo $result['id'];?>update" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-blue">
                      <h5 class="modal-title">#<?php echo $result['track_no'];?> booked @ <?php echo date("Y/m/d h:i:A", strtotime($result['date'])); ?></h5>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="../app/admin?id=upshipping" method="post">
                    <div class="modal-body">
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Current location:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="" name="location" value="<?php echo $result['current_location'];?>">
                        </div>
                      </div>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Shipment status:</label>
                      <div class="col-lg-9">
                        <select data-placeholder="Select service" class="form-control form-control-select2" data-fouc required name="ship_status" data-dropdown-css-class="bg-slate-800">
                          <option></option>
                            <option value="In transit" <?php if($result['comment']=='In transit'){echo'selected';}?>>In transit</option>
                            <option value="Moved further" <?php if($result['comment']=='Moved further'){echo'selected';}?>>Moved further</option>
                            <option value="Shipment arrived" <?php if($result['comment']=='Shipment arrived'){echo'selected';}?>>Shipment arrived</option>
                            <option value="Despatched for delivery" <?php if($result['comment']=='Despatched for delivery'){echo'selected';}?>>Despatched for delivery</option>
                            <option value="Delivered" <?php if($result['comment']=='Delivered'){echo'selected';}?>>Delivered</option>
                            <option value="Hold" <?php if($result['comment']=='Hold'){echo'selected';}?>>Hold</option>
                            <option value="Returned" <?php if($result['comment']=='Returned'){echo'selected';}?>>Returned</option>
                        </select>
                      </div>
                    </div> 
                          <input type="hidden" name="track" value="<?php echo $result['track_no'];?>">
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn bg-primary">Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <div id="<?php echo $result['id'];?>approve" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-blue">
                      <h5 class="modal-title">#<?php echo $result['track_no'];?> booked @ <?php echo date("Y/m/d h:i:A", strtotime($result['date'])); ?></h5>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="../app/admin?id=appshipping" method="post">
                    <div class="modal-body">
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Price:</label>
                        <div class="col-lg-9">
                          <div class="input-group">
                            <input type="number" step="any" class="form-control" placeholder="" name="amount" required>
                            <span class="input-group-append">
                              <span class="input-group-text"><?php echo $scan2['currency'];?></span>
                            </span>
                          </div>
                        </div>
                      </div> 
                          <input type="hidden" name="track" value="<?php echo $result['track_no'];?>">
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn bg-primary">Approve</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <div id="<?php echo $result['id'];?>details" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-blue">
                      <h6 class="modal-title">Shipping details</h6>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <h6 class="">Start date: <?php if(empty($result['s_date'])){echo 'shipment has not started';}else{echo date("Y/m/d h:i:A", strtotime($result['s_date']));}?></h6>
                      <h6 class="">Client's name: <a href="manage_users/<?php echo $user['id'];?>"><?php echo $user['name'];?></a></h6>
                      <h6 class="">Content: <?php echo $result['content'];?></h6>
                      <h6 class="">Type: <?php echo $result['type'];?></h6>
                      <h6 class="">Structure: <?php echo $result['structure'];?></h6>
                      <h6 class="">Quantity: <?php echo $result['quantity'];?></h6>
                      <h6 class="">Weight: <?php echo $result['weight'];?>cm</h6>
                      <h6 class="">Length: <?php echo $result['length'];?>cm</h6>
                      <h6 class="">Height: <?php echo $result['height'];?>cm</h6>
                      <h6 class="">Width: <?php echo $result['weight'];?>cm</h6>
                      <h6 class="">Phone: <?php echo $result['phone'];?></h6>
                      <h6 class="">Address: <?php echo $result['address'];?></h6>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?> 
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
<?php require_once('../include/user_footer.php');?>
