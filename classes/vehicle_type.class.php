<?php

function insert_vehicle_type($mysqli, $name, $manufacturer, $date){
    $query = "INSERT INTO vehicle_type(name, manufacturer, date) VALUES('$name', '$manufacturer', '$date')";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    return $result;
//     print_r($query);
//     exit;
}

function select_vehicle_type($mysqli){
    $query = "SELECT * FROM vehicle_type";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    return $result;
}

function select_vehicle_type_by_id($mysqli,$type_id){
    $query = "SELECT * FROM vehicle_type WHERE type_id =".$type_id;
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    return $result;
}


function update_vehicle_type($mysqli, $name, $manufacturer, $date){
    $query = "UPDATE vehicle_type SET name='$name', manufacturer='$manufacturer', date='$date'";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    return $result;
}