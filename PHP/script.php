<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type="text/javascript">
    // index.php
    // LOGIN AND REGISTER 
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
                type: 'post',
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
    

    


</script>