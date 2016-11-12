<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="uploads/users/<?php echo md5($loginUser['email']).'.jpg'; ?>" class="img-circle img-sm" onerror="this.src='assets/images/noUser.png'" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $loginUser['fname']; ?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;<?php echo $obj->getCollegeShortname($loginUser['college']); ?>
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
								<li class="navigation-header"><span>Navigation</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="home.php"><i class="icon-home4"></i> <span>Home</span></a></li>
								<li><a href="profile.php"><i class="icon-profile"></i> <span>Profile</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->