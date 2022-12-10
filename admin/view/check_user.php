<?php
require_once("../../app/config.php");
$id=$_GET['id'];
$row=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM users where id='$id'")); 
$title=$row['name'];
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
if(empty($row['image_link'])){
  $cast="../asset/global_assets/images/placeholders/placeholder.jpg";
}else{
  $cast="../asset/profile/".$row['image_link'];
}?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-user-plus mr-2"></i> <span class="font-weight-semibold"><?php echo $row['name'];?> Profile</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
              <a href="./users" class="breadcrumb-item">Users</a>
              <a href="./manage_users/<?php echo $id;?>" class="breadcrumb-item">Profile</a>
            </div>
          </div>

          <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
            </div>
          </div>
        </div>
      </div>
      <div class="content">
<?php
if($row['active']==0){
  if($set['email_activation']==1){
    if($eset['status']==1){?>
        <div class="alert bg-info alert-styled-left alert-arrow-left alert-dismissible">
          <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
          <h6 class="alert-heading font-weight-semibold mb-1">Email verification</h6>
          User account has not yet been verified, account funding is currently disabled until this account is verified.
          </div>
<?php
    }
  }
}?>
<div class="row">
  <div class="col-md-8">
     <?php if($set['kyc']==1){?>
        <div class="card">
          <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-semibold">Kyc verification</h6>
            <div class="header-elements">
              <div class="list-icons text-orange-600">
                  <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th class="text-center">Verification</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td>Identification verification</td>
                <td class="text-center"><?php if($row['kyc_status']==0){echo'unverified';}else{echo'verified';}?></td>
                <td class="text-center"><?php if(!empty($row['kyc_link'])){?><a href="../asset/profile/<?php echo $row['kyc_link'];?>">view</a><?php }else{echo'No file';}?></td>
                <td class="text-center">
                  <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <?php 
                        if($row['kyc_status']!=1) {
                        if(!empty($row['kyc_link'])){?> 
                        <a class='dropdown-item' href ='../app/admin?id=akyc&stat=<?php echo $row['id'];?>'><i class="icon-eye mr-2"></i>Approve</a>
                        <?php }}if(!empty($row['kyc_link'])){?>
                        <a class='dropdown-item' href ='../app/admin?id=rkyc&stat=<?php echo $row['id']; ?>'><i class="icon-eye-blocked2 mr-2"></i>Reject</a>
                        <?php }?> 
                      </div>
                    </div>
                  </div>
                </td>             
                  </tr> 
                  <tr>
                    <td>Address verification</td>
                <td class="text-center"><?php if($row['add_status']==0){echo'unverified';}else{echo'verified';}?></td>
                <td class="text-center"><?php if(!empty($row['add_link'])){?><a href="../asset/profile/<?php echo $row['add_link'];?>">view</a><?php }else{echo'No file';}?></td>
                <td class="text-center">
                  <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <?php
                        if($row['add_status']!=1) {
                        if(!empty($row['add_link'])){?> 
                        <a class='dropdown-item' href ='../app/admin?id=aadd&stat=<?php echo $row['id'];?>'><i class="icon-eye mr-2"></i>Approve</a>
                        <?php } }if(!empty($row['add_link'])){?>
                        <a class='dropdown-item' href ='../app/admin?id=radd&stat=<?php echo $row['id']; ?>'><i class="icon-eye-blocked2 mr-2"></i>Reject</a>
                        <?php }?> 
                      </div>
                    </div>
                  </div>
                </td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
        <?php }?>
        <div class="card">
          <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-semibold">Update account information</h6>
                <div class="header-elements">
                  <div class="list-icons text-orange-600">
                  <a class="list-icons-item" data-action="collapse"></a>
                </div>
              </div>
          </div>

          <div class="card-body">
            <form action="../app/admin/profile" method="post">
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Username:</label>
                  <div class="col-lg-10">
                    <input type=""hidden value="<?php echo $row['id']; ?>"name="user_id">
                    <input type="text" name="username" class="form-control" value="<?php echo $row['username'];?>">
                  </div>
                </div>
               <div class="form-group row">
                  <label class="col-form-label col-lg-2">Name:</label>
                  <div class="col-lg-10">
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>">
                  </div>
                </div>  
               <div class="form-group row">
                  <label class="col-form-label col-lg-2">Email:</label>
                  <div class="col-lg-10">
                    <input type="email" name="email" class="form-control" readonly value="<?php echo $row['email'];?>">
                  </div>
                </div>
               <div class="form-group row">
                  <label class="col-form-label col-lg-2">Mobile:</label>
                  <div class="col-lg-10">
                    <input type="text" name="mobile" class="form-control" value="<?php echo $row['phonenumber'];?>">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Balance:</label>
                    <div class="col-lg-10">
                      <div class="input-group">
                        <span class="input-group-prepend">
                          <span class="input-group-text"><?php echo $scan2['currency'];?></span>
                        </span>
                      <input type="number" name="dep_bal" max-length="10" value="<?php echo $row['dep_balance'];?>" class="form-control">
                        </div>
                      </div>
                  </div> 
              <div class="form-group row">
                <label class="col-form-label col-lg-2">2fa Status <span class="text-danger">*</span></label>
                <div class="col-lg-10">
                  <div class="form-check form-check-inline form-check-switchery">
                    <label class="form-check-label">
              <?php if($row['2fa_status']=='1'){
                  echo'<input type="checkbox" name="2fa_status" class="form-check-input-switchery" value="1" checked>';
              }else{
                  echo'<input type="checkbox" name="2fa_status" class="form-check-input-switchery" value="1">';
              }?>     
                      </label>
                  </div>
                </div>
              </div>                
              <div class="text-right">
                <button type="submit" class="btn bg-<?php echo $set['dashboard_color'];?>">Update<i class="icon-paperplane ml-2"></i></button>
              </div>
            </form>
          </div>
        </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid rounded-circle" src="<?php echo $cast;?>" width="120" height="120" alt="">
        </div>
          <h6 class="font-weight-semibold mb-0"><?php echo $row['name'];?></h6>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
            <div>
              <ul class="list list-unstyled mb-0">
                <li>Merchant ID: <span class="font-weight-semibold">[#<?php echo $row['token'];?>]</span></li>
                <li>Country: <span class="font-weight-semibold"><?php echo $row['country'];?></span></li>
                <li>Joined: <span class="font-weight-semibold"><?php echo date("Y/m/d h:i:A", strtotime($row['date']));?></span></li>
                <li>Last Login: <span class="font-weight-semibold"><?php echo date("Y/m/d h:i:A", strtotime($row['last_login']));?></span></li>
              </ul>
            </div>
            <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
              <ul class="list list-unstyled mb-0">
                <?php if($row['active']==0){echo'<li>Account Status: <span class="badge bg-danger-800 font-weight-semibold">Not verified</span></li>';}else{echo'<li>Account Status: <span class="badge bg-success-800 font-weight-semibold">Verified</span></li>';}?>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
          <span>
            <span class="badge badge-mark border-success mr-2"></span>
            IP Address:
            <span class="font-weight-semibold"><?php echo $row['ip_address'];?></span>
          </span>
        </div>
      </div>
  </div> 
</div>   