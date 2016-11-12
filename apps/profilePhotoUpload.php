<?php
session_start();
require "../lib/db.class.php";
$pname = md5($_SESSION['email']);
$email = $_SESSION['email'];

$target_dir = "../uploads/users/";
$target_file = $target_dir . $pname . ".jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["ProfilePhoto"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["ProfilePhoto"]["size"] > 200000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["ProfilePhoto"]["tmp_name"], $target_file)) {
        header("location:../profile.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>