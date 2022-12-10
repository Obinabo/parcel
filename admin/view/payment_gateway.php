<?php
require_once("../../app/config.php");
$title="Payment gateways";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$data = mysqli_query($dbc, "SELECT * FROM gateways ORDER BY gateways.id ASC");
$bank=mysqli_fetch_array(mysqli_query($dbc,"SELECT * FROM admin_bank WHERE id='1'")); 
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-pencil7 mr-2"></i> <span class="font-weight-semibold">Automatic payment gateway settings</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./payment_gateway" class="breadcrumb-item">gateway</a>
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
     <div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Update Bank Details</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>

              </div>
            </div>
        </div>

        <div class="card-body">
          <form action="../app/admin/bank" method="post">
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Name:</label>
                <div class="col-lg-10">
                  <input type="text" name="name" class="form-control" value="<?php echo $bank['name'];?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Bank name:</label>
                <div class="col-lg-10">
                  <input type="text" name="bank_name" class="form-control" value="<?php echo $bank['bank_name'];?>">
                </div>
              </div>
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Bank address:</label>
                <div class="col-lg-10">
                  <input type="text" name="address" class="form-control" value="<?php echo $bank['address'];?>">
                </div>
              </div>  
             <div class="form-group row">
                <label class="col-form-label col-lg-2">IBAN code:</label>
                <div class="col-lg-10">
                  <input type="text" name="iban" class="form-control" value="<?php echo $bank['iban'];?>">
                </div>
              </div>
             <div class="form-group row">
                <label class="col-form-label col-lg-2">SWIFT code:</label>
                <div class="col-lg-10">
                  <input type="text" name="swift" class="form-control" value="<?php echo $bank['swift'];?>">
                </div>
              </div>
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Account number:</label>
                <div class="col-lg-10">
                  <input type="number" name="acct_no" class="form-control" value="<?php echo $bank['acct_no'];?>">
                </div>
              </div>  
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Status <span class="text-danger">*</span></label>
                  <div class="col-lg-10">
                    <div class="form-check form-check-inline form-check-switchery">
                      <label class="form-check-label">
                <?php if($bank['status']=='1'){
                    echo'<input type="checkbox" name="status" class="form-check-input-switchery" value="1" checked>';
                }else{
                    echo'<input type="checkbox" name="status" class="form-check-input-switchery" value="1">';
                }?>        
                        </label>
                    </div>
                  </div>
                </div>               
            <div class="text-right">
              <button type="submit" class="btn bg-orange">Update<i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div> 
      <div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Gateway</h6>
          <div class="header-elements">
            </div>
          </div>
        <div class="card-body">
        </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
              <th>S/N</th>
              <th>Name</th>
              <th>Name for user</th>
              <th>Status</th>
              <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php while($val=mysqli_fetch_array($data)){?>
            <tr>
              <td><?php echo $index++;?>.</td>                                        
              <td><?php echo $val['main_name'];?></td>
              <td><?php echo $val['name'];?></td> 
              <td><?php if($val['status']==1){echo'<span class="badge badge-success">Active</span>';}
        else{echo'<span class="badge badge-danger">Pending</span>';}?></td>
              <td class="text-center">
                <a data-toggle="modal" data-target="#<?php echo $val['id'];?>edit" class="" >
                  <i class="icon-pencil7 mr-2"></i>Edit
                </a>
              </td>                      
            </tr>
        <div id="<?php echo $val['id'];?>edit" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><?php echo $val['main_name'];?></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <form action="../app/admin?id=gateways" method="post">
                <div class="modal-body">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                        <label>Name of gateway</label>
                        <input value="<?php echo $val['id'];?>"type="hidden" name="id">
                        <input type="text" value="<?php echo $val['name'];?>" name="name" class="form-control">
                      </div>

                      <div class="col-sm-6">
                        <label class="">Rate:</label>
                        <div class="">
                          <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text">1 USD =</span>
                          </span>
                          <input type="number" name="rate" maxlength="10" class="form-control"value="<?php echo $val['rate'];?>">
                            <span class="input-group-append">
                              <span class="input-group-text"><?php echo $scan2['currency'];?></span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                        <label>Minimun Deposit</label>
                       <div class="input-group">
                          <input type="number" name="minamo" maxlength="10" class="form-control"value="<?php echo $val['minamo'];?>">
                            <span class="input-group-append">
                              <span class="input-group-text"><?php echo $scan2['currency'];?></span>
                            </span>
                          </div>
                      </div>

                      <div class="col-sm-6">
                        <label>Maximum Deposit</label>
                          <div class="input-group">
                            <input type="number" name="maxamo" maxlength="10" class="form-control"value="<?php echo $val['maxamo'];?>">
                            <span class="input-group-append">
                              <span class="input-group-text"><?php echo $scan2['currency'];?></span>
                            </span>
                          </div>
                      </div>
                      </div>
                    </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                        <label>Deposit fixed charge</label>
                       <div class="input-group">
                          <input type="number" step="any" name="chargefx" maxlength="10" class="form-control"value="<?php echo $val['fixed_charge'];?>">
                            <span class="input-group-append">
                              <span class="input-group-text"><?php echo $scan2['currency'];?></span>
                            </span>
                          </div>
                      </div>

                      <div class="col-sm-6">
                        <label>Charge in percentage</label>
                          <div class="input-group">
                            <input type="number" step="any" name="chargepc" maxlength="10" class="form-control"value="<?php echo $val['percent_charge'];?>">
                            <span class="input-group-append">
                              <span class="input-group-text">%</span>
                            </span>
                          </div>
                      </div>
                      </div>
                    </div>
<?php if($val['id']==101){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
            <label>PAYPAL BUSINESS EMAIL</label>
            <input type="text" value="<?php echo $val['val1'];?>" class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==102){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
            <label>PM USD ACCOUNT</label>
            <input type="text" value="<?php echo $val['val1'];?>" class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>ALTERNATE PASSPHRASE</label>
                <input type="text" value="<?php echo $val['val2'];?>" class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==103){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>SECRET KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>PUBLISHABLE KEY</label>
                <input type="text" value="<?php echo $val['val2'];?>"class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>

    <?php }elseif($val['id']==104){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Marchant Email</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Secret KEY</label>
                <input type="text" value="<?php echo $val['val2'];?>"class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==501){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                    <label>API KEY</label>
                    <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>XPUB CODE</label>
                <input type="text" value="<?php echo $val['val2'];?>"class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==502){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>API KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>" class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>API PIN</label>
                <input type="text" value="<?php echo $val['val2'];?>" class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==503){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>API KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>API PIN</label>
                <input type="text" value="<?php echo $val['val2'];?>"class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==504){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>API KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>API PIN</label>
                <input type="text" value="<?php echo $val['val2'];?>"class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==505){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Public KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Private KEY</label>
                <input type="text" value="<?php echo $val['val2'];?>"class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==506){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Public KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                    <label>Private KEY</label>
                    <input type="text" value="<?php echo $val['val2'];?>" class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==507){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Public KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Private KEY</label>
                <input type="text" value="<?php echo $val['val2'];?>" class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==508){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Public KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Private KEY</label>
                <input type="text" value="<?php echo $val['val2'];?>" class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==509){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Public KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Private KEY</label>
                <input type="text" value="<?php echo $val['val2'];?>"class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==510){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Public KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>" class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Private KEY</label>
                <input type="text" value="<?php echo $val['val2'];?>" class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>

    <?php }elseif($val['id']==512){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>SECRET KEY</label>
                <input type="text" value="<?php echo $val['val1'];?>" class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
    <?php }elseif($val['id']==513){?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>API Key</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>API ID</label>
                <input type="text" value="<?php echo $val['val2'];?>"class="form-control" id="val2" name="val2">
               </div>
           </div>
       </div>
   <?php } else{?>
        <div class="form-group">
            <div class="row">
              <div class="col-sm-12">
                <label>Payment Details</label>
                <input type="text" value="<?php echo $val['val1'];?>"class="form-control" id="val1" name="val1">
               </div>
           </div>
       </div>
   <?php }?>
    <div class="form-group">
      <label>Status</label>
      <select class="form-control select" name="status">
          <option value="1" <?php if($val['status']==1){echo'selected';}?>>
              Active
          </option>
          <option value="0" <?php if($val['status']==0){echo'selected';}?>>
              Deactive
          </option>
      </select>
  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn bg-primary">Save changes</button>
                </div>
              </form>
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