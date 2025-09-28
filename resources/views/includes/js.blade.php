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

$('.updateWalletBtn').click(function(){
    console.log($(this).attr('data-user_uid'));
    
    $('.form input[name=user_uid]').val($(this).attr('data-user_uid'));
});

$('.updateWallet').click(function(){
    let form = $(this).parents('.form');
    let formData = new FormData(form[0]);
    
    callAdminApi('post', `{{url('/admin')}}/updateWallet`, formData, formResponse);
});

$('.deleteUser').click(function(){
    $('#deleteForm input[name=user_uid]').val($(this).attr('data-user_uid'));
});

$('.confirmDelete').click(function(){
    let form = $('#deleteForm');
    let formData = new FormData(form[0]);
    
    callAdminApi('post', `{{url('/admin')}}/deleteUser`, formData, deleteResponse);
});

function deleteResponse(response){
    
    if(response.response_code == 200){
        window.location.reload(true);
    } else{
        alert(response.error);
    }   
}

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

    function formResponse(response){
        
        if(response.response_code == 200){
            window.location.reload(true);
        } else{
            alert(response.error);
        }   
    }


    

    // Transaction Data

    function transactionList(response) {
        
        let table = `
            <table class="table table-bordered table-striped table-dark mb-0">
                <thead class="table-primary">
                    <tr>
                        <th class="text-nowrap">Date/Time</th>
                        <th class="text-nowrap">Transaction Id</th>
                        <th class="text-nowrap">Type</th>
                        <th class="text-nowrap">Balance</th>
                        <th class="text-nowrap">Status</th>
                    </tr>
                </thead>
                <tbody class="transaction_statement">
                    <tr>
                        <td colspan="6" class="text-center py-4">No data!</td>
                    </tr>
                </tbody>
            </table>
        `;
        $('.table_div').html(table);

        if(response.response_code != 200) return false;
        let data = response.data;
        html = '';
        $(data).each(function(item){
            html += `<tr>
                        <td class="text-center py-4">${this.updated_at}</td>
                        <td class="text-center py-4">${this.order_sn}</td>
                        <td class="text-center py-4">${(this.payment_type==0)?'Deposit':'Withdraw'}</td>
                        <td class="text-center py-4">${this.transfer_amount}</td>
                        <td class="text-center py-4">${(this.status==2)?'Success':'Processing'}</td>
                    </tr>`;
        });

        $('.transaction_statement').html(html);
    }

    
    function sports(response) {
        
        let table = `
            <table class="table table-bordered table-striped table-dark mb-0">
                <thead class="table-primary">
                    <tr>
                        <th class="text-nowrap">Date/Time</th>
                        <th class="text-nowrap">Provider</th>
                        <th class="text-nowrap">Game Id</th>
                        <th class="text-nowrap">Bet Amount</th>
                        <th class="text-nowrap">Win Amount</th>
                    </tr>
                </thead>
                <tbody class="game_statement">
                    <tr>
                        <td colspan="6" class="text-center py-4">No data!</td>
                    </tr>
                </tbody>
            </table>
        `;
        $('.table_div').html(table);
        
        if(response.response_code != 200) return false;
        let data = response.data;
        html = '';
        $(data).each(function(item){
            html += `<tr>
                        <td class="text-center py-4">${(new Date(this.created_at).toLocaleDateString("hi-IN"))}</td>
                        <td class="text-center py-4">${this.provider}</td>
                        <td class="text-center py-4">${this.game_uid}</td>
                        <td class="text-center py-4">${this.bet_amount}</td>
                        <td class="text-center py-4">${this.win_amount}</td>
                    </tr>`;
        });

        $('.game_statement').html(html);
    }

    

    $('.filter_type').on('change',function(){
        let form = $(this).parents('form');
        let formData = new FormData(form[0]);

        if($(this).val()==0 || $(this).val()==1){
            callAdminApi('post', `{{url('/admin')}}/userStatments`, formData, transactionList);

            // getModelData(form,$(this).val(),transactionList);
        }else{
            callAdminApi('post', `{{url('/admin')}}/userGameHistory`, formData, sports);
            // getModelData(form,$(this).val(),sports);
        }
    });

</script>