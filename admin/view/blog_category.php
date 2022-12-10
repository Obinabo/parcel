<?php
require_once("../../app/config.php");
$title="Categories";
$result=mysqli_query($dbc, "SELECT * FROM trending_cat ORDER BY trending_cat.id ASC");
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?> 
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-clipboard6 mr-2"></i> <span class="font-weight-semibold">News category</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./ar" class="breadcrumb-item">articles</a>
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
          <h6 class="card-title font-weight-semibold">Create category</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
        </div>

        <div class="card-body">
          <form action="<?php admin_url('category');?>" method="post">
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Category:</label>
                <div class="col-lg-10">
                  <input type="text" name="cat" class="form-control" required>
                </div>
              </div>               
            <div class="text-right">
              <button type="submit" class="btn bg-violet">Submit form <i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div>    
      <div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Category</h6>
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
              <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
<?php
while ($row=mysqli_fetch_array($result)){
?>
            <tr>
              <td><?php echo $index++; ?>.</td>
              <td><?php echo $row['categories']; ?>.</td>
              <td class="text-center">
              <div class="list-icons">
                <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>
                  <div class="dropdown-menu dropdown-menu-right"> 
                    <?php view_v2("check_category", $row['id']);?>
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
                <a  href="../app/admin?id=dcategory&stat=<?php echo $row['id']; ?>" class="btn bg-danger">Proceed</a>
              </div>
            </div>
          </div>
        </div>                    
<?php }?>                                                                              
            </tbody>
          </table>
        </div>
      </div>     