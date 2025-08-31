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

    function testLocalStorage(key=null) {
        if(!localStorage.getItem(key)){
            alert(`Please set ${key} first`);
            return false;
        }
        return true;
    }

    function sendOtp(response){
        console.log('response--',response);
    }

    function verifyOtp(response){
        if(response.otp){
            localStorage.setItem('user_otp',response.otp);
        } else{
            alert(response.error);
        }
    }

    // Register User start

    function registerUser() {
        if(!testLocalStorage('user_otp')) return false;
        let phoneRegex = '/^\d{10}$/';
        let phone = $('input[name=phone]').val();
        let password = $('input[name=password]').val();
        let confirm_password = $('input[name=confirm_password]');

        let data = {
            phone: phone,
            password: password,
            confirm_password: confirm_password
        }
        
        // if (!phone.match(phoneRegex)) {
        //     return false;
        // } else 
        if (password.length < 6 || password != confirm_password) {
            return false;
        } else {
            callApi('post', 'register', data, register_loginResponse);
        }
    }

    // Register User End

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
        
        $(`.game_list[data-provider=${data.provider}]`).html('');

        Object.entries(data.games).forEach((value, key) => {
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


    function loadGames(sectionClass) {
        if ($(`.${sectionClass}`).length == 1) {
            let provider = sectionClass.slice(sectionClass.indexOf('--') + 1);
        }
    }




    // ============
    // Launch Games

    function launchGame(data) {

        window.location.href = data;
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
    // for deposit-withdrawal page
    // Restrict input to numbers only
    const depositRadio = document.getElementById('deposit');
    const createRadio = document.getElementById('create');
    const depositSection = document.getElementById('depositSection');
    const withdrawalSection = document.getElementById('withdrawalSection');
    const depositAmount = document.getElementById('depositAmount');
    const balanceInfo = document.getElementById('balanceInfo');

    let minAmount = 200;
    let maxAmount = 50000;

    // Update UI and validation limits
    function switchSection() {
        if (depositRadio.checked) {
            minAmount = 500;
            balanceInfo.innerText = `Min: ${minAmount} Max: ${maxAmount}`;
        } else {
            minAmount = 200;
            balanceInfo.innerText = `Min: ${minAmount} Max: ${maxAmount}`;
        }

        depositSection.classList.remove('inactive');
        withdrawalSection.classList.remove('active');
    }

    // Handle radio change
    [depositRadio, createRadio].forEach(radio =>
        radio.addEventListener('change', switchSection)
    );

    // Input only numbers
    depositAmount.addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, '');

        document.querySelectorAll('.amount-btn').forEach(btn => btn.classList.remove('active'));

        const amount = parseInt(this.value, 10);
        if (isNaN(amount) || amount < minAmount || amount > maxAmount) {
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
        }
    });

    // Amount buttons click
    document.querySelectorAll('.amount-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            depositAmount.value = this.dataset.amount;
            depositAmount.classList.remove('is-invalid');
        });
    });

    // Submit button (no alert)
    document.querySelector('.btn-submit').onclick = () => {
        const amount = parseInt(depositAmount.value, 10);
        if (isNaN(amount) || amount < minAmount || amount > maxAmount) {
            depositAmount.classList.add('is-invalid');
        } else {
            depositAmount.classList.remove('is-invalid');
            console.log(`Valid amount: ₹${amount}`);
        }
    };

    // Initialize on load
    switchSection();

    // for wallet page
    document.addEventListener('DOMContentLoaded', function() {
        const walletEditBtn = document.getElementById('walletEditStakeBtn');
        const walletModal = document.getElementById('walletEditModal');
        const walletModalInput = document.getElementById('walletModalInputAmount');
        const walletCancelBtn = document.getElementById('walletCancelModalBtn');
        const walletSaveBtn = document.getElementById('walletSaveModalBtn');
        const walletInput = document.getElementById('walletAmount');
        const walletAmountBtns = document.querySelectorAll('.wallet-amount-btn');
        const walletModalAmountBtns = document.querySelectorAll('.wallet-modal-amount-btn');

        walletEditBtn.addEventListener('click', () => {
            walletModalInput.value = walletInput.value || '';
            walletModal.style.display = 'flex'; // show modal
        });

        walletCancelBtn.addEventListener('click', () => {
            walletModal.style.display = 'none'; // hide modal
            walletModalAmountBtns.forEach(btn => btn.classList.remove('active'));
        });

        walletModalAmountBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                walletModalAmountBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                walletModalInput.value = btn.getAttribute('data-modal-amount');
            });
        });

        walletSaveBtn.addEventListener('click', () => {
            const amount = walletModalInput.value.trim();
            if (!amount || isNaN(amount) || amount < 100 || amount > 50000) {
                alert("Please enter a valid amount between 100 and 50000.");
                return;
            }

            walletInput.value = amount;

            walletAmountBtns.forEach(btn => {
                btn.classList.remove('active');
                if (btn.getAttribute('data-amount') === amount) {
                    btn.classList.add('active');
                }
            });

            walletModal.style.display = 'none';
            walletModalAmountBtns.forEach(btn => btn.classList.remove('active'));
        });

        walletInput.addEventListener('input', () => {
            walletAmountBtns.forEach(btn => btn.classList.remove('active'));
        });

        walletAmountBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                walletAmountBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                walletInput.value = btn.getAttribute('data-amount');
            });
        });
    });
</script>
