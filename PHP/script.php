<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type="text/javascript">
    function submitData(){
        $(document).ready(function(){
            var data = {
                // actionLog: $('#actionLog').val(),
                // actionReg: $('#actionReg').val(),
                // action: $('#action').val(),
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

            // alert(data.actionLog);
            // alert(data.actionReg);
            // alert(data.action);
            // alert(data.emailLog);
            // alert(data.passwordLog);
            // alert(data.emailReg);
            // alert(data.passwordReg);
            // alert(data.confirmPasswordReg);
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success: function(response){
                    // alert(data.action);
                    // alert("Check 2");
                    alert(response);
                    if(response == "Login successful"){
                        // alert("Check 3");
                        alert(response);
                        window.location.reload();
                    } 
                }
            });
        });
    }
</script>