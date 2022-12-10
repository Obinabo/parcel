<?php
require_once("../../app/config.php");
$title="Admin dashboard";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php'); 
$deposit =mysqli_fetch_row(mysqli_query($dbc, "SELECT SUM(amount) FROM deposits")); 
$deposit_1 =mysqli_fetch_row(mysqli_query($dbc, "SELECT SUM(amount) FROM deposits WHERE status=1")); 
$deposit_0 =mysqli_fetch_row(mysqli_query($dbc, "SELECT SUM(amount) FROM deposits WHERE status=0"));

$bdeposit =mysqli_fetch_row(mysqli_query($dbc, "SELECT SUM(amount) FROM deposit")); 
$bdeposit_1 =mysqli_fetch_row(mysqli_query($dbc, "SELECT SUM(amount) FROM deposit WHERE status=1")); 
$bdeposit_0 =mysqli_fetch_row(mysqli_query($dbc, "SELECT SUM(amount) FROM deposit WHERE status=0")); 
$user_bal =mysqli_fetch_row(mysqli_query($dbc, "SELECT SUM(dep_balance) FROM users"));
$support= mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM support"));  
$support_1= mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM support WHERE status=0"));  
$support_0=mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM support WHERE status=1"));
$review= mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM review"));  
$review_0= mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM review WHERE status=0"));  
$review_1=mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM review WHERE status=1"));
$news=mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM trending"));  
$cat=mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM trending_cat"));  
$news_0= mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM trending WHERE status=0"));  
$news_1=mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM trending WHERE status=1"));  
$message=mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM contact"));     
?>
<!-- Main content -->
<div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
          <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
              <h4><i class="icon-home4 mr-2"></i> <span class="font-weight-semibold">Dashboard</span></h4>
            </div>
          </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content pt-0">
<div class="row">
  <div class="col-md-4">
    <div class="card">
      <a href="./users" class="text-default">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Users</h6>
            <ul class="list list-unstyled mb-0">
              <li>verified users: <span class="font-weight-semibold text-default">#<?php echo mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM users WHERE active=1"));?></span></li>
              <li>unverified users: <span class="font-weight-semibold text-default">#<?php echo mysqli_num_rows(mysqli_query($dbc, "SELECT * FROM users WHERE active=0"));?></span></li>
            </ul>
          </div>

          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <a href="./ticket" class="text-default">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Support Ticket</h6>
            <ul class="list list-unstyled mb-0">
              <li>Open tickets: <span class="font-weight-semibold text-default">
                #<?php echo $support_1;?></span></li>
              <li>Closed tickets: <span class="font-weight-semibold text-default">
                #<?php echo $support_0;?></span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <a href="./reviews" class="text-default">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Platform Reviews</h6>
            <ul class="list list-unstyled mb-0">
              <li>Published reviews: <span class="font-weight-semibold text-default">
                #<?php echo $review_1;?></span></li>
              <li>Pending reviews: <span class="font-weight-semibold text-default">
                #<?php echo $review_0;?></span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
 <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Deposits</h6>
            <ul class="list list-unstyled mb-0">
              <li>Cash confirmed deposits: <span class="font-weight-semibold text-default">
                <?php echo $scan2['currency'].number_format($deposit_1[0]);?></span></li>
              <li>Cash pending deposits: <span class="font-weight-semibold text-default">
                <?php echo $scan2['currency'].number_format($deposit_0[0]);?></span></li>
              </li>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>       
