<?php
require "../lib/search.class.php";

if(!isset($_POST['searchQuery']) || $_POST['searchQuery'] == "") header("location:../home.php");
if(isset($_GET['type'])) $type = $_GET['type'];
else $type = "usr";
$obj = new Extra;
$query = $obj->stringClean($_POST['searchQuery']);
$type = $obj->stringClean($type);

/*Search Tables for Results*/
$obj = new Search;
switch ($type) 
{
	case 'usr':
		$userSearchArray = $obj->searchUser($query);
		session_start();
		$_SESSION['searchResults'] = $userSearchArray;
		header("location:../searchUsers.php");
		break;
	
	default:
		# code...
		break;
}
?>