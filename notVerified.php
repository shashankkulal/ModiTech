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
            function personalDataSaved() {
                new PNotify({
                    title: 'Success',
                    text: 'Your data saved.',
                    icon: 'icon-checkmark3',
                    addclass: 'bg-success',
                    type: 'success'
                });
            }

            $(function() {
                $(function() {
                    swal({
                        title: "Welcome, <?php echo $loginUser['fname'].' '.$loginUser['lname']; ?>",
                        text: "Your account is not verified yet. It will take 4-7 working days to verify your presence. Complete your profile that can help us for identification.",
                        confirmButtonColor: "#2196F3",
                        type: "info"
                    });
                });
            });
        </script>
        <script language="javascript" type="text/javascript">
            function savePersonalInformation() {
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

                // Create a function that will receive data
                // sent from the server and will update
                // div section in the same page.
                ajaxRequest.onreadystatechange = function() {

                    if (ajaxRequest.readyState == 4) {
                        alert(ajaxRequest);
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
                var queryString = "?father=" + father;

                queryString += "&sname=" + sname + "&mother=" + mother + "&gaurdian=" + gaurdian + "&spouse=" + spouse + "&gender=" + gender + "&category=" + category;
                ajaxRequest.open("GET", "apps/savePersonalInformation.php" + queryString, true);
                ajaxRequest.send(null);
            }
        </script>
        <script language="javascript" type="text/javascript">
            function saveContactInformation() {
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

                // Create a function that will receive data
                // sent from the server and will update
                // div section in the same page.
                ajaxRequest.onreadystatechange = function() {

                    if (ajaxRequest.readyState == 4) {
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
                var queryString = "?phone=" + phone;

                queryString += "&altphone=" + altphone + "&add1=" + add1 + "&add2=" + add2 + "&city=" + city + "&state=" + state + "&pin=" + pin + "&padd1=" + padd1 + "&padd2=" + padd2 + "&pcity=" + pcity + "&pstate=" + pstate + "&ppin=" + ppin;
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
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
						<img src="uploads/users/<?php echo md5($loginUser['email']).".jpg"; ?>" onerror="this.src='assets/images/noUser.png'" alt="">
						<span><?php echo $loginUser['fname']; ?></span>
						<i class="caret"></i>
					</a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#" data-toggle="modal" data-target="#profile_modal"><i class="icon-file-picture position-left" data-toggle="modal" data-target="#cover_modal"></i> Upload Photo</a></li>
                            <li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
                        </ul>
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
                        <!-- Error content -->
                        <!--Profile Info-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Complete Your Profile</h6>
                                        <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

                                    <div class="panel-body">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs nav-tabs-highlight">
                                                <li class="active"><a href="#personalTab" data-toggle="tab"><span class="label label-danger position-left"><!--bug--></span> Personal Info</a></li>
                                                <li><a href="#contactTab" data-toggle="tab">Contact Info <span class="label bg-slate position-right"><!-- Fixed --></span></a></li>
                                                <li><a href="#educationTab" data-toggle="tab">Education <span class="label bg-slate position-right"><!-- Fixed --></span></a></li>

                                            </ul>

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="personalTab">
                                                    <?php require "components/profileInfo.php"; ?>
                                                </div>

                                                <div class="tab-pane" id="contactTab">
                                                    <?php require "components/contactInfo.php"; ?>
                                                </div>

                                                <div class="tab-pane" id="educationTab">
                                                    <?php require "components/educationInfo.php"; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- /error wrapper -->


                        <!-- Footer -->
                        <div class="footer text-muted text-center">
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