<?php
require_once('../../app/config.php');
$id=$_REQUEST['id'];
$ticket=mysqli_fetch_array(mysqli_query($dbc,"SELECT * FROM support WHERE ticket_id='$id'"));
$user = mysqli_fetch_array(mysqli_query($dbc, "SELECT * FROM users WHERE id='".$ticket['user_id']."'"));
$title=$id;
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php'); 
if(empty($user['image_link'])){
	$cast="../asset/global_assets/images/placeholders/placeholder.jpg";
}else{
	$cast="../asset/profile/".$user['image_link'];
}?>
<div class="content-wrapper">

      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-bubbles5 mr-2"></i> <span class="font-weight-semibold">Customer Service</span></h4>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="./" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
              <a href="./ticket" class="breadcrumb-item">support ticket</a>
              <a href="./check_ticket/<?php echo $id;?>" class="breadcrumb-item">[#<?php echo $id;?>]</a>
            </div>
          </div>

            <div class="breadcrumb justify-content-center">
            </div>
          </div>
        </div>
      <!-- /page header -->

<div class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="card border-left-3 border-left-orange rounded-left-0">
				<div class="card-body">
					<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
						<div>
							<h6 class="font-weight-semibold"><?php echo $ticket['subject']; ?></h6>
							<ul class="list list-unstyled mb-0">
								<li>Ticket ID #: &nbsp;<?php echo $id;?></li>
								<li>Created on: <span class="font-weight-semibold"><?php echo date("Y/m/d", strtotime($ticket['date']));?></span></li>
							</ul>
						</div>

						<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
							<ul class="list list-unstyled mb-0">
								<li>Status: <span class="badge bg-danger-400 font-weight-semibold"><?php  if($ticket['status']==0){echo 'Open';} else if($ticket['status']==1){echo 'Closed';}else if($ticket['status']==2){echo 'Resolved';}?></span></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
					<span>
						<span class="badge badge-mark border-success mr-2"></span>
						Priority:
						<span class="font-weight-semibold"><?php echo $ticket['priority']; ?></span>
					</span>
				</div>
			</div>
		</div>
	</div>
	<?php
$bf=mysqli_query($dbc, "SELECT * FROM reply_support WHERE ticket_id='$id' ORDER BY reply_support.date ASC");?>
	<div class="row">
		<div class="col-lg-12">
<!-- Messages -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h6 class="card-title font-weight-semibold">Ticket Log</h6>
					<div class="header-elements">
		        	</div>
				</div>

				<div class="card-body">
					<ul class="media-list media-chat media-chat-scrollable mb-3">
						<li class="media">
							<div class="ml-3">
								<a href="<?php echo $cast;?>">
									<img src="<?php echo $cast;?>" class="rounded-circle" width="40" height="40" alt="">
								</a>
							</div>
							<div class="media-body">
								<div class="media-chat-item"><?php echo $ticket['message']; ?></div>
								<div class="font-size-sm text-muted mt-2"><?php echo date("M j, Y h:iA", strtotime($ticket['date'])); ?></div>
							</div>
						</li>
<?php
while($df=mysqli_fetch_array($bf)){
 if($df['status']==1){?>
						<li class="media">
							<div class="ml-3">
								<a href="<?php echo $cast;?>">
									<img src="<?php echo $cast;?>" class="rounded-circle" width="40" height="40" alt="">
								</a>
							</div>
							<div class="media-body">
								<div class="media-chat-item"><?php echo $df['reply']; ?></div>
								<div class="font-size-sm text-muted mt-2"><?php echo date("M j, Y h:iA", strtotime($df['date'])); ?></div>
							</div>


						</li>
<?php }else if($df['status']==0){?>
						<li class="media media-chat-item-reverse">
							<div class="media-body">
								<div class="media-chat-item"><?php echo $df['reply']; ?></div>
								<div class="font-size-sm text-muted mt-2"><?php echo date("M j, Y h:iA", strtotime($df['date'])); ?></div>
							</div>
							<div class="mr-3">
								<a href="<?php echo $cast2;?>">
									<img src="<?php echo $cast2;?>" class="rounded-circle" width="40" height="40">
								</a>
							</div>
						</li>
<?php } }?>
					</ul>
<form method="post" action="../app/admin/rticket">
		        	<textarea class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."  name="reply" required></textarea>
    				<input type="hidden"  name="ticket_id" value="<?php echo $id;?>">			
    				<input type="hidden"  name="user" value="<?php echo $ticket['user_id'];?>">

		        	<div class="d-flex align-items-center">
		        		<button type="submit" class="btn bg-success btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
		        	</div>	
</form>

				</div>
			</div>
		</div>
								<!-- /messages -->
	</div>