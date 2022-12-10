<?php
require_once("../../app/config.php");
$title="Deposit History";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$trans = mysqli_query($dbc, "SELECT * FROM deposits order by deposits.created_at DESC");
$bk = mysqli_query($dbc, "SELECT * FROM bank_transfer order by bank_transfer.id DESC");
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-coins mr-2"></i> <span class="font-weight-semibold">Deposit History</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
              <a href="./deposit" class="breadcrumb-item">history</a>
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
            <h6 class="card-title font-weight-semibold">Bank transfer & Deposit log</h6>
          </div>
          <table class="table datatable-show-all">
            <thead>
              <tr>
              <th>Full Name</th>                                                                  
              <th>Amount</th>
              <th>Screenshot</th>
              <th>Details</th>
              <th>Date</th> 
              <th>Status</th> 
              <th class="text-center">Action</th>    
              </tr>
            </thead>
            <tbody>
<?php while($row2 = mysqli_fetch_array($bk)){
$hm=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM users WHERE id = '".$row2['user_id']."'"));?>
      <tr>
        <td><a href="manage_users/<?php echo $hm['id'];?>"><?php echo $hm['name'];?></a></td>
        <td><?php echo $scan2['currency'].number_format($row2['amount']);?></td>
        <td><a class="text-default" href="../asset/screenshot/<?php echo $row2['image'];?>">view</a></td>
        <td><?php echo $row2['details'];?></td>
        <td><?php echo date("Y/m/d h:i:A", strtotime($row2['date']));?></td>
        <td><?php if($row2['status']==1){echo'<span class="badge badge-success">Approved</span>';}
        else{echo'<span class="badge badge-danger">Pending</span>';}?></td>
        <td class="text-center">
          <div class="list-icons">
            <div class="dropdown">
              <a href="#" class="list-icons-item" data-toggle="dropdown">
                <i class="icon-menu9"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right bg-orange-800">
                <?php if($row2['status']==0){?>
                <a href="../app/admin?id=appbkdp&stat=<?php echo $row2['id'];?>" class="dropdown-item">Approve</a>
                <?php }?>
                <a data-toggle="modal" data-target="#<?php echo $row2['id'];?>delete" class="dropdown-item">Delete deposit</a>
              </div>
            </div>
          </div>
        </td>
      </tr>
        <div id="<?php echo $row2['id'];?>delete" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-secondary">
                <h6 class="modal-title">Delete bank transfer history</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <div class="modal-body">
                <h6 class="font-weight-semibold"></h6>
                <p>You are about to delete a user deposit record, this can't be undone.</p>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <a  href="../app/admin?id=delbkdp&stat=<?php echo $row2['id'];?>" class="btn bg-danger">Proceed</a>
              </div>
            </div>
          </div>
        </div>
<?php }?>
         </tbody>
          </table>
        </div>
        <div class="card">
          <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-semibold">Deposits log</h6>
          </div>
          <table class="table datatable-show-all">
            <thead>
              <tr>
              <th>Reference ID</th>
              <th>Full Name</th>                                                                  
              <th>Method</th>
              <th>Amount</th>
              <th>Date</th> 
              <th>Status</th> 
              <th>Charge</th>
              <th class="text-center">Action</th>    
              </tr>
            </thead>
            <tbody>
<?php while($row1 = mysqli_fetch_array($trans)){
$cast=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM gateways WHERE id='".$row1['gateway_id']."'"));
$hm=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM users WHERE id = '".$row1['user_id']."'"));?>
      <tr>
        <td>#<?php echo $row1['trx'];?></td>
        <td><a href="manage_users/<?php echo $hm['id'];?>"><?php echo $hm['name'];?></a></td>
        <td><?php echo $cast['main_name'];?></td>
        <td><?php echo number_format($row1['amount']).$scan2['currency'];?></td>
        <td><?php echo date("Y/m/d h:i:A", strtotime($row1['created_at']));?></td>
        <td><?php if($row1['status']==1){echo'<span class="badge badge-success">Approved</span>';}
        else{echo'<span class="badge badge-danger">Pending</span>';}?></td>
        <td><?php echo $scan2['currency'].number_format($row1['charge']);?></td>
        <td class="text-center">
          <div class="list-icons">
            <div class="dropdown">
              <a href="#" class="list-icons-item" data-toggle="dropdown">
                <i class="icon-menu9"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right bg-orange-800">
                <?php if($row1['status']==0){?>
                <a href="../app/admin?id=appcashdp&stat=<?php echo $row1['id'];?>" class="dropdown-item">Approve</a>
                <?php }?>
                <a data-toggle="modal" data-target="#<?php echo $row1['id'];?>delete" class="dropdown-item">Delete deposit</a>
              </div>
            </div>
          </div>
        </td>
      </tr>
        <div id="<?php echo $row1['id'];?>delete" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-secondary">
                <h6 class="modal-title">Delete deposit history</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <div class="modal-body">
                <h6 class="font-weight-semibold"></h6>
                <p>You are about to delete a user deposit record, this can't be undone.</p>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <a  href="../app/admin?id=deldp&stat=<?php echo $row1['id'];?>" class="btn bg-danger">Proceed</a>
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