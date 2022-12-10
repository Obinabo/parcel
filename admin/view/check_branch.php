<?php
require_once('../../app/config.php');
$id=$_GET['id'];
$branch = mysqli_fetch_array(mysqli_query($dbc,"SELECT * FROM branch WHERE id='$id'"));
$title=$branch['name'];
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-pencil7 mr-2"></i> <span class="font-weight-semibold"><?php echo $branch['name'];?></span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./branch" class="breadcrumb-item">Branch</a>
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
          <div class="card-body">
            <form action="<?php edit_url('editbranch',$id);?>" method="post">
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Name:</label>
                  <div class="col-lg-10">
                    <input type="text" name="name" class="form-control" value="<?php echo $branch['name'];?>">
                  </div>
                </div>
               <div class="form-group row">
                  <label class="col-form-label col-lg-2">Address:</label>
                  <div class="col-lg-10">
                    <input type="text" name="address" class="form-control" value="<?php echo $branch['address'];?>">
                  </div>
                </div> 
               <div class="form-group row">
                  <label class="col-form-label col-lg-2">City:</label>
                  <div class="col-lg-10">
                    <input type="text" name="city" class="form-control" value="<?php echo $branch['city'];?>">
                  </div>
                </div>  
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Mobile:</label>
                  <div class="col-lg-10">
                    <input type="text" name="mobile" class="form-control" value="<?php echo $branch['mobile'];?>">
                  </div>
                </div>               
              <div class="text-right">
                <button type="submit" class="btn bg-violet">Submit<i class="icon-paperplane ml-2"></i></button>
              </div>
            </form>
          </div>
        </div> 
      </div>  
    </div>
<?php require_once('../include/user_footer.php');?>