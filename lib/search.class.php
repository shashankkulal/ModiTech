<?php
require "db.class.php";
require "main.class.php";
class Search{
	function searchUser($uname)
	{
		$rs = $GLOBALS['mysqli']->query("SELECT email FROM users WHERE MATCH(fname,lname) AGAINST ('$uname' IN BOOLEAN MODE)");
		$userEmails = array();
		if($rs->num_rows > 0)
		{
			while($row = $rs->fetch_assoc())
			{
				array_push($userEmails, $row['email']);
			}
		}
		return $userEmails;
	}
}
?>