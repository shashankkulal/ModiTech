<?php
	require "lib/db.class.php";
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
	<link href="assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
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
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>
	<script type="text/javascript" src="assets/default/jquery.validate.min.js"></script>
	<!-- /theme JS files -->
	<script>
        function showCourses(a){return""==a?void(document.getElementById("txtHint").innerHTML=""):(window.XMLHttpRequest?xmlhttp=new XMLHttpRequest:xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"),xmlhttp.onreadystatechange=function(){4==xmlhttp.readyState&&200==xmlhttp.status&&(document.getElementById("txtHint").innerHTML=xmlhttp.responseText,document.getElementById("checkconfirm").innerHTML="in "+$("#college :selected").text())},xmlhttp.open("GET","apps/ajax/getCourses.php?q="+a,!0),xmlhttp.send(),void 0)}
    </script>
</head>

<body class="login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown" title="Contact Admin">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Contact Admin</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Registration form -->
					<form id="createAccount" action="apps/createAccount.php" method="post" autocomplete="on">
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3">
								<div class="panel registration-form">
									<div class="panel-body">
										<div class="text-center">
											<div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
											<h5 class="content-group-lg">Create account <small class="display-block">Modi Educational Group</small></h5>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="text" name="firstName" class="form-control" placeholder="First name">
													<div class="form-control-feedback">
														<i class="icon-user-check text-muted"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="text" name="lastName" class="form-control" placeholder="Surname name">
													<div class="form-control-feedback">
														<i class="icon-user-check text-muted"></i>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input id="userEmail" onblur="checkEmail()" type="email" name="email" class="form-control" placeholder="Your email"><span id="email-availability"></span>
													<div class="form-control-feedback">
														<i class="icon-mention text-muted"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input type="password" name="password" class="form-control" placeholder="Create password">
													<div class="form-control-feedback">
														<i class="icon-user-lock text-muted"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
												<div class="col-md-6">
													<select id="college" name="college" class="form-control" onchange="showCourses(this.value)">
					                                    <option value="none">Select College/Institute</option>
					                                    <?php
					                                    	$rs = $mysqli->query("select *from colleges");
					                                    	while($row = $rs->fetch_assoc())
					                                    	{
					                                    	?>
					                                    		<option value="<?php echo $row['id']; ?>"><?php echo $row['fname']; ?></option>
					                                    	<?php
					                                    	}
					                                    ?>
					                                </select>
												</div>

												<div class="col-md-6">
													<select name="course" id="txtHint" class="form-control">
					                                    <option value="">Select Course</option>
					                                    
					                                </select>
												</div>
										</div><br>
										
										<div class="row">
										<div class="col-md-6">
											<div class="form-group has-feedback">
												<input type="text" id="userPhone" onblur="checkPhone()" name="phone" class="form-control" placeholder="Phone Number">
												<span id="phone-availability"></span>
												<div class="form-control-feedback">
													<i class="fa fa-phone text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback">
												<input title="Enter your Date of Birth" type="text" name="dob" class="form-control" placeholder="Date of Birth" onfocus="(this.type='date')">
												<div class="form-control-feedback">
													<i class="fa fa-birthday-cake text-muted"></i>
												</div>
											</div>
										</div>
										</div>


										<div class="form-group">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="currentStu" value="yes" class="styled">
													I am currently studying <span id="checkconfirm"></span>.
												</label>
											</div>
										</div>
										<div class="form-group">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="type" value="yes" class="styled">
													I am teacher OR staff member.
												</label>
											</div>
										</div>

										<div class="text-right">
											<a href="login.php" class="btn btn-link"><i class="icon-arrow-left13 position-left"></i> Back to login</a>
											<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> Create account</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- /registration form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; 2016. <a href="#">ModiTech</a> by <a href="#" target="_blank">Modi Educational Group</a>
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
<script type="text/javascript">
	function checkEmail()
	{
		jQuery.ajax({
			url: "apps/ajax/check_availability.php",
			data: 'userEmail='+$("#userEmail").val(),
			type: "POST",
			success:function(data){
				$("#email-availability").html(data);
			},
			error:function (){ }
		});
	}

	function checkPhone()
	{
		jQuery.ajax({
			url: "apps/ajax/check_availability.php",
			data: 'phone='+$("#userPhone").val(),
			type: "POST",
			success:function(data){
				$("#phone-availability").html(data);
			},
			error:function (){ }
		});
	}
</script>
<script type="text/javascript">
	$().ready(function(){
		$("#createAccount").validate({
			rules: {
				firstName: {required: true, minlength: 3},
				lastName: {required: true, minlength: 3},
				email: {required: true, email: true},
				password: {required: true, minlength: 6},
				college: "required",
				course: "required",
				phone: {required: true, minlength: 10, maxlength: 10},
				dob: "required",
			},
			messages: {
				firstName: {
					required: "Please enter your first name.", 
					minlength: "First name must me more than 3 characters."
				},
				lastName: {
					required: "Please enter your last name.", 
					minlength: "Last name must me more than 3 characters."
				},
				email: {
					required: "Please enter your email address.", 
					email: "Please enter a valid email address."
				},
				password: {
					required: "Please enter password.", 
					minlength: "Password must me more than 6 characters."
				},
				college: "Please select College/Institute.",
				course: "Please select course.",
				phone: {
					required: "Please enter your phone number.", 
					minlength: "Phone number must be exactly 10 characters.",
					maxlength: "Phone number must be exactly 10 characters."
				},
				dob: "Date of Birth is required",
			}
		});
	});
</script>
</body>
</html>
