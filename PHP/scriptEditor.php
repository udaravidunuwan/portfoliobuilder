<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type="text/javascript">
    // editor.php
    // ADD EDUCATIONAL QUALIFICATION BUTTON
        // $(document).ready(function() {
            
        //     $(".add-edu-qualification-button").click(function() {
        //         var categoryHtml = `<div class="qualification__data editor__border">

        //             <i class="uil uil-times editor-icon remove__button"></i>
        //             <div class="editor__inputs ">
        //                 <div class="editor__content ">
        //                     <i class="uil uil-book-reader editor-icon"></i>
        //                     <label for="" class="editor__label">Education Qualification</label>
        //                     <input type="text" class="editor__input" placeholder="Enter Qualifiacation here" autocomplete="off">
        //                 </div>
        //                 <div class="editor__content ">
        //                     <i class="uil uil-university editor-icon"></i>
        //                     <label for="" class="editor__label">Institution</label>
        //                     <input type="text" class="editor__input" placeholder="Enter Institution here" autocomplete="off">
        //                 </div>
        //                 <div class="editor__content ">
        //                     <i class="uil uil-map-marker-alt editor-icon"></i>
        //                     <label for="" class="editor__label">City</label>
        //                     <input type="text" class="editor__input" placeholder="Enter City here" autocomplete="off">
        //                 </div>
        //                 <div class="editor__content">
        //                     <i class="uil uil-3-plus editor-icon" ></i>
        //                     <label for="yearFrom" class="editor__label">Year From</label>
        //                     <select id="Education__yearFrom" name="yearFrom" class="editor__input year__from__to Education__yearFrom" > 
        //                         <option value="" selected>Select</option>
        //                     </select>
        //                 </div>
        //                 <div class="editor__content">
        //                     <i class="uil uil-3-plus editor-icon" ></i>
        //                     <label for="yearTo" class="editor__label">Year To</label>
        //                     <select id="Education__yearTo" name="yearTo" class="editor__input year__from__to Education__yearTo"> 
        //                         <option value="" selected>Select</option>
        //                     </select>
        //                 </div>
                        
        //             </div>

        //         </div>`;
        //         $(this).before(categoryHtml);
        //     });
    // });
    
    // // ADD WORK QUALIFICATION BUTTON
        // $(document).ready(function() {
            
        //     $(".add-work-qualification-button").click(function() {
        //         var categoryHtml = `<div class="qualification__data editor__border">

        //             <i class="uil uil-times editor-icon remove__button"></i>
        //             <div class="editor__inputs ">
        //                 <div class="editor__content ">
        //                     <i class="uil uil-book-reader editor-icon"></i>
        //                     <label for="" class="editor__label">Work Qualification</label>
        //                     <input type="text" class="editor__input" placeholder="Enter Quaification here" autocomplete="off">
        //                 </div>
        //                 <div class="editor__content ">
        //                     <i class="uil uil-building editor-icon"></i>
        //                     <label for="" class="editor__label">Company</label>
        //                     <input type="text" class="editor__input" placeholder="Enter URL here" autocomplete="off">
        //                 </div>
        //                 <div class="editor__content ">
        //                     <i class="uil uil-map-marker-alt editor-icon"></i>
        //                     <label for="" class="editor__label">City</label>
        //                     <input type="text" class="editor__input" placeholder="Enter URL here"autocomplete="off">
        //                 </div>
        //                 <div class="editor__content">
        //                     <i class="uil uil-3-plus editor-icon" ></i>
        //                     <label for="yearFrom" class="editor__label">Year From</label>
        //                     <select id="Work__yearFrom" name="yearFrom" class="editor__input year__from__to Work__yearFrom"> 
        //                         <option value="">Select</option>
        //                     </select>
        //                 </div>
        //                 <div class="editor__content">
        //                     <i class="uil uil-3-plus editor-icon" ></i>
        //                     <label for="yearTo" class="editor__label">Year To</label>
        //                     <select id="Work__yearTo" name="yearTo" class="editor__input year__from__to Work__yearTo"> 
        //                         <option value="">Select</option>
        //                     </select>
        //                 </div>
                        
        //             </div>
        //         </div>`;
        //         $(this).before(categoryHtml);
        //     });
    // });

    // $(document).ready(function() {
        //     var startYear = 2005;
        //     $(".add-edu-qualification-button").click(function () {
        //         var categoryHtml = `
        //             <div class="qualification__data editor__border">

        //                 <i class="uil uil-times editor-icon remove__button"></i>
        //                 <div class="editor__inputs ">
        //                     <div class="editor__content ">
        //                         <i class="uil uil-book-reader editor-icon"></i>
        //                         <label for="" class="editor__label">Education Qualification</label>
        //                         <input type="text" class="editor__input" placeholder="Enter Qualifiacation here" autocomplete="off">
        //                     </div>
        //                     <div class="editor__content ">
        //                         <i class="uil uil-university editor-icon"></i>
        //                         <label for="" class="editor__label">Institution</label>
        //                         <input type="text" class="editor__input" placeholder="Enter Institution here" autocomplete="off">
        //                     </div>
        //                     <div class="editor__content ">
        //                         <i class="uil uil-map-marker-alt editor-icon"></i>
        //                         <label for="" class="editor__label">City</label>
        //                         <input type="text" class="editor__input" placeholder="Enter City here" autocomplete="off">
        //                     </div>
        //                     <div class="editor__content">
        //                         <i class="uil uil-3-plus editor-icon" ></i>
        //                         <label for="yearFrom" class="editor__label">Year From</label>
        //                         <select id="Education__yearFrom" name="yearFrom" class="editor__input year__from__to Education__yearFrom" > 
        //                             <option value="" selected>Select</option>
        //                         </select>
        //                     </div>
        //                     <div class="editor__content">
        //                         <i class="uil uil-3-plus editor-icon" ></i>
        //                         <label for="yearTo" class="editor__label">Year To</label>
        //                         <select id="Education__yearTo" name="yearTo" class="editor__input year__from__to Education__yearTo"> 
        //                             <option value="" selected>Select</option>
        //                         </select>
        //                     </div>
                            
        //                 </div>

        //             </div>
        //         `;
        //         $(this).before(categoryHtml);
        //         generateYearOptionsForNewElements(startYear, new Date().getFullYear());
        //     });

        //     $(".add-work-qualification-button").click(function () {
        //         var categoryHtml = `
        //             <div class="qualification__data editor__border">

        //                 <i class="uil uil-times editor-icon remove__button"></i>
        //                 <div class="editor__inputs ">
        //                     <div class="editor__content ">
        //                         <i class="uil uil-book-reader editor-icon"></i>
        //                         <label for="" class="editor__label">Work Qualification</label>
        //                         <input type="text" class="editor__input" placeholder="Enter Quaification here" autocomplete="off">
        //                     </div>
        //                     <div class="editor__content ">
        //                         <i class="uil uil-building editor-icon"></i>
        //                         <label for="" class="editor__label">Company</label>
        //                         <input type="text" class="editor__input" placeholder="Enter URL here" autocomplete="off">
        //                     </div>
        //                     <div class="editor__content ">
        //                         <i class="uil uil-map-marker-alt editor-icon"></i>
        //                         <label for="" class="editor__label">City</label>
        //                         <input type="text" class="editor__input" placeholder="Enter URL here"autocomplete="off">
        //                     </div>
        //                     <div class="editor__content">
        //                         <i class="uil uil-3-plus editor-icon" ></i>
        //                         <label for="yearFrom" class="editor__label">Year From</label>
        //                         <select id="Work__yearFrom" name="yearFrom" class="editor__input year__from__to Work__yearFrom"> 
        //                             <option value="">Select</option>
        //                         </select>
        //                     </div>
        //                     <div class="editor__content">
        //                         <i class="uil uil-3-plus editor-icon" ></i>
        //                         <label for="yearTo" class="editor__label">Year To</label>
        //                         <select id="Work__yearTo" name="yearTo" class="editor__input year__from__to Work__yearTo"> 
        //                             <option value="">Select</option>
        //                         </select>
        //                     </div>
                            
        //                 </div>
        //             </div>
        //             `;
        //         $(this).before(categoryHtml);
        //         generateYearOptionsForNewElements(startYear, new Date().getFullYear());
        //     });
    // });
    


    // UPDATE HOME DATABASE TABLE
    function submitHomeData(){
        $(document).ready(function(){
            var dataHome = {
                action: $('#actionHome').val(),
                first_name: $('#first_name').val(),
                last_name: $('#last_name').val(),
                designation: $('#designation').val(),
                self_intro: $('#self_intro').val(),
                linkedin: $('#linkedin').val(),
                github: $('#github').val(),
            };

            // alert(dataHome.action);
            // alert(dataHome.first_name);
            // alert(dataHome.last_name);
            // alert(dataHome.designation);
            // alert(dataHome.self_intro);
            // alert(dataHome.linkedin);
            // alert(dataHome.github);
            $.ajax({
                url: 'functionEditor.php',
                type: 'post',
                data: dataHome,
                success: function(response){
                    alert(response);
                    if(response == "Saved Successfully"){
                        window.location.reload();
                    } 
                }
            });
        });
    }

    // UPDATE ABOUT DATABASE TABLE
    function submitAboutData(){
        $(document).ready(function(){
            var dataAbout = {
                action: $('#actionAbout').val(),
                about_user: $('#about_user').val(),
                years_of_experience: $('#years_of_experience').val(),
                completed_projects: $('#completed_projects').val(),
                companies_worked: $('#companies_worked').val(),
            };
        
            $.ajax({
                url: 'functionEditor.php',
                type: 'post',
                data: dataAbout,
                success: function(response){
                    alert(response);
                    if(response == "Saved Successfully"){
                        window.location.reload();
                    } 
                }
            });
        });
    }

    // ADD AND REMOVE SKILLS BUTTON
    $(document).ready(function() {
        // ADD CATEGORY BUTTON
        $(document).on("click", ".add-category-button", function() {
            var categoryHtml = `<div class="skill__subject editor__border">
                            
                            <i class="uil uil-times editor-icon remove__button remove_skill_subject__button"  data-id="<?php echo $category_id; ?>"></i>
                            <input type="hidden" name="category_id" id="categoryId" value="<?php echo $category_id; ?>">
                            <div class="editor__content">
                                <i class="uil uil-books editor-icon"></i>
                                <label for="skill_category" class="editor__label">Skill Category</label>
                                <input name="skill_category" type="text" class="editor__input" placeholder="Enter Skill Category Name here" autocomplete="off">
                            </div>
                            <div class="editor__content">
                                <i class="uil uil-3-plus editor-icon"></i>
                                <label for="no_of_years" class="editor__label">No. of Years</label>
                                <input name="no_of_years" type="number" class="editor__input" placeholder="Enter No. of Years here" autocomplete="off" oninput="validateNumberInput(this)">
                            </div>

                            <!-- Skill -->
                            <div class="skill__subject__skill editor__border">
                                <i class="uil uil-times editor-icon remove__button remove_skill__button"  data-id="<?php echo $skill_id; ?>"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="skill" class="editor__label">Skill Name</label>
                                    <input name="skill" type="text" class="editor__input" placeholder="Enter Skill Name here" autocomplete="off"> 
                                </div>
                                <div class="editor__content">
                                    <i class="uil uil-percentage editor-icon"></i>
                                    <label for="percentage" class="editor__label">Proficiency in Percentage</label>
                                    <input name="percentage" type="number" class="editor__input" placeholder="Enter percentage here" autocomplete="off" oninput="validateNumberInput(this); validatePercentageInput();" min="0"  max="100">
                                </div>
                            </div>
                            <i class="uil uil-plus editor-icon add__button add-skill-button">Add New Skill</i>

                        </div>`;
            $(this).before(categoryHtml);
        });

        // ADD SKILL BUTTON
        $(document).on("click", ".add-skill-button", function() {
            var skillHtml = `<div class="skill__subject__skill editor__border">
                                <i class="uil uil-times editor-icon remove__button remove_skill__button"  data-id="<?php echo $skill_id; ?>"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="skill" class="editor__label">Skill Name</label>
                                    <input name="skill" type="text" class="editor__input" placeholder="Enter Skill Name here" autocomplete="off"> 
                                </div>
                                <div class="editor__content">
                                    <i class="uil uil-percentage editor-icon"></i>
                                    <label for="percentage" class="editor__label">Proficiency in Percentage</label>
                                    <input name="percentage" type="number" class="editor__input" placeholder="Enter percentage here" autocomplete="off" oninput="validateNumberInput(this); validatePercentageInput();" min="0"  max="100">
                                </div>
                            </div>`;
            $(this).before(skillHtml);
        });
        
        // REMOVE SKILL BUTTON
        $(document).on("click", ".remove_skill__button", function() {
            var id = $(this).data("id");
            var elementSkill = $(this).closest(".skill__subject__skill");
            
            $.ajax({
                url: "functionEditor.php",
                method: "POST",
                data: { idSkill: id},
                success: function(response) {
                    if (response === "Removed Successfully") {
                        alert(response);
                    }

                    elementSkill.remove();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
        
        // REMOVE CATEGORY BUTTON
        $(document).on("click", ".remove_skill_subject__button", function() {
            var id = $(this).data("id");
            var elementCategory = $(this).closest(".skill__subject");
            
            $.ajax({
                url: "functionEditor.php",
                method: "POST",
                data: { idCategory: id },
                success: function(response) {
                    if (response === "Removed Successfully") {
                        alert(response);
                    }
                    elementCategory.remove();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });

    // UPDATE SKILL DATABASE TABLE
    function submitSkillsData() {
        var skillCategories = $('.skill__subject');
        var skillsData = [];
        skillCategories.each(function() {
            var skillCategory = $(this);
            var categoryData = {
                skill_category_id: skillCategory.find('input[name="category_id"]').val(),
                skill_category: skillCategory.find('input[name="skill_category"]').val(),
                no_of_years: skillCategory.find('input[name="no_of_years"]').val(),
                skills: []
            };

            var skills = skillCategory.find('.skill__subject__skill');
            skills.each(function() {
                var skill = $(this);
                var skillData = {
                    skill_id: skill.find('input[name="skill_id"]').val(),
                    skill_name: skill.find('input[name="skill"]').val(),
                    proficiency_percentage: skill.find('input[name="percentage"]').val()
                };
                categoryData.skills.push(skillData);
            });

            skillsData.push(categoryData);
        });
        var dataSkills = {
            action: 'skills',
            skills_data: JSON.stringify(skillsData)
        };

        $.ajax({
            url: 'functionEditor.php',
            type: 'post',
            data: dataSkills,
            success: function(response) {
                alert(response);
                if (response == "Saved Successfully") {
                    window.location.reload();
                }
            }
        });
    }
    
    // ADD AND REMOVE SERVICES BUTTON
    $(document).ready(function(){
        // ADD SERVICE TYPE BUTTON
        $(".add-type-button").click(function() {
            var categoryServiceHtml = `<div class="service__category editor__border">
                            
                            <i class="uil uil-times editor-icon remove__button"></i>
                            <input type="hidden" name="ser_category_id" id="ser_categoryId" value="<?php echo $ser_category_id; ?>">
                            <div class="editor__content">
                                <i class="uil uil-books editor-icon"></i>
                                <label for="service_category" class="editor__label">Service Type</label>
                                <input name="service_category" id="service_category" type="text" class="editor__input" placeholder="Enter Service Type here" autocomplete="off">
                            </div>

                            <!-- Service I Offer -->
                            <div class="service__offered editor__border">
                                <i class="uil uil-times editor-icon remove__button"  data-id="<?php echo $service_id; ?>"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="service_point" class="editor__label">Service</label>
                                    <input name="service_point" id="service_point"  type="text" class="editor__input" placeholder="Enter Service here" autocomplete="off">
                                </div>
                            </div>
                            <i class="uil uil-plus editor-icon add__button add-service-button">Add New Service</i>

                        </div>`;
            $(this).before(categoryServiceHtml);
        });
    

        // ADD SERVICE BUTTON
        $(document).on("click", ".add-service-button", function() {
            var serviceHtml = `<div class="service__offered editor__border">
                                <i class="uil uil-times editor-icon remove__button"  data-id="<?php echo $service_id; ?>"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="service_point" class="editor__label">Service</label>
                                    <input name="service_point" id="service_point" type="text" class="editor__input" placeholder="Enter Service here" autocomplete="off">
                                </div>
                            </div>`;
            $(this).before(serviceHtml);
        });

        // REMOVE SERVICE BUTTON
        $(document).on("click", ".remove_service__button", function() {
            var id = $(this).data("id");
            var elementService = $(this).closest(".service__offered");
            
            $.ajax({
                url: "functionEditor.php",
                method: "POST",
                data: { idService: id},
                success: function(response) {
                    if (response === "Removed Successfully") {
                        alert(response);
                    }

                    elementService.remove();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
        
        // REMOVE CATEGORY BUTTON
        $(document).on("click", ".remove_service_type__button", function() {
            var id = $(this).data("id");
            var elementServiceCategory = $(this).closest(".service__category");
            
            $.ajax({
                url: "functionEditor.php",
                method: "POST",
                data: { idServiceCategory: id },
                success: function(response) {
                    if (response === "Removed Successfully") {
                        alert(response);
                    }
                    elementServiceCategory.remove();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
    
    // UPDATE SERVICES DATABASE TABLE
    function submitServicesData(){
        var servicesCategories = $('.service__category');
        var servicesData = [];
        servicesCategories.each(function() {
            var serviceCategory = $(this);
            var categoryData = {
                service_category_id: serviceCategory.find('input[name="ser_category_id"]').val(),
                service_category: serviceCategory.find('input[name="service_category"]').val(),
                services: []
            };

            var services = serviceCategory.find('.service__offered');
            services.each(function() {
                var service = $(this);
                var serviceData = {
                    service_id: service.find('input[name="service_id"]').val(),
                    service_point: service.find('input[name="service_point"]').val(),
                };
                categoryData.services.push(serviceData);
            });

            servicesData.push(categoryData);
        });
        var dataServices = {
            action: 'services',
            services_data: JSON.stringify(servicesData)
        };

        $.ajax({
            url: 'functionEditor.php',
            type: 'post',
            data: dataServices,
            success: function(response) {
                alert(response);
                if (response == "Saved Successfully") {
                    window.location.reload();
                }
            }
        });
    }

    // /* FOR SELECT YEARS IN QUALIFICATIONS */
        // function generateYearOptions(startYear, endYear, selectElement) {
        // var currentYear = new Date().getFullYear();

        // for (var year = startYear; year <= endYear; year++) {
        //     var option = document.createElement("option");
        //     option.value = year;
        //     option.text = year;
        //     selectElement.appendChild(option);
        // }
        // }

        // function generateYearOptionsForNewElements(startYear, endYear) {
        // var selectEduYearFrom = document.querySelectorAll(".Education__yearFrom");
        // var selectEduYearTo = document.querySelectorAll(".Education__yearTo");
        // var selectWorkYearFrom = document.querySelectorAll(".Work__yearFrom");
        // var selectWorkYearTo = document.querySelectorAll(".Work__yearTo");

        // selectEduYearFrom.forEach(function (element) {
        //     generateYearOptions(startYear, endYear, element);
        // });
        // selectEduYearTo.forEach(function (element) {
        //     generateYearOptions(startYear, endYear, element);
        // });
        // selectWorkYearFrom.forEach(function (element) {
        //     generateYearOptions(startYear, endYear, element);
        // });
        // selectWorkYearTo.forEach(function (element) {
        //     generateYearOptions(startYear, endYear, element);
        // });
    // }
        
    // ADD AND REMVOE EDUCATION QUALIFICATION
    $(document).ready(function() {
        // ADD EDUCATION QUALIFICATION BUTTON
        $(document).on("click", ".add-edu-qualification-button", function() {
            var categoryHtml = `
            <div class="qualification__data editor__border education_qualification__data">

                <i class="uil uil-times editor-icon remove__button remove_qua_edu__button" data-id="<?php echo $edu_qua_id; ?>"></i>
                <input type="hidden" name="edu_qua_id" id="edu_qua_id" value="<?php echo $edu_qua_id++; ?>">
                <div class="editor__inputs ">
                    <div class="editor__content ">
                        <i class="uil uil-book-reader editor-icon"></i>
                        <label for="edu_qua_qualification" class="editor__label">Education Qualification</label>
                        <input name="edu_qua_qualification" id="edu_qua_qualification" type="text" class="editor__input" placeholder="Enter Qualifiacation here" autocomplete="off" value="">
                    </div>
                    <div class="editor__content ">
                        <i class="uil uil-university editor-icon"></i>
                        <label for="edu_qua_institution" class="editor__label">Institution</label>
                        <input name="edu_qua_institution" id="edu_qua_institution"  type="text" class="editor__input" placeholder="Enter Institution here" autocomplete="off" value="">
                    </div>
                    <div class="editor__content ">
                        <i class="uil uil-map-marker-alt editor-icon"></i>
                        <label for="edu_qua_city" class="editor__label">City</label>
                        <input name="edu_qua_city" id="edu_qua_city"  type="text" class="editor__input" placeholder="Enter City here" autocomplete="off" value="">
                    </div>
                    <div class="editor__content">
                        <i class="uil uil-3-plus editor-icon" ></i>
                        <label for="edu_qua_year_from" class="editor__label">Year From</label>
                        <input name="edu_qua_year_from" id="edu_qua_year_from" type="number" class="editor__input" placeholder="Enter year here" autocomplete="off" min="1990" max="2023" value="">
                        
                    </div>
                    <div class="editor__content">
                        <i class="uil uil-3-plus editor-icon" ></i>
                        <label for="edu_qua_year_to" class="editor__label">Year To</label>
                        <input name="edu_qua_year_to" id="edu_qua_year_to" type="number" class="editor__input" placeholder="Enter year here" autocomplete="off" min="1990" max="2023" value="">
                        
                    </div>
                    
                </div>
                
            </div>`;
            $(this).before(categoryHtml);
        });
        
        // REMOVE EDUCATION QUALIFICATION
        $(document).on("click", ".remove_qua_edu__button", function() {
            var id = $(this).data("id");
            var elementEduQualification = $(this).closest(".education_qualification__data");
            
            $.ajax({
                url: "functionEditor.php",
                method: "POST",
                data: { idEduQua: id },
                success: function(response) {
                    if (response === "Removed Successfully") {
                        alert(response);
                    }
                    elementEduQualification.remove();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });

    // UPDATE EDUCATION QUALIFICATION DATABASE
    function submitEducationQualificationData(){
        var qualificationEdu = $('.education_qualification__data');
        var eduQuaData = [];
        qualificationEdu.each(function() {
            var eduQualification = $(this);
            var qualificationEduData = {
                edu_qua_id: eduQualification.find('input[name="edu_qua_id"]').val(),
                edu_qua_qualification: eduQualification.find('input[name="edu_qua_qualification"]').val(),
                edu_qua_institution: eduQualification.find('input[name="edu_qua_institution"]').val(),
                edu_qua_city: eduQualification.find('input[name="edu_qua_city"]').val(),
                edu_qua_year_from: eduQualification.find('input[name="edu_qua_year_from"]').val(),
                edu_qua_year_to: eduQualification.find('input[name="edu_qua_year_to"]').val(),
            };

            eduQuaData.push(qualificationEduData);
        });
        var dataQualificationEdu = {
            action: 'qualification_education',
            edu_qua_data: JSON.stringify(eduQuaData)
        };

        $.ajax({
            url: 'functionEditor.php',
            type: 'post',
            data: dataQualificationEdu,
            success: function(response) {
                alert(response);
                if (response == "Saved Successfully") {
                    window.location.reload();
                }
            }
        });
    }
    
    // UPDATE CONTACT DATABASE TABLE
    function submitContantData(){
        $(document).ready(function(){
            var dataAbout = {
                action: $('#actionContact').val(),
                mobile: $('#mobile').val(),
                email: $('#email').val(),
                location: $('#location').val(),
            };
        
            $.ajax({
                url: 'functionEditor.php',
                type: 'post',
                data: dataAbout,
                success: function(response){
                    alert(response);
                    if(response == "Saved Successfully"){
                        window.location.reload();
                    } 
                }
            });
        });
    }

    

</script>