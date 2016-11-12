<?php
require "../lib/db.class.php";
require "../lib/gump.class.php";

$gump = new GUMP();
$_POST = $gump->sanitize($_POST);
$gump->validation_rules(array(
    'password' => 'required',
    'email' => 'required|valid_email|max_len,100'
));

$gump->filter_rules(array(
    'password' => 'trim',
    'email' => 'trim|sanitize_string'
));
/*Check email and phone in database*/

$validated_data = $gump->run($_POST);
if($validated_data === false) {
    echo $gump->get_readable_errors(true);
    header("location:../login.php");
    exit();
}
else
{
    try {
        $stm = $pdo->prepare("select *from users where email=:email and pass=:password");
        $stm->bindParam(':email',$validated_data['email']);
        $stm->bindParam(':password',$validated_data['password']);
        $stm->execute();
        $userRow = $stm->fetch(PDO::FETCH_ASSOC);
        if($stm->rowCount() > 0)
        {
            session_start();
            $_SESSION['email'] = $_POST['email'];
            header("location:typeVerification.php");
            exit();
        }
        else
        {
            header("location:../login.php?LoginAttempt=1");
            exit();
        }
    } catch(PDOException $e) {
        echo "<span style='color:red; font-size: 20px;'>ERROR:</span> Please fill email and phone carefully. We didn't allow duplicates.";
        exit();
    }
}
ob_flush();