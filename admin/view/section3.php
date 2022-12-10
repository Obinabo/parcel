<?php
require_once("../../app/config.php");
$title="Services";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-hammer-wrench mr-2"></i> <span class="font-weight-semibold">Services</span></h4>
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
<div class="row">
  <div class="col-md-8">
    <div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Congifure Services</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
 
              </div>
            </div>
        </div>
      <div class="card-body">
        <p><a href="../#services" target="_blank">Preview</a></p>
          <form action="../app/home?id=section3" method="post">
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Background color:</label>
                <div class="col-lg-10">
                <select class="form-control select" name="s3_bg" data-fouc required> 
                  <option value="blue" <?php if($ui['s3_bg']=='blue'){echo'selected';}?>>Blue</option>   
                  <option value="red" <?php if($ui['s3_bg']=='red'){echo'selected';}?>>Red</option>
                  <option value="orange" <?php if($ui['s3_bg']=='orange'){echo'selected';}?>>Orange</option>
                  <option value="indigo" <?php if($ui['s3_bg']=='indigo'){echo'selected';}?>>Indigo</option>
                  <option value="violet" <?php if($ui['s3_bg']=='violet'){echo'selected';}?>>Violet</option>
                  <option value="purple" <?php if($ui['s3_bg']=='purple'){echo'selected';}?>>Purple</option>
                  <option value="yellow" <?php if($ui['s3_bg']=='yellow'){echo'selected';}?>>Yellow</option>
                  <option value="teal" <?php if($ui['s3_bg']=='teal'){echo'selected';}?>>Teal</option>
                  <option value="cyan" <?php if($ui['s3_bg']=='cyan'){echo'selected';}?>>Cyan</option>
                  <option value="pink" <?php if($ui['s3_bg']=='pink'){echo'selected';}?>>Pink</option>
                  <option value="green" <?php if($ui['s3_bg']=='green'){echo'selected';}?>>Green</option>
                  <option value="gray" <?php if($ui['s3_bg']=='gray'){echo'selected';}?>>Gray</option>
                  <option value="white" <?php if($ui['s3_bg']=='white'){echo'selected';}?>>White</option>
                  <option value="gray-dark" <?php if($ui['s3_bg']=='gray-dark'){echo'selected';}?>>Gray-dark</option>
                  <option value="light" <?php if($ui['s3_bg']=='light'){echo'selected';}?>>Light</option>
                  <option value="lighter" <?php if($ui['s3_bg']=='lighter'){echo'selected';}?>>Lighter</option>
                  <option value="extra-dark-gray" <?php if($ui['s3_bg']=='extra-dark-gray'){echo'selected';}?>>bg-extra-dark-gray</option>
                  <option value="dark-gray" <?php if($ui['s3_bg']=='dark-gray'){echo'selected';}?>>bg-dark-gray</option>
                  <option value="extra-medium-gray" <?php if($ui['s3_bg']=='extra-medium-gray'){echo'selected';}?>>bg-extra-medium-gray</option>
                  <option value="deep-pink" <?php if($ui['s3_bg']=='deep-pink'){echo'selected';}?>>bg-deep-pink</option>
                  <option value="light-gray" <?php if($ui['s3_bg']=='light-gray'){echo'selected';}?>>bg-light-gray</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Title:</label>
              <div class="col-lg-10">
                <input type="text" name="s3_title" class="form-control" value="<?php echo $ui['s3_title'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Title text color:</label>
                <div class="col-lg-10">
                <select class="form-control select" name="s3_titlec" data-fouc required> 
                  <option value="blue" <?php if($ui['s3_titlec']=='blue'){echo'selected';}?>>blue</option>                                
                  <option value="red" <?php if($ui['s3_titlec']=='red'){echo'selected';}?>>red</option>
                  <option value="orange" <?php if($ui['s3_titlec']=='orange'){echo'selected';}?>>orange</option>                               
                  <option value="indigo" <?php if($ui['s3_titlec']=='indigo'){echo'selected';}?>>indigo</option>                                                    
                  <option value="violet" <?php if($ui['s3_titlec']=='violet'){echo'selected';}?>>violet</option>                             
                  <option value="purple" <?php if($ui['s3_titlec']=='purple'){echo'selected';}?>>purple</option>
                  <option value="yellow" <?php if($ui['s3_titlec']=='yellow'){echo'selected';}?>>yellow</option>
                  <option value="teal" <?php if($ui['s3_titlec']=='teal'){echo'selected';}?>>teal</option>
                  <option value="cyan" <?php if($ui['s3_titlec']=='cyan'){echo'selected';}?>>cyan</option>
                  <option value="pink" <?php if($ui['s3_titlec']=='pink'){echo'selected';}?>>pink</option>
                  <option value="green" <?php if($ui['s3_titlec']=='green'){echo'selected';}?>>green</option>
                  <option value="gray" <?php if($ui['s3_titlec']=='gray'){echo'selected';}?>>gray</option>
                  <option value="gray-dark" <?php if($ui['s3_titlec']=='gray-dark'){echo'selected';}?>>gray-dark</option>
                  <option value="light" <?php if($ui['s3_titlec']=='light'){echo'selected';}?>>light</option>
                  <option value="lighter" <?php if($ui['s3_titlec']=='lighter'){echo'selected';}?>>lighter</option>
                  <option value="extra-light-gray" <?php if($ui['s3_titlec']=='extra-light-gray'){echo'selected';}?>>extra-light-gray</option>
                  <option value="extra-dark-gray" <?php if($ui['s3_titlec']=='extra-dark-gray'){echo'selected';}?>>extra-dark-gray</option>
                  <option value="white" <?php if($ui['s3_titlec']=='white'){echo'selected';}?>>white</option>
                  <option value="black" <?php if($ui['s3_titlec']=='black'){echo'selected';}?>>black</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Body:</label>
              <div class="col-lg-10">
                <textarea type="text" name="s3_body" rows="4" class="form-control"><?php echo $ui['s3_body'];?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Body text color:</label>
                <div class="col-lg-10">
                <select class="form-control select" name="s3_bodyc" data-fouc required> 
                  <option value="blue" <?php if($ui['s3_bodyc']=='blue'){echo'selected';}?>>blue</option>                                
                  <option value="red" <?php if($ui['s3_bodyc']=='red'){echo'selected';}?>>red</option>
                  <option value="orange" <?php if($ui['s3_bodyc']=='orange'){echo'selected';}?>>orange</option>                               
                  <option value="indigo" <?php if($ui['s3_bodyc']=='indigo'){echo'selected';}?>>indigo</option>                                                    
                  <option value="violet" <?php if($ui['s3_bodyc']=='violet'){echo'selected';}?>>violet</option>                             
                  <option value="purple" <?php if($ui['s3_bodyc']=='purple'){echo'selected';}?>>purple</option>
                  <option value="yellow" <?php if($ui['s3_bodyc']=='yellow'){echo'selected';}?>>yellow</option>
                  <option value="teal" <?php if($ui['s3_bodyc']=='teal'){echo'selected';}?>>teal</option>
                  <option value="cyan" <?php if($ui['s3_bodyc']=='cyan'){echo'selected';}?>>cyan</option>
                  <option value="pink" <?php if($ui['s3_bodyc']=='pink'){echo'selected';}?>>pink</option>
                  <option value="green" <?php if($ui['s3_bodyc']=='green'){echo'selected';}?>>green</option>
                  <option value="gray" <?php if($ui['s3_bodyc']=='gray'){echo'selected';}?>>gray</option>
                  <option value="gray-dark" <?php if($ui['s3_bodyc']=='gray-dark'){echo'selected';}?>>gray-dark</option>
                  <option value="light" <?php if($ui['s3_bodyc']=='light'){echo'selected';}?>>light</option>
                  <option value="lighter" <?php if($ui['s3_bodyc']=='lighter'){echo'selected';}?>>lighter</option>
                  <option value="extra-light-gray" <?php if($ui['s3_bodyc']=='extra-light-gray'){echo'selected';}?>>extra-light-gray</option>
                  <option value="extra-dark-gray" <?php if($ui['s3_bodyc']=='extra-dark-gray'){echo'selected';}?>>extra-dark-gray</option>
                  <option value="white" <?php if($ui['s3_bodyc']=='white'){echo'selected';}?>>white</option>
                  <option value="black" <?php if($ui['s3_bodyc']=='black'){echo'selected';}?>>black</option>
                </select>
              </div>
            </div>   
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Item1 title:</label>
                <div class="col-lg-10">
                  <input type="text" name="s3_1title" class="form-control" value="<?php echo $ui['s3_1title'];?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Item1 body:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="s3_1body" class="form-control"><?php echo $ui['s3_1body'];?></textarea>
                </div>
              </div>
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Item2 title:</label>
                <div class="col-lg-10">
                  <input type="text" name="s3_2title" class="form-control" value="<?php echo $ui['s3_2title'];?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Item2 body:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="s3_2body" class="form-control"><?php echo $ui['s3_2body'];?></textarea>
                </div>
              </div>
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Item3 title:</label>
                <div class="col-lg-10">
                  <input type="text" name="s3_3title" class="form-control" value="<?php echo $ui['s3_3title'];?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Item3 body:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="s3_3body" class="form-control"><?php echo $ui['s3_3body'];?></textarea>
                </div>
              </div> 
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Item4 title:</label>
                <div class="col-lg-10">
                  <input type="text" name="s3_4title" class="form-control" value="<?php echo $ui['s3_4title'];?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Item4 body:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="s3_4body" class="form-control"><?php echo $ui['s3_4body'];?></textarea>
                </div>
              </div>
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Item5 title:</label>
                <div class="col-lg-10">
                  <input type="text" name="s3_5title" class="form-control" value="<?php echo $ui['s3_5title'];?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Item5 body:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="s3_5body" class="form-control"><?php echo $ui['s3_5body'];?></textarea>
                </div>
              </div>
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Item6 title:</label>
                <div class="col-lg-10">
                  <input type="text" name="s3_6title" class="form-control" value="<?php echo $ui['s3_6title'];?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Item6 body:</label>
                <div class="col-lg-10">
                  <textarea type="text" name="s3_6body" class="form-control"><?php echo $ui['s3_6body'];?></textarea>
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
    <div class="card bg-slate-800">
       <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Item 1</h6>
        </div>
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid" src="../asset/images/<?php echo $ui['s3_1image'];?>" alt="" style="max-width:30%; height:auto;">
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Change item 1 Image</h6>
            <div class="header-elements">
              <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
      </div>
      <div class="card-body">
        <form action="../app/home/s31image" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="file" name="file" class="form-input-styled" data-fouc required> 
              <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
            </div>              
          <div class="text-right">
            <button type="submit" class="btn bg-secondary">Upload photo <i class="icon-paperplane ml-2"></i></button>
          </div>
        </form>
      </div>
    </div>  
    <div class="card bg-slate-800">
       <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Item 2</h6>
      </div>
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid" src="../asset/images/<?php echo $ui['s3_2image'];?>" alt="" style="max-width:30%; height:auto;">
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Change item 2 Image</h6>
            <div class="header-elements">
              <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
      </div>
      <div class="card-body">
        <form action="../app/home/s32image" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="file" name="file" class="form-input-styled" data-fouc required> 
              <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
            </div>              
          <div class="text-right">
            <button type="submit" class="btn bg-secondary">Upload photo <i class="icon-paperplane ml-2"></i></button>
          </div>
        </form>
      </div>
    </div>      
    <div class="card bg-slate-800">
       <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Item 3</h6>
      </div>
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid" src="../asset/images/<?php echo $ui['s3_3image'];?>" alt="" style="max-width:30%; height:auto;">
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Change item 3 Image</h6>
            <div class="header-elements">
              <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
      </div>
      <div class="card-body">
        <form action="../app/home/s33image" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="file" name="file" class="form-input-styled" data-fouc required> 
              <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
            </div>              
          <div class="text-right">
            <button type="submit" class="btn bg-secondary">Upload photo <i class="icon-paperplane ml-2"></i></button>
          </div>
        </form>
      </div>
    </div>   
    <div class="card bg-slate-800">
       <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Item 4</h6>
      </div>
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid" src="../asset/images/<?php echo $ui['s3_4image'];?>" alt="" style="max-width:30%; height:auto;">
        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Change item 4 Image</h6>
            <div class="header-elements">
              <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
      </div>
      <div class="card-body">
        <form action="../app/home/s34image" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="file" name="file" class="form-input-styled" data-fouc required> 
              <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
            </div>              
          <div class="text-right">
            <button type="submit" class="btn bg-secondary">Upload photo <i class="icon-paperplane ml-2"></i></button>
          </div>
        </form>
      </div>
    </div>  
    <div class="card bg-slate-800">
       <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Item 5</h6>
      </div>
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid" src="../asset/images/<?php echo $ui['s3_5image'];?>" alt="" style="max-width:30%; height:auto;">
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Change item 5 Image</h6>
            <div class="header-elements">
              <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
      </div>
      <div class="card-body">
        <form action="../app/home/s35image" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="file" name="file" class="form-input-styled" data-fouc required> 
              <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
            </div>              
          <div class="text-right">
            <button type="submit" class="btn bg-secondary">Upload photo <i class="icon-paperplane ml-2"></i></button>
          </div>
        </form>
      </div>
    </div>      
    <div class="card bg-slate-800">
       <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Item 6</h6>
      </div>
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid" src="../asset/images/<?php echo $ui['s3_6image'];?>" alt="" style="max-width:30%; height:auto;">
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Change item 6 Image</h6>
            <div class="header-elements">
              <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
      </div>
      <div class="card-body">
        <form action="../app/home/s36image" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="file" name="file" class="form-input-styled" data-fouc required> 
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
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Congifure Section 1</h6>
            <div class="header-elements">
              <div class="list-icons text-orange-600">
              <a class="list-icons-item" data-action="collapse"></a>

            </div>
          </div>
      </div>

      <div class="card-body">
        <p><a href="../#section1" target="_blank">Preview</a></p>
        <form action="../app/home?id=section1" method="post">
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Title:</label>
              <div class="col-lg-10">
                <input type="text" name="s1_title" class="form-control" value="<?php echo $ui['s1_title'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Body:</label>
              <div class="col-lg-10">
                <textarea type="text" name="s1_body" rows="4" class="form-control"><?php echo $ui['s1_body'];?></textarea>
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
          <img class="img-fluid" src="../asset/images/<?php echo $ui['s1_image'];?>" alt="">
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Change Image</h6>
            <div class="header-elements">
              <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
      </div>
      <div class="card-body">
        <form action="../app/home/s1image" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="file" name="file" class="form-input-styled" data-fouc required> 
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
<div class="row">
  <div class="col-md-8">
    <div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Congifure Header</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
 
              </div>
            </div>
        </div>
      <div class="card-body">
          <form action="../app/home?id=header" method="post">
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Title:</label>
              <div class="col-lg-10">
                <input type="text" name="header_title" class="form-control" value="<?php echo $ui['header_title'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Body:</label>
              <div class="col-lg-10">
                <textarea type="text" name="header_body" rows="4" class="form-control"><?php echo $ui['header_body'];?></textarea>
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
       <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Background Image</h6>
      </div>
      <div class="card-body text-center">
        <div class="card-img-actions d-inline-block mb-3">
          <img class="img-fluid" src="../asset/images/<?php echo $ui['header_image'];?>" alt="" style="max-width:100%; height:auto;">
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header header-elements-inline">
        <h6 class="card-title font-weight-semibold">Change Background Image</h6>
            <div class="header-elements">
              <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
            </div>
          </div>
      </div>
      <div class="card-body">
        <form action="../app/home/headerimage" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="file" name="file" class="form-input-styled" data-fouc required> 
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
    </div>
<?php require_once('../include/user_footer.php');?> 