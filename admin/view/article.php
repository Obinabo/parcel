<?php
require_once("../../app/config.php");
$title="Articles";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$bf=mysqli_query($dbc, "SELECT * FROM trending  ORDER BY trending.id DESC");
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-newspaper mr-2"></i> <span class="font-weight-semibold">Articles</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
            </div>
          </div>

          <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
            </div>
          </div>
        </div>
      </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-semibold">Posts</h6>
          </div>
          <table class="table datatable-show-all">
            <thead>
              <tr>
              <th>S/N</th>
              <th>Title</th>
              <th>Category</th>
              <th>Views</th>
              <th>Status</th>
              <th>Date</th>
              <th class="text-center">Action</th>    
              </tr>
            </thead>
            <tbody>
<?php
while($df=mysqli_fetch_array($bf)){
$castro=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM trending_cat WHERE id='".$df['cat_id']."'"));
$mainnewstxt=strip_tags(implode(' ', array_slice(explode(' ', $df['title']), 0, 5)));
?>
            <tr>
              <td><?php echo $index++; ?>.</td>
              <td><?php echo $df['title'];?></td>
              <td><?php echo $castro['categories'];?></td>
              <td><?php echo $df['views'];?></td>
              <td><?php if($df['status']==1){echo'<span class="badge badge-success">Published</span>';}
                  else{echo'<span class="badge badge-danger">Pending</span>';}?></td>   
              <td><?php echo  date("Y/m/d h:i:A", strtotime($df['date']));?></td>
              <td class="text-center">
                <div class="list-icons">
                  <div class="dropdown">
                      <a href="#" class="list-icons-item" data-toggle="dropdown">
                        <i class="icon-menu9"></i>
                      </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <?php 
                      if($df['status']=='0'){?> 
                      <a class='dropdown-item' href ='../app/admin?id=particle&stat=<?php echo $df['id'];?>'><i class="icon-eye mr-2"></i>Publish</a>
                      <?php }else{?>
                      <a class='dropdown-item' href ='../app/admin?id=unarticle&stat=<?php echo $df['id']; ?>'><i class="icon-eye-blocked2 mr-2"></i>Unpublish</a>
                      <?php }?> 
                      <?php view_v2("check_article", $df['id']);?>
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
                <a  href="../app/admin?id=darticle&stat=<?php echo $df['id']; ?>" class="btn bg-danger">Proceed</a>
              </div>
            </div>
          </div>
        </div>  
<?php } ?>               
          </tbody>                    
        </table>
      </div>
    </div>
  </div>
</div>