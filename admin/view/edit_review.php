<?php
require_once("../../app/config.php");
$id=$_GET['id'];
$page=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM review WHERE id = '". $id."'")); 
$title=$page['name'];
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-clipboard6 mr-2"></i> <span class="font-weight-semibold">Edit Review</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./reviews" class="breadcrumb-item">Reviews</a>
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
              <h6 class="card-title font-weight-semibold">Edit review</h6>
                  <div class="header-elements">
                    <div class="list-icons text-orange-600">
                    <a class="list-icons-item" data-action="collapse"></a>
                  </div>
                </div>
            </div>

            <div class="card-body">
              <p class="text-danger"></p>
              <form action="<?php edit_url('editreview',$id);?>" method="post">
                  <div class="form-group row">
                    <label class="col-form-label col-lg-2">Name:</label>
                    <div class="col-lg-10">
                      <input type="text" name="name" class="form-control" value="<?php echo $page['name'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-lg-2">Occupation:</label>
                    <div class="col-lg-10">
                      <input type="text" name="occupation" class="form-control" value="<?php echo $page['occupation'];?>">
                    </div>
                  </div>
                 <div class="form-group row">
                  <label class="col-form-label col-lg-2">Review:</label>
                  <div class="col-lg-10">
                    <textarea type="text" name="review" rows="4" class="form-control"><?php echo $page['review'];?></textarea>
                  </div>
                </div>          
                <div class="text-right">
                  <button type="submit" class="btn bg-blue">Submit<i class="icon-paperplane ml-2"></i></button>
                </div>
              </form>
            </div>
          </div>    
        </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body text-center">
                <div class="card-img-actions d-inline-block mb-3">
                  <img class="img-fluid" src="../asset/review/<?php echo $page['image_link'];?>" alt="">
                </div>
              </div>
            </div>
              <div class="card">
                <div class="card-header header-elements-inline">
                  <h6 class="card-title font-weight-semibold">Change photo</h6>
                      <div class="header-elements">
                        <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                      </div>
                    </div>
                </div>

                <div class="card-body">
                  <form action="../app/admin/reviewimg" enctype="multipart/form-data" method="post">
                      <div class="form-group">
                        <input type="file" name="file" class="form-input-styled" data-fouc required>
                        <input type="hidden" name="id" value="<?php echo $page['id'];?>"> 
                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                      </div>              
                    <div class="text-right">
                      <button type="submit" class="btn bg-blue">Upload photo <i class="icon-paperplane ml-2"></i></button>
                    </div>
                  </form>
                </div>
              </div>  
        </div>
      </div>  
    </div>
<?php require_once('../include/user_footer.php');?> 