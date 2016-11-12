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
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/layout_1/LTR/default/support_knowledgebase.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2016 03:28:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span></h4>
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
					<!-- /search field -->


					<!-- Info blocks -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel">
								<div class="panel-body text-center">
									<div class="icon-object border-success text-success"><i class="icon-book"></i></div>
									<h5 class="text-semibold">Knowledge Base</h5>
									<p class="mb-15">Ouch found swore much dear conductively hid submissively hatchet vexed far inanimately alongside candidly much and jeez</p>
									<a href="#" class="btn bg-success-400">Browse articles</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel">
								<div class="panel-body text-center">
									<div class="icon-object border-warning text-warning"><i class="icon-lifebuoy"></i></div>
									<h5 class="text-semibold">Support center</h5>
									<p class="mb-15">Dear spryly growled much far jeepers vigilantly less and far hideous and some mannishly less jeepers less and and crud</p>
									<a href="#" class="btn bg-warning-400">Open a ticket</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel">
								<div class="panel-body text-center">
									<div class="icon-object border-blue text-blue"><i class="icon-reading"></i></div>
									<h5 class="text-semibold">Articles and news</h5>
									<p class="mb-15">Diabolically somberly astride crass one endearingly blatant depending peculiar antelope piquantly popularly adept much</p>
									<a href="#" class="btn bg-blue">Browse articles</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /info blocks -->


					<!-- Latest added -->
					<h4 class="text-center content-group">
						Latest articles &amp; videos
						<small class="display-block">Dear bawled since some the contrary much hyena jeez clear fox despite the concomitant</small>
					</h4>

					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#"><i class="icon-file-text2 text-success-400 icon-2x no-edge-top mt-5"></i></a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Walking away fallaciously</a></h6>
										Ouch licentiously lackadaisical crud together began gregarious below near darn goodness
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#"><i class="icon-file-play text-warning-400 icon-2x no-edge-top mt-5"></i></a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Nutria and rewound</a></h6>
										Strove the darn hey as far oh alas and yikes and gosh knitted this slept via gerbil baneful
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#"><i class="icon-file-xml text-info icon-2x no-edge-top mt-5"></i></a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Bound befell well</a></h6>
										And since left before understandably much groomed along burped through dear and gosh
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#"><i class="icon-file-text2 text-success-400 icon-2x no-edge-top mt-5"></i></a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Porcupine strict nodded</a></h6>
										Left extravagant leered crab repaid outgrew said knelt hello astride within oh disbanded 
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#"><i class="icon-file-play text-warning-400 icon-2x no-edge-top mt-5"></i></a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Ducked ravenously dear</a></h6>
										Reran sincere said monkey one slapped jeepers rubbed fleetly incongruously due yet llama
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#"><i class="icon-file-xml text-info icon-2x no-edge-top mt-5"></i></a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Contemptibly bleakly</a></h6>
										Speechless far goodness bent as boa crud because vague far koala the that lantern alas sold
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#"><i class="icon-file-text2 text-success-400 icon-2x no-edge-top mt-5"></i></a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Blamelessly wow hence</a></h6>
										A without walking some objective hiccupped some this overlay immorally crud and gosh
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#"><i class="icon-file-play text-warning-400 icon-2x no-edge-top mt-5"></i></a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Manatee broadcast</a></h6>
										And some where indecently manta floated raptly youthful unlike swept dragonfly pulled moth
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#"><i class="icon-file-xml text-info icon-2x no-edge-top mt-5"></i></a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Stretched flamboyant</a></h6>
										Some when foolhardy dangerous so less less aimlessly along hazardously oversaw much stopped
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /latest added -->


					<!-- Featured articles -->
					<h4 class="text-center content-group">
						Featured articles and tutorials
						<small class="display-block">And porcupine the wallaby far the due thus rash did near dear far pangolin parrot less</small>
					</h4>

					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/demo/flat/1.png" alt="">
									<div class="caption-overflow">
										<span>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-download4"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="text-semibold no-margin-top"><a href="#" class="text-default">For ostrich much</a></h6>
									Some various less crept gecko the jeepers dear forewent far the ouch far a incompetent saucy wherever towards
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/demo/flat/3.png" alt="">
									<div class="caption-overflow">
										<span>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-download4"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="text-semibold no-margin-top"><a href="#" class="text-default">Helpfully stolidly</a></h6>
									Hippopotamus aside while a shrewdly this after kookaburra wow in haphazardly much salmon buoyantly sullen gosh
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/demo/flat/2.png" alt="">
									<div class="caption-overflow">
										<span>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-download4"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="text-semibold no-margin-top"><a href="#" class="text-default">Considering far</a></h6>
									Kookaburra so hey a less tritely far congratulated this winked some under had unblushing beyond sympathetic
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/demo/flat/4.png" alt="">
									<div class="caption-overflow">
										<span>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-download4"></i></a>
											<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="text-semibold no-margin-top"><a href="#" class="text-default">Despite perversely</a></h6>
									Coming merits and was talent enough far. Sir joy northward sportsmen education. Put still any about manor heard
								</div>
							</div>
						</div>
					</div>
					<!-- /featured articles -->


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
					<?php require "components/footer.php"; ?>
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
