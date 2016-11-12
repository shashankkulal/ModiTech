<?php
session_start();
require "../lib/db.class.php";
require "../lib/gump.class.php";
require "../lib/main.class.php";
$obj = new Extra;
$email = $_SESSION['email'];

$gump = new GUMP();
$_GET = $gump->sanitize($_GET);
$gump->validation_rules(array(
    'phone' => 'required|max_len,10|min_len,10',
    'altphone' => 'max_len,10|min_len,10',
    'add1' => 'max_len,250|min_len,3',
    'add2' => 'max_len,250|min_len,3',
    'city' => 'max_len,250|min_len,3',
    'state' => 'max_len,250|min_len,3',
    'pin' => 'integer|max_len,6|min_len,6',
    'padd1' => 'max_len,250|min_len,3',
    'padd2' => 'max_len,250|min_len,3',
    'pcity' => 'max_len,250|min_len,3',
    'pstate' => 'max_len,250|min_len,3',
    'ppin' => 'integer|max_len,6|min_len,6',
));
$gump->filter_rules(array(
    'add1' => 'trim',
    'add2' => 'trim',
    'padd1' => 'trim',
    'padd2' => 'trim',
	));

$validated_data = $gump->run($_GET);
if($validated_data === false) {
    echo $gump->get_readable_errors(true);
}
else
{

	$stm = $pdo->prepare("update users set phone=:phone, altphone=:altphone, add1=:add1, add2=:add2, city=:city, state=:state, pin=:pin, padd1=:padd1, padd2=:padd2, pcity=:pcity, pstate=:pstate, ppin=:ppin where email=:email");
	$stm->bindParam(":phone", $validated_data['phone']);
	$stm->bindParam(":altphone", $validated_data['altphone']);
	$stm->bindParam(":add1", $obj->stringClean($validated_data['add1']));
	$stm->bindParam(":add2", $obj->stringClean($validated_data['add2']));
	$stm->bindParam(":city", $validated_data['city']);
	$stm->bindParam(":state", $validated_data['state']);
	$stm->bindParam(":pin", $validated_data['pin']);
	$stm->bindParam(":padd1", $obj->stringClean($validated_data['padd1']));
	$stm->bindParam(":padd2", $obj->stringClean($validated_data['padd2']));
	$stm->bindParam(":pcity", $validated_data['pcity']);
	$stm->bindParam(":pstate", $validated_data['pstate']);
	$stm->bindParam(":ppin", $validated_data['ppin']);
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