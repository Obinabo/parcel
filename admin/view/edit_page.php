<?php
require_once("../../app/config.php");
$title="Edit Page";
$id=$_GET['id'];
$page=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM pages WHERE id = '$id'"));
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-file-text3 mr-2"></i> <span class="font-weight-semibold"><?php echo $page['title'];?></span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./pages" class="breadcrumb-item">page</a>
              <a href="./check_page/<?php echo $id;?>" class="breadcrumb-item"><?php echo $id;?></a>
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
          <h6 class="card-title font-weight-semibold">Edit web page</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
        </div>

        <div class="card-body">
          <p class="text-danger"></p>
          <form action="<?php edit_url('editpage',$id);?>" method="post">
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Title:</label>
                <div class="col-lg-12">
                  <input type="text" name="title" class="form-control" value="<?php echo $page['title'];?>">
                </div>
              </div>
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Content:</label>
                <div class="col-lg-12">
                  <textarea type="text" name="content" class="tinymce form-control"><?php echo $page['content'];?></textarea>
                </div>
              </div>               
            <div class="text-right">
              <button type="submit" class="btn bg-violet">Submit form <i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div> 