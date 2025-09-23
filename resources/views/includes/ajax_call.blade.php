<script>
    
    function callApi(type = null, url = null, data = null, action = null, beforeAction = null, catchError = null) {
        // if(type.tpLowerCase() != 'get'){
        $.ajax({
            type: type,
            url: `{{ url('/') }}/${url}`,
            data: data,
            beforeSend: () => {
                if (beforeAction) beforeAction();
            },
            success: (response) => {
                if(response.error_code == '409'){
                    alert(response.error);
                    setTimeout(() => {
                        window.location.href = response.redirect;
                    }, 2000);
                    return false;
                }
                if (action) {
                    action(response);
                } else {
                    return response;
                }
            },
            error: (error) => {
                if (catchError) catchError();
            }
        });
        // }
    }
  
    function callAdminApi(type = null, url = null, data = null, action = null, beforeAction = null, catchError = null) {
        // if(type.tpLowerCase() != 'get'){
        $.ajax({
            type: type,
            url: url,
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            data: data,
            beforeSend: () => {
                if (beforeAction) beforeAction();
            },
            success: (response) => {
                if(response.error_code == '409'){
                    alert(response.error);
                    setTimeout(() => {
                        window.location.href = response.redirect;
                    }, 2000);
                    return false;
                }
                if (action) {
                    action(response);
                } else {
                    return response;
                }
            },
            error: (error) => {
                if (catchError) catchError();
            }
        });
        // }
    }

    function submitForm(formParntClassname){
        let formData = {};
        let form = $('.submitForm').parents(`.${formParntClassname}`).find('form');
        let url = $(form).attr('data-url');
        
        formData['previous_url'] = '{{url()->previous()}}';
        
        form.find('input').each(function(){
            
            formData[$(this).attr('name')] = $(this).val();

        });
        
        if(form.find('select').length > 0){
            form.find('select').each(function(){
                
            formData[$(this).attr('name')] = $(this).find("option:selected").val();
            });
        }

        callAdminApi('post', `{{url('/admin')}}/${url}`, formData, adminForms);
    }
    
    function submitFormGlobal(btn){
        let form = $(btn).parents('.formParntClassname').find('form');

        let formData = new FormData(form[0]);
        formData.append('m_key', $(form).attr('data-m_key'));
        formData.append('previous_url', '{{url()->current()}}');

        callAdminApi('post', `{{url('/admin')}}/createModelData`, formData, ajax_response_reload);
    }
    
</script>