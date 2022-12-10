<?php
require_once("../../app/config.php");
$title="Branch";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$data = mysqli_query($dbc, "SELECT * FROM branch ORDER BY branch.id DESC");  
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-home2 mr-2"></i> <span class="font-weight-semibold">Bank branches</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./branch" class="breadcrumb-item">branch</a>
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
          <h6 class="card-title font-weight-semibold">Create bank branch</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
        </div>

        <div class="card-body">
          <form action="<?php admin_url('branch');?>" method="post">
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Name:</label>
                  <div class="col-lg-10">
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
               <div class="form-group row">
                  <label class="col-form-label col-lg-2">Address:</label>
                  <div class="col-lg-10">
                    <input type="text" name="address" class="form-control">
                  </div>
                </div> 
               <div class="form-group row">
                  <label class="col-form-label col-lg-2">City:</label>
                  <div class="col-lg-10">
                    <input type="text" name="city" class="form-control">
                  </div>
                </div>  
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Mobile:</label>
                  <div class="col-lg-10">
                    <input type="text" name="mobile" class="form-control">
                  </div>
                </div>                
            <div class="text-right">
              <button type="submit" class="btn bg-violet">Submit<i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div>       