<?php

    function database(){
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'vehicle');

        $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        return $mysqli;
        // Check for database connection error 
        if(mysqli_connect_errno()){
            echo "Failed to connect to MYSQL:" . mysqli_connect_error();
        }
    }
// class database {
//     public $db_con;

//     public function __construct(){
//         $this->db_con = mysqli_connect("localhost", "root", "", "vehicle");
//         if($this->db_con){
//             // echo "Connected successfully!";
//         }else{
//             // echo "Failed to connect";
//         }
//     }
// }