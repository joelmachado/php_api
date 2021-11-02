<?php
      header("Access-Control-Allow-Methods: POST");
      header("Access-Control-Max-Age: 3600");
  
      require_once '../header.php';
      include_once '../config/database.php';
      include_once '../class/employees.php';
  
    
    $database = new Database();
    $db = $database->getConnection();
    
    $item = new Employee($db);
    
    $data = json_decode(file_get_contents("php://input"));
    
    $item->id = $data->id;
    
    if($item->deleteEmployee()){
        echo json_encode("Employee deleted.");
    } else{
        echo json_encode("Data could not be deleted");
    }
?>