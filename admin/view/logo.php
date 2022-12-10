<?php
require_once("../../app/config.php");
$title="Logo";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-hammer-wrench mr-2"></i> <span class="font-weight-semibold">Logo</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./settings" class="breadcrumb-item">settings</a>
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
<?php if(!empty($_SESSION['logo'])){?>
    <div class="row">
        <div class="col-lg-12">
          <div class="alert <?php if($_SESSION['logo']=='success') {echo 'bg-success';}else{echo 'bg-danger-800';}?> text-white alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
      <?php 
      if($_SESSION['logo']=='success') {echo'Update was successful.';}
      else if($_SESSION['logo']=='error') {echo'An error occured.';}
        unset($_SESSION['logo']);
      ?>                 
            </div>
          </div>
      </div>
<?php }?>
<div class="row">
  <div class="col-md-8">
      <div class="card">
        <div class="card-header header-elements-inline">
          <h5 class="card-title">Change website logo</h5>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
        </div>

        <div class="card-body">
          <form action="<?php admin_url('adminimg');?>" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <label>Your logo:</label>
                <input type="file" name="file" class="form-input-styled" data-fouc>
                <span class="form-text text-muted">Accepted formats: png, jpg. Max file size 2Mb</span>
              </div>              
            <div class="text-right">
              <button type="submit" class="btn bg-secondary">Upload logo <i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div>
  </div>
  <div class="col-md-4">
    <div class="card">
     <div class="card-header header-elements-inline">
      <h6 class="card-title font-weight-semibold">Logo</h6>
      </div>
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid" src="../asset/<?php echo $logo['image_link'];?>" alt="" style="max-width:30%; height:auto;">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
      <div class="card">
        <div class="card-header header-elements-inline">
          <h5 class="card-title">Change website favicon</h5>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
        </div>

        <div class="card-body">
          <form action="<?php admin_url('adminfav');?>" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <label>Your Favicon:</label>
                <input type="file" name="file" class="form-input-styled" data-fouc>
                <span class="form-text text-muted">Accepted formats: gif, png, jpg, ico. Max file size 2Mb</span>
              </div>              
            <div class="text-right">
              <button type="submit" class="btn bg-secondary">Upload favicon <i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div>
  </div>
  <div class="col-md-4">
    <div class="card">
     <div class="card-header header-elements-inline">
      <h6 class="card-title font-weight-semibold">Favicon</h6>
      </div>
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid" src="../asset/<?php echo $logo['image_link2'];?>" alt="" style="max-width:30%; height:auto;">
        </div>
      </div>
    </div>
  </div>
</div>

      </div>  
    </div>
<?php require_once('../include/user_footer.php');?> 