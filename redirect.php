<?php
ob_start();
session_start();
require "lib/main.class.php";
$page = $_GET['page'];
switch($page)
{
	case "msg":
		$id = $_GET['payload'];
		$obj = new Users;
		if($obj->validateProfileId($id))
		{
			$_SESSION['payload'] = array("msgid" => $id);
			header("location:messages.php");
		}
		else
		{
			header("error.php");
		}
}
ob_flush();
?>