<?php
require_once("../../app/config.php");
$title="Reviews";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$data=mysqli_query($dbc, "SELECT * FROM review ORDER BY review.id desc");                 
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-clipboard6 mr-2"></i> <span class="font-weight-semibold">Reviews</span></h4>
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
<div class="card">
          <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-semibold">Compose review</h6>
                <div class="header-elements">
                  <div class="list-icons text-orange-600">
                  <a class="list-icons-item" data-action="collapse"></a>
                </div>
              </div>
          </div>

          <div class="card-body">
            <p class="text-danger"></p>
            <form action="<?php admin_url('review');?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Name:</label>
                  <div class="col-lg-10">
                    <input type="text" name="name" class="form-control" reqiured>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Occupation:</label>
                  <div class="col-lg-10">
                    <input type="text" name="occupation" class="form-control" reqiured>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Photo:</label>
                  <div class="col-lg-10">
                  <input type="file" name="file" class="form-input-styled" data-fouc> 
                  <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                </div>
                </div>              
               <div class="form-group row">
                <label class="col-form-label col-lg-2">Review:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="review" rows="4" class="form-control"></textarea>
                </div>
              </div>           
              <div class="text-right">
                <button type="submit" class="btn bg-blue">Submit<i class="icon-paperplane ml-2"></i></button>
              </div>
            </form>
          </div>
        </div> 
  <div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Reviews</h6>
          <div class="header-elements">
            <div class="list-icons text-orange-600">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
        </div>
        <div class="card-body">
        </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
              <th>S/N</th>
              <th>Name</th>
              <th>Occupation</th>
              <th>Review</th>
              <th>Date</th>
              <th>Status</th>
              <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody> 
<?php 
while($row = mysqli_fetch_array($data)) {?>
            <tr>
              <td><?php echo  $index++;?>.</td>
              <td><?php echo  $row['name'];?></td>
              <td><?php echo  $row['occupation'];?></td>
              <td><?php echo  $row['review'];?></td>       
              <td><?php echo  date("Y/m/d h:i:A", strtotime($row['date']));?></td>
              <td><?php if($row['status']==1){echo'<span class="badge badge-success">Published</span>';}
                  else{echo'<span class="badge badge-danger">Pending</span>';}?></td>                              
              <td class="text-center">
                <div class="list-icons">
                  <div class="dropdown">
                      <a href="#" class="list-icons-item" data-toggle="dropdown">
                        <i class="icon-menu9"></i>
                      </a>
                    <div class="dropdown-menu dropdown-menu-right"> 
                    <?php 
                    if($row['status']=='0'){?> 
                    <a class='dropdown-item' href ='../app/admin?id=areview&stat=<?php echo $row['id'];?>'><i class="icon-eye mr-2"></i>Publish</a>
                    <?php }else{?>
                    <a class='dropdown-item' href ='../app/admin?id=upreview&stat=<?php echo $row['id']; ?>'><i class="icon-eye-blocked2 mr-2"></i>Unpublish</a>
                    <?php }?>
                    <?php view_v2("check_review", $row['id']);?>
                       <a data-toggle="modal" data-target="#<?php echo $row['id'];?>delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                    </div>
                  </div>
                </div>
              </td>                           
            </tr>
        <div id="<?php echo $row['id'];?>delete" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
               
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <div class="modal-body">
                <h6 class="font-weight-semibold">Are you sure you want to delete this?</h6>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <a  href="../app/admin?id=dreview&stat=<?php echo $row['id']; ?>" class="btn bg-danger">Proceed</a>
              </div>
            </div>
          </div>
        </div>
<?php }?>
          </tbody>                    
        </table>
      </div>
    </div>
  </div>
</div>


