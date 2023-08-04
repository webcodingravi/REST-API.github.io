<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
// header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,
//  Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];
$first_name = $data['first_name'];
$last_name = $data['last_name'];
$age = $data['update-age'];
$gender = $data['gender'];
$country = $data['country'];


include 'config.php';

$sql = "UPDATE ajex_practice SET first_name = '{$first_name}', last_name = '{$last_name}', age = {$age},  gender = '{$gender}', 
country = '{$country}' WHERE id = {$id}";


if(mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'Student Record Updated.', 'status' => true));

    
}else {
    echo json_encode(array('message' => 'Student Record Not Updated.', 'status' => false));
}




?>








?>