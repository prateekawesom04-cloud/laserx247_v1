<script>
 $(document).ready(function(){
       
    if(document.getElementById("search")){
        document.getElementById("search").addEventListener("input", function () {
               let val = this.value.toLowerCase();
               
               document.querySelectorAll("table tbody tr").forEach(tr => {
                   if (tr.cells.length === 1) return;
                   tr.style.display = tr.textContent.toLowerCase().includes(val) ? "" : "none";
               });
           });

    }

 });

$('.submitForm').click(function(){
    submitForm('formParntClassname');
});

$('.submit_modal').click(function(){
    submitFormGlobal(this,{{$userData->user_uid}});
});

function adminForms(response){
    alert(response.redirect);
    window.location.href = response.redirect;
}


function ajax_response_reload(response) {
    if (response.response_code == '200') {
        window.location.href = response.redirect;
    } else {
        alert(response.error);
    }
}

function getModelData(form,search_data_value,action){


    let formData = new FormData(form[0]);
    formData.append('m_key', $(form).attr('data-m_key'));
    formData.append('search_data_key', $(form).attr('data-search_data_key'));
    formData.append('search_data_value', search_data_value);
    formData.append('previous_url', '{{url()->previous()}}');
    callAdminApi('post', `{{url('/admin')}}/getModelData`, formData, action);
}


let user_action_id = '';

$('.submit_user_modal').click(function(){
    $('#changePasswordForm input[name=user_uid]').val($(this).attr('data-user_uid'));
});

$('a.changePassword').click(function(){
    
    submitUserUpdates(this,changePassword);       

});




// new code

function globalFormSubmit(){
    let form = $('.submitForm').parents(`.globalForm`).find('form');
    let formData = new FormData(form[0]);
    let url = $(form).attr('data-url');
    
    formData.append('previous_url', '{{url()->previous()}}');

    callAdminApi('post', `{{url('/admin')}}/${url}`, formData, ajax_response_reload);
}

function submitUserUpdates(btn,action){
    let form = $(btn).parents('.submitUserPassword').find('form');
    let url = $(form[0]).attr('data-url');
    let formData = new FormData(form[0]);
    // formData.append('m_key', $(form).attr('data-m_key'));
    // formData.append('user_uid', user_uid);
    formData.append('previous_url', '{{url()->current()}}');

    callAdminApi('post', `{{url('/admin')}}/${url}`, formData, action);
}


    function changePassword(response){
        console.log('response---',response.error_code);
        
        if(response.error_code == 200){
            window.location.reload(true);
        } else{
            alert(response.error);
        }   
    }



</script>