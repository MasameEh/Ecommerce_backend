<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"users_name" => "sameh",
"users_email" => "sameh@gmail.com",
"users_phone" => "1256465",
"users_verifycode" => "123456",       
);
$count = insertData($table , $data);