<?php
include_once '../connection/db.class.php';
$mysqli = database();
include_once '../classes/vehicle_type.class.php';


if(isset($_POST['submit'])){

    if(empty($_POST['name'])){
        die("Name field cannot be empty");
    }else{
        $name = $_POST['name'];
    }
    
    if(empty($_POST['manufacturer'])){
        die("manufacturer field cannot be empty!");
    }else{
        $manufacturer = $_POST['manufacturer'];
       
    }
    $date = date('Y-m-d');

    // print_r($_POST);
    // exit;

    insert_vehicle_type($mysqli, $name, $manufacturer, $date);
    echo '<script> 
            alert("Vehicle Type saved successfully");
            window.location = "../?v=manage_vehicle";
        </script>';
    


    

    // if($model->insert_record($table="vehicle_type", $fields)){
    //     $model->redirect($page="../?v=manage_vehicle");
    // }
}



