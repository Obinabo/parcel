<?php
require_once("../../app/config.php");
$title="Social Links";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$data = mysqli_query($dbc, "SELECT * FROM social_links");
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-share2 mr-2"></i> <span class="font-weight-semibold">Social media profile links</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./social" class="breadcrumb-item">links</a>
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
            <h6 class="card-title font-weight-semibold">Update links</h6>
                <div class="header-elements">
                  <div class="list-icons text-orange-600">
                  <a class="list-icons-item" data-action="collapse"></a>
                </div>
              </div>
          </div>

          <div class="card-body">
            <form action="../app/admin/social" method="post">
                <?php while($row1 = mysqli_fetch_array($data)){ ?>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2"><?php echo $row1['type'];?>:</label>
                  <div class="col-lg-10">
                    <input type="text" name="<?php echo $row1['type'];?>" value="<?php echo $row1['value'];?>" class="form-control">
                  </div>
                </div>
                <?php } ?>           
              <div class="text-right">
                <button type="submit" class="btn bg-violet">Submit form <i class="icon-paperplane ml-2"></i></button>
              </div>
            </form>
          </div>
        </div> 
      </div>  
    </div>
<?php require_once('../include/user_footer.php');?>  