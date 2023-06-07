<?php  

include("connection.php");

function check_login($connection) 
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE user_id = '$id' limit 1";

        $result = mysqli_query($connection, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data; 

        }
    }

    //redirect to index page
    header("Location: index.php");
    die;
}

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