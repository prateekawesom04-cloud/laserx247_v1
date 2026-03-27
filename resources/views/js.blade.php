
    @if(!isset($userAdmin))
    <div class="chat_support_btn chat_support fixed right-0 bottom-[80px] btn rounded-md !bg-gray-900 !p-1 text-white !flex flex-row justify-center items-center gap-2" style="display:none;">
        <div class="support_icon min-w-min">
            <img src="{{asset('images')}}/icons/support.png" width="20" alt="" srcset="">
        </div>
        <div class="support_text min-w-min">Support</div>
    </div>
    @endif

<script>

    function testLocalStorage(key = null) {
        if (!localStorage.getItem(key)) {
            alert(`First get ${key}`);
            return false;
        }
        return true;
    }

    function register_loginResponse(response) {
        if (response == true) {
            window.location.href = "/";
        } else {
            alert(response.error);
        }
    }

    
    function ajax_response_reload(response) {
        if (response.response_code == '200') {
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
                <div href='javascript:void(0)' class="launch_game col-3 col-md-1 p-[1px] cursor-pointer" data-game_id="${value[1].providerId}" data-game_link="${value[1].link}">
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
        $('.footer_height').height($('.app_footer').height());
        
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

    
    $('.chat_support').click(function(){
        $('.chat_support_btn').hide();
        $('.button__Qkvay').trigger('click');
    });

    $('body').on('click','.closeIcon__sAHIm',function(){
        $('.chat_support_btn').show();
    });
    
    $('jdiv').on('click','.closeBox__T4hRn',function(){
        $('.chat_support_btn').show();
    });

    setTimeout(() => {
        $('.chat_support_btn').show();
    }, 2000);


    $('.p_eye').click(function(){
        element = $(this).siblings('input');
        if(element.attr('type')=='password'){
            element.attr('type', 'text');
        } else{
            element.attr('type', 'password');            
        }
    });



    
        // Get Otp

        $('a.getOtp').click(function(e) {

            if($('input[name=phone]').val().length < 10){
                alert('Please Enter Correct Number');
                return false;
            }

            if (otpVerified || $(this).prop('disabled')) {
                return false;
            }
            $('input[name=user_id]').val($('input[name=phone]').val());
            let data = {};
            data.phone = $('input[name=phone]').val();
            data.otptype = $('form').attr('value');
            if(data.otptype == 'register'){
                callApi('get', 'getOtp', data, getOtp);
            } else if(data.otptype == 'login'){
                callApi('get', 'getOtp', data, getOtp);
            }
            
            startOtpCountdown(this);
        });


        function startOtpCountdown(button) {

            $(button).prop('disabled', true).text(`Retry in ${data.otpTimeLeft}s`);

            data.otpTimer = setInterval(() => {
                data.otpTimeLeft--;

                if (data.otpTimeLeft > 0) {
                    $(button).text(`Retry in ${data.otpTimeLeft}s`);
                } else {
                    if (!otpVerified) {
                        $(button).prop('disabled', false).text('Get OTP');
                    }
                    clearInterval(data.otpTimer);
                }
            }, 1000);

        }

        function verifyOtp(response) {
            if (response.err_code == 101) {
                otpVerified = true;

                $('input[name=password]').prop('disabled', false);
                $('input[name=confirm_password]').prop('disabled', false);

                $('a.getOtp').prop('disabled', true).text('OTP Verified');

                if (data.otpTimer) {
                    clearInterval(data.otpTimer);
                    data.otpTimer = null;
                }
            } else {
                alert('Invalid OTP');
            }
        }

        function getOtp(response) {
            if(data.localStorage){
                localStorage.setItem(data.localStorage+'user_otp', response.phone);
            } else{
                localStorage.setItem('user_localstorage_data', response);
            }

        }

        $(document).ready(function() {
            localStorage.clear();
        });

        $('input[name=otp]').on('keyup',function(e) {
            if (!testLocalStorage(data.localStorage+'user_otp')) {
                $(this).val('');
                return false;
            }
            
            if ($(this).val().length == 6) {
                let data = {};
                data.otp = $(this).val();
                data.phone = $('input[name=phone]').val();
                data.otptype = $(this).parents('form').attr('value');

                callApi('get', 'verifyOtp', data, verifyOtp);
            }
        });

        
    // toast js start
        
        function responseToast(msg,background){
            $('.app_toast .toast-body').html(msg);
            $('.app_toast').css('right','1%');
            $('.app_toast').addClass(background);
            $('.app_toast').fadeIn('slow',function(){
                setTimeout(() => {
                    $('.app_toast').fadeOut('slow');
                }, 2000);
            });
        }
    // toast js end
    
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

</script>

