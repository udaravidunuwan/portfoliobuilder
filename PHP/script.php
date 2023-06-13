<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type="text/javascript">
    function submitData(){
        $(document).ready(function(){
            var data = {
                action: '',
                emailReg: $('#emailRegister').val(),
                passwordReg: $('#passwordRegister').val(),
                confirmPasswordReg: $('#passwordRegisterConfirm').val(),
                emailLog: $('#emailLogin').val(),
                passwordLog: $('#passwordLogin').val(),
            };

            if ($('#register-submit').is(':focus')) {
                data.action = $('#actionReg').val();
            } else if ($('#login-submit').is(':focus')) {
                data.action = $('#actionLog').val();
            }

            $.ajax({
                url: 'function.php',
                // type: 'post',
                data: data,
                success: function(response){
                    alert(response);
                    if(response == "Login successful"){
                        window.location.reload();
                    } 
                }
            });
        });
    }
    
    $(document).ready(function() {
        
        $(".add-category-button").click(function() {
            var categoryHtml = `<div class="skill__subject editor__border">
                            
                            <i class="uil uil-times editor-icon remove__button" ></i>
                            <div class="editor__content">
                                <i class="uil uil-books editor-icon"></i>
                                <label for="" class="editor__label">Skill Category</label>
                                <input type="text" class="editor__input" placeholder="Enter Skill Category Name here" autocomplete="off">
                            </div>
                            <div class="editor__content">
                                <i class="uil uil-3-plus editor-icon"></i>
                                <label for="" class="editor__label">No. of Years</label>
                                <input type="number" class="editor__input" placeholder="Enter No. of Years here" autocomplete="off" oninput="validateNumberInput(this)">
                            </div>

                            <!-- Skill -->
                            <div class="skill__subject__skill editor__border">
                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="" class="editor__label">Skill Name</label>
                                    <input type="text" class="editor__input" placeholder="Enter Skill Name here" autocomplete="off"> 
                                </div>
                                <div class="editor__content">
                                    <i class="uil uil-percentage editor-icon"></i>
                                    <label for="" class="editor__label">Proficiency in Percentage</label>
                                    <input type="number" class="editor__input" placeholder="Enter percentage here" autocomplete="off" oninput="validateNumberInput(this); validatePercentageInput();" min="0"  max="100">
                                </div>
                            </div>
                            <i class="uil uil-plus editor-icon add__button add-skill-button">Add New Skill</i>

                        </div>`;
            $(this).before(categoryHtml);
        });

    });
    
    $(document).ready(function() {
        
        $(document).on("click", ".add-skill-button", function() {
            var skillHtml = `<div class="skill__subject__skill editor__border">
                                <i class="uil uil-times editor-icon remove__button"></i>
                                <div class="editor__content">
                                    <i class="uil uil-book editor-icon"></i>
                                    <label for="" class="editor__label">Skill Name</label>
                                    <input type="text" class="editor__input" placeholder="Enter Skill Name here" autocomplete="off"> 
                                </div>
                                <div class="editor__content">
                                    <i class="uil uil-percentage editor-icon"></i>
                                    <label for="" class="editor__label">Proficiency in Percentage</label>
                                    <input type="number" class="editor__input" placeholder="Enter percentage here" autocomplete="off" oninput="validateNumberInput(this); validatePercentageInput();" min="0"  max="100">
                                </div>
                            </div>`;
            $(this).before(skillHtml);
        });
    });
    


</script>