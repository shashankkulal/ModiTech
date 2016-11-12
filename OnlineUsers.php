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
	<script type="text/javascript">
		var timeout = setInterval(reloadUsers, 30000);
		function reloadUsers()
		{
			$('#ActiveUserList').load('apps/ajax/AllActiveUsers.php');
		}
	</script>
</head>

<body onload="reloadUsers()">

<?php require "components/mainNavbar.php"; ?>


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php require "components/mainSidebar.php"; ?>


			<!-- Main content -->
			<div class="row">
				<div class ="col-md-12" id="ActiveUserList">
					
				</div>
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_1/LTR/default/support_knowledgebase.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2016 03:28:51 GMT -->
</html>
