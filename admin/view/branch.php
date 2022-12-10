<?php
require_once("../../app/config.php");
$title="Branches";
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
            <h4><i class="icon-home2 mr-2"></i> <span class="font-weight-semibold">Branches</span></h4>
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
          <h6 class="card-title font-weight-semibold">BRANCH</h6>
          <div class="header-elements">
            <a class="font-weight-semibold text-gray-800" href="./cbranch"><i class="icon-file-plus mr-2"></i>Create Branch</a>
            </div>
          </div>
          <table class="table datatable-show-all">
            <thead>
              <tr>
              <th>S/N</th>
              <th>Office name</th>
              <th>Address</th>
              <th>City</th>
              <th>Mobile</th>
              <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php while($branch=mysqli_fetch_array($data)){?>
            <tr>
              <td><?php echo $index++;?>.</td>                                        
              <td><?php echo $branch['name'];?></td>
              <td><?php echo $branch['address'];?></td>
              <td><?php echo $branch['city'];?></td>
              <td><?php echo $branch['mobile'];?></td>                                                              
              <td class="text-center">
              <div class="list-icons">
                <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>
                  <div class="dropdown-menu dropdown-menu-right"> 
                    <?php view_v2("check_branch", $branch['id']);?>
                     <a data-toggle="modal" data-target="#<?php echo $branch['id'];?>delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                  </div>
                </div>
              </div>
              </td>                      
            </tr>
        <div id="<?php echo $branch['id'];?>delete" class="modal fade" tabindex="-1">
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
                <a  href="../app/admin?id=dbranch&stat=<?php echo $branch['id']; ?>" class="btn bg-danger">Proceed</a>
              </div>
            </div>
          </div>
        </div>
            <?php }?>
            </tbody>
          </table>
      </div>           