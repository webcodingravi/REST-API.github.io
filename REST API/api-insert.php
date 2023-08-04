<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
// header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,
//  Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$first_name = $data['fname'];
$last_name = $data['lname'];
$age = $data['age'];
$gender = $data['gender'];
$country = $data['country'];


include 'config.php';

$sql = "INSERT INTO ajex_practice(first_name, last_name, age, gender, country) VALUES('{$first_name}', '{$last_name}', 
{$age}, '{$gender}', '{$country}')";


if(mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'Student Record Insterted.' , 'status' => true));

    
}else {
    echo json_encode(array('message' => 'Student Record Not Insterted.' , 'status' => false));
}




?>