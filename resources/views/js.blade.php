<script>

    function callApi(type=null, url=null, data=null, action=null, beforeAction=null, catchError=null){
        // if(type.tpLowerCase() != 'get'){
            $.ajax({
                type: type,
                url: `{{ url('/') }}/${url}`,
                data: data,
                beforeSend: ()=>{
                    if(beforeAction) beforeAction();
                },
                success: (response)=>{
                    if(action) {
                        action(response);
                    } else {
                        return response;
                    }
                },
                error: (error)=>{
                    if(catchError) catchError();
                }
            });
        // }
    }

// Register User start

    function registerUser(){
        let phoneRegex = '/^\d{10}$/';
        let phone = $('input[name=phone]');
        let password = $('input[name=password]');
        let confirm_password = $('input[name=confirm_password]');

        let data = {
            phone : phone,
            password : password,
            confirm_password : confirm_password
        }

        if(!phone.match(phoneRegex)){
            return false;
        } else if(password.length < 6 || password != confirm_password){
            return false;
        } else {
            callApi('post','register',data,register_loginResponse);
        }
    }

// Register User End

// Login User Start

    function loginUser(){
        let phoneRegex = '/^\d{10}$/';
        let phone = $('input[name=phone]');
        let password = $('input[name=password]');

        let data = {
            phone : phone,
            password : password
        }

        if(!phone.match(phoneRegex)){
            return false;
        } else if(password.length < 6){
            return false;
        } else {
            callApi('post','login',data,register_loginResponse);
        }
    }

// Login User End

    function register_loginResponse(response){
        if(response == True){
            window.location.href = "/";
        } else {
            alert(response.error);
        }
    }

    // $('a[data-formtype=register]').click(function(e){
    //     registerUser();
    // });

    // $('a[data-formtype=login]').click(function(e){
    //     loginUser();
    // });

    $('a').click(function(e){
        let formType = $(this).data('formType');

        if(formType == 'register'){
            registerUser();
        } else if(formType == 'login'){
            loginUser();
        }
    });

    function gameList(data){
        
        $(`.game_list[data-provider=${data.provider}]`).html('');

        Object.entries(data.games).forEach((value,key) => {
            $(`.game_list[data-provider=${data.provider}]`).append(`
                <div class="col-6 col-md-3">
                    <a href='javascript:void(0)' class="launch_game d-block" data-game_id="${value[1].providerId}" data-game_link="${value[1].link}">
                    <img src="${value[1].img}" alt="${value[1].title}" class="img-fluid w-100">
                    <div class="bg-dark text-white py-1">${value[1].title}</div>
                    </a>
                </div>
            `);
            
        });
        
    }

    function loadGames(sectionClass){
        if($(`.${sectionClass}`).length == 1){
            let provider = sectionClass.slice(sectionClass.indexOf('--') + 1);
        }
    }

    function launchGame(data){
        console.log('data---',"https://colourforge.in?"+data);
        
        window.location.href = `https://colourforge.in?${data}`;
    }

    $(document).ready(function(){
        console.log("$('.new_game_list').length",$('.new_game_list').length);
        
            @foreach ($providers as $provider)
            callApi('get','gameList',{'provider': "{{ strtolower(explode('provider=',$provider->link)[1]) }}"},gameList);
            @endforeach
   
    });


// ============
// Launch Games

    $('body').on('click','.launch_game',function(e){
        let data ={};
        
        data.game_id = $(this).attr('data-game_id');
        // data.game_link = $(this).attr('data-game_link');
            
        callApi('post','launchGame',data,launchGame);
    });




// ===============
// Front-end part 
// ===============


// Loader function
function showLoader() {
        const loader = document.querySelector('.loader');
        if (loader) loader.style.display = 'block';
    }

    function hideLoader() {
        const loader = document.querySelector('.loader');
        if (loader) loader.style.display = 'none';
    }
</script>