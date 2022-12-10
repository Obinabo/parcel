<?php
require_once("../../app/config.php");
$title="Pages";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$bf=mysqli_query($dbc, "SELECT * FROM pages ORDER BY pages.id DESC");
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-stack mr-2"></i> <span class="font-weight-semibold">Website pages</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./pages" class="breadcrumb-item">pages</a>
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
          <h6 class="card-title font-weight-semibold">Web pages</h6>
          <div class="header-elements">
            <a class="font-weight-semibold text-gray-800" href="./cpage"><i class="icon-file-plus mr-2"></i>Create page</a>
          </div>
        </div>
        <div class="card-body">
        </div>
          <table class="table datatable-show-all">
            <thead>
              <tr>
              <th>S/N</th>
              <th>Title</th>
              <th>Status</th>
              <th>Created</th>
              <th>Last updated</th>
              <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php while($df=mysqli_fetch_array($bf)){?>
            <tr>
              <td><?php echo $index++;?>.</td>                                        
              <td><?php echo $df['title'];?></td>
              <td><?php if($df['status']==1){echo'<span class="badge badge-success">Published</span>';}
        else{echo'<span class="badge badge-danger">Pending</span>';}?></td>
              <td><?php echo $df['created_at'];?></td>                     
              <td><?php echo $df['last_updated'];?></td>                     
              <td class="text-center">
              <div class="list-icons">
                <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <?php 
                    if($df['status']=='0'){?> 
                    <a class='dropdown-item' href ='../app/admin?id=ppage&stat=<?php echo $df['id'];?>'><i class="icon-eye mr-2"></i>Publish</a>
                    <?php }else{?>
                    <a class='dropdown-item' href ='../app/admin?id=unpage&stat=<?php echo $df['id']; ?>'><i class="icon-eye-blocked2 mr-2"></i>Unpublish</a>
                    <?php }?> 
                    <?php view_v2("check_page", $df['id']);?>
                    <a data-toggle="modal" data-target="#<?php echo $df['id'];?>delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                  </div>
                </div>
              </div>
              </td>                      
            </tr>
        <div id="<?php echo $df['id'];?>delete" class="modal fade" tabindex="-1">
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
                <a  href="../app/admin?id=dpage&stat=<?php echo $df['id']; ?>" class="btn bg-danger">Proceed</a>
              </div>
            </div>
          </div>
        </div>
            <?php }?>
            </tbody>
          </table>
      </div>             