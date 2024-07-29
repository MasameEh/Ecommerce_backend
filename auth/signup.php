<?php

include "../connect.php";

$username       = filterRequest("username");
$email          = filterRequest("email");
$password       = sha1($_POST["password"]);
$phone          = filterRequest("phone");
$verifycode     = rand(10000, 99999);


$stmt = $con->prepare("SELECT * From users Where users_email = ? OR users_phone = ?");

$stmt->execute(array($email, $phone));

$count = $stmt->rowCount();

if($count > 0)
{
    printFailure("DUPLICATED PHONE OR EMAIL");
}
else
{
    $data = array(
        "users_name" => $username,
        "users_email" => $email,
        "users_password" => $password,
        "users_phone" => $phone,
        "users_verifycode" => $verifycode,        
    );
    //sendEmail($email, "Ecommerce Verification Code", "Please enter the confirmation code below on Ecommerce to finish the verification process: $verifycode");

    insertData("users", $data);
}