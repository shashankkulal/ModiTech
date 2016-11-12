<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "moditech");

$result = $conn->query("SELECT fname,lname FROM users");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"FirstName":"'  . $rs["fname"] . '",';
    $outp .= '"LastName":"'. $rs["lname"]     . '"}'; 
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>