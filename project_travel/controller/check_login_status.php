<?php

//check login status with session cookie
function check_login_status() {
    session_start();
    if (isset($_SESSION['user_login'])) {
        return true; 
    } elseif (isset($_COOKIE['remember_user'])) {
        $_SESSION['user_login'] = $_COOKIE['remember_user'];
        return true; 
    } else {
        header("Location: ../view/login.php");
        exit; 
    }
}





// function admin_protection(){

//     session_start();
//     if (!isset($_SESSION["user_login"]) || $_SESSION["user_type"] !== 'Admin') {
//         if (!isset($_COOKIE['remember_user']) || $_COOKIE['user_type'] !== 'Admin') {
//             header("Location: ../controller/logout.php");
//             exit();
//         }
//     }
        
    
// }

// function customer_protection(){
//     session_start();
//     if (!isset($_SESSION["user_login"]) || $_SESSION["user_type"] !== 'Customer') {
//         if (!isset($_COOKIE['remember_user']) || $_COOKIE['user_type'] !== 'Customer') {
//             header("Location: ../controller/logout.php");
//             exit();
//         }
//     }
// }
// function pharmacist_protection(){
//     session_start();
//     if (!isset($_SESSION["user_login"]) || $_SESSION["user_type"] !== 'Pharmacist') {
//         if (!isset($_COOKIE['remember_user']) || $_COOKIE['user_type'] !== 'Pharmacist') {
//             header("Location: ../controller/logout.php");
//             exit();
//         }
//     }
// }


?>
