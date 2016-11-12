<?php
session_start();
require "../../lib/main.class.php";
$obj = new Users;
echo '<div class="panel panel-flat" id="ListUsers">';
echo '<div class="panel-heading">';
echo '<h6 class="no-margin">';
echo '<span class="text-semibold">Online Users</span><span class="badge badge-success position-right">';
$rs = $mysqli->query("select *from onlineusers");
echo $rs->num_rows;
echo '</span></h6><a class="heading-elements-toggle"><i class="icon-more"></i></a></div>';
echo '<ul class="media-list media-list-linked">';
echo '<li class="media-header">Students</li>';
while($row = $rs->fetch_object())
{
	$tempUser = $obj->getUserLoginData($row->email);
	$timeAgo = Extra::timeInAgo($row->updateTime);
	echo '<li class="media">';
	if($tempUser['email'] == $_SESSION['email']) echo '<a href="profile.php" class="media-link">';
	else echo '<a href="redirect.php?page=msg&payload='.$tempUser["appkey"].'" class="media-link">';
	echo '<div class="media-left"><img src="uploads/users/'.md5($tempUser["email"]).'.jpg" class="img-circle" alt=""></div>';
	echo '<div class="media-body">';
	echo '<div class="media-heading text-semibold">'.$tempUser["fname"].' '.$tempUser["lname"].' <span class="status-mark border-success position-left"></span></div>';
	echo '<span class="text-muted">Last Update: '.$timeAgo.'</span>';
	echo '</div><div class="media-right media-middle"><span class="label label-primary">View Profile</span></div></a></li>';
}
echo '</ul></div>';
?>