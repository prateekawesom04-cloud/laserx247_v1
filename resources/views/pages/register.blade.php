<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <script src="{{ asset('js') }}/jquery-3.7.1.min.js"></script>
</head>

<body class="min-vh-100 d-flex align-items-center justify-content-center"
    style="background: linear-gradient(135deg, #0d1c80, #00c6ff);">

    <div class="container px-2 px-sm-3 px-md-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-11 col-md-10 col-lg-8 col-xl-7 rounded-4 shadow-lg overflow-hidden"
                style="background: #0a2345;">
                <div class="row g-0 flex-column flex-md-row">

                    <!-- Left Side (Image) -->
                    <div class="col-md-5 d-flex flex-column align-items-center justify-content-center text-center p-4 text-white d-none d-md-block h-100"
                        style="background: linear-gradient(180deg, #001f4d, #0a2345);">
                        <img src="{{ asset('images/loginImg2.webp') }}" alt="Sports" class="img-fluid"
                            style="max-height: 280px;" />
                    </div>


                    <!-- Right Side (Form) -->
                    <div class="col-md-7 p-4 text-white" style="background: #0a2345;">
                        <form id="RegisterForm">

                            <!-- Phone Number -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="bi bi-phone"></i> +91
                                </span>
                                <input type="text" class="form-control border-start-0" name="phone"
                                    placeholder="Enter Phone Number" />
                                <a class="btn btn-dark getOtp" type="button">Get OTP</a>
                            </div>

                            <!-- OTP -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input type="text" class="form-control" name="otp" placeholder="Enter OTP" />
                            </div>
                            <div class="text-end mb-3">
                                <a href="#" class="small text-info">Want to set UserID?</a>
                            </div>

                            <!-- Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter Password"disabled />
                            </div>

                            <!-- Confirm Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="confirm_password"
                                    placeholder="Enter Confirm Password"disabled />
                            </div>
                            <div class="text-end mb-3">
                                <a href="#" class="small text-info">Have a referral code?</a>
                            </div>

                            <!-- Register -->
                            <a class="btn btn-dark w-100 mb-3 registerUser">Register</a>

                            <!-- Info Text -->
                            <div class="text-center small mb-2">Get Your Ready-Made ID From WhatsApp</div>

                            <!-- WhatsApp Button -->
                            <a href="https://wa.me/your-number" target="_blank" class="btn btn-success w-100 mb-3">
                                📱 WhatsApp Now
                            </a>

                            <!-- Login Link -->
                            <div class="text-center small">
                                Already have an account? <a href="login" class="fw-bold text-info">LogIn</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('js')

    <script>
        function startOtpCountdown(button) {
            let data = {
                phone: $('input[name=phone]').val(),
                otp: '',
                otpTimer: null,
                otpTimeLeft: 60
            };

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

        function registerUser() {

            if (!testLocalStorage('user_otp')) return false;

            let phoneRegex = '/^\d{10}$/';
            let phone = $('input[name=phone]').val();
            let password = $('input[name=password]').val();
            let confirm_password = $('input[name=confirm_password]').val();

            let data = {
                phone: phone,
                password: password,
                confirm_password: confirm_password,
                referral_code: {{ ($referral_code)?$referral_code:'0' }}
            }

            // if (!phone.match(phoneRegex)) {
            //     return false;
            // } else 

            if (password.length < 6) {
                alert('Please enter strong password');
                return false;
            } else if (password != confirm_password) {
                alert('please confirm correct password');
                return false;
            } else {
                callApi('post', 'register', data, register_loginResponse);
            }
        }

        // Register User End

        $('input[name=password]').keypress(function(e) {

            if (!testLocalStorage('user_otp')) {
                $(this).val('');
                return false;
            }

            if (!otpVerified) {
                e.preventDefault();
                alert('Please verify OTP first');
            }
        });

        $('input[name=otp]').keypress(function(e) {
            if (!testLocalStorage('user_otp')) {
                return false;
            }

            if ($(this).val().length == 5) {
                let data = {};
                data.otp = $(this).val() + e.key;
                data.phone = $('input[name=phone]').val();

                callApi('get', 'verifyOtp', data, verifyOtp);
            }
        });

        $('a.registerUser').click(function(e) {
            registerUser();
        });

        let otpVerified = false;

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

        $('a.getOtp').click(function(e) {
            if (otpVerified || $(this).prop('disabled')) {
                return false;
            }

            let data = {};
            data.phone = $('input[name=phone]').val();
            callApi('get', 'getOtp', data, getOtp);
            startOtpCountdown(this);
        });

        $(document).ready(function() {
            localStorage.clear();
        });
    </script>
</body>

</html>
