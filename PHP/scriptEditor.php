<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type="text/javascript">
    // editor.php
    // HTML append functions
    // ADD SKILL CATEGORY BUTTON
    $(document).ready(function() {
        
        $(".add-category-button").click(function() {
            var categoryHtml = `<div class="skill__subject editor__border">
                            
                            <i class="uil uil-times editor-icon remove__button" ></i>
                            <div class="editor__content">
                                <i class="uil uil-books editor-icon"></i>
                                <label for="skill_category" class="editor__label">Skill Category</label>
                                <input id="skill_category" type="text" class="editor__input" placeholder="Enter Skill Category Name here" autocomplete="off">
                            </div>
                            <div class="editor__content">
                                <i class="uil uil-3-plus editor-icon"></i>
                                <label for="no_of_years" class="editor__label">No. of Years</label>
                                <input id="no_of_years" type="number" class="editor__input" placeholder="Enter No. of Years here" autocomplete="off" oninput="validateNumberInput(this)">
                            </div>

                            <!-- Skill -->
                            <div class="skill__subject__skill editor__border">
                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="skill" class="editor__label">Skill Name</label>
                                    <input id="skill" type="text" class="editor__input" placeholder="Enter Skill Name here" autocomplete="off"> 
                                </div>
                                <div class="editor__content">
                                    <i class="uil uil-percentage editor-icon"></i>
                                    <label for="percentage" class="editor__label">Proficiency in Percentage</label>
                                    <input id="percentage" type="number" class="editor__input" placeholder="Enter percentage here" autocomplete="off" oninput="validateNumberInput(this); validatePercentageInput();" min="0"  max="100">
                                </div>
                            </div>
                            <i class="uil uil-plus editor-icon add__button add-skill-button">Add New Skill</i>

                        </div>`;
            $(this).before(categoryHtml);
        });

    });
    
    // ADD SKILL BUTTON
    $(document).ready(function() {
        
        $(document).on("click", ".add-skill-button", function() {
            var skillHtml = `<div class="skill__subject__skill editor__border">
                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="skill" class="editor__label">Skill Name</label>
                                    <input id="skill" type="text" class="editor__input" placeholder="Enter Skill Name here" autocomplete="off"> 
                                </div>
                                <div class="editor__content">
                                    <i class="uil uil-percentage editor-icon"></i>
                                    <label for="percentage" class="editor__label">Proficiency in Percentage</label>
                                    <input id="percentage" type="number" class="editor__input" placeholder="Enter percentage here" autocomplete="off" oninput="validateNumberInput(this); validatePercentageInput();" min="0"  max="100">
                                </div>
                            </div>`;
            $(this).before(skillHtml);
        });
    });
    
    // ADD EDUCATIONAL QUALIFICATION BUTTON
    $(document).ready(function() {
        
        $(".add-edu-qualification-button").click(function() {
            var categoryHtml = `<div class="qualification__data editor__border">

                <i class="uil uil-times editor-icon remove__button"></i>
                <div class="editor__inputs ">
                    <div class="editor__content ">
                        <i class="uil uil-book-reader editor-icon"></i>
                        <label for="" class="editor__label">Education Qualification</label>
                        <input type="text" class="editor__input" placeholder="Enter Qualifiacation here" autocomplete="off">
                    </div>
                    <div class="editor__content ">
                        <i class="uil uil-university editor-icon"></i>
                        <label for="" class="editor__label">Institution</label>
                        <input type="text" class="editor__input" placeholder="Enter Institution here" autocomplete="off">
                    </div>
                    <div class="editor__content ">
                        <i class="uil uil-map-marker-alt editor-icon"></i>
                        <label for="" class="editor__label">City</label>
                        <input type="text" class="editor__input" placeholder="Enter City here" autocomplete="off">
                    </div>
                    <div class="editor__content">
                        <i class="uil uil-3-plus editor-icon" ></i>
                        <label for="yearFrom" class="editor__label">Year From</label>
                        <select id="Education__yearFrom" name="yearFrom" class="editor__input year__from__to" > 
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="editor__content">
                        <i class="uil uil-3-plus editor-icon" ></i>
                        <label for="yearTo" class="editor__label">Year To</label>
                        <select id="Education__yearTo" name="yearTo" class="editor__input year__from__to"> 
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    
                </div>

            </div>`;
            $(this).before(categoryHtml);
        });
    });
    
    // ADD WORK QUALIFICATION BUTTON
    $(document).ready(function() {
        
        $(".add-work-qualification-button").click(function() {
            var categoryHtml = `<div class="qualification__data editor__border">

                <i class="uil uil-times editor-icon remove__button"></i>
                <div class="editor__inputs ">
                    <div class="editor__content ">
                        <i class="uil uil-book-reader editor-icon"></i>
                        <label for="" class="editor__label">Work Qualification</label>
                        <input type="text" class="editor__input" placeholder="Enter Quaification here" autocomplete="off">
                    </div>
                    <div class="editor__content ">
                        <i class="uil uil-building editor-icon"></i>
                        <label for="" class="editor__label">Company</label>
                        <input type="text" class="editor__input" placeholder="Enter URL here" autocomplete="off">
                    </div>
                    <div class="editor__content ">
                        <i class="uil uil-map-marker-alt editor-icon"></i>
                        <label for="" class="editor__label">City</label>
                        <input type="text" class="editor__input" placeholder="Enter URL here"autocomplete="off">
                    </div>
                    <div class="editor__content">
                        <i class="uil uil-3-plus editor-icon" ></i>
                        <label for="yearFrom" class="editor__label">Year From</label>
                        <select id="Work__yearFrom" name="yearFrom" class="editor__input year__from__to"> 
                            <option value="">Select</option>
                        </select>
                    </div>
                    <div class="editor__content">
                        <i class="uil uil-3-plus editor-icon" ></i>
                        <label for="yearTo" class="editor__label">Year To</label>
                        <select id="Work__yearTo" name="yearTo" class="editor__input year__from__to"> 
                            <option value="">Select</option>
                        </select>
                    </div>
                    
                </div>
            </div>`;
            $(this).before(categoryHtml);
        });
    });
    
    // ADD SERVICE TYPE BUTTON
    $(document).ready(function() {
        
        $(".add-type-button").click(function() {
            var categoryHtml = `<div class="service__category editor__border">
                            
                            <i class="uil uil-times editor-icon remove__button"></i>
                            <div class="editor__content">
                                <i class="uil uil-books editor-icon"></i>
                                <label for="" class="editor__label">Service Type</label>
                                <input type="text" class="editor__input" placeholder="Enter Service Type here" autocomplete="off">
                            </div>

                            <!-- Service I Offer -->
                            <div class="service__offered editor__border">
                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="" class="editor__label">Service</label>
                                    <input type="text" class="editor__input" placeholder="Enter Service here" autocomplete="off">
                                </div>
                            </div>
                            <i class="uil uil-plus editor-icon add__button add-service-button">Add New Service</i>

                        </div>`;
            $(this).before(categoryHtml);
        });

    });
    
    // ADD SERVICE BUTTON
    $(document).ready(function() {
        
        $(document).on("click", ".add-service-button", function() {
            var skillHtml = `<div class="service__offered editor__border">
                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="" class="editor__label">Service</label>
                                    <input type="text" class="editor__input" placeholder="Enter Service here" autocomplete="off">
                                </div>
                            </div>`;
            $(this).before(skillHtml);
        });
    });

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
            
            alert(dataHome.action);

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

    // UPDATE SKILL DATABASE TABLE
    function submitSkillsData(){
        $(document).ready(function(){
            // EDIT this 
            var dataAbout = {
                action: $('#actionSkills').val(),
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