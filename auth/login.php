<?php

include "../connect.php";

$email          = filterRequest("email");
$password       = sha1($_POST["password"]);

// $stmt = $con->prepare("SELECT * From users Where users_email = ? AND users_password = ?");
// $stmt->execute(array($email, $password));
// $count = $stmt->rowCount();
// if($count > 0){
//     echo json_encode(array("status" => "success"));
// }else{
//     printFailure("EMAIL OR PASSWORD IS NOT CORRECT");
// }

getData("users", "users_email = ? AND users_password = ?", array($email, $password));