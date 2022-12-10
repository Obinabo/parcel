<?php
require_once("../../app/config.php");
$title="Tickets";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$result = mysqli_query($dbc,"SELECT * FROM support ORDER BY support.date DESC");
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-bubbles5 mr-2"></i> <span class="font-weight-semibold">Customer service</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
              <a href="./ticket" class="breadcrumb-item">ticket</a>
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
            <h6 class="card-title font-weight-semibold">Support ticket</h6>
          </div>
          <table class="table datatable-show-all">
            <thead>
              <tr>
              <th scope="col">S/N</th>
              <th scope="col">Username</th>
              <th scope="col">Priority</th>
              <th scope="col">Date</th>
              <th scope="col">Status</th>
              <th scope="col">Ticket ID</th>
              <th scope="col">Subject</th>
              <th class="text-center">Action</th>    
              </tr>
            </thead>
            <tbody>
<?php
while ($row = mysqli_fetch_array($result)) {
$id = $row['id'];
$user = mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM users where id='".$row['user_id']."'"));
?>
            <tr>                                     
              <td><?php echo $index++;?>.</td>                                    
              <td><?php echo $user['username']?></td>  
              <td><?php echo $row['priority'];?></td>                                   
              <td><?php echo date("Y/m/d h:i:A", strtotime($row['date']));?></td>
              <td><?php if($row['status']==0){echo'Open';}elseif($row['status']==1){echo 'Closed';}elseif($row['status']==2){echo 'Resolved';}?></td>
              <td class="text-danger-800">[#<?php echo $row['ticket_id'];?>]</td>       
              <td><?php echo $row['subject'];?></td>
              <td class="text-center">
              <div class="list-icons">
                <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <?php 
                    if($row['status']=='0'){?> 
                    <a class='dropdown-item' href ='../app/admin?id=closeticket&stat=<?php echo $row['id'];?>'><i class="icon-eye-blocked2 mr-2"></i>Close Ticket</a>
                    <?php }?>
                    <?php view_v3("check_ticket", $row['ticket_id']);?>
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
                <a  href="../app/admin?id=delticket&stat=<?php echo $row['id']; ?>" class="btn bg-danger">Proceed</a>
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

