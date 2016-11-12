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
    'schName10' => 'alpha_space|max_len,255',
    'schBoard10' => 'alpha_space|max_len,255',
    'max10' => 'integer|max_len,4',
    'obt10' => 'numeric|max_len,4',
    'year10' => 'integer|max_len,4',
    'schName12' => 'alpha_space|max_len,255',
    'schBoard12' => 'alpha_space|max_len,255',
    'max12' => 'integer|max_len,4',
    'obt12' => 'numeric|max_len,4',
    'year12' => 'integer|max_len,4',
    'clgnameug' => 'alpha_space|max_len,255',
    'uninameug' => 'alpha_space|max_len,255',
    'conug' => 'alpha_space|max_len,255',
    'maxug' => 'integer|max_len,4',
    'obtug' => 'numeric|max_len,4',
    'yearug' => 'integer|max_len,4',
    'clgnamepg' => 'alpha_space|max_len,255',
    'uninamepg' => 'alpha_space|max_len,255',
    'conpg' => 'alpha_space|max_len,255',
    'maxpg' => 'integer|max_len,4',
    'obtpg' => 'numeric|max_len,4',
    'yearpg' => 'integer|max_len,4',
));

$validated_data = $gump->run($_GET);
if($validated_data === false) {
    echo $gump->get_readable_errors(true);
}
else
{

	$stm = $pdo->prepare("insert into eduinfo (email,schName10,schBoard10,max10,obt10,year10,schName12,schBoard12,max12,obt12,year12,clgnameug,uninameug,conug,maxug,obtug,yearug,clgnamepg,uninamepg,conpg,maxpg,obtpg,yearpg) values(:email,:schName10,:schBoard10,:max10,:obt10,:year10,:schName12,:schBoard12,:max12,:obt12,:year12,:clgnameug,:uninameug,:conug,:maxug,:obtug,:yearug,:clgnamepg,:uninamepg,:conpg,:maxpg,:obtpg,:yearpg) on duplicate key update schName10=:schName10, schBoard10=:schBoard10, max10=:max10, obt10=:obt10,year10=:year10, schName12=:schName12, schBoard12=:schBoard12, max12=:max12, obt12=:obt12,year12=:year12, clgnameug=:clgnameug, uninameug=:uninameug, conug=:conug, maxug=:maxug, obtug=:obtug, yearug=:yearug, clgnamepg=:clgnamepg, uninamepg=:uninamepg, conpg=:conpg, maxpg=:maxpg, obtpg=:obtpg, yearpg=:yearpg");
	$stm->bindParam(":schName10", $validated_data['schName10']);
	$stm->bindParam(":schBoard10", $validated_data['schBoard10']);
	$stm->bindParam(":max10", $validated_data['max10']);
	$stm->bindParam(":obt10", $validated_data['obt10']);
	$stm->bindParam(":year10", $validated_data['year10']);
	$stm->bindParam(":schName12", $validated_data['schName12']);
	$stm->bindParam(":schBoard12", $validated_data['schBoard12']);
	$stm->bindParam(":max12", $validated_data['max12']);
	$stm->bindParam(":obt12", $validated_data['obt12']);
	$stm->bindParam(":year12", $validated_data['year12']);
	$stm->bindParam(":clgnameug", $validated_data['clgnameug']);
	$stm->bindParam(":uninameug", $validated_data['uninameug']);
	$stm->bindParam(":conug", $validated_data['conug']);
	$stm->bindParam(":maxug", $validated_data['maxug']);
	$stm->bindParam(":obtug", $validated_data['obtug']);
	$stm->bindParam(":yearug", $validated_data['yearug']);
	$stm->bindParam(":clgnamepg", $validated_data['clgnamepg']);
	$stm->bindParam(":uninamepg", $validated_data['uninamepg']);
	$stm->bindParam(":conpg", $validated_data['conpg']);
	$stm->bindParam(":maxpg", $validated_data['maxpg']);
	$stm->bindParam(":obtpg", $validated_data['obtpg']);
	$stm->bindParam(":yearpg", $validated_data['yearpg']);
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