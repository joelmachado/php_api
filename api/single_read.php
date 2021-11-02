<?php
     header("Access-Control-Allow-Methods: POST");
     header("Access-Control-Max-Age: 3600");
 
    require_once '../header.php';
    include_once '../config/database.php';
    include_once '../class/employees.php';
   

    $database = new Database();
    $db = $database->getConnection();

    $item = new Employee($db);

    $item->id = isset($_GET['id']) ? $_GET['id'] : die();
  
    $item->getSingleEmployee();

    if($item->name != null){
        // create array
        $emp_arr = array(
            "id" =>  $item->id,
            "name" => $item->name,
            "email" => $item->email,
            "age" => $item->age,
            "designation" => $item->designation,
            "created" => $item->created
        );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Employee not found.");
    }
?>