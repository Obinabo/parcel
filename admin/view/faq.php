<?php
require_once("../../app/config.php");
$title="FAQ";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$data = mysqli_query($dbc, "SELECT * FROM faq ORDER BY faq.id DESC");  
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-question4 mr-2"></i> <span class="font-weight-semibold">Frequently asked questions</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./faq" class="breadcrumb-item">faq</a>
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
          <h6 class="card-title font-weight-semibold">FAQ</h6>
          <div class="header-elements">
            <a class="font-weight-semibold text-gray-800" href="./cfaq"><i class="icon-file-plus mr-2"></i>Create faq</a>
            </div>
          </div>
          <table class="table datatable-show-all">
            <thead>
              <tr>
              <th>S/N</th>
              <th>Question</th>
              <th>Answer</th>
              <th>Last updated</th>
              <th></th>
              <th></th>
              </tr>
            </thead>
            <tbody>
            <?php while($faq=mysqli_fetch_array($data)){?>
            <tr>
              <td><?php echo $index++;?>.</td>                                        
              <td><?php echo $faq['question'];?></td>
              <td><?php echo $faq['answer'];?></td>                                                              
              <td><?php echo  date("Y/m/d h:i:A", strtotime($faq['date']));?></td>                                                              
              <td><?php view_v2("check_faq", $faq['id']);?></td>                                                              
              <td> <a data-toggle="modal" data-target="#<?php echo $faq['id'];?>delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a></td>                      
            </tr>
        <div id="<?php echo $faq['id'];?>delete" class="modal fade" tabindex="-1">
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
                <a  href="../app/admin?id=dfaq&stat=<?php echo $faq['id']; ?>" class="btn bg-danger">Proceed</a>
              </div>
            </div>
          </div>
        </div>
            <?php }?>
            </tbody>
          </table>
      </div>           