<?php

include "../connect.php";

$email          = filterRequest("email");
$verifycode     = rand(10000, 99999);

$stmt = $con->prepare("SELECT * From users Where users_email = ?");

$stmt->execute(array($email));

$count = $stmt->rowCount(); 

if($count > 0)
{
    $data = array("users_verifycode" => $verifycode);
    updateData("users", $data, "users_email = '$email'" , false);
    //sendEmail($email, "Ecommerce Verification Code", "Please enter the confirmation code below on Ecommerce to finish the verification process: $verifycode");
    echo json_encode(array("status" => "success"));
}
else
{
    printFailure("EMAIL DOES NOT EXIST");
}