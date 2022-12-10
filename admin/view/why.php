<?php
require_once("../../app/config.php");
$title="Why us";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-balance mr-2"></i> <span class="font-weight-semibold">Why us</span></h4>
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
<div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Update Why us page</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
        </div>

        <div class="card-body">
          <form action="<?php admin_url('why');?>" method="post">
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Title:</label>
                <div class="col-lg-10">
                  <input type="text" name="title" class="form-control" value="<?php echo $set2['w_title'];?>">
                </div>
              </div> 
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Content:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="body" class="tinymce form-control"><?php echo $set2['w_body'];?></textarea>
                </div>
              </div>                
            <div class="text-right">
              <button type="submit" class="btn bg-info-800">Submit<i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div>  