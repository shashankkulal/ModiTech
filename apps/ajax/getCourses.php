<?php

require "../../lib/db.class.php";

if(isset($_GET['q']))
{
	$str = $_GET['q'];
	if(ctype_digit($str))
	{
		$rs = $mysqli->query("select *from courses where pid='$str'");
		while($row = $rs->fetch_assoc())
		{
			echo '<option value="'.$row['sname'].'">'.$row['fname'].' ('.$row['sname'].')</option>';
		}
	}	
}

mysqli_close($mysqli);
?>