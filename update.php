<?php 
session_start();
include("connection.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aboutUser = $_POST["about_user"];
    $yearsOfExperience = $_POST["years_of_experience"];
    $completedProjects = $_POST["completed_projects"];
    $companiesWorked = $_POST["companies_worked"];

    // Prepare the SQL statement
    $sql = "UPDATE your_table_name SET
            aT_about_user = '$aboutUser',
            aT_Yo_Exp = '$yearsOfExperience',
            aT_No_Projects = '$completedProjects',
            aT_No_companies = '$companiesWorked' 
            WHERE aT_user_id = '$user_id',";

    // Execute the query
    if ($connection->query($sql) === true) {
        echo "Database updated successfully";
    } else {
        echo "Error updating database: " . $connection->error;
    }
}