<?php
require_once("../../app/config.php");
$title="General settings";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-hammer-wrench mr-2"></i> <span class="font-weight-semibold">Basic settings</span></h4>
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
<div class="row">
  <div class="col-md-12">
<div class="card">
          <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-semibold">Congifure website</h6>
                <div class="header-elements">
                  <div class="list-icons text-orange-600">
                  <a class="list-icons-item" data-action="collapse"></a>
   
                </div>
              </div>
          </div>
          <div class="card-body">
            <form action="<?php admin_url('settings');?>" method="post">
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Company / website name:</label>
                  <div class="col-lg-10">
                    <input type="text" name="site_name" maxlength="200" value="<?php echo $set['site_name'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Tawk ID:</label>
                  <div class="col-lg-10">
                    <input type="text" name="tawk_id" value="<?php echo $set['tawk_id'];?>" maxlength="25" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Company email:</label>
                  <div class="col-lg-10">
                    <input type="email" name="email" value="<?php echo $set['email'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Mobile:</label>
                  <div class="col-lg-10">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text">+</span>
                      </span>
                    <input type="number" name="mobile" max-length="14" value="<?php echo $set['mobile'];?>" class="form-control">
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Website title:</label>
                  <div class="col-lg-10">
                    <input type="text" name="title" max-length="200" value="<?php echo $set['title'];?>" class="form-control">
                  </div>
                </div> 
               <div class="form-group row">
                  <label class="col-form-label col-lg-2">Balance on signup:</label>
                  <div class="col-lg-10">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text"><?php echo $scan2['currency'];?></span>
                      </span>
                    <input type="number" name="bal" max-length="10" value="<?php echo $set['balance_reg'];?>" class="form-control">
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Homepage Main color:</label>
                    <div class="col-lg-10">
                    <select class="form-control select" name="site_color" data-fouc required> 
                      <option value="gradient-blue" <?php if($set['site_color']=='gradient-blue'){echo'selected';}?>>Blue</option>   
                      <option value="gradient-red" <?php if($set['site_color']=='gradient-red'){echo'selected';}?>>Red</option>
                      <option value="gradient-indigo" <?php if($set['site_color']=='gradient-indigo'){echo'selected';}?>>Indigo</option>
                      <option value="gradient-orange" <?php if($set['site_color']=='gradient-orange'){echo'selected';}?>>Orange</option>
                      <option value="gradient-purple" <?php if($set['site_color']=='gradient-purple'){echo'selected';}?>>Purple</option>
                      <option value="gradient-gray" <?php if($set['site_color']=='gradient-gray'){echo'selected';}?>>Gray</option>
                      <option value="gradient-green" <?php if($set['site_color']=='gradient-green'){echo'selected';}?>>Green</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Bank fee:</label>
                  <div class="col-lg-10">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text"><?php echo $scan2['currency'];?></span>
                      </span>
                    <input type="number" name="bank_fee" max-length="10" value="<?php echo $set['bank_fee'];?>" class="form-control">
                      </div>
                    </div>
                </div>  
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Status <span class="text-danger">*</span></label>
                  <div class="col-lg-10">
                    <div class="form-check form-check-inline form-check-switchery">
                      <label class="form-check-label">
                <?php if($set['referral']=='1'){
                    echo'<input type="checkbox" name="ref" class="form-check-input-switchery" value="1" checked>';
                }else{
                    echo'<input type="checkbox" name="ref" class="form-check-input-switchery" value="1">';
                }?>Referral System        
                        </label>
                    </div>
                    <div class="form-check form-check-inline form-check-switchery">
                      <label class="form-check-label">
                <?php if($set['email_activation']=='1'){
                    echo'<input type="checkbox" name="email_activation" class="form-check-input-switchery" value="1" checked>';
                }else{
                    echo'<input type="checkbox" name="email_activation" class="form-check-input-switchery" value="1">';
                }?>Email Activation       
                        </label>
                    </div>
                     <div class="form-check form-check-inline form-check-switchery">
                      <label class="form-check-label">
                <?php if($set['bank_withdraw']=='1'){
                    echo'<input type="checkbox" name="bank_withdraw" class="form-check-input-switchery" value="1" checked>';
                }else{
                    echo'<input type="checkbox" name="bank_withdraw" class="form-check-input-switchery" value="1">';
                }?>Bank withdrawal    
                        </label>
                    </div>
                  <div class="form-check form-check-inline form-check-switchery">
                    <label class="form-check-label">
              <?php if($set['kyc']=='1'){
                  echo'<input type="checkbox" name="kyc" class="form-check-input-switchery" value="1" checked>';
              }else{
                  echo'<input type="checkbox" name="kyc" class="form-check-input-switchery" value="1">';
              }?>KYC       
                      </label>
                  </div> 
                  <div class="form-check form-check-inline form-check-switchery">
                    <label class="form-check-label">
              <?php if($set['internal_transfer']=='1'){
                  echo'<input type="checkbox" name="internal_transfer" class="form-check-input-switchery" value="1" checked>';
              }else{
                  echo'<input type="checkbox" name="internal_transfer" class="form-check-input-switchery" value="1">';
              }?>Internal transfer        
                    </label>
                  </div>
                  </div>
                </div> 
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Short description:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="site_desc" rows="4" class="form-control"><?php echo $set['site_desc'];?></textarea>
                </div>
              </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Address:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="address" rows="4" class="form-control"><?php echo $set['address'];?></textarea>
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

      </div>  
    </div>
<?php require_once('../include/user_footer.php');?> 