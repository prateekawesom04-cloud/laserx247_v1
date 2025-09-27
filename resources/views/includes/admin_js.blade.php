<script>

    $('.add_user_client').on('click',function(){
        let exitLoop = true;
        let formData = new FormData($('#createAccountForm')[0]);
        let formInputs = $('#createAccountForm input');
        
        $(formInputs).each(function(){
            if($(this).val() == ''){
                alert('please provide all fields');
                exitLoop = false;
                return false;
            }
            
        });
        if(exitLoop){
            callAdminApi('post', `{{url('/admin')}}/add_user_client`, formData, ajaxResponse);
        }
        
    });

    $('.changePasswordModel').on('click',function(){
        $('#changePasswordFormModel input[name=user_uid]').val($(this).attr('data-user_uid'));
    });

    $('.changePasswordSubmit').on('click',function(){
        let exitLoop = true;
        let formData = new FormData($('#changePasswordFormModel')[0]);
        let formInputs = $('#changePasswordFormModel input');
        
        $(formInputs).each(function(){
            if($(this).val() == ''){
                alert('please provide all fields');
                exitLoop = false;
                return false;
            }
            
        });
        if(exitLoop){
            callAdminApi('post', `{{url('/admin')}}/updateUserPassword`, formData, ajaxResponseModel);
        }
    });
    
    $('.depositWallet').on('click',function(){
        $('.balance_form input[name=user_uid]').val($(this).attr('data-user_uid'));
    });
    $('.withdrawWallet').on('click',function(){
        $('.balance_form input[name=user_uid]').val($(this).attr('data-user_uid'));
    });

    $('.updateWalletSubmit').on('click',function(){
        let exitLoop = true;
        let formData = new FormData($(this).parents('form')[0]);
        let formInputs = $(this).parents('form').find('input');
        
        $(formInputs).each(function(){
            console.log("$(this).val()====",$(this).val());
            
            if($(this).val() == ''){
                alert('please provide all fields');
                exitLoop = false;
                return false;
            }
            
        });
        if(exitLoop){
            callAdminApi('post', `{{url('/admin')}}/updateWallet`, formData, ajaxResponseModel);
        }
    });


    function formValidation(formData){

    }

    function ajaxResponse(response){
        if(response.response_code == 200){
            window.location.href = '{{url()->previous()}}';
        }
        alert(response.message);
    }

    
    function ajaxResponseModel(response){
        if(response.response_code == 200){
            window.location.href = '{{url()->current()}}';
        }
        alert(response.message);
    }

</script>