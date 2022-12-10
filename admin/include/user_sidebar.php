	<div class="page-content">


		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main bg-gradient-dark sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">
				
				<!-- User menu -->
				<div class="sidebar-user-material">
					<div class="sidebar-user-material-body">
						<div class="card-body text-center">
							<a href="#">
								<img src="<?php echo $cast2;?>" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
							</a>
							<h6 class="mb-0 text-white text-shadow-dark"><?php echo $set['site_name'];?></h6>
							<span class="font-size-sm text-white text-shadow-dark"><?php echo $set['title'];?></span>
						</div>
													
					</div>
				</div>
				<!-- /user menu -->
	
				
				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item">
							<a href="./dashboard" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>										
						<!--<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-user-plus"></i> <span>User Manangement</span> <?php admin_label_contact($dbc);?></a>

							<ul class="nav nav-group-sub" data-submenu-title="User Manangement">
								<li class="nav-item"><a href="./users" class="nav-link"><i class="icon-user"></i> Client accounts</a></li>
								<li class="nav-item"><a href="./ticket" class="nav-link"><i class="icon-bubbles5"></i>Customer service</a></li>
								<li class="nav-item"><a href="./promotion_emails" class="nav-link"><i class="icon-envelope"></i>Promotional Emails</a></li>
								<li class="nav-item"><a href="./messages" class="nav-link"><i class="icon-bubbles5"></i>Messages <?php admin_label_contact($dbc);?></a></li>
							</ul>
						</li>-->
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-book"></i> <span>Trackings</span> <?php admin_label_booking($dbc);?></a>

							<ul class="nav nav-group-sub" data-submenu-title="Bookings">
								<li class="nav-item"><a href="./new_booking" class="nav-link"><i class="icon-book"></i>Tracking log <?php admin_label_booking($dbc);?></a></li>
								<li class="nav-item"><a href="./create_booking" class="nav-link"><i class="icon-file-plus2"></i>Create New Record</a></li>
								<li class="nav-item"><a href="./abooking" class="nav-link"><i class="icon-book"></i>Admin Records</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cogs"></i> <span>System configuration</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="System configuration">
								<li class="nav-item"><a href="./settings" class="nav-link"><i class="icon-hammer-wrench"></i>General Settings</a></li>
								<li class="nav-item"><a href="./email_settings"class="nav-link"><i class="icon-envelope"></i>SMTP configuration</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-credit-card"></i><span>Deposit system</span> <?php admin_label_deposit($dbc);?></a>
							<ul class="nav nav-group-sub" data-submenu-title="Deposit">
								<li class="nav-item"><a href="./payment_gateway" class="nav-link"><i class="icon-coins"></i>Deposit methods</a></li>
								<li class="nav-item"><a href="./cash_deposit"class="nav-link"><i class="icon-cash"></i>Deposit History <?php admin_label_deposit($dbc);?></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-magazine"></i> <span>Blog Management</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="News Section">
								<li class="nav-item"><a href="./cblog" class="nav-link"><i class="icon-quill4"></i>New Post</a></li>
								<li class="nav-item"><a href="./ar" class="nav-link"><i class="icon-newspaper"></i>Articles</a></li>
								<li class="nav-item"><a href="./category"class="nav-link"><i class="icon-clipboard6"></i>Category</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-home4"></i> <span>Web control</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="News Section">
								<li class="nav-item"><a href="./section3" class="nav-link"><i class="icon-home4"></i>Front end</a></li>
								<li class="nav-item"><a href="./logo" class="nav-link"><i class="icon-image2"></i>Logo & Favicon</a></li>	
								<li class="nav-item"><a href="./reviews"class="nav-link"><i class="icon-clipboard6"></i>Platform Review</a></li>
								<li class="nav-item"><a href="./pages" class="nav-link"><i class="icon-stack"></i>Webpages</a></li>
								<li class="nav-item"><a href="./currency" class="nav-link"><i class="icon-coin-euro"></i>Currency</a></li>
								<li class="nav-item"><a href="./faq" class="nav-link"><i class="icon-question4"></i>FAQs</a></li>
								<li class="nav-item"><a href="./branch" class="nav-link"><i class="icon-home2"></i>Branches</a></li>
								<li class="nav-item"><a href="./terms" class="nav-link"><i class="icon-file-check"></i>Terms & Condition</a></li>
								<li class="nav-item"><a href="./why" class="nav-link"><i class="icon-file-check"></i>Why us</a></li>
								<li class="nav-item"><a href="./about" class="nav-link"><i class="icon-file-check"></i>About us</a></li>
								<li class="nav-item"><a href="./social" class="nav-link"><i class="icon-share2"></i>Social Links</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>