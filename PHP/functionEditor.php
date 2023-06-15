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

    $skillsData = json_decode($_POST['skills_data'], true);



    foreach ($skillsData as $categoryData) {
        $categoryName = $connection->real_escape_string($categoryData['skill_category']);
        $yearsOfExperience = $connection->real_escape_string($categoryData['no_of_years']);
    

        // Update skill category
        $stmtCategory = $connection->prepare("UPDATE skill_categories_tab_tb SET category_name = ?, years_of_experience = ? WHERE category_user_id = ?");
        $stmtCategory->bind_param("ssi", $categoryName, $yearsOfExperience, $user_id);
        if (!$stmtCategory->execute()) {
            echo "Error updating skill category: " . $stmtCategory->error;
            return;
        }

        // Retrieve the auto-generated category ID
        $categoryId = $stmtCategory->insert_id;

        foreach ($categoryData['skills'] as $skillData) {
            $skillName = $connection->real_escape_string($skillData['skill_name']);
            $proficiencyPercentage = $connection->real_escape_string($skillData['proficiency_percentage']);

            // Update skill
            $stmtSkill = $connection->prepare("UPDATE skills_tab_tb SET skill_name = ?, proficiency_percentage = ? WHERE skills_user_id = ? AND category_id = ?");
            $stmtSkill->bind_param("ssii", $skillName, $proficiencyPercentage, $user_id, $categoryId);
            if (!$stmtSkill->execute()) {
                echo "Error updating skills: " . $stmtSkill->error;
                return;
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