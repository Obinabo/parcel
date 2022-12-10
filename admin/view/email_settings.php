<?php
require_once("../../app/config.php");
$title="Email Settings";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-envelope mr-2"></i> <span class="font-weight-semibold">SMTP settings</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./email_settings" class="breadcrumb-item">smtp</a>
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
            <h6 class="card-title font-weight-semibold">Congifure mail client</h6>
                <div class="header-elements">
                  <div class="list-icons text-orange-600">
                  <a class="list-icons-item" data-action="collapse"></a>
       
                </div>
              </div>
          </div>

          <div class="card-body">
            <p class="text-danger">Email smtp settings is very important in this application, to access smtp information, login webmail and click configure mail client.</p>
            <form action="<?php admin_url('esettings');?>" method="post">
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Host:</label>
                  <div class="col-lg-10">
                    <input type="text" name="host" value="<?php echo $eset['hoste'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Username:</label>
                  <div class="col-lg-10">
                    <input type="email" name="username" value="<?php echo $eset['username'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Password:</label>
                  <div class="col-lg-10">
                    <input type="password" name="password" value="<?php echo $eset['password'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">From:</label>
                  <div class="col-lg-10">
                    <input type="email" name="from" value="<?php echo $eset['frome'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Reply to:</label>
                  <div class="col-lg-10">
                    <input type="email" name="reply_to" value="<?php echo $eset['reply_to'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Port:</label>
                  <div class="col-lg-10">
                    <input type="number" name="port" value="<?php echo $eset['porte'];?>" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Status <span class="text-danger">*</span></label>
                  <div class="col-lg-10">
                    <div class="form-check form-check-inline form-check-switchery">
                      <label class="form-check-label">
              <?php if($eset['status']=='1'){echo'
              <input type="checkbox" name="estat" class="form-check-input-switchery" value="1" checked>';}else if($eset['status']=='0'){echo'
              <input type="checkbox" name="estat" class="form-check-input-switchery" value="1">';}?>
                      </label>
                    </div>
                  </div>
                </div>            
              <div class="text-right">
                <button type="submit" class="btn bg-violet">Submit form <i class="icon-paperplane ml-2"></i></button>
              </div>
            </form>
          </div>
        </div> 
      </div>  
    </div>
<?php require_once('../include/user_footer.php');?> 