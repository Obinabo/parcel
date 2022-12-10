<?php
require_once("../../app/config.php");
$title="Promotional emails";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$result = mysqli_query($dbc, "SELECT * FROM users WHERE promotional_emails=1 ORDER BY users.id DESC");
?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-envelope mr-2"></i> <span class="font-weight-semibold">Promotion email / newsletter</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
              <a href="./users" class="breadcrumb-item">users</a>
            </div>
          </div>

          <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
            </div>
          </div>
        </div>
      </div>
  <div class="content">
<div class="card">
        <div class="card-header header-elements-inline">
          <h6 class="card-title font-weight-semibold">Send email</h6>
              <div class="header-elements">
                <div class="list-icons text-orange-600">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
        </div>

        <div class="card-body">
          <p class="text-danger"></p>
          <form action="<?php admin_url('sendpemail');?>" method="post">
              <div class="form-group row">
                  <label class="col-form-label col-lg-2">Email</label>
                  <div class="col-lg-12">
                    <select multiple="multiple" class="form-control select" name="email[]" data-fouc>
                      <optgroup label="Subscribed users">
                        <?php while ($row = mysqli_fetch_array($result)){?>
                        <option value="<?php echo $row['email'];?>" selected><?php echo $row['email'];?></option>
                        <?php }?>
                      </optgroup>
                    </select>
                  </div>
                </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-2">Subject:</label>
                <div class="col-lg-12">
                  <input type="text" name="subject" class="form-control" required>
                </div>
              </div>
             <div class="form-group row">
                <label class="col-form-label col-lg-2">Content:</label>
                <div class="col-lg-12">
                  <textarea type="text" name="message" class="tinymce form-control"></textarea>
                </div>
              </div>               
            <div class="text-right">
              <button type="submit" class="btn bg-violet">Send <i class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div> 