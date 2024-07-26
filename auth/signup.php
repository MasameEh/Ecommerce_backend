<?php

include "../connect.php";

$username = filterRequest("username");
$email    = filterRequest("email");
$password = sha1("password");
$phone    = filterRequest("phone");
$verifycode    = "0";


$stmt = $con->prepare("Select * From users Where users_email = ? OR users_phone = ?");

$stmt->execute(array($email, $phone));

$count = $stmt->rowCount();

if($count > 0)
{
    printFailure("DUPLICATED PHONE OR EMAIL");
}
else
{
    $data = array(
        "users_name" => "$username",
        "users_email" => "$email",
        "users_password" => "$password",
        "users_phone" => "$phone",
        "users_verifycode" => "0",        
    );

    insertData("users", $data);
}