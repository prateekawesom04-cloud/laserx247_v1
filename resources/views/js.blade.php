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

    function testLocalStorage(key = null) {
        if (!localStorage.getItem(key)) {
            alert(`First get ${key}`);
            return false;
        }
        return true;
    }


    // Login User Start

    function loginUser() {
        let phoneRegex = '/^\d{10}$/';
        let phone = $('input[name=phone]').val();
        let password = $('input[name=password]').val();

        let data = {
            phone: phone,
            password: password
        }

        // if (!phone.match(phoneRegex)) {
        //     alert('Please Enter Correct Phone Number');
        //     return false;
        // } else 
        if (password.length < 6) {
            alert('Please Enter Minimum 6 digit password');
            return false;
        } else {
            callApi('post', 'login', data, register_loginResponse);
        }
    }

    // Login User End

    function register_loginResponse(response) {
        if (response == true) {
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

    function gameList(data){
        
        $(`.game_list[data-provider=${data.provider}]`).next().find('a.load-more-btn').attr('data-game_index',data.game_index);
        let imgSrc = '';
        Object.entries(data.games).forEach((value, key) => {

            imgSrc = (value[1].img)?value[1].img:'imgLoading.jpg';
            
            
            $(`.game_list[data-provider=${data.provider}]`).append(`
                <div href='javascript:void(0)' class="launch_game col-4 col-md-2 p-[1px] cursor-pointer" data-game_id="${value[1].providerId}" data-game_link="${value[1].link}">
                    <img src="{{asset("images")}}/gamesImg/${imgSrc}" alt="${value[1].title}" srcset="" class="w-100" onerror="this.onerror=null; $(this).parent().remove()">
                </div>
            `);

        });

    }


    function loadGames(sectionClass) {
        if ($(`.${sectionClass}`).length == 1) {
            let provider = sectionClass.slice(sectionClass.indexOf('--') + 1);
        }
    }




    // ============
    // Launch Games

    function launchGame(data) {
        
        if(data.error_code==101){
            window.location.href = data.url;
        } else{
            window.location.href = "{{route('login')}}";
        }
    }

    $('body').on('click', '.launch_game', function(e) {
        let data = {};

        data.game_id = $(this).attr('data-game_id');
        // data.game_link = $(this).attr('data-game_link');

        callApi('post', 'launchGame', data, launchGame);
    });


    // ============
    // Payment Part

    function paymentRequest(data) {
        console.log('data for payment--', data);

    }

    $('body').on('click', '.pay_in_out', function(e) {
        let data = {};

        // data.payment_type = $(this).attr('data-payment_type');
        // data.payment_type = 'order';
        data.payment_type = 'deposit';
        data.money = '156.00';
        // data.game_link = $(this).attr('data-game_link');

        callApi('post', 'paymentRequest', data, paymentRequest);
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
    // Header panel
    $(document).ready(function() {
        $('#myAccountBtn').on('click', function(e) {
            e.preventDefault();
            console.log("My Account clicked!");
            try {
                new bootstrap.Offcanvas(document.getElementById('accountPanel')).show();
            } catch (error) {
                console.log("Error:", error);
            }
        });
    });


    //reload page for all pages
    const breakpoints = {
        mobile: 768
    };

    let resizeTimer;
    let lastMode = window.innerWidth < breakpoints.mobile ? 'mobile' : 'desktop';

    function responsiveReloadHandler() {
        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(() => {
            const currentMode = window.innerWidth < breakpoints.mobile ? 'mobile' : 'desktop';

            if (currentMode !== lastMode) {
                console.log(`Mode changed from ${lastMode} to ${currentMode}. Reloading...`);
                location.reload();
            }

            lastMode = currentMode;
        }, 100);
    }

    window.addEventListener('resize', () => {
        console.log('Window resized');
        responsiveReloadHandler();
    });
</script>
