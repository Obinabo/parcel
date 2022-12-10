<?php
require_once("../../app/config.php");
$title="Security";
$error=$_GET['id'];
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-lock mr-2"></i> <span class="font-weight-semibold">Account Information</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./security/0" class="breadcrumb-item">security</a>
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
    <div class="col-md-8">
      <div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Update Account info</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
        </div>

        <div class="card-body">
          <form action="<?php admin_url('security');?>" method="post">
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Username:</label>
              <div class="col-lg-10">
                <input type="text" name="username" class="form-control" value="<?php echo $admin['username']; ?>" required>
              </div>
            </div> 
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Password:</label>
              <div class="col-lg-10">
                <input type="password" name="password" class="form-control" required>
              </div>
            </div>                
            <div class="text-right">
              <button type="submit" class="btn bg-info-800">Submit form <i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div>          
    </div>
    <div class="col-md-4">
      <div class="card bg-danger">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Change account photo</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item text-white" data-action="collapse"></a>

              </div>
            </div>
        </div>

        <div class="card-body">
          <form action="../app/admin/userimg" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <label>Your avatar:</label>
                <input type="file" name="file" class="form-input-styled text-white" data-fouc required> 
                <span class="form-text text-white">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
              </div>              
            <div class="text-right">
              <button type="submit" class="btn bg-secondary">Upload photo <i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
