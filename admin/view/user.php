<?php
require_once("../../app/config.php");
$title="Users";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$result = mysqli_query($dbc, "SELECT * FROM users ORDER BY users.id DESC");
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-user mr-2"></i> <span class="font-weight-semibold">User Management</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
              <a href="./users" class="breadcrumb-item">users</a>
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
            <h6 class="card-title font-weight-semibold">Users</h6>
          </div>
          <table class="table datatable-show-all">
            <thead>
              <tr>
              <th>S/n</th>
              <th>Full Name</th>
              <th>Username</th>
              <th>Email</th>                                                                   
              <th>Mobile</th>
              <th>Country</th>
              <th class="text-center">Action</th>    
              </tr>
            </thead>
            <tbody>
<?php 
while ($row = mysqli_fetch_array($result)) {
$id = $row['id'];
?>
            <tr>
              <td><?php echo  $index++ ;?>.</td>
              <td><?php echo  $row['name'] ;?></td>
              <td><?php echo  $row['username'] ;?></td>
              <td><?php echo  $row['email'] ;?></td>    
              <td><?php echo  $row['phonenumber'] ;?></td>
              <td><?php echo  $row['country'] ;?></td>
              <td class="text-center">
                <div class="list-icons">
                  <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="manage_users/<?php echo $id;?>" class="dropdown-item"><i class="icon-cogs mr-2"></i>Manage account</a>
                      <a data-toggle="modal" data-target="#<?php echo $row['id'];?>delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                      <?php 
                      if($row['status']=='0'){?> 
                      <a class='dropdown-item' href ='../app/admin?id=buser&stat=<?php echo $id; ?>'><i class="icon-eye-blocked2 mr-2"></i>Block account</a>
                      <?php }else{?>
                      <a class='dropdown-item' href ='../app/admin?id=ubuser&stat=<?php echo $id; ?>'><i class="icon-eye mr-2"></i>Unblock account</a>
                      <?php }?>  
                      <?php if($row['active']==0){
                        echo"<a class='dropdown-item' href='../app/admin?id=vuser&stat=$id'><i class='icon-check mr-2'></i>Verify account</a>";}?>
                      <a class='dropdown-item' href="send_email?id=<?php echo $row['email']; ?>"><i class="icon-envelope mr-2"></i>Send email</a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
        <div id="<?php echo $row['id'];?>delete" class="modal fade" tabindex="-1">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title">Delete <?php echo $row['username'];?>'s account</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <div class="modal-body">
                <h6 class="font-weight-semibold"></h6>
                <p>You are about to delete a user account, this can't be undone. Ticket, deposit, withdraw, transfer & plan history will all be deleted</p>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <a  href="../app/admin?id=duser&stat=<?php echo $id; ?>" class="btn bg-danger">Proceed</a>
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
</div>
<?php require_once('../include/user_footer.php');?>