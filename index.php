<?php

// include_once "connection/db.class.php";
// $mysqli = database();

if(isset($_GET['v'])){
    $page = $_GET['v'];

    if($page == 'index'){
        include 'views/index.php';

    }elseif($page == 'signup'){
        include 'views/signup.php';
        
    }elseif($page == 'login'){
        include 'views/login.php';

    }elseif($page == 'add_vehicle'){
        include 'views/add_vehicle.php';

    }elseif($page == 'manage_vehicle'){
        include 'views/manage_vehicle.php'; 
        
    }elseif($page == 'vehicle_type'){
        include 'views/vehicle_type.php';
    
    }elseif($page == 'vehicle_preview'){
        include 'views/vehicle_preview.php';

    }elseif($page == 'vehicle_search'){
        include 'views/vehicle_search.php'; 
    
    }elseif($page == 'visitors_preview'){
        include 'views/visitors_preview.php'; 
    
    }elseif($page == 'view_result'){
        include 'views/view_result.php'; 

    }elseif($page == 'logout'){
        include 'views/logout.php'; 

    }else{
        include 'views/404.php';
    }

}else{
    include 'views/index.php';
}