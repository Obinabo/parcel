<?php
require_once("../../app/config.php");
$title="Currency";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$data = mysqli_query($dbc, "SELECT * FROM currency ORDER BY currency.id DESC"); 
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-coin-euro mr-2"></i> <span class="font-weight-semibold">Exchange value</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./currency" class="breadcrumb-item">currency</a>
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
  <?php
  if(mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM currency WHERE d_value=1"))==0){?>
          <div class="alert bg-danger alert-styled-left alert-dismissible">
          <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
          <h6 class="alert-heading font-weight-semibold mb-1">System error</h6>
          The system has detected no currency is set as default. 
          </div>
  <?php }?>
      <div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Currency</h6>
          <div class="header-elements">
            <div class="list-icons text-orange-600">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
        </div>
        <div class="card-body">
        </div>
           <table class="table datatable-show-all">
            <thead>
              <tr>
              <th>S/N</th>
              <th class="text-center">Name</th>
              <th class="text-center">Currency</th>
              <th class="text-center">Symbol</th>
              <th class="text-center">Status</th>
              <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
<?php
while($row = mysqli_fetch_array($data)){
?>
            <tr>
              <td><?php echo $index++;?>.</td>                                        
              <td class="text-center"><?php echo $row['name'];?></td>
              <td class="text-center"><?php echo $row['currency'];?></td>
              <td class="text-center"><?php echo $row['symbol'];?></td>
              <td class="text-center"><?php if($row['d_value']=='0'){echo '<span class="badge badge-danger">Not Default</span>'; }else{echo '<span class="badge badge-success">Default</span>';}?></td>
              <td class="text-center">
              <div class="list-icons">
                <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>
                  <div class="dropdown-menu dropdown-menu-right">
                      <?php 
                      if($row['d_value']=='0'){?> 
                      <a class='dropdown-item' href ='<?php edit_url('defaultcur',$row['id']);?>'><i class="icon-check mr-2"></i>Set as default</a>
                      <?php }?> 
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
                <a  href="../app/admin?id=dcurrency&stat=<?php echo $row['id']; ?>" class="btn bg-danger">Proceed</a>
              </div>
            </div>
          </div>
        </div>
<?php }?>
            </tbody>
          </table>
      </div>