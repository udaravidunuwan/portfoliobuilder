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
    } else if($_POST["action"] == "services"){
        updateServices($user_id);
    } else if($_POST["action"] == "qualification_education"){
        updateQualificationEducation($user_id);
    } else if($_POST["action"] == "qualification_work"){
        updateQualificationWork($user_id);
    }
}

if (isset($_POST['idSkill'])) {
    removeSkill();
}

if (isset($_POST['idCategory'])) {
    removeSkillCategory();
}

if (isset($_POST['idService'])) {
    removeService();
}

if (isset($_POST['idServiceCategory'])) {
    removeServiceCategory();
}

if (isset($_POST['idEduQua'])) {
    removeEducationQualification();
}

if (isset($_POST['idWorkQua'])) {
    removeWorkQualification();
}


function updateHome($user_id){
    global $connection;
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $designation = $_POST["designation"];
    $self_intro = $_POST["self_intro"];
    $linkedin = $_POST["linkedin"];
    $github = $_POST["github"];

    $stmtHome = $connection->prepare("SELECT * FROM home_tab_tb WHERE hT_user_id = ?");
    $stmtHome->bind_param("i", $user_id);
    $stmtHome->execute();
    $result = $stmtHome->get_result();

    if ($result->num_rows > 0) {
        $stmt = $connection->prepare("UPDATE home_tab_tb SET hT_first_name = ?, hT_last_name = ?, hT_designation = ?, hT_self_introduction = ?, hT_linkedIn_url = ?, hT_github_url = ? WHERE hT_user_id = ?");
        $stmt->bind_param("ssssssi", $first_name, $last_name, $designation, $self_intro, $linkedin, $github, $user_id);
        $stmt->execute();
        
    } else {
        
        $stmt = $connection->prepare("INSERT INTO home_tab_tb (hT_first_name, hT_last_name, hT_designation, hT_self_introduction, hT_linkedIn_url, hT_github_url, hT_user_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $first_name, $last_name, $designation, $self_intro, $linkedin, $github, $user_id);
        $stmt->execute();

    }
    
    echo "Saved Successfully";
    
}

function updateAbout($user_id){
    global $connection;
    
    $aboutUser = $_POST["about_user"];
    $yearsOfExperience = $_POST["years_of_experience"];
    $completedProjects = $_POST["completed_projects"];
    $companiesWorked = $_POST["companies_worked"];

    $stmtAbout = $connection->prepare("SELECT * FROM about_tab_tb WHERE aT_user_id = ?");
    $stmtAbout->bind_param("i", $user_id);
    $stmtAbout->execute();
    $result = $stmtAbout->get_result();

    if ($result->num_rows > 0) {
        
        $stmt = $connection->prepare("UPDATE about_tab_tb SET aT_about_user = ?, aT_Yo_Exp = ?, aT_No_Projects = ?, aT_No_companies = ? WHERE aT_user_id = ?");
        $stmt->bind_param("ssssi", $aboutUser, $yearsOfExperience, $completedProjects, $companiesWorked, $user_id);
        $stmt->execute();
        
    } else {
        
        $stmt = $connection->prepare("INSERT INTO about_tab_tb (aT_about_user, aT_Yo_Exp, aT_No_Projects, aT_No_companies, aT_user_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $aboutUser, $yearsOfExperience, $completedProjects, $companiesWorked, $user_id);
        $stmt->execute();

    }

    echo "Saved Successfully";

}

function updateSkills($user_id){
    global $connection;

    $skillsData = json_decode($_POST['skills_data'], true);

    foreach ($skillsData as $categoryData) {
        // $SkillcategoryId = $connection->real_escape_string($categoryData['skill_category_id']);
        $categoryName = $connection->real_escape_string($categoryData['skill_category']);
        $yearsOfExperience = $connection->real_escape_string($categoryData['no_of_years']);

        // Check if the category already exists or needs to be inserted as a new category
        if (isset($categoryData['skill_category_id'])) {
            $categoryId = $connection->real_escape_string($categoryData['skill_category_id']);
            
            $stmtCategory = $connection->prepare("SELECT * FROM skill_categories_tab_tb WHERE category_id = ?");
            $stmtCategory->bind_param("i", $categoryId);
            $stmtCategory->execute();
            $result = $stmtCategory->get_result();

            if ($result->num_rows > 0) {
                // echo "Go to update skill category";
                // echo "Update Skill category ID " . $categoryId . " ";
                // echo "Update Skill category name " . $categoryName  . " ";
                // echo "Update Skill category yoExp " . $yearsOfExperience  . " ";
                // Category ID exists, perform an update
                // Update skill category
                $stmtCategory = $connection->prepare("UPDATE skill_categories_tab_tb SET category_name = ?, years_of_experience = ? WHERE category_id = ? AND category_user_id = ?");
                $stmtCategory->bind_param("siii", $categoryName, $yearsOfExperience, $categoryId, $user_id);
                if (!$stmtCategory->execute()) {
                        echo "Error updating skill category: " . $stmtCategory->error;
                        return;
                    }

                } else {
                // echo "Go to add new skill category";
                // echo "Insert skill category name " . $categoryName  . " ";
                // echo "Insert skill category yoExp " . $yearsOfExperience  . " ";
                // Category ID doesn't exist, perform an insert
                // Insert new skill category
                $stmtCategory = $connection->prepare("INSERT INTO skill_categories_tab_tb (category_user_id, category_name, years_of_experience) VALUES (?, ?, ?)");
                $stmtCategory->bind_param("isi", $user_id, $categoryName, $yearsOfExperience);
                if (!$stmtCategory->execute()) {
                    echo "Error inserting skill category: " . $stmtCategory->error;
                    return;
                }
                $categoryId = $stmtCategory->insert_id;
            }
            
        }
    
        
        foreach ($categoryData['skills'] as $skillData) {
            
            $skillName = $connection->real_escape_string($skillData['skill_name']);
            $proficiencyPercentage = $connection->real_escape_string($skillData['proficiency_percentage']);

            if (!empty($categoryId) && !empty($user_id) && !empty($skillName) && !empty($proficiencyPercentage)) {
                // Check if the skill already exists or needs to be inserted as a new skill
                if (isset($skillData['skill_id'])) {
                    $skillId = $connection->real_escape_string($skillData['skill_id']);
                    // echo "Go to update skill ";
                    // echo "Update skill Id " . $skillId . " ";
                    // echo "Update skill name  " . $skillName . " ";
                    // echo "Update skill percentage  " . $proficiencyPercentage . " ";
                    // Update skill
                    $stmtSkill = $connection->prepare("UPDATE skills_tab_tb SET skill_name = ?, proficiency_percentage = ? WHERE skill_id = ? AND skills_user_id = ? AND category_id = ?");
                    $stmtSkill->bind_param("siiii", $skillName, $proficiencyPercentage, $skillId, $user_id, $categoryId);
                    if (!$stmtSkill->execute()) {
                            echo "Error updating skill: " . $stmtSkill->error;
                        return;
                    }
                } else {
                    // echo "Go to add new skill ";
                    // echo "Insert skill name  " . $skillName . " ";
                    // echo "Insert skill percentage  " . $proficiencyPercentage . " ";
                    // Insert new skill
                    $stmtSkill = $connection->prepare("INSERT INTO skills_tab_tb (category_id, skills_user_id, skill_name, proficiency_percentage) VALUES (?, ?, ?, ?)");
                    $stmtSkill->bind_param("iisi", $categoryId, $user_id, $skillName, $proficiencyPercentage);
                    if (!$stmtSkill->execute()) {
                        echo "Error inserting skill: " . $stmtSkill->error;
                        return;
                    }
                }
                // End of emty checking
            } 
            // else {
            //     echo "One or more values are empty. Process halted.";
            //     return;
            // }

            
        }
    }

    echo "Saved Successfully";
}

function removeSkill(){
    global $connection;
    $id = $_POST['idSkill'];

    $stmtDelete = $connection->prepare("DELETE FROM skills_tab_tb WHERE skill_id = ?");
    $stmtDelete->bind_param("i", $id);
    $stmtDelete->execute();
    // $result = $stmtDelete->get_result();

    if ($stmtDelete->affected_rows > 0) {
        echo 'Removed Successfully';
    } else {
        // echo 'Removing Empty Skill';
    }
}

function removeSkillCategory(){
    global $connection;
    $id = $_POST['idCategory'];

    $stmtSelect = $connection->prepare("SELECT skill_id FROM skills_tab_tb WHERE category_id = ?");
    $stmtSelect->bind_param("i", $id);
    $stmtSelect->execute();
    $result = $stmtSelect->get_result();

    $skillsToDelete = array();
    while ($row = $result->fetch_assoc()) {
        $skillsToDelete[] = $row['skill_id'];
    }

    if (!empty($skillsToDelete)) {
        $stmtDeleteSkills = $connection->prepare("DELETE FROM skills_tab_tb WHERE skill_id IN (".implode(',', $skillsToDelete).")");
        $stmtDeleteSkills->execute();
    }

    $stmtDeleteCategory = $connection->prepare("DELETE FROM skill_categories_tab_tb WHERE category_id = ?");
    $stmtDeleteCategory->bind_param("i", $id);
    $stmtDeleteCategory->execute();

    if ($stmtDeleteCategory->affected_rows > 0) {
        echo 'Removed Successfully';
    } else {
        // echo 'Removing Empty Skill';
    }
}

function updateServices($user_id){
    global $connection;

    $servicesData = json_decode($_POST['services_data'], true);

    foreach ($servicesData as $categoryData) {
        $categoryName = $connection->real_escape_string($categoryData['service_category']);

        // Check if the category already exists or needs to be inserted as a new category
        if (isset($categoryData['service_category_id'])) {
            $categoryId = $connection->real_escape_string($categoryData['service_category_id']);
            
            $stmtCategory = $connection->prepare("SELECT * FROM services_categories_tab_tb WHERE category_id = ?");
            $stmtCategory->bind_param("i", $categoryId);
            $stmtCategory->execute();
            $result = $stmtCategory->get_result();

            if ($result->num_rows > 0) {
                // echo "Go to update skill category";
                // echo "Update Skill category ID " . $categoryId . " ";
                // echo "Update Skill category name " . $categoryName  . " ";
                // echo "Update Skill category yoExp " . $yearsOfExperience  . " ";
                // Category ID exists, perform an update
                // Update skill category
                $stmtCategory = $connection->prepare("UPDATE services_categories_tab_tb SET category_name = ? WHERE category_id = ? AND category_user_id = ?");
                $stmtCategory->bind_param("sii", $categoryName, $categoryId, $user_id);
                if (!$stmtCategory->execute()) {
                        echo "Error updating service category: " . $stmtCategory->error;
                        return;
                    }

                } else {
                // echo "Go to add new skill category";
                // echo "Insert skill category name " . $categoryName  . " ";
                // echo "Insert skill category yoExp " . $yearsOfExperience  . " ";
                // Category ID doesn't exist, perform an insert
                // Insert new skill category
                $stmtCategory = $connection->prepare("INSERT INTO services_categories_tab_tb (category_user_id, category_name) VALUES (?, ?)");
                $stmtCategory->bind_param("is", $user_id, $categoryName);
                if (!$stmtCategory->execute()) {
                    echo "Error inserting service category: " . $stmtCategory->error;
                    return;
                }
                $categoryId = $stmtCategory->insert_id;
            }
            
        }
    
        
        foreach ($categoryData['services'] as $serviceData) {
            
            $service_point = $connection->real_escape_string($serviceData['service_point']);

            if (!empty($categoryId) && !empty($user_id) && !empty($service_point)) {
                // Check if the service already exists or needs to be inserted as a new skill
                if (isset($serviceData['service_id'])) {
                    $serviceId = $connection->real_escape_string($serviceData['service_id']);
                    // echo "Go to update service";
                    // echo "Update service Id " . $serviceId . " ";
                    // echo "Update service" . $service . " ";
                    // Update service
                    $stmtService = $connection->prepare("UPDATE services_tab_tb SET service_point = ? WHERE service_id = ? AND service_user_id = ? AND category_id = ?");
                    $stmtService->bind_param("siii", $service_point, $serviceId, $user_id, $categoryId);
                    if (!$stmtService->execute()) {
                            echo "Error updating service: " . $stmtService->error;
                        return;
                    }
                } else {
                    // echo "Go to add new skill ";
                    // echo "Insert skill name  " . $service . " ";
                    // echo "Insert skill percentage  " . $proficiencyPercentage . " ";
                    // Insert new skill
                    $stmtService = $connection->prepare("INSERT INTO services_tab_tb (category_id, service_user_id, service_point) VALUES (?, ?, ?)");
                    $stmtService->bind_param("iis", $categoryId, $user_id, $service_point);
                    if (!$stmtService->execute()) {
                        echo "Error inserting service: " . $stmtService->error;
                        return;
                    }
                }
                // End of emty checking
            } 
            // else {
            //     echo "One or more values are empty. Process halted.";
            //     return;
            // }

            
        }
    }

    echo "Saved Successfully";
}

function removeService(){
    global $connection;
    $id = $_POST['idService'];

    $stmtDelete = $connection->prepare("DELETE FROM services_tab_tb WHERE service_id = ?");
    $stmtDelete->bind_param("i", $id);
    $stmtDelete->execute();
    // $result = $stmtDelete->get_result();

    if ($stmtDelete->affected_rows > 0) {
        echo 'Removed Successfully';
    } else {
        // echo 'Removing Empty Skill';
    }
}

function removeServiceCategory(){
    global $connection;
    $id = $_POST['idServiceCategory'];

    $stmtSelect = $connection->prepare("SELECT service_id FROM services_tab_tb WHERE category_id = ?");
    $stmtSelect->bind_param("i", $id);
    $stmtSelect->execute();
    $result = $stmtSelect->get_result();

    $skillsToDelete = array();
    while ($row = $result->fetch_assoc()) {
        $skillsToDelete[] = $row['service_id'];
    }

    if (!empty($skillsToDelete)) {
        $stmtDeleteSkills = $connection->prepare("DELETE FROM services_tab_tb WHERE service_id IN (".implode(',', $skillsToDelete).")");
        $stmtDeleteSkills->execute();
    }

    $stmtDeleteCategory = $connection->prepare("DELETE FROM services_categories_tab_tb WHERE category_id = ?");
    $stmtDeleteCategory->bind_param("i", $id);
    $stmtDeleteCategory->execute();

    if ($stmtDeleteCategory->affected_rows > 0) {
        echo 'Removed Successfully';
    } else {
        // echo 'Removing Empty Skill';
    }
}

function updateQualificationEducation($user_id){
    global $connection;

    $eduQuaData = json_decode($_POST['edu_qua_data'], true);

    foreach ($eduQuaData as $qualificationEduData) {
        $edu_qua_qualification = $connection->real_escape_string($qualificationEduData['edu_qua_qualification']);
        $edu_qua_institution = $connection->real_escape_string($qualificationEduData['edu_qua_institution']);
        $edu_qua_city = $connection->real_escape_string($qualificationEduData['edu_qua_city']);
        $edu_qua_year_from = $connection->real_escape_string($qualificationEduData['edu_qua_year_from']);
        $edu_qua_year_to = $connection->real_escape_string($qualificationEduData['edu_qua_year_to']);

        // Check if the category already exists or needs to be inserted as a new category
        if (isset($qualificationEduData['edu_qua_id'])) {
            $edu_qua_id = $connection->real_escape_string($qualificationEduData['edu_qua_id']);
            
            $stmtQuaEdu = $connection->prepare("SELECT * FROM qualification_education_tab_tb WHERE edu_qua_id = ?");
            $stmtQuaEdu->bind_param("i", $edu_qua_id);
            $stmtQuaEdu->execute();
            $result = $stmtQuaEdu->get_result();

            if ($result->num_rows > 0) {
                $stmtQuaEdu = $connection->prepare("UPDATE qualification_education_tab_tb SET edu_qua_qualification = ?, edu_qua_institution = ?, edu_qua_city = ?, edu_qua_year_from = ?, edu_qua_year_to = ? WHERE edu_qua_id = ? AND edu_qua_user_id = ?");
                $stmtQuaEdu->bind_param("sssiiii", $edu_qua_qualification, $edu_qua_institution, $edu_qua_city, $edu_qua_year_from, $edu_qua_year_to, $edu_qua_id, $user_id);
                if (!$stmtQuaEdu->execute()) {
                        echo "Error updating skill category: " . $stmtQuaEdu->error;
                        return;
                    }

                } else {
                // echo "Go to add new skill category";
                // echo "Insert skill category name " . $categoryName  . " ";
                // echo "Insert skill category yoExp " . $yearsOfExperience  . " ";
                // Category ID doesn't exist, perform an insert
                // Insert new skill category
                $stmtQuaEdu = $connection->prepare("INSERT INTO qualification_education_tab_tb (edu_qua_user_id, edu_qua_qualification, edu_qua_institution, edu_qua_city, edu_qua_year_from, edu_qua_year_to) VALUES (?, ?, ?, ?, ?, ?)");
                $stmtQuaEdu->bind_param("isssii", $user_id, $edu_qua_qualification, $edu_qua_institution, $edu_qua_city, $edu_qua_year_from, $edu_qua_year_to);
                if (!$stmtQuaEdu->execute()) {
                    echo "Error inserting skill category: " . $stmtQuaEdu->error;
                    return;
                }
                $edu_qua_id = $stmtQuaEdu->insert_id;
            }
            
        }
        
    }

    echo "Saved Successfully";
}

function updateQualificationWork($user_id){
    global $connection;

    $workQuaData = json_decode($_POST['work_qua_data'], true);

    foreach ($workQuaData as $qualificationWorkData) {
        $work_qua_qualification = $connection->real_escape_string($qualificationWorkData['work_qua_qualification']);
        $work_qua_institution = $connection->real_escape_string($qualificationWorkData['work_qua_institution']);
        $work_qua_city = $connection->real_escape_string($qualificationWorkData['work_qua_city']);
        $work_qua_year_from = $connection->real_escape_string($qualificationWorkData['work_qua_year_from']);
        $work_qua_year_to = $connection->real_escape_string($qualificationWorkData['work_qua_year_to']);

        // Check if the category already exists or needs to be inserted as a new category
        if (isset($qualificationWorkData['work_qua_id'])) {
            $work_qua_id  = $connection->real_escape_string($qualificationWorkData['work_qua_id']);

            $stmtQuaWork = $connection->prepare("SELECT * FROM qualification_work_tab_tb WHERE work_qua_id = ?");
            $stmtQuaWork->bind_param("i", $work_qua_id );
            $stmtQuaWork->execute();
            $result = $stmtQuaWork->get_result();

            if ($result->num_rows > 0) {
                $stmtQuaWork = $connection->prepare("UPDATE qualification_work_tab_tb SET work_qua_qualification = ?, work_qua_institution = ?, work_qua_city = ?, work_qua_year_from = ?, work_qua_year_to = ? WHERE work_qua_id  = ? AND work_qua_user_id = ?");
                $stmtQuaWork->bind_param("sssiiii", $work_qua_qualification, $work_qua_institution, $work_qua_city, $work_qua_year_from, $work_qua_year_to, $work_qua_id , $user_id);
                if (!$stmtQuaWork->execute()) {
                        echo "Error updating skill category: " . $stmtQuaWork->error;
                        return;
                    }

                } else {

                $stmtQuaWork = $connection->prepare("INSERT INTO qualification_work_tab_tb (work_qua_user_id , work_qua_qualification, work_qua_institution, work_qua_city, work_qua_year_from, work_qua_year_to) VALUES (?, ?, ?, ?, ?, ?)");
                $stmtQuaWork->bind_param("isssii", $user_id, $work_qua_qualification, $work_qua_institution, $work_qua_city, $work_qua_year_from, $work_qua_year_to);
                if (!$stmtQuaWork->execute()) {
                    echo "Error inserting skill category: " . $stmtQuaWork->error;
                    return;
                }
                $work_qua_id = $stmtQuaWork->insert_id;
            }
            
        }
    }

    echo "Saved Successfully";
}

function removeEducationQualification(){
    global $connection;
    $id = $_POST['idEduQua'];

    $stmtDeleteEduQua = $connection->prepare("DELETE FROM qualification_education_tab_tb WHERE edu_qua_id = ?");
    $stmtDeleteEduQua->bind_param("i", $id);
    $stmtDeleteEduQua->execute();

    if ($stmtDeleteEduQua->affected_rows > 0) {
        echo 'Removed Successfully';
    } else {
        // echo 'Removing Empty Skill';
    }
}

function removeWorkQualification(){
    global $connection;
    $id = $_POST['idWorkQua'];

    $stmtDeleteWorkQua = $connection->prepare("DELETE FROM qualification_work_tab_tb WHERE work_qua_id  = ?");
    $stmtDeleteWorkQua->bind_param("i", $id);
    $stmtDeleteWorkQua->execute();

    if ($stmtDeleteWorkQua->affected_rows > 0) {
        echo 'Removed Successfully';
    } else {
        // echo 'Removing Empty Skill';
    }
}

function updateContact($user_id){
    global $connection;

    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $location = $_POST["location"];

    $stmtContact = $connection->prepare("SELECT * FROM contact_tab_tb WHERE cT_user_id = ?");
    $stmtContact->bind_param("i", $user_id);
    $stmtContact->execute();
    $result = $stmtContact->get_result();

    if ($result->num_rows > 0) {
        
        $stmt = $connection->prepare("UPDATE contact_tab_tb SET cT_mobile = ?, cT_email = ?, cT_location = ? WHERE cT_user_id = ?");
        $stmt->bind_param("sssi", $mobile, $email, $location, $user_id);
        $stmt->execute();
            
    } else {
        
        $stmt = $connection->prepare("INSERT INTO contact_tab_tb (cT_mobile, cT_email, cT_location, cT_user_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $mobile, $email, $location, $user_id);
        $stmt->execute();

    }
    
    echo "Saved Successfully";

}