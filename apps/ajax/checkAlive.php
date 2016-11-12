<?php
require "../../lib/db.class.php";
$email = $_POST['email'];
$mysqli->query("delete from onlineUsers where updateTime < (NOW() - INTERVAL 1 MINUTE)");
$mysqli->query("delete from onlineUsers where email='$email'");
$mysqli->query("insert into onlineUsers(email) values('$email')");
