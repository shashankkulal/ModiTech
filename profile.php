<?php
	error_reporting(0);
	session_start();
	require "lib/main.class.php";
	$obj = new Users;
	if(!$_SESSION['email'])
	{
		header("location:login.php");
		exit();
	}
	$loginUser = $obj->getUserLoginData($_SESSION['email']);
	$loginUserEdu = $obj->getUserLoginEdu($_SESSION['email']);
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
	<script type="text/javascript" src="assets/js/plugins/notifications/pnotify.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/notifications/bootbox.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/notifications/sweet_alert.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!-- /theme JS files -->
	<script type='text/javascript'>
		function personalDataSaved()
		{
			    new PNotify({
			    title: 'Success',
			    text: 'Your data saved.',
			    icon: 'icon-checkmark3',
			    addclass: 'bg-success',
			    type: 'success'
			    });
		}
		</script>
	<script language="javascript" type="text/javascript">
	function savePersonalInformation(){
	   var ajaxRequest;
	   try{
	      ajaxRequest = new XMLHttpRequest();
	   }catch (e){
	      try{
	         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
	      }catch (e) {
	         
	         try{
	            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
	         }catch (e){
	            alert("Your browser broke!");
	            return false;
	         }
	      }
	   }
	   
	   // Create a function that will receive data
	   // sent from the server and will update
	   // div section in the same page.
	   ajaxRequest.onreadystatechange = function(){
	   
	      if(ajaxRequest.readyState == 4){
	         personalDataSaved();
	      }
	   }
	   
	   // Now get the value from user and pass it to
	   // server script.
	   var sname = document.getElementById('sname').value;
	   var father = document.getElementById('father').value;
	   var mother = document.getElementById('mother').value;
	   var gaurdian = document.getElementById('gaurdian').value;
	   var spouse = document.getElementById('spouse').value;
	   var gender = document.getElementById('gender').value;
	   var category = document.getElementById('category').value;
	   var queryString = "?father=" + father ;
	   
	   queryString +=  "&sname=" + sname + "&mother=" + mother + "&gaurdian=" + gaurdian + "&spouse=" + spouse + "&gender=" + gender + "&category=" + category;
	   ajaxRequest.open("GET", "apps/savePersonalInformation.php" + queryString, true);
	   ajaxRequest.send(null); 
	}
	</script>
	<script language="javascript" type="text/javascript">
	function saveContactInformation(){
	   var ajaxRequest;
	   try{
	      ajaxRequest = new XMLHttpRequest();
	   }catch (e){
	      try{
	         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
	      }catch (e) {
	         
	         try{
	            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
	         }catch (e){
	            alert("Your browser broke!");
	            return false;
	         }
	      }
	   }
	   
	   // Create a function that will receive data
	   // sent from the server and will update
	   // div section in the same page.
	   ajaxRequest.onreadystatechange = function(){
	   
	      if(ajaxRequest.readyState == 4){
	         personalDataSaved();
	      }
	   }
	   
	   // Now get the value from user and pass it to
	   // server script.
	   var phone = document.getElementById('phone').value;
	   var altphone = document.getElementById('altphone').value;
	   var add1 = document.getElementById('add1').value;
	   var add2 = document.getElementById('add2').value;
	   var city = document.getElementById('city').value;
	   var state = document.getElementById('state').value;
	   var pin = document.getElementById('pin').value;
	   var padd1 = document.getElementById('padd1').value;
	   var padd2 = document.getElementById('padd2').value;
	   var pcity = document.getElementById('pcity').value;
	   var pstate = document.getElementById('pstate').value;
	   var ppin = document.getElementById('ppin').value;
	   var queryString = "?phone=" + phone ;
	   
	   queryString +=  "&altphone=" + altphone + "&add1=" + add1 + "&add2=" + add2 + "&city=" + city + "&state=" + state + "&pin=" + pin + "&padd1=" + padd1 + "&padd2=" + padd2 + "&pcity=" + pcity + "&pstate=" + pstate + "&ppin=" + ppin;
	   ajaxRequest.open("GET", "apps/saveContactInformation.php" + queryString, true);
	   ajaxRequest.send(null); 
	}
	</script>
	<script type="text/javascript">
                  function saveEducationInformation() {
                var ajaxRequest;
                try {
                    ajaxRequest = new XMLHttpRequest();
                } catch (e) {
                    try {
                        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {

                        try {
                            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {
                            alert("Your browser broke!");
                            return false;
                        }
                    }
                }

                ajaxRequest.onreadystatechange = function() {

                    if (ajaxRequest.readyState == 4) {
                        personalDataSaved();
                    }
                }

                // Now get the value from user and pass it to
                // server script.
                var schName10 = document.getElementById('schName10').value;
                var schBoard10 = document.getElementById('schBoard10').value;
                var max10 = document.getElementById('max10').value;
                var obt10 = document.getElementById('obt10').value;
                var year10 = document.getElementById('year10').value;
                var schName12 = document.getElementById('schName12').value;
                var schBoard12 = document.getElementById('schBoard12').value;
                var max12 = document.getElementById('max12').value;
                var obt12 = document.getElementById('obt12').value;
                var year12 = document.getElementById('year12').value;
                var clgnameug = document.getElementById('clgnameug').value;
                var uninameug = document.getElementById('uninameug').value;
                var conug = document.getElementById('conug').value;
                var maxug = document.getElementById('maxug').value;
                var obtug = document.getElementById('obtug').value;
                var yearug = document.getElementById('yearug').value;
                var clgnamepg = document.getElementById('clgnamepg').value;
                var uninamepg = document.getElementById('uninamepg').value;
                var conpg = document.getElementById('conpg').value;
                var maxpg = document.getElementById('maxpg').value;
                var obtpg = document.getElementById('obtpg').value;
                var yearpg = document.getElementById('yearpg').value;
                var queryString = "?schName10=" + schName10;

                queryString += "&schBoard10=" + schBoard10 + "&max10=" + max10 + "&obt10=" + obt10 + "&year10=" + year10 + "&schName12=" + schName12 + "&schBoard12=" + schBoard12 + "&max12=" + max12 + "&obt12=" + obt12 + "&year12=" + year12 + "&clgnameug=" + clgnameug + "&uninameug=" + uninameug + "&conug=" + conug + "&maxug=" + maxug + "&obtug=" + obtug + "&yearug=" + yearug + "&clgnamepg=" + clgnamepg + "&uninamepg=" + uninamepg + "&conpg=" + conpg + "&maxpg=" + maxpg + "&obtpg=" + obtpg + "&yearpg=" + yearpg;
                ajaxRequest.open("GET", "apps/saveEducationInformation.php" + queryString, true);
                ajaxRequest.send(null);
            }
        </script>

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
				<div class="page-header no-padding">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Profile<!-- </span> - Profile Cover --></h4>
						</div>
					<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

					<div class="breadcrumb-line no-margin">
						<ul class="breadcrumb">
							<li><a href="home.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Profile</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
				</div>
				<!-- /page header -->


				<!-- Cover area -->
				<div class="profile-cover">
					<div class="profile-cover-img" style="background-image: url(assets/images/demo/cover.jpg)"></div>
					<div class="media">
						<div class="media-left">
							<a href="#" class="profile-thumb">
								<img src="uploads/users/<?php echo md5($loginUser['email']).'.jpg'; ?>" onerror="this.src='assets/images/noUser.png'" alt="">
							</a>
						</div>

						<div class="media-body">
				    		<h1><?php echo $loginUser['fname'], " ", $loginUser['lname']?> <small class="display-block"><?php echo $loginUser['course'], " - ", $obj->getCollegeShortName($loginUser['college']); ?></small></h1>
						</div>

						<div class="media-right media-middle">
							<ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
								<li><a href="#" class="btn btn-default" data-toggle="modal" data-target="#profile_modal"><i class="icon-file-picture position-left" data-toggle="modal" data-target="#cover_modal"></i> Profile Photo</a></li>
								<li><a href="#" class="btn btn-default"><i class="icon-file-picture position-left"></i> Cover image</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /cover area -->


				<!-- Toolbar -->
				<div class="navbar navbar-default navbar-xs content-group">
					<ul class="nav navbar-nav visible-xs-block">
						<li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
					</ul>

					<div class="navbar-collapse collapse" id="navbar-filter">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true"><i class="icon-menu7 position-left"></i> Activity</a></li>
							<li class=""><a href="#settings" data-toggle="tab" aria-expanded="false"><i class="icon-cog3 position-left"></i> Edit Profile</a></li>
						</ul>

						<div class="navbar-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="icon-stack-text position-left"></i> Notes</a></li>
								<li><a href="#"><i class="icon-collaboration position-left"></i> Friends</a></li>
								<li><a href="#"><i class="icon-images3 position-left"></i> Photos</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-gear"></i> <span class="visible-xs-inline-block position-right"> Options</span> <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-image2"></i> Update cover</a></li>
										<li><a href="#"><i class="icon-clippy"></i> Update info</a></li>
										<li><a href="#"><i class="icon-make-group"></i> Manage sections</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-three-bars"></i> Activity log</a></li>
										<li><a href="#"><i class="icon-cog5"></i> Profile settings</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /toolbar -->


				<!-- Content area -->
				<div class="content">

					<!-- User profile -->
					<div class="row">
						<div class="col-lg-9">
							<div class="tabbable">
								<div class="tab-content">
									<div class="tab-pane fade active in" id="activity">

										<!-- Timeline -->
										<div class="timeline timeline-left content-group">
											<div class="timeline-container">

												<!-- Sales stats -->
												<div class="timeline-row">
													<div class="timeline-icon">
														<a href="#"><img src="assets/images/demo/users/face24.jpg" alt=""></a>
													</div>

													<div class="panel panel-flat timeline-content">
														<div class="panel-heading">
															<h6 class="panel-title">Daily statistics</h6>
															<div class="heading-elements">
																<span class="heading-text"><i class="icon-history position-left text-success"></i> Updated 3 hours ago</span>

																<ul class="icons-list">
											                		<li><a data-action="reload"></a></li>
											                	</ul>
										                	</div>
														<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

														<div class="panel-body">
															<div class="chart-container">
																<div class="chart has-fixed-height" id="sales"></div>
															</div>
														</div>
													</div>
												</div>
												<!-- /sales stats -->


												<!-- Blog post -->
												<div class="timeline-row">
													<div class="timeline-icon">
														<img src="assets/images/demo/users/face12.jpg" alt="">
													</div>

													<div class="panel panel-flat timeline-content">
														<div class="panel-heading">
															<h6 class="panel-title">Himalayan sunset</h6>
															<div class="heading-elements">
																<span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> 49 minutes ago</span>
																<ul class="icons-list">
																	<li class="dropdown">
																		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																			<i class="icon-arrow-down12"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-menu-right">
																			<li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
																			<li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
																			<li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
																			<li class="divider"></li>
																			<li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
																			<li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
																		</ul>
																	</li>
											                	</ul>
										                	</div>
														<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

														<div class="panel-body">
															<a href="#" class="display-block content-group">
																<img src="assets/images/demo/cover3.jpg" class="img-responsive content-group" alt="">
															</a>

															<h6 class="content-group">
																<i class="icon-comment-discussion position-left"></i>
																Comment from <a href="#">Jason Ansley</a>:
															</h6>

															<blockquote>
																<p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
																<footer>Jason, <cite title="Source Title">10:39 am</cite></footer>
															</blockquote>
														</div>

														<div class="panel-footer panel-footer-transparent">
															<div class="heading-elements">
																<ul class="list-inline list-inline-condensed heading-text">
																	<li><a href="#" class="text-default"><i class="icon-eye4 position-left"></i> 438</a></li>
																	<li><a href="#" class="text-default"><i class="icon-comment-discussion position-left"></i> 71</a></li>
																</ul>

																<span class="heading-btn pull-right">
																	<a href="#" class="btn btn-link">Read post <i class="icon-arrow-right14 position-right"></i></a>
																</span>
															</div>
														<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>
													</div>
												</div>
												<!-- /blog post -->


												<!-- Date stamp -->
												<div class="timeline-date text-muted">
													<i class="icon-history position-left"></i> <span class="text-semibold">Monday</span>, April 18
												</div>
												<!-- /date stamp -->


												<!-- Invoices -->
												<div class="timeline-row">
													<div class="timeline-icon">
														<div class="bg-warning-400">
															<i class="icon-cash3"></i>
														</div>
													</div>

													<div class="row">
														<div class="col-lg-6">
															<div class="panel border-left-lg border-left-danger invoice-grid timeline-content">
																<div class="panel-body">
																	<div class="row">
																		<div class="col-sm-6">
																			<h6 class="text-semibold no-margin-top">Leonardo Fellini</h6>
																			<ul class="list list-unstyled">
																				<li>Invoice #: &nbsp;0028</li>
																				<li>Issued on: <span class="text-semibold">2015/01/25</span></li>
																			</ul>
																		</div>

																		<div class="col-sm-6">
																			<h6 class="text-semibold text-right no-margin-top">$8,750</h6>
																			<ul class="list list-unstyled text-right">
																				<li>Method: <span class="text-semibold">SWIFT</span></li>
																				<li class="dropdown">
																					Status: &nbsp;
																					<a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
																					<ul class="dropdown-menu dropdown-menu-right active">
																						<li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
																						<li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
																						<li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
																						<li class="divider"></li>
																						<li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
																						<li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
																					</ul>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>

																<div class="panel-footer panel-footer-condensed">
																	<div class="heading-elements">
																		<span class="heading-text">
																			<span class="status-mark border-danger position-left"></span> Due: <span class="text-semibold">2015/02/25</span>
																		</span>

																		<ul class="list-inline list-inline-condensed heading-text pull-right">
																			<li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
																			<li class="dropdown">
																				<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
																				<ul class="dropdown-menu dropdown-menu-right">
																					<li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
																					<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
																					<li class="divider"></li>
																					<li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
																					<li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>
															</div>
														</div>

														<div class="col-lg-6">
															<div class="panel border-left-lg border-left-success invoice-grid timeline-content">
																<div class="panel-body">
																	<div class="row">
																		<div class="col-sm-6">
																			<h6 class="text-semibold no-margin-top">Rebecca Manes</h6>
																			<ul class="list list-unstyled">
																				<li>Invoice #: &nbsp;0027</li>
																				<li>Issued on: <span class="text-semibold">2015/02/24</span></li>
																			</ul>
																		</div>

																		<div class="col-sm-6">
																			<h6 class="text-semibold text-right no-margin-top">$5,100</h6>
																			<ul class="list list-unstyled text-right">
																				<li>Method: <span class="text-semibold">Paypal</span></li>
																				<li class="dropdown">
																					Status: &nbsp;
																					<a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
																					<ul class="dropdown-menu dropdown-menu-right active">
																						<li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
																						<li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
																						<li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
																						<li class="divider"></li>
																						<li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
																						<li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
																					</ul>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>

																<div class="panel-footer panel-footer-condensed">
																	<div class="heading-elements">
																		<span class="heading-text">
																			<span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/24</span>
																		</span>

																		<ul class="list-inline list-inline-condensed heading-text pull-right">
																			<li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
																			<li class="dropdown">
																				<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
																				<ul class="dropdown-menu dropdown-menu-right">
																					<li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
																					<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
																					<li class="divider"></li>
																					<li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
																					<li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>
															</div>
														</div>
													</div>
												</div>
												<!-- /invoices -->


												<!-- Messages -->
												<div class="timeline-row">
													<div class="timeline-icon">
														<div class="bg-info-400">
															<i class="icon-comment-discussion"></i>
														</div>
													</div>

													<div class="panel panel-flat timeline-content">
														<div class="panel-heading">
															<h6 class="panel-title">Conversation with James</h6>
															<div class="heading-elements">
																<ul class="icons-list">
																	<li class="dropdown">
																		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																			<i class="icon-circle-down2"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-menu-right">
																			<li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
																			<li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
																			<li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
																			<li class="divider"></li>
																			<li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
																			<li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
																		</ul>
																	</li>
											                	</ul>
										                	</div>
														<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

														<div class="panel-body">
															<ul class="media-list chat-list content-group">
																<li class="media date-step">
																	<span>Today</span>
																</li>

																<li class="media reversed">
																	<div class="media-body">
																		<div class="media-content">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
																		<span class="media-annotation display-block mt-10">Tue, 8:12 am <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
																	</div>

																	<div class="media-right">
																		<a href="assets/images/demo/images/3.png">
																			<img src="assets/images/demo/users/face1.jpg" class="img-circle" alt="">
																		</a>
																	</div>
																</li>

																<li class="media">
																	<div class="media-left">
																		<a href="assets/images/demo/images/3.png">
																			<img src="assets/images/demo/users/face11.jpg" class="img-circle" alt="">
																		</a>
																	</div>

																	<div class="media-body">
																		<div class="media-content">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
																		<span class="media-annotation display-block mt-10">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
																	</div>
																</li>

																<li class="media reversed">
																	<div class="media-body">
																		<div class="media-content">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
																		<span class="media-annotation display-block mt-10">2 hours ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
																	</div>

																	<div class="media-right">
																		<a href="assets/images/demo/images/3.png">
																			<img src="assets/images/demo/users/face1.jpg" class="img-circle" alt="">
																		</a>
																	</div>
																</li>

																<li class="media">
																	<div class="media-left">
																		<a href="assets/images/demo/images/3.png">
																			<img src="assets/images/demo/users/face11.jpg" class="img-circle" alt="">
																		</a>
																	</div>

																	<div class="media-body">
																		<div class="media-content">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
																		<span class="media-annotation display-block mt-10">13 minutes ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
																	</div>
																</li>

																<li class="media reversed">
																	<div class="media-body">
																		<div class="media-content"><i class="icon-menu display-block"></i></div>
																	</div>

																	<div class="media-right">
																		<a href="assets/images/demo/images/3.png">
																			<img src="assets/images/demo/users/face1.jpg" class="img-circle" alt="">
																		</a>
																	</div>
																</li>
															</ul>

									                    	<textarea name="enter-message" class="form-control content-group" rows="3" cols="1" placeholder="Enter your message..."></textarea>

									                    	<div class="row">
									                    		<div class="col-xs-6">
										                        	<ul class="icons-list icons-list-extended mt-10">
										                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send photo"><i class="icon-file-picture"></i></a></li>
										                            	<li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send video"><i class="icon-file-video"></i></a></li>
										                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send file"><i class="icon-file-plus"></i></a></li>
										                            </ul>
									                    		</div>

									                    		<div class="col-xs-6 text-right">
										                            <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-circle-right2"></i></b> Send</button>
									                    		</div>
									                    	</div>
														</div>
													</div>
												</div>
												<!-- /messages -->

											</div>
									    </div>
									    <!-- /timeline -->

									</div>

									<div class="tab-pane fade" id="settings">

										<!-- Profile info -->
										<?php require "components/profileInfo.php"; ?>
										<?php require "components/contactInfo.php"; ?>
										<?php require "components/educationInfo.php"; ?>
										<!-- /profile info -->

									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3">

							<!-- Share your thoughts -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Share your thoughts</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

								<div class="panel-body">
									<form action="#">
										<div class="form-group">
											<textarea name="enter-message" class="form-control mb-15" rows="3" cols="1" placeholder="What's on your mind?"></textarea>
										</div>

										<div class="row">
				                    		<div class="col-sm-6">
					                        	<ul class="icons-list icons-list-extended mt-10">
					                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Add photo"><i class="icon-images2"></i></a></li>
					                            	<li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Add video"><i class="icon-film2"></i></a></li>
					                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Add event"><i class="icon-calendar2"></i></a></li>
					                            </ul>
				                    		</div>

				                    		<div class="col-sm-6 text-right">
					                            <button type="button" class="btn btn-primary btn-labeled btn-labeled-right">Share <b><i class="icon-circle-right2"></i></b></button>
				                    		</div>
				                    	</div>
			                    	</form>
		                    	</div>
							</div>
							<!-- /share your thoughts -->


							<!-- Connections -->
					    	<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Online Users</h6>
									<div class="heading-elements">
										<span class="badge badge-success heading-text">
											<?php
												$rs = $mysqli->query("select email from onlineusers");
												echo $rs->num_rows;
											?>
										</span>
				                	</div>
								<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

								<ul class="media-list media-list-linked pb-5">
								<?php
									$rs = $mysqli->query("select *from onlineusers limit 7");
									while($row = $rs->fetch_object())
									{
										$online = new Users;
										$onlineUser = $online->getUserLoginData($row->email);
								?>
									<li class="media">
										<a href="<?php echo "redirect.php?page=msg&payload=",$onlineUser['appkey']; ?>" class="media-link">
											<div class="media-left"><img src="uploads/users/<?php echo md5($row->email),".jpg"; ?>" class="img-circle" alt=""></div>
											<div class="media-body">
												<span class="media-heading text-semibold"><?php echo $onlineUser['fname'], " ", $onlineUser['lname']?></span>
												<span class="media-annotation"><?php echo $online->getCollegeShortName($onlineUser['college']); ?></span>
											</div>
											<div class="media-right media-middle">
												<span class="status-mark bg-success"></span>
											</div>
										</a>
									</li>
									<?php } ?>
								</ul>
								<p class="text-info" align="center"><a href="OnlineUsers.php"><small>view more</small></a></p>
							</div>
							<!-- /connections -->

						</div>
					</div>
					<!-- /user profile -->


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
<!--MODALS-->
		            <!-- Large modal -->
					<div id="profile_modal" class="modal fade">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header bg-primary">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Upload Profile Photo</h5>
								</div>

								<div class="modal-body">
										<img id="ProfilePhotoHolder" height="220px" width="200px" style="display: block; margin-left: auto; margin-right: auto; background: url(assets/images/noUser.png); background-size: cover;" />
										<hr>
										<p><b>Image must be jpg and size not more than 200 Kb.</b> <br>For best fit use 200&times;220 pixels(width &times; height) image.</p>
								</div>

								<div class="modal-footer">
									<form action="apps/profilePhotoUpload.php" method="post" enctype="multipart/form-data">
									<input type="file" id="inputPhoto" onchange="document.getElementById('ProfilePhotoHolder').src = window.URL.createObjectURL(this.files[0])" name="ProfilePhoto" style="display: none;">
									<button type="button" onclick="document.getElementById('inputPhoto').click();" class="btn btn-default">Browse</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /large modal -->
</body>
</html>
