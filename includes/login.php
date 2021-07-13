<?php
include_once '../connection/db.class.php';
$mysqli = database();
include_once '../classes/users.class.php';

session_start();

if(isset($_POST['login'])){
    if(empty($_POST['user_email'])){
        die("Email field cannot be empty!");
    }else{
        $user_email = $_POST['user_email'];
        if(filter_var($user_email, FILTER_VALIDATE_EMAIL)){

        }else{
            die("Enter a valid email");
        }
    }

    if(empty($_POST['user_pass'])){
        die("Password field cannot be empty");
    }else{
        $user_pass = $_POST['user_pass']; #PASSWORD_HASH($_POST['user_pass'], PASSWORD_DEFAULT);
    }
    
    // print_r($_POST);
    // exit();
    $result = user_login($mysqli, $user_email, $user_pass);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION['user_id']  = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name'];
                
            }
            // echo $_SESSION['user_id'];
            // exit();

            header("Location: ../?v=manage_vehicle");
            exit();
        }else{
            header("Location: ../?v=index");
        }

}