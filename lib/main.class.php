<?php
/*
	Copyright Shashank Suresh Kulal
	Modi Institute of Management and Technology
	Kota, Rajasthan
*/
require "db.class.php";
class Users
{
	public function getUserLoginData($email)
	{
		$loginUser = array("email"=>$email, "pass"=>"", "fname"=>"", "lname"=>"", "college"=>"", "course"=>"", "phone"=>"", "altphone"=>"", "dob"=>"", "createDate"=>"", "currentStu"=>"", "status"=>"", "type" => "", "appkey" => "", "add1" => "", "add2" => "", "city" => "", "state" => "", "pin" => "", "padd1" => "", "padd2" => "", "pcity" => "", "pstate" => "", "ppin" => "", "gender" => "", "father" => "", "mother" => "", "gaurdian" => "", "spouse" => "", "married" => "", "category" => "");

		$rs = $GLOBALS['mysqli']->query("select *from users where email='$email' limit 1");
		while($row = $rs->fetch_assoc())
		{
			$loginUser['pass'] = $row['pass'];
			$loginUser['fname'] = ucwords(strtolower($row['fname']));
			$loginUser['lname'] = ucwords(strtolower($row['lname']));
			$loginUser['college'] = $row['college'];
			$loginUser['course'] = $row['course'];
			$loginUser['phone'] = $row['phone'];
			$loginUser['altphone'] = $row['altphone'];
			$loginUser['dob'] = $row['dob'];
			$loginUser['createDate'] = $row['createDate'];
			$loginUser['currentStu'] = $row['currentStu'];
			$loginUser['status'] = $row['status'];
			$loginUser['photo'] = $row['photo'];
			$loginUser['type'] = $row['type'];
			$loginUser['appkey'] = $row['appkey'];
			$loginUser['add1'] = ucwords(strtolower($row['add1']));
			$loginUser['add2'] = ucwords(strtolower($row['add2']));
			$loginUser['city'] = ucwords(strtolower($row['city']));
			$loginUser['state'] = $row['state'];
			$loginUser['pin'] = $row['pin'];
			$loginUser['gender'] = $row['gender'];
			$loginUser['padd1'] = ucwords(strtolower($row['padd1']));
			$loginUser['padd2'] = ucwords(strtolower($row['padd2']));
			$loginUser['pcity'] = ucwords(strtolower($row['pcity']));
			$loginUser['pstate'] = $row['pstate'];
			$loginUser['ppin'] = $row['ppin'];
			$loginUser['father'] = ucwords(strtolower($row['father']));
			$loginUser['mother'] = ucwords(strtolower($row['mother']));
			$loginUser['gaurdian'] = ucwords(strtolower($row['gaurdian']));
			$loginUser['spouse'] = ucwords(strtolower($row['spouse']));
			$loginUser['category'] = $row['category'];
			$loginUser['married'] = $row['married'];
		}
		return $loginUser;
	}

	public function getUserLoginEdu($email)
	{
		$loginEdu = array(
			"schName10"=>"",
			"schBoard10"=>"",
			"max10"=>"",
			"obt10"=>"",
			"year10"=>"",
			"schName12"=>"",
			"schBoard12"=>"",
			"max12"=>"",
			"obt12"=>"",
			"year12"=>"",
			"clgnameug"=>"",
			"uninameug"=>"",
			"conug"=>"",
			"maxug"=>"",
			"obtug"=>"",
			"yearug"=>"",
			"clgnamepg"=>"",
			"uninamepg"=>"",
			"conpg"=>"",
			"maxpg"=>"",
			"obtpg"=>"",
			"yearpg"=>""
			);
		$rs = $GLOBALS['mysqli']->query("select *from eduinfo where email='$email' limit 1");
		if($rs->num_rows >  0)
		{
			while($obj = $rs->fetch_object())
			{
				$loginEdu['schName10'] = ucwords(strtolower($obj->schName10));
				$loginEdu['schBoard10'] = ucwords(strtolower($obj->schBoard10));
				$loginEdu['max10'] = $obj->max10;
				$loginEdu['obt10'] = $obj->obt10;
				$loginEdu['year10'] = $obj->year10;
				$loginEdu['schName12'] = ucwords(strtolower($obj->schName12));
				$loginEdu['schBoard12'] = ucwords(strtolower($obj->schBoard12));
				$loginEdu['max12'] = $obj->max12;
				$loginEdu['obt12'] = $obj->obt12;
				$loginEdu['year12'] = $obj->year12;
				$loginEdu['clgnameug'] = ucwords(strtolower($obj->clgnameug));
				$loginEdu['uninameug'] = ucwords(strtolower($obj->uninameug));
				$loginEdu['conug'] = ucwords(strtolower($obj->conug));
				$loginEdu['maxug'] = $obj->maxug;
				$loginEdu['obtug'] = $obj->obtug;
				$loginEdu['yearug'] = $obj->yearug;
				$loginEdu['clgnamepg'] = ucwords(strtolower($obj->clgnamepg));
				$loginEdu['uninamepg'] = ucwords(strtolower($obj->uninamepg));
				$loginEdu['conpg'] = ucwords(strtolower($obj->conpg));
				$loginEdu['maxpg'] = $obj->maxpg;
				$loginEdu['obtpg'] = $obj->obtpg;
				$loginEdu['yearpg'] = $obj->yearpg;
			}
			return $loginEdu;
		}
	}

	public function getCollegeFullname($cid)
	{
		$rs = $GLOBALS['mysqli']->query("select fname from colleges where id='$cid' limit 1");
		$row = $rs->fetch_assoc();
		return ucwords(strtolower($row['fname']));
	}

	public function getCollegeShortname($cid)
	{
		$rs = $GLOBALS['mysqli']->query("select sname from colleges where id='$cid' limit 1");
		$row = $rs->fetch_assoc();
		return strtoupper($row['sname']);
	}

	public function getNameWithAppKey($key)
	{
		$rs = $GLOBALS['mysqli']->query("select fname from users where appkey='$key' limit 1");
		$row = $rs->fetch_object();
		return ucwords(strtolower($row->fname));
	}

	public function validateProfileId($id)
	{
		$err = 0;
		$one = substr($id, 0, 4);
		$two = substr($id, 4, 4);
		$three = substr($id, 8, 2);
		if(!ctype_alpha($one)) $err += 1;
		if(!ctype_alpha($three)) $err += 1;
		if(!ctype_digit($two)) $err += 1;
		if(!strlen($one) == 4 || !strlen($two) == 4 || !strlen($three) == 2) $err += 1;
		if($err == 0) return 1;
		else return 0;
	}
}

#
#	CLASS EXTRA
#

class Extra
{
	function stringClean($string) {
   		return preg_replace('/[^A-Za-z0-9\ -]/', '', $string);
	}

	function generateRandomAlpha($length) 
	{
	    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	function generateRandomDigit($length) 
	{
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	function getKey()
	{
		$key = Extra::generateRandomAlpha(4);
		$key .= Extra::generateRandomDigit(4);
		$key .= Extra::generateRandomAlpha(2);
		$rs = $GLOBALS['mysqli']->query("select *from users where key='$key'");
		if($rs)
		{
			Extra::getKey();
		}
		else
		{
			return $key;
		}
	}

	function timeInAgo($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
}
?>