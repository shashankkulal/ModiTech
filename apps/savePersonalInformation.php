<?php
session_start();
require "../lib/db.class.php";
require "../lib/gump.class.php";
$email = $_SESSION['email'];

$gump = new GUMP();
$_GET = $gump->sanitize($_GET);
$gump->validation_rules(array(
    'sname' => 'required|max_len,50|min_len,3|valid_name',
    'father' => 'required|max_len,50|min_len,3|valid_name',
    'mother' => 'required|max_len,50|min_len,3|valid_name',
    'gaurdian' => 'max_len,50|valid_name',
    'spouse' => 'max_len,50|valid_name',
    'gender' => 'required|max_len,6|min_len,4',
    'category' => 'required|max_len,7|min_len,2'
));
$gump->filter_rules(array(
    'sname' => 'trim',
    'father' => 'trim',
    'mother' => 'trim',
    'gaurdian' => 'trim',
    'spouse' => 'trim',
	));

$validated_data = $gump->run($_GET);
if($validated_data === false) {
    echo $gump->get_readable_errors(true);
}
else
{
	$temp = explode(" ", $validated_data['sname']);
	$fname = $temp[0];
	unset($temp[0]);
	$lname = implode(" ", $temp);
	$stm = $pdo->prepare("update users set fname=:fname, lname=:lname, father=:father, mother=:mother, gaurdian=:gaurdian, spouse=:spouse, gender=:gender, category=:category where email=:email");
	$stm->bindParam(":fname", $fname);
	$stm->bindParam(":lname", $lname);
	$stm->bindParam(":father", $validated_data['father']);
	$stm->bindParam(":mother", $validated_data['mother']);
	$stm->bindParam(":gaurdian", $validated_data['gaurdian']);
	$stm->bindParam(":spouse", $validated_data['spouse']);
	$stm->bindParam(":gender", $validated_data['gender']);
	$stm->bindParam(":category", $validated_data['category']);
	$stm->bindParam(":email", $email);
	if($stm->execute())
	{
		echo '<script>document.getElementById("#personalMsg").click();</script>';
	}
	else
	{
		echo "[ERROR] Some error found in your submitted data please check and try again.";
	}
}
?>