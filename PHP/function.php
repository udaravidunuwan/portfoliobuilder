<?php  
include("connection.php");
include("script.php");
    
// session_start();

    // function check_login($connection) 
    // {
    //     if(isset($_SESSION['user_id']))
    //     {
    //         $id = $_SESSION['user_id'];
    //         $query = "SELECT * FROM users WHERE user_id = '$id' limit 1";

    //         $result = mysqli_query($connection, $query);
    //         if($result && mysqli_num_rows($result) > 0)
    //         {
    //             $user_data = mysqli_fetch_assoc($result);
    //             return $user_data; 

    //         }
    //     }

    //     //redirect to index page
    //     header("Location: index.php");
    //     die;
// }

function test(){
    echo "TEst is successful";
};

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

    $user_email_reg = $_POST['registerEmail'];
    $user_password_reg = $_POST['registerPassword'];
    $user_confirm_password_reg = $_POST['registerPasswordConfirm'];

    if ($user_password_reg === $user_confirm_password_reg) {
        if(!empty($user_email_reg) && !empty($user_password_reg) && !empty($user_confirm_password_reg)){

            $user_id = userIdGen(4);

            $checkStmt = $connection->prepare("SELECT * FROM users WHERE user_email = ?");
            $checkStmt->bind_param("s", $user_email_reg);
            $checkStmt->execute();

            if($checkStmt->rowCount() > 0) {
                echo "A user with email " . $user_email_reg . " already exists";
                exit;
            }
            
            $stmt = $connection->prepare("INSERT INTO users (user_id, user_email, user_password) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $user_id, $user_email_reg, $user_password_reg);
            $stmt->execute();

            echo "Registered Successfully";


        } else {
            echo "Please fill out the Form";
            exit;
        }
    }
}