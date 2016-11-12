<?php
require "../../lib/chat.class.php";
require "../../lib/main.class.php";
$err = 0;
$from = $_POST['from'];
$to = $_POST['to'];
$msg = $_POST['msg'];
$obj = new Chat;
$chatId = $obj->makeChatId(array($to, $from));

$main = new Users;
if(!$main->validateProfileId($from) && !$main->validateProfileId($to)) $err += 1;
$aValid = array(' ','-','_','.',',');
if(!ctype_alnum(str_replace($aValid, '', $msg))) $err += 1;

if($err == 0)
{
	try {
		$mysqli->query("insert into messages(chatId,senderId,receiverId,msg) values('$chatId','$from','$to','$msg')");
		echo "MySQL";
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
}
else
{
	echo "Error1";
}
?>