<?php
include_once '../connection/db.class.php';
$mysqli = database();

include_once '../classes/add_vehicle.class.php';

if(isset($_GET['search'])){
    $search_val = $_GET['search_term'];

    

    }