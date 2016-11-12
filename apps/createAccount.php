<?php
require "../lib/db.class.php";
require "../lib/gump.class.php";
require "../lib/main.class.php";
$obj = new Extra;
$gump = new GUMP();
$_POST = $gump->sanitize($_POST);
$gump->validation_rules(array(
    'firstName' => 'required|max_len,30|min_len,3|valid_name',
    'lastName' => 'required|max_len,30|min_len,3|valid_name',
    'phone' => 'required|phone_number|max_len,10|min_len,10',
    'password' => 'required',
    'email' => 'required|valid_email|max_len,100',
    'dob' => 'required|date',
    'college' => 'required|numeric|max_len,2|min_len,1',
    'course' => 'required|max_len,10|min_len,1'
));
if(!isset($_POST['currentStu'])) $cStu = 0; else $cStu = 1;
if(!isset($_POST['type'])) $type = 0; else $type = 1;
date_default_timezone_set("Asia/Kolkata");
$cDate = date("Y-m-d h:i:s");
$gump->filter_rules(array(
    'firstName' => 'trim',
    'lastName' => 'trim',
    'email' => 'trim|sanitize_string'
));

$appkey = $obj->getKey();
/*Check email and phone in database*/

$validated_data = $gump->run($_POST);
if($validated_data === false) {
    echo $gump->get_readable_errors(true);
    header("location:../registration.php");
    exit();
}
else
{
    try {
        $stm = $pdo->prepare("
            insert into users(fname,lname,email,pass,college,course,phone,dob,createDate,currentStu,type,appkey) values(:firstName,:lastName,:email,:password,:college,:course,:phone,:dob,:cDate,:cStu,:type,:appkey)
            ");
        $stm->bindParam(':firstName',$validated_data['firstName']);
        $stm->bindParam(':lastName',$validated_data['lastName']);
        $stm->bindParam(':email',$validated_data['email']);
        $stm->bindParam(':password',$validated_data['password']);
        $stm->bindParam(':college',$validated_data['college']);
        $stm->bindParam(':course',$validated_data['course']);
        $stm->bindParam(':phone',$validated_data['phone']);
        $stm->bindParam(':dob',$validated_data['dob']);
        $stm->bindParam(':cDate',$cDate);
        $stm->bindParam(':cStu',$cStu);
        $stm->bindParam(':type',$type);
        $stm->bindParam(':appkey',$appkey);
        if($stm->execute())
        {
        	header("location:../login.php");
        }
        else
        {
        	echo "Something went wrong. Please fill email and phone carefully.";
        }
    } catch(PDOException $e) {
        #echo "<span style='color:red; font-size: 20px;'>ERROR:</span> Please fill email and phone carefully. We didn't allow duplicates.";
        echo $e->getMessage();
        #exit();
    }
}
ob_flush();