<script>

    $('.add_user_client').on('click',function(){
        let exitLoop = true;
        let formData = new FormData($('#createAccountForm')[0]);
        let formInputs = $('#createAccountForm input');

        let form =  document.getElementById('createAccountForm');

        for(var i=0; i < form.elements.length; i++){
            var e = form.elements[i];
            if($(e).val() == ''){
                exitLoop = false;
                scrollToElement($(e));
                return false;
            }
        }

        // $(formInputs).each(function(){
        //     console.log($(this).attr('name'),"-----$(this).val()---",$(this).val());
            
        //     if($(this).val() == ''){
        //         // ajaxResponseModal('please provide all fields');
        //         exitLoop = false;
        //         scrollToElement($(this));
        //         return false;
        //     }
            
        // });

        if(exitLoop){
            callAdminApi('post', `{{url('/admin')}}/add_user_client`, formData, ajaxResponseModal);
        }
        
    });

    $('.changePhoneModal').on('click',function(){
        $('#changePhoneForm input[name=user_uid]').val($(this).attr('data-user_uid'));
    });

    $('.changePhoneSubmit').on('click',function(){
        let exitLoop = true;
        let formData = new FormData($('#changePhoneForm')[0]);
        let formInputs = $('#changePhoneForm input');
        
        $(formInputs).each(function(){
            if($(this).val() == ''){
                ajaxResponseModal(`Please Enter ${$(this).attr('name')}`);
                exitLoop = false;
                scrollToElement($(this));
                return false;
            }
            
        });
        if(exitLoop){
            callAdminApi('post', `{{url('/admin')}}/updateUserPhone`, formData, ajaxResponseModal);
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
                ajaxResponseModal(`Please Enter ${$(this).attr('name')}`);
                exitLoop = false;
                scrollToElement($(this));
                return false;
            }
            
        });
        if(exitLoop){
            callAdminApi('post', `{{url('/admin')}}/updateUserPassword`, formData, ajaxResponseModal);
        }
    });
    
    $('.depositWallet').on('click',function(){
        $('.balance_form input[name=user_uid]').val($(this).attr('data-user_uid'));
        $('.userBalance').text($(this).attr('data-user_wallet'))
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
                ajaxResponseModal(`Please Enter ${$(this).attr('name')}`);
                exitLoop = false;
                scrollToElement($(this));
                return false;
            }
            
        });
        if(exitLoop){
            callAdminApi('post', `{{url('/admin')}}/updateWallet`, formData, ajaxResponseModal);
        }
    });


    function formValidation(formData){

    }

    function ajaxResponse(response){
        if(response.response_code == 200){
            window.location.href = '{{url()->previous()}}';
        }
        responseToast(response.message,'bg-warning');
    }
    
    function ajaxResponse1(response){
        if(response.response_code == 200){
            window.location.href = '{{url()->current()}}';
        }
        responseToast(response.message,'bg-warning');
    }

    
    function ajaxResponseModal(response){
        if(response.message){
            if(response.response_code == 200){
                responseToast(response.message,'bg-success');
                setTimeout(() => {
                        window.location.href = '{{url()->current()}}';
                }, 1000);
            } else{
                responseToast(response.message,'bg-danger');
            }
        } else{
            responseToast(response,'bg-warning');
        }
    }

    function scrollToElement(element){
        $(element).parent().append('<div class="input_error text-red-600"></div>');
        $(element).get(0).scrollIntoView({behavior: 'smooth'});
        $(element).focus();
        $(element).siblings('.input_error').html(`Please Enter ${$(element).attr('name')}`);
    }

    // form validations
    $('input').on('keyup',function(){
        $(this).siblings('.input_error').remove();
    });

    $('select').on('change',function(){
        $(this).siblings('.input_error').remove();
    });

    // update transaction
    $('.reject_deposit').on('click',function(){
        formData = {};
        callApi('post', `admin/updateTransaction`, {order_sn:$(this).attr('data-order_sn'),updateKey:'status',status:0}, ajaxResponseModal);
    });
    
    $('.approve_deposit').on('click',function(){
        formData = {};
        callApi('post', `admin/updateTransaction`, {order_sn:$(this).attr('data-order_sn'),updateKey:'status',status:2}, ajaxResponseModal);
    });

</script>