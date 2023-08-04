<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');

$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['sid'];


include 'config.php';

$sql = "DELETE FROM ajex_practice WHERE id = {$student_id}";



if(mysqli_query($conn, $sql)) {
  echo json_encode(array('message' => 'student Record Deleted' , 'status' => true));

    
}else {
    echo json_encode(array('message' => 'No Record Found' , 'status' => false));
}



?>