<?php
require_once("../../app/config.php");
$title="Section 1";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-hammer-wrench mr-2"></i> <span class="font-weight-semibold">Section 1</span></h4>
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
              <label class="col-form-label col-lg-2">Background color:</label>
                <div class="col-lg-10">
                <select class="form-control select" name="s1_bg" data-fouc required> 
                  <option value="blue" <?php if($ui['s1_bg']=='blue'){echo'selected';}?>>Blue</option>   
                  <option value="red" <?php if($ui['s1_bg']=='red'){echo'selected';}?>>Red</option>
                  <option value="orange" <?php if($ui['s1_bg']=='orange'){echo'selected';}?>>Orange</option>
                  <option value="indigo" <?php if($ui['s1_bg']=='indigo'){echo'selected';}?>>Indigo</option>
                  <option value="violet" <?php if($ui['s1_bg']=='violet'){echo'selected';}?>>Violet</option>
                  <option value="purple" <?php if($ui['s1_bg']=='purple'){echo'selected';}?>>Purple</option>
                  <option value="yellow" <?php if($ui['s1_bg']=='yellow'){echo'selected';}?>>Yellow</option>
                  <option value="teal" <?php if($ui['s1_bg']=='teal'){echo'selected';}?>>Teal</option>
                  <option value="cyan" <?php if($ui['s1_bg']=='cyan'){echo'selected';}?>>Cyan</option>
                  <option value="pink" <?php if($ui['s1_bg']=='pink'){echo'selected';}?>>Pink</option>
                  <option value="green" <?php if($ui['s1_bg']=='green'){echo'selected';}?>>Green</option>
                  <option value="gray" <?php if($ui['s1_bg']=='gray'){echo'selected';}?>>Gray</option>
                  <option value="white" <?php if($ui['s1_bg']=='white'){echo'selected';}?>>White</option>
                  <option value="gray-dark" <?php if($ui['s1_bg']=='gray-dark'){echo'selected';}?>>Gray-dark</option>
                  <option value="light" <?php if($ui['s1_bg']=='light'){echo'selected';}?>>Light</option>
                  <option value="lighter" <?php if($ui['s1_bg']=='lighter'){echo'selected';}?>>Lighter</option>
                  <option value="extra-dark-gray" <?php if($ui['s1_bg']=='extra-dark-gray'){echo'selected';}?>>bg-extra-dark-gray</option>
                  <option value="dark-gray" <?php if($ui['s1_bg']=='dark-gray'){echo'selected';}?>>bg-dark-gray</option>
                  <option value="extra-medium-gray" <?php if($ui['s1_bg']=='extra-medium-gray'){echo'selected';}?>>bg-extra-medium-gray</option>
                  <option value="deep-pink" <?php if($ui['s1_bg']=='deep-pink'){echo'selected';}?>>bg-deep-pink</option>
                  <option value="light-gray" <?php if($ui['s1_bg']=='light-gray'){echo'selected';}?>>bg-light-gray</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Title:</label>
              <div class="col-lg-10">
                <input type="text" name="s1_title" class="form-control" value="<?php echo $ui['s1_title'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Title text color:</label>
                <div class="col-lg-10">
                <select class="form-control select" name="s1_titlec" data-fouc required> 
                  <option value="blue" <?php if($ui['s1_titlec']=='blue'){echo'selected';}?>>blue</option>                                
                  <option value="red" <?php if($ui['s1_titlec']=='red'){echo'selected';}?>>red</option>
                  <option value="orange" <?php if($ui['s1_titlec']=='orange'){echo'selected';}?>>orange</option>                               
                  <option value="indigo" <?php if($ui['s1_titlec']=='indigo'){echo'selected';}?>>indigo</option>                                                    
                  <option value="violet" <?php if($ui['s1_titlec']=='violet'){echo'selected';}?>>violet</option>                             
                  <option value="purple" <?php if($ui['s1_titlec']=='purple'){echo'selected';}?>>purple</option>
                  <option value="yellow" <?php if($ui['s1_titlec']=='yellow'){echo'selected';}?>>yellow</option>
                  <option value="teal" <?php if($ui['s1_titlec']=='teal'){echo'selected';}?>>teal</option>
                  <option value="cyan" <?php if($ui['s1_titlec']=='cyan'){echo'selected';}?>>cyan</option>
                  <option value="pink" <?php if($ui['s1_titlec']=='pink'){echo'selected';}?>>pink</option>
                  <option value="green" <?php if($ui['s1_titlec']=='green'){echo'selected';}?>>green</option>
                  <option value="gray" <?php if($ui['s1_titlec']=='gray'){echo'selected';}?>>gray</option>
                  <option value="gray-dark" <?php if($ui['s1_titlec']=='gray-dark'){echo'selected';}?>>gray-dark</option>
                  <option value="light" <?php if($ui['s1_titlec']=='light'){echo'selected';}?>>light</option>
                  <option value="lighter" <?php if($ui['s1_titlec']=='lighter'){echo'selected';}?>>lighter</option>
                  <option value="extra-light-gray" <?php if($ui['s1_titlec']=='extra-light-gray'){echo'selected';}?>>extra-light-gray</option>
                  <option value="extra-dark-gray" <?php if($ui['s1_titlec']=='extra-dark-gray'){echo'selected';}?>>extra-dark-gray</option>
                  <option value="white" <?php if($ui['s1_titlec']=='white'){echo'selected';}?>>white</option>
                  <option value="black" <?php if($ui['s1_titlec']=='black'){echo'selected';}?>>black</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Body:</label>
              <div class="col-lg-10">
                <textarea type="text" name="s1_body" rows="4" class="form-control"><?php echo $ui['s1_body'];?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Body text color:</label>
                <div class="col-lg-10">
                <select class="form-control select" name="s1_bodyc" data-fouc required> 
                  <option value="blue" <?php if($ui['s1_bodyc']=='blue'){echo'selected';}?>>blue</option>                                
                  <option value="red" <?php if($ui['s1_bodyc']=='red'){echo'selected';}?>>red</option>
                  <option value="orange" <?php if($ui['s1_bodyc']=='orange'){echo'selected';}?>>orange</option>                               
                  <option value="indigo" <?php if($ui['s1_bodyc']=='indigo'){echo'selected';}?>>indigo</option>                                                    
                  <option value="violet" <?php if($ui['s1_bodyc']=='violet'){echo'selected';}?>>violet</option>                             
                  <option value="purple" <?php if($ui['s1_bodyc']=='purple'){echo'selected';}?>>purple</option>
                  <option value="yellow" <?php if($ui['s1_bodyc']=='yellow'){echo'selected';}?>>yellow</option>
                  <option value="teal" <?php if($ui['s1_bodyc']=='teal'){echo'selected';}?>>teal</option>
                  <option value="cyan" <?php if($ui['s1_bodyc']=='cyan'){echo'selected';}?>>cyan</option>
                  <option value="pink" <?php if($ui['s1_bodyc']=='pink'){echo'selected';}?>>pink</option>
                  <option value="green" <?php if($ui['s1_bodyc']=='green'){echo'selected';}?>>green</option>
                  <option value="gray" <?php if($ui['s1_bodyc']=='gray'){echo'selected';}?>>gray</option>
                  <option value="gray-dark" <?php if($ui['s1_bodyc']=='gray-dark'){echo'selected';}?>>gray-dark</option>
                  <option value="light" <?php if($ui['s1_bodyc']=='light'){echo'selected';}?>>light</option>
                  <option value="lighter" <?php if($ui['s1_bodyc']=='lighter'){echo'selected';}?>>lighter</option>
                  <option value="extra-light-gray" <?php if($ui['s1_bodyc']=='extra-light-gray'){echo'selected';}?>>extra-light-gray</option>
                  <option value="extra-dark-gray" <?php if($ui['s1_bodyc']=='extra-dark-gray'){echo'selected';}?>>extra-dark-gray</option>
                  <option value="white" <?php if($ui['s1_bodyc']=='white'){echo'selected';}?>>white</option>
                  <option value="black" <?php if($ui['s1_bodyc']=='black'){echo'selected';}?>>black</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Footer:</label>
              <div class="col-lg-10">
                <textarea type="text" name="s1_ft" rows="4" class="form-control"><?php echo $ui['s1_ft'];?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Footer text color:</label>
                <div class="col-lg-10">
                <select class="form-control select" name="s1_ftc" data-fouc required> 
                  <option value="blue" <?php if($ui['s1_ftc']=='blue'){echo'selected';}?>>blue</option>                                
                  <option value="red" <?php if($ui['s1_ftc']=='red'){echo'selected';}?>>red</option>
                  <option value="orange" <?php if($ui['s1_ftc']=='orange'){echo'selected';}?>>orange</option>                               
                  <option value="indigo" <?php if($ui['s1_ftc']=='indigo'){echo'selected';}?>>indigo</option>                                                    
                  <option value="violet" <?php if($ui['s1_ftc']=='violet'){echo'selected';}?>>violet</option>                             
                  <option value="purple" <?php if($ui['s1_ftc']=='purple'){echo'selected';}?>>purple</option>
                  <option value="yellow" <?php if($ui['s1_ftc']=='yellow'){echo'selected';}?>>yellow</option>
                  <option value="teal" <?php if($ui['s1_ftc']=='teal'){echo'selected';}?>>teal</option>
                  <option value="cyan" <?php if($ui['s1_ftc']=='cyan'){echo'selected';}?>>cyan</option>
                  <option value="pink" <?php if($ui['s1_ftc']=='pink'){echo'selected';}?>>pink</option>
                  <option value="green" <?php if($ui['s1_ftc']=='green'){echo'selected';}?>>green</option>
                  <option value="gray" <?php if($ui['s1_ftc']=='gray'){echo'selected';}?>>gray</option>
                  <option value="gray-dark" <?php if($ui['s1_ftc']=='gray-dark'){echo'selected';}?>>gray-dark</option>
                  <option value="light" <?php if($ui['s1_ftc']=='light'){echo'selected';}?>>light</option>
                  <option value="lighter" <?php if($ui['s1_ftc']=='lighter'){echo'selected';}?>>lighter</option>
                  <option value="extra-light-gray" <?php if($ui['s1_ftc']=='extra-light-gray'){echo'selected';}?>>extra-light-gray</option>
                  <option value="extra-dark-gray" <?php if($ui['s1_ftc']=='extra-dark-gray'){echo'selected';}?>>extra-dark-gray</option>
                  <option value="white" <?php if($ui['s1_ftc']=='white'){echo'selected';}?>>white</option>
                  <option value="black" <?php if($ui['s1_ftc']=='black'){echo'selected';}?>>black</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Button text:</label>
              <div class="col-lg-10">
                <input type="text" name="s1_bt" class="form-control" value="<?php echo $ui['s1_bt'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2">Button color:</label>
                <div class="col-lg-10">
                <select class="form-control select" name="s1_bc" data-fouc required> 
                  <option value="white" <?php if($ui['s1_bc']=='white'){echo'selected';}?>>white</option>
                  <option value="black" <?php if($ui['s1_bc']=='black'){echo'selected';}?>>black</option>
                  <option value="dark-gray" <?php if($ui['s1_bc']=='dark-gray'){echo'selected';}?>>dark-gray</option>
                  <option value="light-gray" <?php if($ui['s1_bc']=='light-gray'){echo'selected';}?>>light-gray</option>
                  <option value="deep-pink" <?php if($ui['s1_bc']=='deep-pink'){echo'selected';}?>>deep-pink</option>
                  <option value="transparent-deep-pink" <?php if($ui['s1_bc']=='transparent-deep-pink'){echo'selected';}?>>transparent-deep-pink</option>
                  <option value="transparent-light-gray" <?php if($ui['s1_bc']=='transparent-light-gray'){echo'selected';}?>>transparent-light-gray</option>
                  <option value="transparent-dark-gray" <?php if($ui['s1_bc']=='transparent-dark-gray'){echo'selected';}?>>transparent-dark-gray</option>
                  <option value="transparent-black" <?php if($ui['s1_bc']=='transparent-black'){echo'selected';}?>>transparent-black</option>
                  <option value="transparent-white" <?php if($ui['s1_bc']=='transparent-white'){echo'selected';}?>>transparent-white</option>
                </select>
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

      </div>  
    </div>
<?php require_once('../include/user_footer.php');?> 