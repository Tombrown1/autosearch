<?php

    function insert_vehicle($mysqli, $vehicle_name,$model,$vehicle_type,$manufacturer,$purchase_date,$registered_date,$plate_no,$vehicle_code,$owner_name,$owner_phone,$owner_address,$date){
        $query = "INSERT INTO vehicles(vehicle_name,model,vehicle_type,manufacturer,purchase_date,registered_date,plate_no,vehicle_code,owner_name,owner_phone,owner_address,date) VALUES('$vehicle_name','$model','$vehicle_type','$manufacturer','$purchase_date','$registered_date','$plate_no','$vehicle_code','$owner_name','$owner_phone','$owner_address','$date')";
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        return $result;
    }

    function select_vehicle($mysqli){
        $query = "SELECT * FROM vehicles";
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        return $result;
    }
    
    function select_vehicle_by_id($mysqli, $vehicle_id){
        $query = "SELECT * FROM vehicles WHERE vehicle_id=".$vehicle_id;
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        return $result;
    }
    
    function update_vehicle_by_id($mysqli, $vehicle_id, $vehicle_name,$model,$vehicle_type,$manufacturer,$purchase_date,$registered_date,$plate_no,$vehicle_code,$owner_name,$owner_phone,$owner_address,$date){
        $query = "UPDATE vehicles SET vehicle_name='$vehicle_name', model='$model', vehicle_type='$vehicle_type',manufacturer='$manufacturer', purchase_date='$purchase_date', registered_date='$registered_date',plate_no='$plate_no', vehicle_code='$vehicle_code',owner_name='$owner_name', owner_phone='$owner_phone', owner_address='$owner_address', date='$date' WHERE vehicle_id =".$vehicle_id;
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        return $result;
    }

    function search_vehicle($mysqli, $search_val){
        $query = "SELECT * FROM vehicles WHERE plate_no LIKE '%".$search_val."%' OR  vehicle_code LIKE '%".$search_val."%'";
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        return $result;
    }
    
    // function search_vehicle($mysqli, $search_val){
    //         $query = "SELECT * FROM vehicles WHERE MATCH(vehicle_name, vehicle_code) AGAINST('$search_val')";
    //         $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    //         return $result;
    //     }

    // function redirect($page){
    //     return header("Location:" .$page);
    // }


    // function search_student_by_name($mysqli, $search_value){
    //     $query = "SELECT * FROM student WHERE std_name LIKE '%".$search_value."%'";
    //     $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    //     return $result;
    // }
