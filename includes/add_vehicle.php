<?php
include_once '../connection/db.class.php';
$mysqli = database();
include_once '../classes/add_vehicle.class.php';

				
 //$table = "vehicles";
if(isset($_POST['submit'])){

    if(empty($_POST['vehicle_name'])){
        die("Vehicle Name field cannot be empty");
    }else{
        $vehicle_name = $_POST['vehicle_name'];
    }

    if(empty($_POST['model'])){
        die("Model field cannot be empty");
    }else{
        $model = $_POST['model'];
    }

    if(empty($_POST['vehicle_type'])){
        die("Vehicle Type field cannot be empty");
    }else{
        $vehicle_type = $_POST['vehicle_type'];
    }
    // $vehicle_type = 1;

    if(empty($_POST['manufacturer'])){
        die("Manufacturer field cannot be empty");
    }else{
        $manufacturer = $_POST['manufacturer'];
    }

    if(empty($_POST['purchase_date'])){
        die("Vehicle purchase date field cannot be empty");
    }else{
        $purchase_date = $_POST['purchase_date'];
    }

    if(empty($_POST['registered_date'])){
        die("Vehicle registered date field cannot be empty");
    }else{
        $registered_date = $_POST['registered_date'];
    }

    if(empty($_POST['plate_no'])){
        die("Vehicle plate_no field cannot be empty");
    }else{
        $plate_no = $_POST['plate_no'];
    }

    if(empty($_POST['vehicle_code'])){
        die("Vehicle Code field cannot be empty");
    }else{
        $vehicle_code = $_POST['vehicle_code'];
    }

    if(empty($_POST['owner_name'])){
        die("Vehicle owner Name field cannot be empty");
    }else{
        $owner_name = $_POST['owner_name'];
    }

    if(empty($_POST['owner_phone'])){
        die("Owner Phone No field cannot be empty");
    }else{
        $owner_phone = $_POST['owner_phone'];
    }

    if(empty($_POST['owner_address'])){
        die("Owner Address field cannot be empty");
    }else{
        $owner_address = $_POST['owner_address'];
    }

    if(empty($_POST['date'])){
        die("Date field cannot be empty");
    }else{
        $date = $_POST['date'];
    }
    

    
    insert_vehicle($mysqli, $vehicle_name, $model, $vehicle_type, $manufacturer, $purchase_date, $registered_date, $plate_no, $vehicle_code, $owner_name, $owner_phone, $owner_address, $date);
        
        echo '<script> 
            alert("Record saved successfully");
            window.location = "../?v=manage_vehicle";
            </script>';
    
}

					