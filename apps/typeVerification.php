<?php
	session_start();
	require "../lib/main.class.php";
	$obj = new Users;
	$loginUser = $obj->getUserLoginData($_SESSION['email']);
	if($loginUser['status'] == 0)
	{
		header("location:../notVerified.php");
		exit();
	}
	else
	{
		if($loginUser['type'] == 0)
		{
			header("location:../home.php");
			exit();
		}
		else
		{
			header("location:../teacher/home.php");
			exit();
		}
	}
	exit();
	
?>