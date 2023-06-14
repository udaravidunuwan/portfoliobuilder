<?php  
session_start();
include("connection.php");
$user_id = $_SESSION["user_id"];


if(isset($_POST["action"])){
    if($_POST["action"] == "about"){
        updateAbout($user_id);
    } else if($_POST["action"] == "home"){
        updateHome($user_id);
    } else if($_POST["action"] == "contact"){
        updateContact($user_id);
    } else if($_POST["action"] == "skills"){
        updateSkills($user_id);
    }
}


function updateHome($user_id){
    global $connection;
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $designation = $_POST["designation"];
    $self_intro = $_POST["self_intro"];
    $linkedin = $_POST["linkedin"];
    $github = $_POST["github"];
    
    $stmt = $connection->prepare("UPDATE home_tab_tb SET hT_first_name = ?, hT_last_name = ?, hT_designation = ?, hT_self_introduction = ?, hT_linkedIn_url = ?, hT_github_url = ? WHERE hT_user_id = ?");
    $stmt->bind_param("ssssssi", $first_name, $last_name, $designation, $self_intro, $linkedin, $github, $user_id);
    $stmt->execute();
    
    echo "Saved Successfully";
    
}

function updateAbout($user_id){
    global $connection;

    $aboutUser = $_POST["about_user"];
    $yearsOfExperience = $_POST["years_of_experience"];
    $completedProjects = $_POST["completed_projects"];
    $companiesWorked = $_POST["companies_worked"];

    $stmt = $connection->prepare("UPDATE about_tab_tb SET aT_about_user = ?, aT_Yo_Exp = ?, aT_No_Projects = ?, aT_No_companies = ? WHERE aT_user_id = ?");
    $stmt->bind_param("ssssi", $aboutUser, $yearsOfExperience, $completedProjects, $companiesWorked, $user_id);
    $stmt->execute();

    echo "Saved Successfully";

}

function updateSkills($user_id){
    global $connection;

    $categoryNames = $_POST['skill_category'];
    $yearsOfExperience = $_POST['no_of_years'];

    for ($i = 0; $i < count($categoryNames); $i++) {
        $categoryName = $conn->real_escape_string($categoryNames[$i]);
        $years = $conn->real_escape_string($yearsOfExperience[$i]);
    
        $stmt = $connection->prepare("UPDATE skill_categories_tab_tb SET category_name = ?, years_of_experience = ? WHERE category_user_id = ?");
        $stmt->bind_param("ssi", $categoryNames, $yearsOfExperience, $user_id);
        $stmt->execute();

        // if ($connection->query($stmt) !== true) {
        //     echo "Error inserting skill category: " . $connection->error;
        // }
        if ($stmt->execute() === false) {
            echo "Error updating skill category: " . $stmt->error;
        }
    
        // Retrieve the auto-generated category ID
        $categoryId = $connection->insert_id;
    
        // Retrieve skill data for the current category
        $skillNames = $_POST['skill'][$i];
        $proficiencyPercentages = $_POST['percentage'][$i];
    
        // Loop through the skills
        for ($j = 0; $j < count($skillNames); $j++) {
            $skillName = $conn->real_escape_string($skillNames[$j]);
            $percentage = $conn->real_escape_string($proficiencyPercentages[$j]);

            $stmtSkill = $connection->prepare("UPDATE skills_tab_tb SET category_id = ?, skill_name = ?, proficiency_percentage = ? WHERE skills_user_id = ?");
            $stmtSkill->bind_param("isii", $categoryId, $skillName, $percentage, $user_id);
            $stmtSkill->execute();
    
            // Insert the skill into the database and associate it with the category
            // $sql = "INSERT INTO skills (category_id, skill_name, proficiency_percentage) VALUES ('$categoryId', '$skillName', '$percentage')";
            // if ($conn->query($sql) !== true) {
            //     echo "Error inserting skill: " . $conn->error;
            // }

            if ($stmtSkill->execute() === false) {
                echo "Error updating skills : " . $stmtSkill->error;
            }
        }
    }

    echo "Saved Successfully";

}

function updateContact($user_id){
    global $connection;

    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $location = $_POST["location"];

    $stmt = $connection->prepare("UPDATE contact_tab_tb SET cT_mobile = ?, cT_email = ?, cT_location = ? WHERE cT_user_id = ?");
    $stmt->bind_param("sssi", $mobile, $email, $location, $user_id);
    $stmt->execute();

    echo "Saved Successfully";

}