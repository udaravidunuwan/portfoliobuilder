<?php  
session_start();
include("connection.php");


function userIdGen($length){
    $text = "";

    if($length < 4){
        $length = 4;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++){
        $text .= rand(0, 9);
    }

    return $text;
}


if(isset($_POST["action"])){
    if($_POST["action"] == "register"){
        register();
    } else if($_POST["action"] == "login"){
        login();
    }
}


function register(){
    global $connection;

    $user_email_reg = $_POST['emailReg'];
    $user_password_reg = $_POST['passwordReg'];
    $user_confirm_password_reg = $_POST['confirmPasswordReg'];

    
    if(empty($user_email_reg) && empty($user_password_reg) && empty($user_confirm_password_reg)){
        echo "Please fill out the Form";
        exit;
    } 

    if ($user_password_reg !== $user_confirm_password_reg) {
        echo "Password and Confirm Password do not match";
        exit;
    }
    
    $user_id = userIdGen(6);
    
    $checkStmt = $connection->prepare("SELECT * FROM users WHERE user_email = ?");
    $checkStmt->bind_param("s", $user_email_reg);
    $checkStmt->execute();
    
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        echo "A user with email " . $user_email_reg . " already exists";
        exit;
    }         

    $stmt = $connection->prepare("INSERT INTO users (user_id, user_email, user_password) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $user_id, $user_email_reg, $user_password_reg);
    $stmt->execute();

    echo "The email ". $user_email_reg ." is Registered Successfully";

}


function login(){
    global $connection;

    $user_email_log = $_POST['emailLog'];
    $user_password_log = $_POST['passwordLog'];

    if(empty($user_email_log) && empty($user_password_log)){
        echo "Please fill out the Form";
        exit;
    } 

    $checkStmt = $connection->prepare("SELECT * FROM users WHERE user_email = ?");
    $checkStmt->bind_param("s", $user_email_log);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        $stored_password = $user['user_password'];

        if ($user_password_log == $stored_password) {
            echo "Login successful";
            $_SESSION["login"] = true;
            $_SESSION["user_id"] = $user['user_id'];
            exit;
        } else {
            echo "Login failed! Password verification failed";
            exit;
        }
    } else {
        echo "No users found with email " . $user_email_log . " in the database";
        exit;
    }
}

