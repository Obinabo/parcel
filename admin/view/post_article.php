<?php
require_once("../../app/config.php");
$title="Post article";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-quill4 mr-2"></i> <span class="font-weight-semibold">New Article</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Dashboard</a>
              <a href="./ar" class="breadcrumb-item">articles</a>
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
            <h6 class="card-title font-weight-semibold">Compose article</h6>
                <div class="header-elements">
                  <div class="list-icons text-orange-600">
                  <a class="list-icons-item" data-action="collapse"></a>
                </div>
              </div>
          </div>

          <div class="card-body">
            <p class="text-danger"></p>
            <form action="<?php admin_url('article');?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Title:</label>
                  <div class="col-lg-10">
                    <input type="text" name="title" class="form-control" reqiured>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Category:</label>
                    <div class="col-lg-10">
                    <select class="form-control select" name="category" data-dropdown-css-class="bg-info-800" data-fouc required> 
                  <?php
                  $catquery=mysqli_query($dbc, "SELECT * FROM trending_cat");
                  while($fcat=mysqli_fetch_array($catquery)){
                  echo "<option value='".$fcat['id']."'>".$fcat['categories']."</option>";}
                  ?> 
                    </select>
                  </div>
                </div> 
                <div class="form-group row">
                  <label class="col-form-label col-lg-2">Thumbnail:</label>
                  <div class="col-lg-10">
                  <input type="file" name="file" class="form-input-styled" data-fouc> 
                  <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                </div>
                </div>              
               <div class="form-group row">
                <label class="col-form-label col-lg-2">Content:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="editor" rows="4" class="tinymce form-control"></textarea>
                </div>
              </div>           
              <div class="text-right">
                <button type="submit" class="btn bg-violet">Submit form <i class="icon-paperplane ml-2"></i></button>
              </div>
            </form>
          </div>
        </div> 
      </div>  
    </div>
<?php require_once('../include/user_footer.php');?> 