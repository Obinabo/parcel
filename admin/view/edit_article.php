<?php
require_once("../../app/config.php");
$id=$_GET['id'];
$page=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM trending WHERE id = '". $id."'")); 
$title=$page['title'];
$cat=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM trending_cat"));
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-quill4 mr-2"></i> <span class="font-weight-semibold">Edit Article</span></h4>
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
        <div class="row">
        <div class="col-md-8">
           <div class="card">
            <div class="card-header header-elements-inline">
              <h6 class="card-title font-weight-semibold">Edit article</h6>
                  <div class="header-elements">
                    <div class="list-icons text-orange-600">
                    <a class="list-icons-item" data-action="collapse"></a>
                  </div>
                </div>
            </div>

            <div class="card-body">
              <p class="text-danger"></p>
              <form action="<?php edit_url('editar',$id);?>" method="post">
                  <div class="form-group row">
                    <label class="col-form-label col-lg-2">Title:</label>
                    <div class="col-lg-10">
                      <input type="text" name="title" class="form-control" value="<?php echo $page['title'];?>">
                    </div>
                  </div> 
                 <div class="form-group row">
                    <label class="col-form-label col-lg-2">Date:</label>
                    <div class="col-lg-10">
                      <input type="text" name="date" class="form-control" value="<?php echo $page['date'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-lg-2">Category:</label>
                      <div class="col-lg-10">
                      <select class="form-control select" name="category" data-dropdown-css-class="bg-info-800" data-fouc required> 
                    <?php if($page['cat_id']=='0'){ ?>
                    <option value="<?php echo $cat['id']; ?>"<?php if($page['cat_id']==$cat['id']){echo'selected';} ?>><?php if($page['cat_id']=='0'){echo'No Category';}else{echo $cat['categories']; }?></option> 
                    <?php } else{ 
                    $catx=mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM trending_cat WHERE id='".$page['cat_id']."'"));?>
                    <option value="<?php echo $catx['id']; ?>" selected><?php echo $catx['categories']; ?></option>
                    <?php }
                    $tr="SELECT * FROM trending_cat WHERE id !='".$page['cat_id']."'";
                    $xsr=mysqli_query($dbc, $tr);
                    while($cat=mysqli_fetch_array($xsr)){ ?>
                    <option value="<?php echo $cat['id']; ?>"><?php echo $cat['categories']; ?></option>
                    <?php } ?>  
                      </select>
                    </div>
                  </div>               
                 <div class="form-group row">
                  <label class="col-form-label col-lg-2">Content:</label>
                  <div class="col-lg-10">
                    <textarea type="text" name="content" rows="4" class="tinymce form-control" required><?php echo $page['content'];?></textarea>
                  </div>
                </div>           
                <div class="text-right">
                  <button type="submit" class="btn bg-violet">Submit form <i class="icon-paperplane ml-2"></i></button>
                </div>
              </form>
            </div>
          </div>    
        </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body text-center">
                <div class="card-img-actions d-inline-block mb-3">
                  <img class="img-fluid" src="../asset/thumbnails/<?php echo $page['thumbnails'];?>" alt="">
                </div>
              </div>
            </div>
              <div class="card">
                <div class="card-header header-elements-inline">
                  <h6 class="card-title font-weight-semibold">Change thumbnail</h6>
                      <div class="header-elements">
                        <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                      </div>
                    </div>
                </div>

                <div class="card-body">
                  <form action="../app/admin/blogimg" enctype="multipart/form-data" method="post">
                      <div class="form-group">
                        <input type="file" name="file" class="form-input-styled" data-fouc required>
                        <input type="hidden" name="id" value="<?php echo $page['id'];?>"> 
                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                      </div>              
                    <div class="text-right">
                      <button type="submit" class="btn bg-secondary">Upload photo <i class="icon-paperplane ml-2"></i></button>
                    </div>
                  </form>
                </div>
          </div>  
        </div>
      </div>  
    </div>
<?php require_once('../include/user_footer.php');?> 