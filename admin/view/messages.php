<?php
require_once("../../app/config.php");
$title="Messages";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$result=mysqli_query($dbc, "SELECT * FROM contact ORDER BY contact.id desc");
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-bubbles5 mr-2"></i> <span class="font-weight-semibold">Messages</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
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
          <h6 class="card-title font-weight-semibold">Enquiries</h6>
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
              <th>Mobile</th>
              <th>Email</th>
              <th>Message</th>
              <th>Date</th>
              <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>									
<?php while($row = mysqli_fetch_array($result)){ 
$id = $row['id'];?>
<tr>
<td><?php echo  $index++ ;?>.</td>
<td><?php echo  $row['full_name'] ;?></td>     
<td><?php echo  $row['mobile'] ;?></td>
<td><?php echo  $row['email'] ;?></td>     
<td><?php echo  $row['message'] ;?></td>     
<td><?php echo  date("Y/m/d h:i:A", strtotime($row['date']));?></td> 
<td class="text-center">
  <div class="list-icons">
    <div class="dropdown">
        <a href="#" class="list-icons-item" data-toggle="dropdown">
          <i class="icon-menu9"></i>
        </a>
      <div class="dropdown-menu dropdown-menu-right"> 
        <?php send_email("send_email", $row['email']);?>
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
                <a  href="../app/admin?id=dmessage&stat=<?php echo $row['id']; ?>" class="btn bg-danger">Proceed</a>
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



