<?php
	session_start();
	require "lib/main.class.php";
	$obj = new Users;
	if(!$_SESSION['email'])
	{
		header("location:login.php");
		exit();
	}
	$loginUser = $obj->getUserLoginData($_SESSION['email']);
	if($loginUser['status'] == 0) header("location:notVerified.php");
	if(!isset($_SESSION['payload']['msgid'])) $_SESSION['payload']['msgid'] = $loginUser['appkey'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ModiTech</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

<?php require "components/mainNavbar.php"; ?>


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php require "components/mainSidebar.php"; ?>


			<!-- Main content -->
			<div class="page-container" style="min-height:417px">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			
			<!-- /main sidebar -->


			<!-- Secondary sidebar -->
			<div class="sidebar sidebar-secondary sidebar-default">
				<div class="sidebar-content">

					<!-- Search messages -->
					<div class="sidebar-category">
						<div class="category-title">
							<span>Search messages</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content">
							<form action="#">
								<div class="has-feedback has-feedback-left">
									<input type="search" class="form-control" placeholder="Type and hit Enter">
									<div class="form-control-feedback">
										<i class="icon-search4 text-size-base text-muted"></i>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /search messages -->


					<!-- Actions -->
					<div class="sidebar-category">
						<div class="category-title">
							<span>Actions</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content">
							<a href="#" class="btn bg-pink-400 btn-rounded btn-block btn-xs">New message</a>
							<a href="#" class="btn bg-teal-400 btn-rounded btn-block btn-xs">New conference</a>
						</div>
					</div>
					<!-- /actions -->


					<!-- Sub navigation -->
					<div class="sidebar-category">
						<div class="category-title">
							<span>Navigation</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content no-padding">
							<ul class="navigation navigation-alt navigation-accordion">
								<li class="navigation-header">Actions</li>
								<li><a href="#"><i class="icon-compose"></i> Compose message</a></li>
								<li><a href="#"><i class="icon-collaboration"></i> Conference</a></li>
								<li><a href="#"><i class="icon-user-plus"></i> Add users <span class="label label-success">32 online</span></a></li>
								<li><a href="#"><i class="icon-users"></i> Create team</a></li>
								<li class="navigation-divider"></li>
								<li><a href="#"><i class="icon-files-empty"></i> All messages <span class="badge badge-danger">99+</span></a></li>
								<li><a href="#"><i class="icon-file-plus"></i> Active discussions <span class="badge badge-default">32</span></a></li>
								<li><a href="#"><i class="icon-file-locked"></i> Closed discussions</a></li>
								<li class="navigation-header">Options</li>
								<li><a href="#"><i class="icon-reading"></i> Message history</a></li>
								<li><a href="#"><i class="icon-cog3"></i> Settings</a></li>
							</ul>
						</div>
					</div>
					<!-- /sub navigation -->


					<!-- Latest updates -->
					<div class="sidebar-category">
						<div class="category-title">
							<span>Latest updates</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content">
							<ul class="media-list">
								<li class="media">
									<div class="media-left"><a href="#" class="btn border-success text-success btn-flat btn-icon btn-sm btn-rounded"><i class="icon-checkmark3"></i></a></div>
									<div class="media-body">
										<a href="#">Richard Vango</a> has been registered
										<div class="media-annotation">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left"><a href="#" class="btn border-slate text-slate btn-flat btn-icon btn-sm btn-rounded"><i class="icon-infinite"></i></a></div>
									<div class="media-body">
										Server went offline for monthly maintenance
										<div class="media-annotation">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left"><a href="#" class="btn border-success text-success btn-flat btn-icon btn-sm btn-rounded"><i class="icon-checkmark3"></i></a></div>
									<div class="media-body">
										<a href="#">Chris Arney</a> has been registered
										<div class="media-annotation">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left"><a href="#" class="btn border-danger text-danger btn-flat btn-icon btn-sm btn-rounded"><i class="icon-cross2"></i></a></div>
									<div class="media-body">
										<a href="#">Chris Arney</a> left main conversation
										<div class="media-annotation">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="media-left"><a href="#" class="btn border-primary text-primary btn-flat btn-icon btn-sm btn-rounded"><i class="icon-plus3"></i></a></div>
									<div class="media-body">
										<a href="#">Beatrix Diaz</a> just joined conversation
										<div class="media-annotation">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /latest updates -->


					<!-- Online users -->
					<div class="sidebar-category">
						<div class="category-title">
							<span>Online users</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content no-padding">
							<ul class="media-list media-list-linked">
								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face1.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">James Alexander</span>
											<span class="text-size-small text-muted display-block">UI/UX expert</span>
										</div>
										<div class="media-right media-middle">
											<span class="status-mark bg-success"></span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face2.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">Jeremy Victorino</span>
											<span class="text-size-small text-muted display-block">Senior designer</span>
										</div>
										<div class="media-right media-middle">
											<span class="status-mark bg-danger"></span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face6.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<div class="media-heading"><span class="text-semibold">Jordana Mills</span></div>
											<span class="text-muted">Sales consultant</span>
										</div>
										<div class="media-right media-middle">
											<span class="status-mark bg-grey-300"></span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face9.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<div class="media-heading"><span class="text-semibold">William Miles</span></div>
											<span class="text-muted">SEO expert</span>
										</div>
										<div class="media-right media-middle">
											<span class="status-mark bg-success"></span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face3.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">Margo Baker</span>
											<span class="text-size-small text-muted display-block">Google</span>
										</div>
										<div class="media-right media-middle">
											<span class="status-mark bg-success"></span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face4.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">Beatrix Diaz</span>
											<span class="text-size-small text-muted display-block">Facebook</span>
										</div>
										<div class="media-right media-middle">
											<span class="status-mark bg-warning-400"></span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face5.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">Richard Vango</span>
											<span class="text-size-small text-muted display-block">Microsoft</span>
										</div>
										<div class="media-right media-middle">
											<span class="status-mark bg-grey-300"></span>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /online users -->


					<!-- Latest messages -->
					<div class="sidebar-category">
						<div class="category-title">
							<span>Latest messages</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content no-padding">
							<ul class="media-list media-list-linked">
								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face10.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">Will Samuel</span>
											<span class="text-muted">And he looked over at the alarm clock, ticking..</span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face11.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">Margo Baker</span>
											<span class="text-muted">However hard he threw himself onto..</span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face12.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">Monica Smith</span>
											<span class="text-muted">Yes, but was it spanossible to quietly sleep through..</span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face13.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">Jordana Mills</span>
											<span class="text-muted">What should he do now? The next train went at..</span>
										</div>
									</a>
								</li>

								<li class="media">
									<a href="#" class="media-link">
										<div class="media-left"><img src="assets/images/demo/users/face14.jpg" class="img-circle" alt=""></div>
										<div class="media-body">
											<span class="media-heading text-semibold">John Craving</span>
											<span class="text-muted">Gregor then turned to look out the window..</span>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /latest messages -->

				</div>
			</div>
			<!-- /secondary sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Messages</span> - <?php echo $obj->getNameWithAppKey($_SESSION['payload']['msgid']); ?></h4>
						</div>
					<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="home.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="messages.php">Conversation</a></li>
						</ul>
					<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic layout -->
					<div class="panel panel-flat">
						<div class="panel-body">
							<ul id="msgContainer" class="media-list chat-list content-group">
							</ul>
							<script type="text/javascript">
							function loadMsgContainer()
							{
								$("#msgContainer").load("apps/ajax/getMessages.php", function(){
									$(this).unwrap();
								});

							}
							$(document).ready(function(){
								loadMsgContainer();
							});
							/*Message Sending Function*/
							$(document).keypress(function(e){
								if(e.which == 13){
									e.preventDefault();
									var msg = document.getElementById("msg").value;
									var from = "<?php echo $loginUser['appkey']; ?>";
									var to = "<?php echo $_SESSION['payload']['msgid']; ?>";
									$.ajax({
										type: "POST",
										url: "apps/ajax/sendMsg.php",
										data: {'msg':msg,'from':from,'to':to},
										cache: false,
										success: function (rstatus){
											if(rstatus == "MySQL")
											{
												$("#msg").val("");
												loadMsgContainer();
											}
										}
									});
								}
							});
							setInterval(function(){
								loadMsgContainer();
							}, 50000);
							</script>
	                    	<textarea id="msg" name="msg" class="form-control content-group" rows="3" cols="1" placeholder="Enter your message..."></textarea>

	                    	<div class="row">
<!-- 	                    		<div class="col-xs-6">
		                        	<ul class="icons-list icons-list-extended mt-10">
		                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send photo"><i class="icon-file-picture"></i></a></li>
		                            	<li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send video"><i class="icon-file-video"></i></a></li>
		                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send file"><i class="icon-file-plus"></i></a></li>
		                            </ul>
	                    		</div> -->

	                    		<div class="col-xs-6 text-right">
		                            <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-circle-right2"></i></b> Send</button>
	                    		</div>
	                    	</div>
						</div>
					</div>
					<!-- /basic layout -->


					


					



					<!-- Footer -->
					<?php require "components/footer.php"; ?>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_1/LTR/default/support_knowledgebase.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2016 03:28:51 GMT -->
</html>
