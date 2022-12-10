<?php
session_start();
require_once("../app/config.php");
if(isset($_SESSION['offshore_admin'])){
	echo "<script>window.location.href='".$url."/admin/dashboard';</script>";
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo $url; ?>/admin/"/>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="../asset/<?php echo $logo['image_link']; ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="../asset/<?php echo $logo['image_link']; ?>">
	<title>Admin | <?php echo$set['site_name'];?></title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../asset/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../asset/user/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../asset/user/assets/css/bootstrap_limitless.css" rel="stylesheet" type="text/css">
	<link href="../asset/user/assets/css/layout.css" rel="stylesheet" type="text/css">
	<link href="../asset/user/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="../asset/user/assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../asset/global_assets/js/main/jquery.min.js"></script>
	<script src="../asset/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../asset/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="../asset/global_assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="../asset/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="../asset/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="../asset/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="../asset/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../asset/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../asset/global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="../asset/global_assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="../asset/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="../asset/global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="../asset/user/assets/js/app.js"></script>
	<script src="../asset/global_assets/js/demo_pages/dashboard.js"></script>
	<script src="../asset/global_assets/js/demo_pages/login.js"></script>
	<script src="../asset/global_assets/js/demo_pages/datatables_advanced.js"></script>
	<script src="../asset/global_assets/js/demo_pages/datatables_basic.js"></script>
	<script src="../asset/global_assets/js/demo_pages/form_layouts.js"></script>
	<script src="../asset/global_assets/js/demo_pages/form_select2.js"></script>
	<script src="../asset/global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
	<script src="../asset/global_assets/js/plugins/ui/prism.min.js"></script>
	<!-- /theme JS files -->
<style>
.input2{
    width: 95%;
	border: 1px solid #fff;
    color: #FFF;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.fifty{max-width: 100%;
border-radius: 15px;
border: 1px solid #073474;
-moz-box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.25);
-webkit-box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.25);
opacity: 0.9;
}
.btn-block-1{border-radius: 15px; max-width: 100%; -moz-box-align: center; -webkit-box-align: center;}

</style>
</head>
	<div class="page-content" style="background-image:url('../asset/images/3.png'); background-repeat:no-repeat; background-size:cover">

		<!-- Main content --> 
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">
				<!-- Login form -->
				<form class="login-form" action="../app/admin/login" method="post">
<?php 
if(!empty($_SESSION['offshore_adminlogin'])){?>
      	<div class="row">
            <div class="col-lg-12">
              <div class="alert bg-danger text-white alert-styled-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
					<?php if($_SESSION['offshore_adminlogin']=='eruptx') {
					 	echo'Current account session has ended, log in with new password.';
					} else if($_SESSION['offshore_adminlogin']=='invaliddetails') {
						echo'Username or password is incorrect.';
					}?>                 
                </div>
              </div>
          </div>
<?php }?>
					<div class="mb-0 fifty">
						<div class="card-body">
							<div class="text-center mb-3">
								<a href="../"><img src="../asset/<?php echo $logo['image_link']; ?>" style="max-width:50%; height:auto;" class=""></a>
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Your credentials</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" class="form-control input2" placeholder="Username" name="username" required>
								<div class="form-control-feedback">
									<i class="icon-user-plus text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control input2" name="password" placeholder="Password" required>
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
						</div>

							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block-1">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
<?php require_once("include/user_footer.php"); ?>
