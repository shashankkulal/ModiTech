<?php
	require "../../lib/db.class.php";

	if(isset($_POST['userEmail']))
	{
		$rs = $mysqli->query("select *from users where email='". $_POST['userEmail'] ."'");
		if($rs->num_rows > 0)
		{
			echo "<span>Email already exists in our database.</span>";
		}
	}

	if(isset($_POST['phone']))
	{
		$rs = $mysqli->query("select *from users where phone='".$_POST['phone']."'");
		if($rs->num_rows > 0)
		{
			echo "<span>Phone number already exists in our database.</span>";
		}
	}
?>