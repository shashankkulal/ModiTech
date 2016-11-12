<?php
	session_start();
	require "lib/search.class.php";
	$obj = new Users;
	if(!$_SESSION['email'])
	{
		header("location:login.php");
		exit();
	}
	$loginUser = $obj->getUserLoginData($_SESSION['email']);
	if($loginUser['status'] == 0) header("location:notVerified.php");
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
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Search</span></h4>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Search field -->
					<div class="panel">
						<div class="panel-body">
							<h4 class="text-center content-group-lg">
								Welcome to ModiTech
								<small class="display-block">Inter College Alumni Association - Modi Educational Group</small>
							</h4>

							<form action="apps/search.php" method="post" class="main-search">
								<div class="input-group content-group">
									<div class="has-feedback has-feedback-left">
										<input type="text" name="searchQuery" class="form-control input-xlg" placeholder="Search something...">
										<div class="form-control-feedback">
											<i class="icon-search4 text-muted text-size-base"></i>
										</div>
									</div>

									<div class="input-group-btn">
										<button type="submit" class="btn btn-primary btn-xlg">Search</button>
									</div>
								</div>

								<div class="row search-option-buttons">
									<div class="col-sm-6">
										<ul class="list-inline list-inline-condensed no-margin-bottom">
											<li class="dropdown">
												<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-stack2 position-left"></i> All categories <span class="caret"></span>
												</a>

												<ul class="dropdown-menu">
													<li><a href="#"><i class="icon-question7"></i> Getting started</a></li>
													<li><a href="#"><i class="icon-accessibility"></i> Registration</a></li>
													<li><a href="#"><i class="icon-reading"></i> General info</a></li>
													<li><a href="#"><i class="icon-gear"></i> Your settings</a></li>
													<li><a href="#"><i class="icon-graduation"></i> Copyrights</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-mail-read"></i> Contacting authors</a></li>
												</ul>
											</li>
											<li><a href="#" class="btn btn-link"><i class="icon-reload-alt position-left"></i> Refine your search</a></li>
										</ul>
									</div>

									<div class="col-sm-6 text-right">
										<ul class="list-inline no-margin-bottom">
											<li><a href="#" class="btn btn-link"><i class="icon-make-group position-left"></i> Browse articles</a></li>
											<li><a href="#" class="btn btn-link"><i class="icon-menu7 position-left"></i> Advanced search</a></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
					<?php require "components/searchMenu.php"; ?>
					<div class="content-group">
						<?php if(sizeof($_SESSION['searchResults']) > 0): ?>
						<p class="text-muted text-size-small content-group">About <?php echo sizeof($_SESSION['searchResults']); ?> results found.</p>



						<?php
						$rows = array_chunk($_SESSION['searchResults'], 4);
						foreach ($rows as $row) {
		    				print '<div class="row">'."\n";
		    					foreach ($row as $value) {
		    						$usr = new Users;
		    						$singleUser = $usr->getUserLoginData($value);
		    						?>
		        					<div class="col-lg-3 col-sm-6">
										<div class="thumbnail">
										<div class="thumb thumb-rounded">
											<img src="uploads/users/<?php echo md5($singleUser['email']).".jpg"; ?>" onerror="this.src='assets/images/noUser.png'" alt="">
											<div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
											</div>
										</div>		
										<div class="caption text-center">
											<h6 class="text-semibold no-margin"><?php echo $singleUser['fname'], " ", $singleUser['lname']?> <small class="display-block"><?php echo $usr->getCollegeShortName($singleUser['college']); ?></small></h6>
										    <ul class="icons-list mt-15">
									            <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
									            <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
									            <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
								            </ul>
										</div>
										</div>
									</div>
		    <?php }
		    print '</div>'."\n";
		}
?>



					<?php else : ?>
						<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title"><b>No Results Found</b></h6>
								</div>
							</div>
					<?php endif; ?>
					</div>
					<!-- Submit a ticket -->
					<div class="panel panel-body stack-media-on-mobile">
						<div class="media-left">
							<a href="#" class="btn btn-link btn-icon text-teal">
								<i class="icon-question7 icon-2x no-edge-top"></i>
							</a>
						</div>

						<div class="media-body media-middle">
							<h6 class="media-heading text-semibold">Can't find what you're looking for?</h6>
							Maladroit forgetfully under until the fraternally on one much whispered waked much cumulatively some rabidly after thanks hey
						</div>

						<div class="media-right media-middle">
							<a href="#" class="btn bg-warning-400 btn-lg"><i class="icon-mail5 position-left"></i> Submit a ticket</a>
						</div>
					</div>
					<!-- /submit a ticket -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">ModiTech</a> by <a href="#" target="_blank">Modi Educational Group</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_1/LTR/default/support_knowledgebase.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2016 03:28:51 GMT -->
</html>
