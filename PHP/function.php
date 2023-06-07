<?php  

function check_login($connection) 
{
    if(isset($_SESSION['email']))
    {
        $id = $_SESSION['email'];
        $query = "SELECT * FROM users WHERE email = '$id' limit 1";

        $result = mysql_query($connection, $query);
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