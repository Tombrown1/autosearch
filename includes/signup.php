<?php
include_once '../connection/db.class.php';
    $mysqli = database();
include_once '../classes/users.class.php';


if(isset($_POST['submit'])){

    if(empty($_POST['user_name'])){
        die("Usen Name field cannot be empty");
    }else{
        $user_name = $_POST['user_name'];
    }
    
    if(empty($_POST['user_email'])){
        die("Email field cannot be empty!");
    }else{
        $user_email = $_POST['user_email'];
        if(filter_var($user_email, FILTER_VALIDATE_EMAIL)){

        }else {
            die("Enter a valid email");
        }
    }

    if(empty($_POST['user_pass'])){
        die("Password field cannot be empty");
    }else {
        $user_pass = $_POST['user_pass']; #PASSWORD_HASH($_POST['user_pass'], PASSWORD_DEFAULT);
    }

    if(empty($_POST['user_phone'])){
        die("Phone number field cannot be empty");
    }else {
        $user_phone = $_POST['user_phone'];
    }

    

    // $fields = array(
    //     "user_name" => $user_name,
    //     "user_email" => $user_email,
    //     "user_pass" => $user_pass,
    //     "user_phone" => $user_phone
    // );

    // print_r($_POST);
    // exit;

    insert_user($mysqli, $user_name, $user_email, $user_pass, $user_phone);
    echo '<script> 
            alert("User saved successfully");
            window.location = "../?v=login";
        </script>';


    // if($model->insert_record($table="users", $fields)){
    //     $model->redirect($page="../?v=login");
    // }
}


