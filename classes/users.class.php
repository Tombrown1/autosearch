<?php

function insert_user($mysqli, $user_name, $user_email, $user_pass, $user_phone){
    $query = "INSERT INTO users(user_name, user_email, user_pass, user_phone) VALUES('$user_name','$user_email', '".md5($user_pass)."', '$user_phone')";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    return $result;
}

function select_all_users($mysqli){
    $query = "SELECT * FROM users";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    return $result;
}

function user_login($mysqli, $user_email, $user_pass){
    $query = "SELECT * FROM users WHERE user_email = '$user_email' AND  user_pass = '".md5($user_pass)."'";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    return $result;

    // print_r($query);
    // exit();
    #".PASSWORD_HASH($user_pass, PASSWORD_DEFAULT)."
 }